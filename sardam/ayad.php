<?php include 'includes/nav.php' ?>
<?php
if($userid == false){
	header('Location: index.php');
}
?>
<div class="first">
	<div class="first-img">
		<img src="assets/img/ayad.png">
	</div>
	<div class="first-txt">
		<h1>داتایێن کارمەند ئەیادی</h1>
	    <p>ئەڤ بەشە تایبەتە ب داتایێن ئەیادی بۆ هیچ کارمەندێن دی نیە داخل بیت.</p>
	</div>
</div>

<div class="login-form">
    <center>
        <h1>*چونا ژوور تایبەتە ب ئەیادی</h1>
        <form method="POST" action="modal/login.inc.php">
            <input type="text" name="email" placeholder="ئیمێل">
            <br>
            <input type="password" name="password" placeholder="ژمارا نهێنی">
            <br>
            <button name="ayad_login">چونا ژوور</button>
        </form>
    </center>
</div>
