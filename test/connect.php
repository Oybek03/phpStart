<?php
$name = $_POST["name"];
$firstname = $_POST["firstname"];
$conn = new mysqli('localhost','root','','test');
if ($conn->connect_error) {
  die('Connection Feild : ' .$conn->connect_error);
}

else{
  $stmt = $conn->prepare("insert into registration(Ism,Familya) values(?,?)");
  $stmt->bind_param("sssssi",$name,$firstname);
  $stmt->execute();
  echo "registration sacs...";
  $stmt->close();
  $conn->close();
}
?>