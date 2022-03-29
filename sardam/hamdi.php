<?php include 'includes/nav.php' ?>
<?php
if($userid == false){
	header('Location: index.php');
}
?>
<div class="first">
	<div class="first-img">
		<img src="assets/img/hamdi.png">
	</div>
	<div class="first-txt">
		<h1>داتایێن کارمەند حەمدی</h1>
	    <p>ئەڤ بەشە تایبەتە ب داتایێن حەمدی بۆ هیچ کارمەندێن دی نیە داخل بیت.</p>
	</div>
</div>

<div class="login-form">
    <center>
        <h1>*چونا ژوور تایبەتە ب حەمدی</h1>
        <form method="POST" action="modal/login.inc.php">
            <input type="text" name="email" placeholder="ئیمێل">
            <br>
            <input type="password" name="password" placeholder="ژمارا نهێنی">
            <br>
            <button name="hamdi_login">چونا ژوور</button>
        </form>
    </center>
</div>
