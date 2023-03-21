<?php
$host = "localhost";
$username = "root";
$password= "admin123";
$dbname = "mydb";


$email = $password = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $email = $_POST['email'];
  $password = $_POST['password'];
}
try{
  $conn = new pdo("mysql:host=$host;mydbname=$dbname",$username);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->exec("USE $dbname");
  // prepare a SELECT statement to retrieve the user's information from the database
  $sql="SELECT * FROM mytable WHERE email=?";
  $stmt=$conn->prepare($sql);
  $stmt->execute([$email]);
  $user=$stmt->fetch();
  
  // verify the user's credentials
  if ($user && password_verify($password, $user['password'])) {
  // sign the user in
  session_start();
  $_SESSION['user_id'] = $user['id'];
  $_SESSION['username'] = $user['email'];

  // redirect to the home page or another authorized page
  header('Location: synopsis.php');
  exit;
  } 
 else {
  // display an error message
  echo "Invalid username or password.";
  }
  
}

catch(exemption $e){
  echo "not connected".$e->getMessage();
}
$conn =null;


?>