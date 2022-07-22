<?php
// eng kichik sonni top
$a=8;
$b=1;
$c=3;

if ($a<$b AND $a<$c) {
echo "eng kichik son bu " . $a;
}
elseif ($b<$a AND $b<$c)  {
echo "eng kichik son bu " . $b;  
}
else {
echo "eng kichik son bu " . $c;
}

// yilni turini  aniqlash

$yil = 1900;
if ($yil%4==0) {
  if ($yil%100==0) {
    if ($yil%400==0) {
      echo "bu yil kabisa";
    }
  }
}

elseif ($yil%4==0) {
  if ($yil%100==0) {
    if ($yil%400 != 0) {
      echo "bu yil kabisa emas";
    }
  }
}
elseif ($yil%4 != 0) {
 echo "bu yil kabisa emas";
}
?>