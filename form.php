<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  echo $_GET['name'],$_GET['email'];
  ?>
  <form action="form.php">
    <input type="text" name="name">
    <input type="email" name="email" id="">
    <button type="submit" name="submit">Yuborish</button>
  </form>
</body>
</html>