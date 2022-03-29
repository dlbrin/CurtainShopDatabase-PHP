<?php include 'includes/nav.php' ?>
<?php
if($userid == false){
	header('Location: index.php');
}
if($hamdi_id == false){
	header('Location: hamdi.php');
}
?>
<div class="first">
	<div class="first-img">
		<img src="assets/img/ayad.png">
	</div>
	<div class="first-txt">
		<h1>داتایێن کارمەند حەمدی</h1>
	    <p>ئەڤ بەشە تایبەتە ب داتایێن حەمدی بۆ هیچ کارمەندێن دی نیە داخل بیت.</p>
	</div>
</div>

<!-- INSERT DATA -->
<div class="table-data">
	<table width="90%">
		<tr>
			<td style="background-color: #F79F1F">پارە</td>
			<td style="background-color: #9b59b6">رۆژ</td>
			<td style="background-color: #16a085">تێبینی</td>
			<td style="background-color: #95a5a6">داخلکرن</td>
		</tr>
		<tr>
			<form method="POST" action="modal/user.inc.php">
			    <td><input type="text" name="money"></td>
			    <td><input type="date" name="day"></td>
			    <td><input type="text" name="note"></td>
			    <td><button name="insert">داخلکرن</button></td>
			</form>
		</tr>
	</table>
</div>

<!-- ALL DATA TITLE -->
<center>
	<div class="cost-title">
	    <h1>فۆرما حەمدی</h1>
    </div>
</center>
<!-- ALL DATA -->
<div class="table-data">
	<table width="90%">
		<tr>
			<td style="background-color: #ED4C67">ژمارە</td>
			<td style="background-color: #FDA7DF">پارە</td>
			<td style="background-color: #12CBC4">رۆژ</td>
			<td style="background-color: #C4E538">تێبینی</td>
			<td style="background-color: #C4E538">دەستکاری</td>
		</tr>
		<?php
		$sum = 0;
		$query = mysqli_query($db , "SELECT * FROM `hamdi` ORDER BY `id` ASC");
		while($row = mysqli_fetch_assoc($query)){?>
		<tr>
			<td><?php echo sec($row['id']);?></td>
			<td><?php echo sec($row['money']);?> دۆلار</td>
			<td><?php echo sec($row['day']);?></td>
			<td><?php echo sec($row['note']);?></td>
			<td><button style="background-color: red;"><a style="color: white;" href="modal/user.inc.php?delete_hamdi=<?php echo $row['id'];?>">ژێبرن   </a></button></td>
		</tr>
		<?php $sum += sec($row['money']); }?>
	</table>
	<h2>کۆی گشتی: <span><?php echo $sum; ?> دۆلار</span></h2>
</div>

<!-- MONTH DATA -->
<div class="table-data">
	<div class="cost-title">
		<h1>داتایێن هەیڤان</h1>
	</div>
	<div class="month-data-cards">
		<?php
		$date = date("Y/m/d");
		$query = mysqli_query($db , "SELECT MONTHNAME(day) AS mname, sum(money) AS total FROM `hamdi` GROUP BY MONTHNAME(day)");
		while($row = mysqli_fetch_assoc($query)){ ?>
			<div class="month-data">
				<h3><?php echo sec($row['mname']); ?></h3>
				<h3><?php echo sec($row['total']); ?> دۆلار</h3>
			</div>
		<?php } ?>
	</div>
</div>