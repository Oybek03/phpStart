<?php 
$num="";
$operator="";
$result="";
$cooke_name1="num";
$cooke_value1="";
$cooke_name2="op";
$cooke_value2="";
if (isset($_POST['display'])) {
  $num = $_POST['display'];
}else{
  $num="";
}

if (isset($_POST['submit'])) {
  $num = $_POST['display'] . $_POST['submit'];
}
else{
  $num="";
}
if (isset($_POST[''])) {
  $cooke_value1=$_POST['display'];
  setcookie($cooke_name1,$cooke_value1,time()+(86400*30),"/");
  $cooke_value2=$_POST['op'];
  setcookie($cooke_name2,$cooke_value2,time()+(86400*30),"/");
  $num="";
}
?>
<html>
  <head>
    <title>Calculator</title>
  </head>
  <body>
    <center>
    <form action="" method="post">

      <table border="1">
        <tr>
          <td colspan="4"><input type="text" name="display" value=<?php echo $num; ?>></td>
        </tr>
        <tr>
  <td><input type="submit" name="submit" value="7"></td>
  <td><input type="submit" name="submit" value="8"></td>
  <td><input type="submit" name="submit" value="9"></td>
  <td><input type="submit" name="op" value="/"></td>
</tr>

<tr>
  <td><input type="submit" name="submit" value="4"></td>
  <td><input type="submit" name="submit" value="5"></td>
  <td><input type="submit" name="submit" value="6"></td>
  <td><input type="submit" name="op" value="+"></td>
</tr>

<tr>
  <td><input type="submit" name="submit" value="1"></td>
  <td><input type="submit" name="submit" value="2"></td>
  <td><input type="submit" name="submit" value="3"></td>
  <td><input type="submit" name="op" value="-"></td>
</tr>

<tr>
  <td><input type="submit" name="submit" value="0"></td>
  <td><input type="submit" name="submit" value="C"></td>
  <td><input type="submit" name="equals" value="="></td>
  <td><input type="submit" name="op" value="X"></td>
</tr>
</table>
 </form>
 </center>
</body>
</html>