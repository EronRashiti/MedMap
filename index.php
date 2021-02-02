<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Explore | Medmap</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="img/favicon_logo/medmap_favicon.png" sizes="16x16">
    <!-- BOOTSTRAP CORE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- GOOGLE FONTS CSS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top bgwhite">
            <img src="img/favicon_logo/medmap_logobig@2x.png" width="100px">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
                      
            <div class="collapse ml-md-5 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.html">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mm-u-title">Eron</span>
                        <img src="img/user_img.jpg" class="mm-u-img" alt="User profile">
                    </a>
                              
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="dashboard.html">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Sign out</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="wrapper-main">
        <div class="d-md-flex no-gutters">
            <div class="mm-ph-side col-4">
                <div class="container">
                    <div class="mm-ph-s-head">
                        <h5 class="mm-ph-s-nt"><span>5</span> Pharmacy</h5>
                        <span class="mm-p-s-st">in 5 km around you.</span>
                    </div>

                    <div class="mm-ph-s-items">
                        <div class="mm-ph-s-card">
                            <div class="mm-ph-c-left">
                                <h5 class="mm-ph-c-n">Medicines</h5>

                                <div class="mm-rating">
                                    <div class="mm-r-value mm-r-value-s" data-rating-value="4.5">
                                        <button>1</button>
                                        <button>2</button>
                                        <button>3</button>
                                        <button>4</button>
                                        <button>5</button>
                                    </div>
                                </div>

                                <div class="mm-ph-c-location">
                                    <span class="mm-ph-c-l">LOCATIONS</span>
                                    <span class="mm-ph-c-a">2726 Shinn Street, New York</span>
                                </div>
                                <a href="#" class="mm-ph-c-btn">View details</a>
                            </div>

                            <div class="mm-ph-c-right">
                                <div class="c-img">
                                    <img src="img/pharmacy_img.jpg" class="mm-ph-img" alt="Pharmacy 1">
                                </div>                
                            </div>
                        </div>

                        <div class="mm-ph-s-card">
                                <div class="mm-ph-c-left">
                                    <h5 class="mm-ph-c-n">Medicines</h5>
    
                                    <div class="mm-rating">
                                        <div class="mm-r-value mm-r-value-s" data-rating-value="4.5">
                                            <button>1</button>
                                            <button>2</button>
                                            <button>3</button>
                                            <button>4</button>
                                            <button>5</button>
                                        </div>
                                    </div>
    
                                    <div class="mm-ph-c-location">
                                        <span class="mm-ph-c-l">LOCATIONS</span>
                                        <span class="mm-ph-c-a">2726 Shinn Street, New York</span>
                                    </div>
                                    <a href="#" class="mm-ph-c-btn">View details</a>
                                </div>
    
                                <div class="mm-ph-c-right">
                                    <div class="c-img">
                                        <img src="img/pharmacy_img.jpg" class="mm-ph-img" alt="Pharmacy 1">
                                    </div>                
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-8">
                <div id="map"></div>
            </div>
        </div>
    </main>

    <!-- jQUERY -->
    <script src="js/jquery.min.js"></script>
    <!-- BOOTSTRAP CORE JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- MAIN JavaScript -->
    <script src="js/main.js"></script>
    <!-- GOOGLE MAPS JavaScript -->
    <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap" async defer></script>
</body>
</html>