<?php include 'includes/nav.php' ?>
<?php
if($userid == false){
	header('Location: index.php');
}
?>
<div class="first">
	<div class="first-img">
		<img src="assets/img/gogah.jpg">
	</div>
	<div class="first-txt">
		<h1>گۆگەها سەردەم کومپانی</h1>
	    <p>تایباتە ب گۆگەها کومپانیا سەردەم, هیڤیدارین بێ هۆکار دەسکاریێ نەکە.</p>
	</div>
</div>

<!-- INSERT DATA -->
<div class="table-data">
	<table width="90%">
		<tr>
			<td style="background-color: #dfe6e9">کود</td>
			<td style="background-color: #a29bfe">پارە</td>
			<td style="background-color: #74b9ff">متر</td>
			<td style="background-color: #81ecec">رۆژ</td>
			<td style="background-color: #55efc4">ناڤێ کۆمپانیێ</td>
			<td style="background-color: #fab1a0">تێبینی</td>
			<td style="background-color: #fdcb6e">داخلکرن</td>
		</tr>
		<tr>
			<form method="POST" action="modal/gogah.inc.php">
				<td><input type="text" name="code"></td>
			    <td><input type="text" name="money"></td>
			    <td><input type="number" name="mtr"></td>
			    <td><input type="date" name="day"></td>
			    <td><input type="text" name="company_name"></td>
			    <td><input type="text" name="note"></td>
			    <td><button name="submit">داخلکرن</button></td>
			</form>
		</tr>
	</table>
</div>

<!-- ALL DATA TITLE -->
<center>
	<div class="cost-title">
	    <h1>فۆرما گۆگەهێ</h1>
	    <div class="cost-title-input">
	    	<form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>">
		        <input type="text" name="search" placeholder="بگەرێ بۆ کۆمپانی یان کۆد یان رۆژ">
	            <button>بگەرێ</button>
	        </form>
	    </div>
    </div>
</center>


<!--PHP Search -->
<?php
if(isset($_GET['search'])){
	$data = ($_GET['search']);
	$sql = mysqli_query($db , "SELECT * FROM `gogah` WHERE `company_name` LIKE '%$data%' OR `code` LIKE '%$data%' OR `day` LIKE '%$data%'");
	if(mysqli_num_rows($sql) > 0){ $sum = 0?>
	<div class="table-data">
		<table width="90%">
			<tr>
				<td style="background-color: #40407a">ژمارە</td>
				<td style="background-color: #706fd3">کود</td>
			    <td style="background-color: #f7f1e3">پارە</td>
			    <td style="background-color: #34ace0">متر</td>
			    <td style="background-color: #33d9b2">رۆژ</td>
			    <td style="background-color: #ff793f">ناڤێ کۆمپانیێ</td>
			    <td style="background-color: #cc8e35">تێبینی</td>
			    <td style="background-color: #b33939">دەستکاری</td>
			</tr>
			<?php while($row = mysqli_fetch_assoc($sql)){ ;?>
				<tr>
			        <td><?php echo sec($row['id']);?></td>
			        <td><?php echo sec($row['code']);?></td>
			        <td><?php echo sec($row['money']);?> دۆلار</td>
			        <td><?php echo sec($row['mtr']);?></td>
			        <td><?php echo sec($row['day']);?></td>
			        <td><?php echo sec($row['company_name']);?></td>
			        <td><?php echo sec($row['note']);?></td>
			        <td><button type="delete" style="background-color: red;"><a style="color: white;" href="modal/gogah.inc.php?delete=<?php echo $row['id'];?>">ژێبرن   </a></button></td>
		        </tr>
		        <?php $sum += sec($row['money']); }?>
		</table>
		<h2>کۆی گشتی: <span><?php echo $sum; ?> دۆلار</span></h2>
	</div>
	<?php 
}else{ ?>
	<center>
		<h4 style="font-weight: normal; direction: rtl; margin-top: 10px;">ببورە هیچ ناڤ ب ڤی ناڤی نینە...!</h4>
		<a href="gogah.php"><i class="fas fa-arrow-left"></i>&nbspڤەگەرێ</a>
		<br>
		<img src="assets/img/empty-state.gif" style="width: 60%;">
	</center>
<?php }
exit();
}
?>

<!-- ALL DATA -->
<div class="table-data">
	<table width="90%">
		<tr>
			<td style="background-color: #40407a">ژمارە</td>
		    <td style="background-color: #706fd3">کود</td>
			<td style="background-color: #f7f1e3">پارە</td>
			<td style="background-color: #34ace0">متر</td>
			<td style="background-color: #33d9b2">رۆژ</td>
			<td style="background-color: #ff793f">ناڤێ کۆمپانیێ</td>
			<td style="background-color: #cc8e35">تێبینی</td>
			<td style="background-color: #b33939">دەستکاری</td>
		</tr>
		<?php
		$sum = 0;
		$query = mysqli_query($db , "SELECT * FROM `gogah` ORDER BY `day` DESC");
		while($row = mysqli_fetch_assoc($query)){?>
		<tr>
			<td><?php echo sec($row['id']);?></td>
			<td><?php echo sec($row['code']);?></td>
			<td><?php echo sec($row['money']);?> دۆلار</td>
			<td><?php echo sec($row['mtr']);?></td>
			<td><?php echo sec($row['day']);?></td>
			<td><?php echo sec($row['company_name']);?></td>
			<td><?php echo sec($row['note']);?></td>
			<td><button type="delete" style="background-color: red;"><a style="color: white;" href="modal/gogah.inc.php?delete=<?php echo $row['id'];?>">ژێبرن   </a></button></td>
		</tr>
		<?php $sum += sec($row['money']); }?>
	</table>
	<h2>کۆی گشتی: <span><?php echo $sum; ?> دۆلار</span></h2>
</div>