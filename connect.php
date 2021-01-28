 <?php
$servername = "localhost";
$username = "root";//root
$password = "";//Password always blank in localhost
$dbname = "a2";//database name


$conn = new mysqli($servername, $username, $password, $dbname);
//Database connection agar fail hogya toh reason pta chalega
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$username=$_POST['username'];
$password=$_POST['password'];
//change accordingly column name insert karro
if(!empty($username))
{
  if(!empty($password))
  {
$sql = "INSERT INTO accounts ()
VALUES ('$username','$password')";
//values maun uppar jo variable hai
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
  }
  else{
  echo "password cant b empty";
  }
}
else{
  echo "username cant b empty";
}

$conn->close();
?>
