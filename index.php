<?php 
//masala 1
// $son1=22;
// if ($son1>0) {
//  $son2 = $son1+1;
//   echo $son2;
// }
// else{
//   echo $son1;
// }

//masala 2
// $son3 = -22;
// if ($son3>0) {
//  $son4 = $son3+1;
//   echo $son4;
// }
// else{
//   $son5 = $son3-2;
//   echo $son5;
// }

// masala 3
// $son = -99;
// if ($son>0) {
//   $son++;
//   echo $son;
// }
// elseif ($son<0) {
// $son2=$son-2;
// echo $son2;
// }
// elseif ($son==0) {
//   $son=10;
//   echo $son;
// }

//masala 4

$son1 = 9;
$son2=8;
$son3 = 0;
if ($son1>0 && $son2<0 && $son3<0 || $son1<0 && $son2>0 && $son3<0 ||  $son1<0 && $son2<0 && $son3>0   ) {
echo "bitta musbat son bor";
}
elseif ( $son1>0 && $son2>0 && $son3<0  ||  $son1<0 && $son2>0 && $son3>0  ||   $son1>0 && $son2<0 && $son3>0 ) {
echo "ikkita musbat son bor";
}
elseif ( $son1>0 && $son2>0 && $son3>0 ) {
  echo "hammasi musbat sonlar";
}
else{
  echo "musbat son yuq "; 
}
?>