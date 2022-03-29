<?php include 'includes/nav.php' ?>
<?php
if($userid == false){
	header('Location: index.php');
}
?>
<div class="first">
	<div class="first-img">
		<img src="assets/img/curtains-logo.png">
	</div>
	<div class="first-txt">
		<h1 style="color: #353b48;">سیستەمێ ئەلێکترونیێ کۆمپانیا سەردەم</h1>
	    <p>خێرهاتی کارماندێ کۆمپانیێ، ئەڤ سیستەمە تایبەتە ب کار و بارێن کۆمپانیێ، هیڤیدارین ئاگەهدار بە.. !</p>
	</div>
</div>
<div class="info">
	<div class="info-details">
		<div class="info-details-card">
			<center>
			<img src="assets/img/curtains-home.png">
			<h1>ژمارا جورێن پەردا</h1>
			<h2>68</h2>
		    </center>
		</div>
	</div>
	<div class="info-details">
		<div class="info-details-card">
			<center>
			<img src="assets/img/money.png">
			<h1>خەرجیێن رۆژا  <?php echo date("Y/m/d");?></h1>
			<h2>٢٠٠٠٠ هزار</h2>
		    </center>
		</div>
	</div>
	<div class="info-details">
		<div class="info-details-card">
			<img src="assets/img/dept-home.png">
			<h1>کۆی گشتی قەرزان</h1>
			<h2>٤٠٠٠٠ هزار</h2>
		</div>
	</div>
</div>