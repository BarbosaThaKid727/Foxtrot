<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Cargo</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Cargo</a></h1>
		<form id="form_1096586" class="appnitro"  method="post" action="shipper_validation.php">
					<div class="form_description">
			<h2>Shipper Registration Form</h2>
<!--			<p>The necessary cargo/package details must be listed.</p>-->
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="firstname">First Name </label>
		<div>
			<input id="element_1" name="firstname" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
                <li id="li_2" >
		<label class="description" for="lastname">Last Name </label>
		<div>
			<input id="element_1" name="lastname" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		
                <li id="li_2" >
		<label class="description" for="email">Email </label>
		<div>
			<input id="element_2" name="email" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		
                <li id="li_3" >
		<label class="description" for="password">Password </label>
		<div>
			<input id="element_3" name="password" class="element text medium" type="password" maxlength="255" value=""/> 
		</div> 
		</li>
                 <li id="li_3" >
		<label class="description" for="password2">Password 2 </label>
		<div>
			<input id="element_3" name="password2" class="element text medium" type="password" maxlength="255" value=""/> 
		</div> 
		</li>		
		
                <li id="li_5" >
		<label class="description" for="address">Billing Address </label>
		<div>
			<input id="element_5" name="address" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
<!--			<a href="Goods.php">CONTINUE</a>-->
                <input name="register" value="Register" size="6" type="submit" />
		</li>
			</ul>
		</form>
	</div>
	
	</body>
</html>