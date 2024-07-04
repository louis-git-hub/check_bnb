<?php
// Récupération des URL depuis le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $airbnbUrl = $_POST['url_bnb'];
    $bookingUrl = $_POST['url_booking'];

    // Fonction pour télécharger le fichier ICS
    function downloadIcs($url) {
        $ics = file_get_contents($url);
        if ($ics === FALSE) {
            die('Erreur lors du téléchargement du fichier ICS.');
        }
        return $ics;
    }

    // Fonction pour analyser le fichier ICS
    function parseIcs($ics) {
        $lines = explode("\n", $ics);
        $events = [];
        $event = null;

        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === 'BEGIN:VEVENT') {
                $event = [];
            } elseif ($line === 'END:VEVENT') {
                $events[] = $event;
                $event = null;
            } elseif ($event !== null) {
                if (strpos($line, 'SUMMARY:') === 0) {
                    $event['SUMMARY'] = substr($line, 8);
                } elseif (strpos($line, 'DTSTART;VALUE=DATE:') === 0) {
                    $event['DTSTART'] = substr($line, 19);
                } elseif (strpos($line, 'DTEND;VALUE=DATE:') === 0) {
                    $event['DTEND'] = substr($line, 17);
                }
            }
        }
        return $events;
    }

    // Fonction pour générer un tableau des jours
    function generateDaysTable($events, $currentDate) {
        $days = [];

        foreach ($events as $event) {
            $startDate = new DateTime($event['DTSTART']);
            $endDate = (new DateTime($event['DTEND']))->modify('-1 day');
            $interval = new DateInterval('P1D');
            $daterange = new DatePeriod($startDate, $interval, $endDate->modify('+1 day'));

            foreach ($daterange as $date) {
                if ($date >= $currentDate) {
                    $formattedDate = $date->format('Y-m-d');
                    if ($event['SUMMARY'] === 'Reserved') {
                        $days[$formattedDate]['airbnb'] = 'Fermé';
                        $days[$formattedDate]['airbnb_weight'] = 1;
                    } elseif (strpos($event['SUMMARY'], 'Not available') !== false) {
                        $days[$formattedDate]['airbnb'] = 'Fermé';
                        $days[$formattedDate]['airbnb_weight'] = 1;
                    }
                }
            }
        }

        // Déterminer les jours libres
        $endDate = (new DateTime())->modify('+1 year');
        $interval = new DateInterval('P1D');
        $daterange = new DatePeriod($currentDate, $interval, $endDate);

        foreach ($daterange as $date) {
            $formattedDate = $date->format('Y-m-d');
            if (!isset($days[$formattedDate])) {
                $days[$formattedDate]['airbnb'] = 'Ouvert';
                $days[$formattedDate]['airbnb_weight'] = 0;
            }
        }

        // Trier les jours par date
        ksort($days);

        return $days;
    }

    // Télécharger et analyser le fichier ICS d'Airbnb
    $icsContentAirbnb = downloadIcs($airbnbUrl);
    $eventsAirbnb = parseIcs($icsContentAirbnb);

    // Télécharger et analyser le fichier ICS de Booking
    $icsContentBooking = downloadIcs($bookingUrl);
    $eventsBooking = parseIcs($icsContentBooking);

    // Date courante
    $currentDate = new DateTime();

    // Générer le tableau des jours pour Airbnb et Booking
    $daysTable = generateDaysTable($eventsAirbnb, $currentDate);

    // Ajouter les données de Booking
    foreach ($eventsBooking as $event) {
        $startDate = new DateTime($event['DTSTART']);
        $endDate = (new DateTime($event['DTEND']))->modify('-1 day');
        $interval = new DateInterval('P1D');
        $daterange = new DatePeriod($startDate, $interval, $endDate->modify('+1 day'));

        foreach ($daterange as $date) {
            if ($date >= $currentDate) {
                $formattedDate = $date->format('Y-m-d');
                if ($event['SUMMARY'] === 'CLOSED - Not available') {
                    $daysTable[$formattedDate]['booking'] = 'Fermé';
                    $daysTable[$formattedDate]['booking_weight'] = 1;
                } else {
                    $daysTable[$formattedDate]['booking'] = 'Ouvert';
                    $daysTable[$formattedDate]['booking_weight'] = 0;
                }
            }
        }
    }

    // Afficher le tableau des jours
    echo '<!DOCTYPE html>';
    echo '<html lang="fr">';
    echo '<head>';
    echo '<meta charset="UTF-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<title>Résultat des calendriers</title>';
    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">';
    echo '<style>

    * {
        background-color: #222;
    }

    .calendar {
        display: grid;
        grid-template-columns: repeat(auto-fill, 30px); /* Taille fixe pour chaque case */
        gap: 10px; /* Espacement entre les cases */
        color: #ddd;
        background-color: #222;
        padding: 10px;
        border-radius: 8px;
        justify-content: center;
        box-shadow: none;
    }
    .calendar .day {
        width: 30px;
        height: 30px; /* Taille fixe pour les cases */
        position: relative;
        background-color: #444;
        border-radius: 5px;
        box-shadow: none;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
    }
    .calendar .day::before {
        content: attr(data-title);
        position: absolute;
        top: -50px; /* ajusté pour mieux voir le tooltip */
        left: 50%;
        transform: translateX(-50%);
        background: #000;
        color: #fff;
        padding: 5px 5px;
        border-radius: 3px;
        font-size: 12px;
        display: none;
        white-space: pre; /* Permet de respecter les sauts de ligne */
        text-align: center; /* Centrer le texte */
        z-index: 2; /* Assure que le tooltip est au-dessus */
        pointer-events: none; /* Permet de cliquer à travers le tooltip */
        box-shadow: none;
    }
    .calendar .day:hover::before {
        display: block;
    }
    .calendar .day.green {
        background-color: #00821C;
    }
    .calendar .day.red {
        background-color: #ff5a5f;
    }
    .calendar .day.orange {
        background-color: #D7B90F;
    }
    .calendar .month-label {
        grid-column: span 7;
        text-align: center;
        font-weight: bold;
        margin-top: 10px;
        margin-bottom: 5px;
        font-size: 20px;
        box-shadow: none;
        z-index: 200;
        text-color: white;
    }
    </style>';
    echo '</head>';
    echo '<body>';
    echo '<header class="container">';
    echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">';
    echo '<div class="container-fluid">';
    echo '<a class="navbar-brand" href="#">Sync BNB</a>';
    echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">';
    echo '<span class="navbar-toggler-icon"></span>';
    echo '</button>';
    echo '<div class="collapse navbar-collapse" id="navbarNav">';
    echo '<ul class="navbar-nav me-auto">';
    echo '<li class="nav-item">';
    echo '<a class="nav-link" href="products.php">Nos produits</a>';
    echo '</li>';
    echo '</ul>';
    echo '<ul class="navbar-nav">';
    echo '<li class="nav-item dropdown">';
    echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
    echo 'Compte';
    echo '</a>';
    echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
    echo '<li><a class="dropdown-item" href="#">Profil</a></li>';
    echo '<li><a class="dropdown-item" href="protected.php">Paramètres</a></li>';
    echo '<li><a class="dropdown-item" href="#">Sécurité</a></li>';
    echo '<li><a class="dropdown-item" href="logout.php">Déconnexion</a></li>';
    echo '</ul>';
    echo '</li>';
    echo '</ul>';
    echo '</div>';
    echo '</div>';
    echo '</nav>';
    echo '</header>';
    echo '<main class="container">';
    echo '<h1>Résultat des calendriers Airbnb et Booking</h1>';
    $monthLabels = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
    $currentMonth = '';
    $rowCount = 0;

    foreach ($daysTable as $date => $status) {
        $month = date('n', strtotime($date)) - 1;
        if ($currentMonth !== $month) {
            if ($currentMonth !== '') {
                echo '</div>'; // Fermer la div précédente pour le mois
            }
            echo "<h2 class='month-label text-white text-center pt-5 pb-1'>{$monthLabels[$month]}</h2>";
            echo "<div class='calendar'>";
            $currentMonth = $month;
        }

        $statusAirbnb = isset($status['airbnb']) ? $status['airbnb'] : 'Ouvert';
        $weightAirbnb = isset($status['airbnb_weight']) ? $status['airbnb_weight'] : 0;
        $statusBooking = isset($status['booking']) ? $status['booking'] : 'Ouvert';
        $weightBooking = isset($status['booking_weight']) ? $status['booking_weight'] : 0;

        // Déterminer la classe de couleur et le contenu du data-title
        $dayClass = '';
        $dataTitle = '';

        if ($statusAirbnb === 'Ouvert' && $statusBooking === 'Ouvert') {
            $dayClass = 'green';
            $dataTitle = "$date";
        } elseif ($statusAirbnb === 'Fermé' && $statusBooking === 'Fermé') {
            $dayClass = 'orange';
            $dataTitle = "$date";
        } else {
            $dayClass = 'red';
            $dataTitle = "$date:\nAirbnb - $statusAirbnb\nBooking - $statusBooking";
        }

        echo "<div class='day $dayClass' data-title='$dataTitle'></div>";
        $rowCount++;
    }
    echo '</div>'; // Fermer la dernière div pour le mois
    echo '</main>';
    echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>';
    echo '</body>';
    echo '</html>';
}
?>
