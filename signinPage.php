<!DOCTYPE html> <!--declaration defines that this document is an HTML5 document -->
<html lang="en-US"> <!--declare the language of the website -->
<head> <!--contains meta information of the page -->

<title> Login Page</title>
<meta charset="UTF-8">
<meta name="description" content="Login Page"> 
<meta name="keywords" content="HTML, CSS, JavaScript"><!-- Define keywords for search engines: -->
<meta name="author" content="Charity">
<link rel="icon" type="image/x-icon" href="favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Setting the viewport to make your website look good on all devices: -->
<!--The width=device-width part sets the width of the page to follow the screen-width of the device (which will vary depending on the device).
The initial-scale=1.0 part sets the initial zoom level when the page is first loaded by the browser. -->
<style>
.ul{
	position: sticky;
	top: 0;
  }
  ul {
	list-style-type: none;    /* removes bullets */
    margin: 0;                /* Set margin: 0; and padding: 0; to remove browser default settings */
    padding: 0;
    overflow: hidden;
    background-color: MediumSeaGreen;
}

 li {
	  float:left;
	  color:white;
	  
}
li a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

a:link{}
a:visited{}
a:hover {
	 background: rgba(76, 175, 80, 0.6)      /* Green background with 30% opacity */
}
a:active{
 }

body {
	background-color: lightGray;
	font-family:"Courier New", Monospace,Verdana, sans-serif
}

 form {
	background-color: white;
	background-position: center;
	width: 400px;
	height: 50%;
	margin:auto;
	border: 2px groove ;
	border-radius: 10px;
	padding-left: 30px;
	padding-right: 15px;
	padding-bottom: 20px;
	padding-top: 20px;
 }
input,select {
	border: 1px solid gray;
	border-radius: 10px;
	margin: auto;
	padding:8px;
}
legend {
	text-transform: capitalize;
    color: #4CAF50;
	text-align:center;
	
}
#login,#signup {
	background-color:MediumSeaGreen;
	
}
#login:hover,#signup:hover {
	background-color: #3e8e41;
}
 
  
</style>
</head>
<body>
<div class="ul">
    <ul>
      <li><a href="registerPage.php"> Home</a></li>
	  <li><a href="#aboutus"> About Us</a></li>
	  <li><a href="gallery.php"> Gallery</a></li>
	</ul>
  </div>
<section class="sect1">
 
  <form method="post" autocomplete="on" action="<?php echo htmlspecialchars("signin.php");?>"> 
   
    <fieldset>
	<legend> Login Information</legend>
	<label for="email">Email:</label><br>
	<input type="email" name="email"><br><br>
	<label for="password">Password:</label><br>
	<input type="password" name="password"><br><br>
	</fieldset>
	<br><br>
	<input type="submit" id="login"  value="Login" formaction="signin.php"> <!--formaction overrides form action above-->
	<input type="submit" id="signup"  value="Sign Up" formaction="signup.php">
	
  
  <form>
</section>
<footer></footer>
</body>
</html>