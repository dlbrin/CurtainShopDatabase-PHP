<?php include 'config.php' ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-align-right" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>
        <img src="assets/img/user.png">
        <?php
        $query = mysqli_query($db , "SELECT * FROM `admin` WHERE `id` = '$userid'");
        while($row = mysqli_fetch_assoc($query)){?>
        <h2><?php echo sec($row['email']); ?></h2>
        <?php } ?>
      </header>
      <a href="home.php" class="active">
        <i class="fas fa-home"></i>
        <span>سەرەکی</span>
      </a>
      <a href="add_curtains.php">
       <i class="fas fa-file-invoice"></i>
        <span> زیدەکرنا پەردا  </span>
      </a>
      <a href="show_curtains.php">
       <i class="fab fa-wpforms"></i>
        <span>بینینا پەردا  </span>
      </a>
      <a href="cost.php">
        <i class="fas fa-money-bill-wave"></i>
        <span>خەرجی</span>
      </a>
      <a href="dept.php">
        <i class="fas fa-hand-holding-usd"></i>
        <span>قەرز</span>
      </a>
      <a href="gogah.php">
        <i class="fas fa-hotel"></i>
        <span>گۆگە</span>
      </a>
      <a href="ayad.php">
        <i class="fas fa-person-booth"></i>
        <span>ئەیاد</span>
      </a>
      <a href="hamdi.php">
        <i class="fas fa-user-tie"></i>
        <span>حەمدی</span>
      </a>
      <a href="?logout" style="color: red;">
        <i class="fas fa-sign-out-alt"></i>
        <span>چونا دەر</span>
      </a>
    </div>
 <section></section>
 <p align="right"><img class="image" src="assets/img/sardamlogoo.png"></p>
</body>
</html>