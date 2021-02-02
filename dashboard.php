<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard | Medmap</title>
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
            </div>
        </nav>
    </header>

    <main class="wrapper-main">
        <div class="container">
            <div class="row justify-content-center">
            
                <div class="mm-ph-wrapper col-md-10">
                    <div class="mm-ph-w-left">
                        <h3 class="pb-3">Welcome back, Eron</h3>
                        <a href="" style="color: #1ABEC5">View profile</a>
                    </div>
        
                    <div class="mm-ph-w-right">
                        <img src="img/user_img.jpg" class="mm-u-profile">
                    </div>
                </div>

                <div class="col-md-10">
                    <h6 class="pb-1 pt-5">Your pharmacy</h6>

                    <div class="mm-ph-card">
                        <div class="c-img">
                            <img src="img/pharmacy_img.jpg" class="mm-ph-img" alt="Pharmacy 1">
                        </div>

                        <div class="c-body" style="width: 100%;">
                          <h5>Medicines</h5>        
                          <div class="rating">
                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                            </div>
                        <div class="c-location">
                          <h6>Locations : </h6>
                        </div>
                      </div>
                        <div class="c-buttons">
                            <button type="button" class="btn btn-link">Edit</button>
                            <button type="button" class="btn btn-link">Delete</button>
                        </div>
                    </div>

                    <div class="mm-ph-card">
                        <div class="c-img">
                            <img src="img/pharmacy_img.jpg" class="mm-ph-img" alt="Pharmacy 2">
                        </div>
    
                        <div class="c-body" style="width: 100%;">
                          <h5>Medicines</h5>
                          <div class="rating">
                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                            </div>
                          <div class="c-location">
                            <h6>Locations : </h6>
                          </div>
                        </div>
    
                        <div class="c-buttons">
                            <button type="button" class="btn btn-link">Edit</button>
                            <button type="button" class="btn btn-link">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- jQUERY -->
    <script src="js/jquery.min.js"></script>
    <!-- BOOTSTRAP CORE JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- MAIN JavaScript -->
    <script src="js/main.js"></script>
</body>
</html>