<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Publish | Medmap</title>
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
                
                    <div class="mm-pub-wrapper col-md-10">
                        <div class="mm-ph-w-left">
                            <h3 class="pb-2" style="font-size:25px">Add Pharmacy</h3>
                            <a style="color: darkgray; font-size: 14px;">Fill form below to publish your pharmacy.</a>
                        </div>
            
                        <div class="mm-ph-w-right">
                                <input class="mm-publish btn btn-primary" type="submit" value="Publish">
                        </div>
                    </div>
    
                <div class="col-md-10">
                        <div class="row mm-pub-name col-md-9">
                            <label style= "font-size: 13px; color:darkgray">Name</label>
                            <input type="name" class="form-control" name="pub-name" id="pub-name" placeholder="">
                       </div>
                    <form>
                            <div class="form-row">
                                <div class="mm-num-1 col-md-4">
                                    <label style= "font-size: 13px; color:darkgray">Phone number 1</label> 
                                    <input type="number" class="form-control" placeholder="">
                                </div>
                                <div class="mm-num-2 col-md-4">
                                    <label style= "font-size: 13px; color:darkgray">Phone number 2</label> 
                                    <input type="number" class="form-control" placeholder="">
                                </div>
                            </div>   
                            <div class="row mm-desription col-md-9">
                                    <label style= "font-size: 13px; color:darkgray">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>                             
                    </form>          
                </div>
    </main>
        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-container">
                    <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                    <p class="copyright">© 2019 MEDMAP</p>
                </div>
            </div>
        </footer>
    <!-- jQUERY -->
    <script src="js/jquery.min.js"></script>
    <!-- BOOTSTRAP CORE JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- MAIN JavaScript -->
    <script src="js/main.js"></script>
</body>
</html>