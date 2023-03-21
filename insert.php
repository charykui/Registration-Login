<?php
$servername = "localhost";
$username = "root";
$dbname = "mydb";

$firstname = $lastname = $email = $birthday = $gender = $country_code = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $birthday = $_POST["birthday"];
  $gender = $_POST["gender"];
  $country_code = $_POST["country_code"];
  $pass = $_POST["password"];
 }
 
 // hash the password using the password_hash function
$password = password_hash($pass, PASSWORD_DEFAULT);
 
 //connecting to the database
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if(!$conn->query("DESCRIBE mytable")){
	createTable($conn);
  }
  // Prepare and execute the SQL query
  $sql = "INSERT INTO mytable (Firstname, Lastname, Email, DOB, Gender, Country_code, Password) VALUES (:firstname, :lastname, :email, :DOB, :gender, :country_code, :password)";
  $stmt = $conn->prepare($sql);
  $stmt->execute(array(
    ':firstname' => $firstname,
	':lastname' => $lastname,
    ':email' => $email,
	':DOB' => $birthday,
	':gender' => $gender,
	':country_code' => $country_code,
    ':password' => $password
    ));?>
  <script>alert("successfully!"); </script>
  <?php
}
catch (exemption $e){
	 echo $sql."<br>".$e->getMessage();
	
}
// Check if database exists, create it if not
   if (!$conn->query("USE myDB")) {
   createDatabase($conn);
   }
  if(!$conn->query("DESCRIBE myTable")){
	createTable($conn);
  }

  //Function to create database
function createDatabase($conn){
	$sql="CREATE DATABASE myDB";
	  //$conn->exec($sql);
	if ($conn->query($sql)){
       echo "Database created successfully<br>";
    } 
	else {
       echo "Error creating database: " . $conn->errorInfo()[2];
       die();
    }
}
  
  // Function to create table
function createTable($conn) {
    $sql = "CREATE TABLE myTable (
	    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		firstname VARCHAR(255) NOT NULL,
		lastname VARCHAR(255) NOT NULL,
		email VARCHAR(255) NOT NULL,
		gender VARCHAR(255) NOT NULL,
		country_code VARCHAR(255) NOT NULL,
		dob DATE,
		password VARCHAR(255) NOT NULL
		reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
		)";
    if ($conn->query($sql)) {
        echo "Table created successfully<br>";
    } 
	else {
        echo "Error creating table: " . $conn->errorInfo()[2];
        die();
    }
}

// Close connection
$conn = null;
// redirect to another page
 header('Location: signin.php');
 exit;
?>