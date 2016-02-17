<!DOCTYPE html>

<html lang="en">

<!--<![endif]-->
<!-- HEAD SECTION -->
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
    
	
	
	
	
	
	<style>.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>

	
	
	
</head>
    <!--END HEAD SECTION -->
<body>  

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>




    
    
    

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
                     <li ><a href="home.php">HOME</a></li>
                    <li> <button onclick="myFunction()" class="dropbtn">LOG-IN</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="shipper_login.php">SHIPPER</a>
    <a href="carrier_login.php">CARRIER</a>
    <a href="admin_login.php">ADMIN</a></li>
                    </ul>
            </div> 
        </div>
    </div>
     <!--END NAV SECTION -->
     <!-- HEADER SECTION -->
  <div id="header-section">
<body background="car4.jpg">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-10 col-md-offset-1 col-sm-12">
                    <h1 style ="color:white" ><strong> </strong>          
                    </h1>
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
<!--                    <h1>Welcome Guest, How far should we go???</h1>-->
                    <h4 style ="color:white">
                       <p>             Check your email to verify.</p>
                    </h4>
                </div>
            </div>
           </div>
          </div>
   </div><br><br><br>
      <!--FOOTER SECTION -->
    <div id="footer">
        <div class="container">
            <div class="row ">
                &copy; 2016 www.foxtrotInc.com | No Right Reserved 				
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
