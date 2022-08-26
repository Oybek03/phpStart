<!-- 
<form>
  Matematika: <input type="number" name="matem">
  Fizika: <input type="number" name="fizik">
  ona tili: <input type="number" name="ona">
  <input type="submit" value="ok" name="btn">
</form>
-->
<?php 
//$shakl;
//if (isset($_GET["btn"])) {
//$matka=  $_GET["matem"];
//$fiz = $_GET["fizik"];
//$ona = $_GET["ona"];
//$fizB = $fiz * 2.1;
//$matB = $matka * 3.1;
//$onaB = $ona * 1.1;
//$result = $fizB + $matB + $onaB;
//echo "balingiz:". $result . "<br>";
// if ($result>=160.4) {
//   $shakl = "GRAND";
// }elseif ($result <160.4 && $result > 100) {
//   $shakl = "KANTRAKT";
// }elseif ($result <100) {
//   $shakl = "SUPERKANTRAKT";
// }
// if($shakl != ""){
// echo "Qabul: " , $shakl , " asosida";
// }
// }
// echo $shakl;
?>

<!-- gb bayt kb -->
<!-- <form>
 BAYT: <input type="number" name="byt">
<input type="submit" value="ok" name="s1">
</form> -->
<?php 
//  if (isset($_GET["s1"])) {
//   $bayt = $_GET["byt"];
//   $kb = $bayt / 1024;
//   $mb = $kb / 1024;
//   $gb = $mb / 1024;
//   echo $kb , " KB" . "<br>";
//   echo $mb , " MB" . "<br>";
//   echo $gb , " GB" . "<br>"; 
//  }
 ?>

<form>
  Son: <input type="number" name="numb">
  <input type="submit" value="ok" name="s2">
 </form>
 <?php
 if (isset($_GET["s2"])) {
  $sss = $_GET["numb"];
  $b = $sss / 10;
  $q = $sss % 10;
 }
 ?>
 
<?php

  switch($b){
    case 1: print_r("on"); break;
    case 2 : echo "yigirma " ;break;
    case 3 : echo "o'ttiz ";break;
    case 4 : echo "qirq ";break;
    case 5 : echo "ellik ";break;
    case 6 : echo "oltmish ";break;
    case 7 : echo "yetmish ";break;
    case 8 : echo "sakson ";break;
    case 9 : echo "to'qson ";break;
  
  }
  switch($q){
    case 1 : echo "bir ";break;
    case 2 : echo "ikki ";break;
    case 3 : echo "uch ";break;
    case 4 : echo "to'rt ";break;
    case 5 : echo "besh ";break;
    case 6 : echo "olti ";break;
    case 7 : echo "yetti ";break;
    case 8 : echo "sakkiz ";break;
    case 9 : echo "to'qqiz ";break;
  }

?>
