<?php include 'includes/config.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Sardam Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div class="container">
        <center>
            <div class="details">
                <img src="assets/img/sardamlogoo.png">
                <form method="POST" action="modal/login.inc.php">
                    <input type="text" name="email" placeholder="ئیمێل">
                    <br>
                    <input type="password" name="password" placeholder="ژمارا نهێنی">
                    <br>
                    <button name="submit">چونا ژوور</button>
                </form>
            </div>
        </center>
    </div>
</body>
</html>