<?php
// On the new page
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: signinPage.php");
    exit();
}
?>

<!DOCTYPE html> <!--declaration defines that this document is an HTML5 document -->
<html lang="en-US"> <!--declare the language of the website -->
<head> <!--contains meta information of the page -->

<title> Gallery </title>
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
.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

.gallery:hover {
  border: 1px solid #777;
}

.gallery img {
  width: 100%;
  height: auto;
}

.description {
  padding: 15px;
  text-align: center;
}
</style>
</head>
<body>

 <div class="ul">
    <ul>
      <li><a href="registerPage.php"> Home</a></li>
	  <li><a href="#aboutus"> About Us</a></li>
	  <li><a href="gallery.php"> Gallery</a></li>
      <li><a href="#"> <?php
         echo "$username!</h1>";
      ?>
      </a></li>
	</ul>
  </div>
<div class="gallery">
  <a href="#">
    <img src="img/front-1.png" alt="image 1" width="400" height="400">
  </a>
  <div class="description">
   <p> This the image description </p>
  </div>
 
</div>
<div class="gallery">
  <a href="#">
    <img src="img/front-2.png" alt="image 1" width="400" height="400">
  </a>
  <div class="description">
   <p> This the image description </p>
  </div>
 
</div>
<div class="gallery">
  <a href="#">
    <img src="img/front-3.png" alt="image 1" width="400" height="400">
  </a>
  <div class="description">
   <p> This the image description </p>
  </div>
 
</div>
<div class="gallery">
  <a href="#">
    <img src="img/back.jpg" alt="image 1" width="400" height="400">
  </a>
  <div class="description">
   <p> This the image description </p>
  </div>
 
</div>
<div class="gallery">
  <a href="#">
    <img src="img/back2.jpg" alt="image 1" width="400" height="400">
  </a>
  <div class="description">
   <p> This the image description </p>
  </div>
 
</div>
<div class="gallery">
  <a href="#">
    <img src="img/back3.jpg" alt="image 1" width="400" height="400">
  </a>
  <div class="description">
   <p> This the image description </p>
  </div>
 
</div>
<div class="gallery">
  <a href="#">
    <img src="img/back4.jpg" alt="image 1" width="400" height="400">
  </a>
  <div class="description">
   <p> This the image description </p>
  </div>
 

</body>
</html>