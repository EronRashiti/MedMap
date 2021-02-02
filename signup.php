<?php
session_start();
require 'required/config.php';

	if( isset($_SESSION['user_id']) ){
		header("Location: index.php");
	}

	function SQLInjection($data) {   
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
	}

	$showmessage = "";

if(isset($_POST['submit'])) {

	// if(isset($_POST['txtfirst']) && isset($_POST['txtlast']) && isset($_POST['txtdate']) && isset($_POST['txtemail']) && isset($_POST['txtusername']) && isset($_POST['txtpassword']) && isset($_POST['txtgender'])) {
		
		$m_firstname = SQLInjection($_POST['txtfirst']);
    $m_lastname = SQLInjection($_POST['txtlast']);
    $m_date = $_POST['txtdate'];
    $m_emailaddress = SQLInjection($_POST['txtemail']);
    $m_gender = $_POST['txtgender'];

		$u_username = SQLInjection($_POST['txtusername']);
    $u_password = SQLInjection($_POST['txtpassword']);
		$u_confirmpassword = SQLInjection($_POST['txtconfirmpassword']);

		if((!$m_firstname) || (!$m_lastname) || (!$m_date) || (!$m_emailaddress) || (!$m_gender) || (!$u_username) || (!$u_password)) {
      $error_css='border:2px solid #e35152';
			$error_message = "You can't leave empty.";
    } else {

		$m_firstname = preg_replace("#[^0-9a-z]#i","",$m_firstname);
    $m_lastname = preg_replace("#[^0-9a-z]#i","",$m_lastname);

		$pass_length = strlen($u_password);

		$records = $conn->prepare("SELECT u_username FROM tblusers WHERE u_username = :txtusername LIMIT 1");
		$records->bindParam(':txtusername', $u_username);
		$records->execute();
		// $results = $records->fetch(PDO::FETCH_ASSOC);

		if($records->rowCount() > 0) {
    	$error_user = "Existing user with same name.";
		 
		
		 if($pass_length < 6) {
    	$error_password = "Minimum length of 6 characters";
		} 
		
		 if($u_password != $u_confirmpassword) {
    	$error_passwordmatch = "Password not match";
		} 
		
		 if(!preg_match('/[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/', $m_emailaddress)) {
      $error_email = "Enter valid email address";
		} 

		} else {
		
		$qrymembers = "INSERT INTO tblmembers (m_firstname, m_lastname, m_date, m_emailaddress, m_gender) VALUES (:txtfirst, :txtlast, :txtdate, :txtemail, :txtgender)";
		$stmtmembers = $conn->prepare($qrymembers);
		$stmtmembers->bindParam(':txtfirst', $m_firstname);
		$stmtmembers->bindParam(':txtlast', $m_lastname);
		$stmtmembers->bindParam(':txtdate', $m_date);
		$stmtmembers->bindParam(':txtemail', $m_emailaddress);
		$stmtmembers->bindParam(':txtgender', $m_gender);

		$qryusers = "INSERT INTO tblusers (u_username, u_password) VALUES (:txtusername, :txtpassword)";
		$stmtusers = $conn->prepare($qryusers);
		$stmtusers->bindParam(':txtusername', $u_username);
		$stmtusers->bindParam(':txtpassword', password_hash($u_password, PASSWORD_BCRYPT));

		if( $stmtmembers->execute() AND $stmtusers->execute()) {
			$showmessage = 'Successfully created new user';
			$records = $conn->prepare('SELECT u_id, u_username, u_password FROM tblusers WHERE u_username = :txtusername');
			$records->bindParam(':txtusername', $_POST['txtusername']);
			$records->execute();
			$results = $records->fetch(PDO::FETCH_ASSOC);
			if(count($results) > 0 && password_verify($_POST['txtpassword'], $results['u_password']) ){
				$_SESSION['user_id'] = $results['u_id'];
				header("Location: index.php");
			}
		} else{
				$showmessage = 'Sorry there must have been an issue creating your account';
		}
	}
}
}
// }
?>

<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Medmap</title>
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
    <main class="wrapper-container">
        <div class="container">
            <div class="row">
                <div class="header-container col-xs-12 col-sm-12 col-md-4">
                    <div class="header-logo">
                        <img src="img/favicon_logo/medmap_logo@2x.png" class="mm-logo" >
                    </div>

                    <div class="header-content">
                        <h3 class="header-heading">Create your account</h3>
                        <p class="header-subheading">It's free and only<br /> takes a minute.</p>
                    </div>

                    <form class="form-content">
                            <div class="form-group">
                                    <input type="name" class="form-control" name="si-firstname" id="si-name" placeholder="Firstname">
                            </div>
                            <div class="form-group">
                                    <input type="name" class="form-control" name="si-lastname" id="si-name" placeholder="Lastname">
                            </div>
                            <div class="form-group">
                                    <input type="name" class="form-control" name="si-username" id="si-name" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="si-email" id="si-email" placeholder="Email address">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="si-password" id="si-password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                    <input type="password" class="form-control" name="si-password" id="si-password" placeholder="Confirm password">
                            </div>
                        <button type="submit" class="btn btn-primary">Sign up</button>
                    </form>
                </div>
            </div>
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