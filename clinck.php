 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clincka</title>
 </head>
 <body>
  <form>
    <input type="text" name="ism" placeholder="Ismingiz">
    <input type="text" name="familya" placeholder="Familyangiz">
    <input type="text" name="doktor" placeholder="Shifokorning ismi ">
    <input type="date" name="kun">
    <input type="time" name="soat">
    <input type="submit" name="s1" value="OK">
  </form>
  <?php 
  define("DBHOST","localhost");
  define("DBUSER","root");
  define("DBPASS","");
  define("DBNAME","web9");


  if (isset($_GET["s1"])) {
   $con = new mysqli(DBHOST,DBUSER,DBPASS,DBNAME);
   $i=$_GET["ism"];
   $f=$_GET["familya"];
   $d=$_GET["doktor"];
   $k= $_GET["kun"];
   $s=$_GET["soat"];
   echo $i;
   $sql = "insert into clink(Ism,Familya,Doktor_ismi,uchrashish_kuni,uchrashish_soati) 
   values('$i','$f','$d','$k','$s')";
   $r = mysqli_query($con,$sql);
  }
  ?>
 </body>
 </html>