<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="contact.css">
    <title>Contact</title>
  </head>
  <body>
    <div class="container">
      <div class="titles">
        <p class="title">Contact</p>
        <p class="srt">O'zingiz haqingizda quyidagi ma'lumotlarni to'ldiring</p>
      </div>
      <div class="form-div">
        <form action="#">
          <div class="name">
            <input type="text" name="name" placeholder="Ismingizni kiriting" required />
          </div>
          <div class="lastname">
            <input
              type="text"
              name="lastname"
              placeholder="Familyangizni kiriting"
           required
              />
          </div>
          <div class="phone">
            <input type="number" name="phone" placeholder="TEL:901234567" required />
          </div>
          <div class="malumoti">
            <label>Malumotingiz:</label>
            <select name="malumot">
              <option value="oliy">Oliy</option>
              <option value="orta">O'rta</option>
              <option value="o'rta-maxsus">O'rta Maxsus</option>
            </select>
          </div>
          <div class="adres">
            <input type="text" name="manzil" placeholder="Viloyatingiz" />
          </div>
          <div class="button-form">
            <button type="submit" name="s1">Yuborish</button>
          </div>
        </form>
      </div>
    </div>
    <?php 
    if (isset($_GET['s1'])) {
    $con = mysqli_connect("localhost","root","","web9");
    $n = $_GET["name"];
    $l = $_GET["lastname"];
    $t = $_GET["phone"];
    $m = $_GET["malumot"];
    $a = $_GET["manzil"];
    // $sql = "insert into contact(soz,muallif,vaqt) values('{$s}','{$m}','{$v}')";

    $sql = "insert into contact(Ism,Familya,Tel:,Malumoti:,Manzil,vaqt) 
    values('{$n}','{$l}','{$t}','{$m}','{$a}',NOW())";

    $r = mysqli_query($con,$sql);  
    echo $r;
}
    ?>
  </body>
</html>
