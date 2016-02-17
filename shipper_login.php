<?php
    session_start();
    include_once 'assets/includes/db.php';

    if(isset($_SESSION[email]) != "")
    {
        header("Location: shipper_home.php");
    }
    if(isset($_POST['login']))
    {
        $email = mysql_real_escape_string($_POST['email']);
        $password = mysql_real_escape_string($_POST['password']);
        
        $email = trim($email);
        $password = trim($password);
        
        $results = mysql_query("SELECT shipper_id, firstname, lastname, password FROM shipper WHERE email = '$email'");
        $row = mysql_fetch_array($results);
        
        $count = mysql_num_rows($results);
        
        if($count == 1 $$ $row['password'] ==md5($password))
        {
            $_SESSION['email'] = $row[email];
            header("Location: shipper_home.php");
        }
        else
        {
            ?>
            <script>alert('Username or Password Is Incorrect !');</script>
            <?php
        }
    }
?>

<!DOCTYPE html>

<html lang="en">

<!--<![endif]-->
<!-- SIDE SECTION -->
<head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>FOXTROT WEBPAGE</title>
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--BOOTSTRAP MAIN STYLES -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!--FONTAWESOME MAIN STYLE -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    
    <!--CUSTOM STYLE -->
    <link href="assets/css/style.css" rel="stylesheet" />
    
</head>
    <!--END HEAD SECTION -->
<body>  
     <div class="loader"></div>
 
     <!-- NAV SECTION -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
		
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				
                <!-- <a class="navbar-brand" href="#">FOXTROT</a> -->
				<a href="/"><img src="images.jpg" style="width:70;height:70px;"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li ><p>Login Page :</p></li>
					
                </ul>
            </div> 
			
        </div>
    </div>
     <!--END NAV SECTION -->
     <!-- HEADER SECTION -->
  <div id="header-section">
<body background="car4.jpg">
        <div class="container">
		<h1 >LOG IN PAGE</h1>
            <div class="row text-center">
                <div class="col-md-10 col-md-offset-1 col-sm-12">
                    <h1 style ="color:white">
                    </h1>
					<form action="shipper_home.php">
  <font color ="white">First name:</font><br>
  <input type="text" name="firstname" value="">
  <br>
  <font color ="white">Password:</font><br>
  <input type="password" name="password" value="">
  
  <br><br>
<input name="login" value="Login" size="6" type="submit" />
<!--  <a href="client_home.php">CONTINUE</a>-->
  </li>
<br><br>
<a href="shipper_register.php">Register</a>
			
		</li>
</form> 
                </div>
            </div>
        </div>
    </div> 
      <!--END HEADER SECTION -->
     <!-- BASIC INFO SECTION -->
   <div id="basic-info">
       <div class="container">
                <div class="row main-top-margin text-bottom">
                <div class="col-md-8 col-md-offset-2 " >
                   
                </div>
            </div>
           </div>
          </div>
   </div><br><br><br>
      <!--FOOTER SECTION -->
    <div id="footer">
        <div class="container">
            <div class="row ">
                &copy; 2014 www.foxtrotInc.com | No Right Reserved 				
            </div>
            
        </div>
       
    </div>  

	
	 <!--END FOOTER SECTION -->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY LIBRARY -->
    <script src="assets/js/jquery.js"></script>
    <!-- CORE BOOTSTRAP LIBRARY -->
    <script src="assets/js/bootstrap.min.js"></script>
           <!-- CUSTOM SCRIPT-->
    <script src="assets/js/custom.js"></script>	
	
	
	</body>
</html>
