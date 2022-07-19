<?php
$NANE = $_POST["name"];
$FIRSTNAME = $_POST["firstname"];


$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
  echo "$conn->connect_error";
  die("Connection Failed : ". $conn->connect_error);
} else {
  $stmt = $conn->prepare("insert into registration(Ismm, Familya) 
  values(?, ?)");
  // $stmt->bindparam($NAME, $FIRSTNAME);
  $stmt->bindParam(1, $name);
$stmt->bindParam(2, $firstname);

  $execval = $stmt->execute();
  echo $execval;
  echo "Registration successfully...";
  $stmt->close();
  $conn->close();
}
?>