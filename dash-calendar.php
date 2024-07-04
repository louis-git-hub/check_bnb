

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Crafto - The Multipurpose HTML5 Template</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 48+ ready demos.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- style sheets and font icons -->
        <link rel="stylesheet" href="../files/css/vendors.min.css"/>
        <link rel="stylesheet" href="../files/css/icon.min.css"/>
        <link rel="stylesheet" href="../files/css/style.css"/>
        <link rel="stylesheet" href="../files/css/responsive.css"/>
        <link rel="stylesheet" href="../files/demos/it-business/it-business.css" />
        <link rel="stylesheet" href="../files/demos/interactive-portfolio/interactive-portfolio.css" />

    </head>
    <body data-mobile-nav-style="classic">  
        <!-- start header -->
        <header> 
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse glass-effect" data-header-hover="light">
                <div class="container-fluid">
                    <div class="col-auto col-xxl-2 col-lg-2 me-lg-0 me-auto">
                        <a class="navbar-brand" href="synchbnb.html">
                            <img src="../objects//logo.png" data-at2x="../objects//logo.png" alt="" class="default-logo">
                            <img src="../objects//logo1.png" data-at2x="../objects//logo1.png" alt="" class="alt-logo">
                            <img src="../objects//logo.png" data-at2x="../objects//logo.png" alt="" class="mobile-logo"> 
                        </a>
                    </div>
                    <div class="col-auto col-xxl-7 col-lg-8 menu-order position-static">
                        <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav"> 
                            <ul class="navbar-nav"> 
                                <li class="nav-item"><a href="dashbord-bnb.html" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="dash-calendar.html" class="nav-link">Mon calendrier</a></li> 
                                <li class="nav-item"><a href="demo-it-business-case-studies.html" class="nav-link">Historique</a></li>
                                <li class="nav-item"><a href="dash-doc.html" class="nav-link">La doc</a></li>
                                <li class="nav-item"><a href="demo-it-business-contact.html" class="nav-link">Nous contacter</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto col-xxl-2 col-lg-2 text-end d-none d-sm-flex p-0">
                        <div class="header-icon">
                            <div class="header-button px-2">
                                <a href="creer-bnb.html" class="btn btn-small btn-transparent-white-light btn-rounded text-transform-none border-1">Se déconnecter<i ></i></a>
                            </div>
                            
                        </div>  
                    </div>
                    
                </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header -->  
        <!-- end header -->  
        <section class="d-flex align-items-center full-screen cover-background ipad-top-space-margin bg-black"  style="background-image: url();">
            <div class="container pt-5 border-light-subtle border-2">
                <div class="row g-0 justify-content-center  ">
                    <h1 class="text-white">Clendar</h1>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="bg-white full-screen position-relative d-flex align-items-center mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 text-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <h2 class="fs-70 lg-fs-50 fw-600 text-dark ">Check Bnb</h2></div>
                </div>
                <div class="row">
                    <div class="col tab-style-01">
                        
                        <div class="tab-content">
                            <!-- start tab content -->
                            <div class="tab-pane fade in active show" id="tab_sec1">
                                <div class="row g-0 justify-content-center  ">

                                    <div class="col-xl-6 col-lg-8 col-md-10 contact-form-style-04 md-mb-50px py-5 px-5 border-radius-30px "  >
            
                                        <form action="dash-calendar.php" method="post">
                                            <label class="text-black mb-10px fw-500">URL Airbnb<span class="text-red">*</span></label> 
                                            <input class="mb-20px bg-very-light-gray box-shadow-extra-large border-radius-50px" type="url" name="url_bnb" placeholder="Entrer votre 1er Url" />
                                            <label class="text-black mb-10px fw-500">URL Booking<span class="text-red">*</span></label> 
                                            <input class="mb-20px bg-very-light-gray border-radius-50px" type="url" name="url_booking" placeholder="Entrer votre 2ème Url" />
                                            <!-- <input type="hidden" name="redirect" value=""> -->
                                            <button class="btn w-100 btn-medium btn-rounded btn-transparent-light-gray d-table d-lg-inline-block lg-mb-15px md-mx-auto" >Submit</button>
                                            
                                        </form>
                                        
                                    </div>
                            </div>
                            </div>
                            <!-- end tab content -->
                        </div>
                    </div>
                </div>                
            </div>
        </section> 
        <!-- end section -->
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
            
            echo '<style>
            .title{
                color:black;
            }
            .calendar {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                padding: 10px;
                border-radius: 8px;
                color: #ddd;

            }
            .day {
                width: 30px;
                height: 30px;
                margin: 5px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 5px;
                background-color: #444;
                font-size: 12px;
                position: relative;
            }
            .day::before {
                content: attr(data-title);
                position: absolute;
                top: -50px;
                left: 50%;
                transform: translateX(-50%);
                background: #FFFFFF;
                color: #000000;
                padding: 5px;
                border-radius: 3px;
                font-size: 12px;
                display: none;
                white-space: pre;
                text-align: center;
                z-index: 2;
                pointer-events: none;
            }
            .day:hover::before {
                display: block;
            }
            .green {
                background-color: #00821C;
            }
            .red {
                background-color: #ff5a5f;
            }
            .orange {
                background-color: #D7B90F;
            }
            .month-label {
                width: 100%;
                text-align: center;
                font-weight: bold;
                margin-top: 10px;
                margin-bottom: 5px;
                font-size: 20px;
                color: white;
            }
            </style>';
            echo '</head>';
            echo '<body>';
            echo '<div class="container px-0">';
            echo '<h2 class="text-center fs-50 lg-fs-50 fw-600 text-black py-5">Résultat des calendriers Airbnb et Booking</h2>';
            echo '<div class="bg-black  px-2 border-radius-10px">';
            $monthLabels = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
            $currentMonth = '';
            $rowCount = 0;

            foreach ($daysTable as $date => $status) {
                $month = date('n', strtotime($date)) - 1;
                if ($currentMonth !== $month) {
                    if ($currentMonth !== '') {
                        echo '</div>'; // Fermer la div précédente pour le mois
                    }
                    echo "<h2 class='month-label sm-pt-5 text-white'>{$monthLabels[$month]}</h2>";
                    echo "<div class='calendar  px-2 pt-0'>";
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
            echo '</div>'; // Fermer le conteneur principal
            echo '</div>';

            
        }
        ?>



        <!-- start footer -->
        <footer class="p-0 footer-light position-relative"> 
            <div class="container position-relative"> 
                <div class="row justify-content-center pt-5 sm-pt-40px">
                    <!-- start footer column -->
                    <div class="col-6 col-xl-3 col-lg-12 col-sm-6 last-paragraph-no-margin text-xl-start text-lg-center order-sm-1 lg-mb-50px sm-mb-30px">
                        <a href="demo-it-business.html" class="footer-logo mb-15px d-inline-block"> 
                            <img src="images/demo-it-business-logo-black.png" data-at2x="images/demo-it-business-logo-black@2x.png" alt="">
                        </a>
                        <p class="lh-28 w-90 xl-w-100 mx-lg-auto mx-xl-0">Gearing your company through an innovative strategy.</p>
                        <div class="elements-social social-icon-style-02 mt-15px">
                            <ul class="medium-icon dark">
                                <li class="my-0"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li class="my-0"><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li> 
                                <li class="my-0"><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li> 
                                <li class="my-0"><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li> 
                            </ul>
                        </div>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-xl-2 col-lg-3 col-sm-4 xs-mb-30px order-sm-3 order-lg-2">
                        <span class="fw-600 d-block text-dark-gray mb-5px">Company</span>
                        <ul>
                            <li><a href="demo-it-business-about.html">Who we are</a></li>
                            <li><a href="demo-it-business-services.html">Our services</a><div class="bg-dark-gray fw-600 text-white lh-22 text-uppercase border-radius-30px ps-10px pe-10px fs-10 ms-10px d-inline-block align-middle">Hot</div></li>
                            <li><a href="demo-it-business-case-studies.html">Our clients</a></li>
                            <li><a href="demo-it-business-contact.html">Contact us</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-xl-2 col-lg-3 col-md-5 col-sm-4 xs-mb-30px order-sm-4 order-lg-3">
                        <span class="fw-600 d-block text-dark-gray mb-5px">Services</span>
                        <ul>
                            <li><a href="#">Planning</a></li>
                            <li><a href="#">Research</a></li>
                            <li><a href="#">Consulting</a></li>
                            <li><a href="#">Analysis</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-xl-2 col-lg-3 col-md-3 col-sm-4 xs-mb-30px order-sm-5 order-lg-4">
                        <span class="fw-600 d-block text-dark-gray mb-5px">Need help?</span>
                        <span>Call us directly?</span>
                        <span class="d-block mb-10px"><a class="text-dark-gray fw-600" href="tel:1235678901">(123) 567 8901</a></span>
                        <span>Need support?</span>
                        <a href="mailto:help@domain.com" class="text-dark-gray fw-600">help@domain.com</a>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-xl-3 col-lg-3 col-sm-6 md-mb-50px sm-mb-30px xs-mb-0 order-sm-2 order-lg-5">
                        <span class="fw-600 d-block text-dark-gray mb-5px">Subscribe newsletter</span>
                        <p class="lh-28 w-95 mb-10px xs-mb-10px">Subscribe our newsletter to get the latest news and updates!</p>
                        <div class="d-inline-block w-100 newsletter-style-04 position-relative"> 
                            <form action="email-templates/subscribe-newsletter.php" method="post" class="position-relative w-100">
                                <input class="fs-15 bg-white w-100 border-0 border-bottom border-1 border-color-dark-gray form-control required" type="email" name="email" placeholder="Enter your email address" />
                                <input type="hidden" name="redirect" value="">
                                <button class="btn submit" aria-label="submit"><i class="icon feather icon-feather-mail icon-small"></i></button>
                                <div class="form-results border-radius-0px p-15px fs-16 lh-24 w-100 text-center position-absolute d-none"></div>
                            </form>
                        </div>
                    </div>
                    <!-- end footer column -->                      
                </div>
                <div class="row justify-content-center align-items-center pt-7">
                    <!-- start divider -->
                    <div class="col-12">
                        <div class="divider-style-03 divider-style-03-01 border-color-extra-medium-gray"></div>
                    </div>
                    <!-- end divider -->
                    <!-- start copyright -->
                    <div class="col-lg-5 pt-20px pb-20px md-pt-0 order-2 order-lg-1 text-center text-lg-start last-paragraph-no-margin fs-14"><p>&copy; 2024 Crafto is Proudly Powered by <a href="https://www.themezaa.com/" target="_blank" class="text-dark-gray fw-600 text-decoration-line-bottom">ThemeZaa</a></p></div>
                    <!-- end copyright -->
                    <!-- start footer menu -->
                    <div class="col-lg-7 pt-20px pb-20px md-pt-25px md-pb-5px order-1 order-lg-2 text-center text-lg-end fs-14">
                        <ul class="footer-navbar sm-lh-normal"> 
                            <li><a href="#" class="nav-link">Privacy policy</a></li>
                            <li><a href="#" class="nav-link">Terms and conditions</a></li>
                            <li><a href="#" class="nav-link">Copyright</a></li>
                        </ul>
                    </div>
                    <!-- end footer menu -->
                </div>
            </div> 
        </footer>
        <!-- end footer -->
        <!-- start scroll progress -->
        <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
            </a>
        </div>
        <!-- end scroll progress -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="../files/js/jquery.js"></script>
        <script type="text/javascript" src="../files/js/vendors.min.js"></script>
        <script type="text/javascript" src="../files/js/main.js"></script>
        
    </body>
</html>