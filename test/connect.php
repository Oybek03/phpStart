<?php
$name = $_POST["name"];
$firstname = $_POST["firstname"];


$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
  echo "$conn->connect_error";
  die("Connection Failed : ". $conn->connect_error);
} else {
  $stmt = $conn->prepare("insert into registration(Ism, Familya) 
  values(?, ?)");
  $stmt->bind_param($name, $firstname);
  $execval = $stmt->execute();
  echo $execval;
  echo "Registration successfully...";
  $stmt->close();
  $conn->close();
}
?>