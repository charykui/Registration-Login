<?php
$servername = "localhost";
$username = "root";
$password= "admin123";
$dbname = "mydb";
$_SESSION['username'] = $user['username'];

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
    // Create database if it doesn't exist
    $sql_db = "CREATE DATABASE IF NOT EXISTS $dbname";
    $conn->exec($sql_db);
    echo "Database created successfully\n";

	// Select database
    $conn->exec("USE $dbname");

	// Create table if it doesn't exist
    $sql_table = "CREATE TABLE IF NOT EXISTS mytable (
	    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		firstname VARCHAR(255) NOT NULL,
		lastname VARCHAR(255) NOT NULL,
		email VARCHAR(255) NOT NULL,
		gender VARCHAR(255) NOT NULL,
		country_code VARCHAR(255) NOT NULL,
		dob DATE,
		password VARCHAR(255) NOT NULL,
		reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $conn->exec($sql_table);
    echo "Table created successfully\n";
  
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
    ));
    echo"successfully!";
   
}
catch (exemption $e){
	 echo $sql."<br>".$e->getMessage();
	
}

// Close connection
$conn = null;
// redirect to another page
header('Location: signinPage.php');
exit;
?>