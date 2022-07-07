<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 
  <form>
    <input type="text" name="soz" placeholder="soz"><br><br>
    <input type="text" name="avtor" placeholder="avtor"><br>
    <input type="date" name="vaqt">
    <input type="submit" name="s1" value="kiritish"/>
  </form>
<?php
if (isset($_GET["s1"])) {
$con = mysqli_connect("localhost","root","","web9");
$s=$_GET["soz"];
$m=$_GET["avtor"];
$v=$_GET["vaqt"];
$sql = "insert into sozlar(soz,muallif,vaqt) values('{$s}','{$m}','{$v}')";
$r = mysqli_query($con,$sql);
}
?>
</body>
</html>