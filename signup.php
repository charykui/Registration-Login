<!DOCTYPE html> <!--declaration defines that this document is an HTML5 document -->
<html lang="en-US"> <!--declare the language of the website -->
<head> <!--contains meta information of the page -->

<title> New Website</title>
<meta charset="UTF-8">
<meta name="description" content="Website Registration Page"> 
<meta name="keywords" content="HTML, CSS, JavaScript"><!-- Define keywords for search engines: -->
<meta name="author" content="Charity">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

/* 
a:hover MUST come after a:link 
and a:visited in the CSS definition in order to 
be effective! a:active MUST come after a:hover in the CSS definition in order to be effective!
*/

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
	margin:auto;
	width:30%;
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
}
legend {
	text-transform: capitalize;
    color: #4CAF50;
	text-align:center;
	text-decoration: overline;
}
#submit{
	background-color:MediumSeaGreen;
	float: left;
}
#reset {
	 background-color:MediumSeaGreen;
	 position: relative;
	 float: right;
	 
 }
#submit:hover,#reset:hover {
	 background-color:#3e8e41;
	 
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
<section>
  <!--The $_SERVER["PHP_SELF"] is a super global variable that returns the
  filename of the currently executing script. 
  The htmlspecialchars() function converts special characters to HTML entities. This means that it will replace HTML characters like < and > with &lt; and &gt;. 
  This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.
  -->
  <form method="post" autocomplete="on" action="<?php echo htmlspecialchars("insert.php");?>"> 
   
    <fieldset>
	<legend> Personal Information</legend>
	<label for="firstname">First name:</label><br>
    <input type="textbox" name="firstname" autofocus><br>
	<label for="lastname">Lastname:</label><br>
	<input type="textbox" name="lastname" required><br> 
	<label for="email">Email:</label><br>
	<input type="email" name="email"><br>
	<label for="birthday">Date of Birth:</label><br>
    <input type="date" id="birthday" name="birthday"><br>
	<label for="phone">Enter a phone number:</label><br>
    <input type="tel" id="phone" name="phone" pattern="+[0-9]{4}-[0-9]{4}-[0-9]{4}" placeholder="+2547-0112-1234"><br>
	<label for="gender">Select Gender:</label><br>
	<select name="gender"> 
	  <option value="Male"> Male</option>
	  <option value="female"> Female</option>
	  <option value="other">Other</option>
	</select><br/>
	<label for="country_code">Country code:</label><br>
    <input type="text" id="country_code" name="country_code"
       pattern="[A-Za-z]{3}" title="Three letter country code" maxLength="3" size="20"><br>
	<label for="password">Password:</label><br>
	<input type="password" name="password"><br><br>
	
	<br>
	<input type="submit" id="submit"  name="register"> <!--formaction overrides form action above-->
	<input type="reset" id="reset">
	</fieldset>
  
  <form>
</section>
<footer></footer>
</body>
</html>