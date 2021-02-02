<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact | Medmap</title>
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
        </nav>
    </header>

    <main class="wrapper-main">
        <div class="mm-c-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23547.17825000076!2d21.44465781159044!3d42.46183852099501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13548d28fe87b91d%3A0xab45b8a9d06a705!2sGjilan!5e0!3m2!1sen!2s!4v1559406512145!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="container">
            <div class="row">
                <div class="mm-c-content col-xs-12 col-sm-12 col-md-8">
                    <h2 class="mm-a-heading">Contact.</h2>

                    <form class="mm-a-form">
                        <div class="form-group">
                            <label>Full name</label>
                            <input type="text" class="form-control" id="i_fullname" placeholder="Your name">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" id="i_emailaddress" placeholder="Your email address">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="i_message" id="i_message" cols="30" rows="10" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send message</button>
                    </form>
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