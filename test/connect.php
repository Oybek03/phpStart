<?php
$NANE = $_POST["name"];
$FIRSTNAME = $_POST["firstname"];


$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
  echo "$conn->connect_error";
  die("Connection Failed : ". $conn->connect_error);
} else {
  $STMT = $conn->prepare("insert into registration(Ismm, Familya) 
  values(?, ?)");
  // $stmt->bindparam($NAME, $FIRSTNAME);
  $STMT->bindParam(1, $NAME);
$STMT->bindParam(2, $FIRSTNAME);

  $EXECVAL = $STMT->execute();
  echo $EXECVAL;
  echo "Registration successfully...";
  $STMT->close();
  $STMT->close();
}
?>