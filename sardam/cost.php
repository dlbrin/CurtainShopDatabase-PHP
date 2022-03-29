<?php include 'includes/nav.php' ?>
<?php
if($userid == false){
	header('Location: index.php');
}
?>
<div class="first">
	<div class="first-img">
		<img src="assets/img/cost.png">
	</div>
	<div class="first-txt">
		<h1>خەرجیێن سەردەم کومپانی</h1>
	    <p>تایباتە ب خەرجێن کومپانیا سەردەم, هیڤیدارین بێ هۆکار دەسکاریێ نەکە.</p>
	</div>
</div>

<!-- INSERT DATA -->
<div class="table-data">
	<table width="90%">
		<tr>
			<td style="background-color: #34495e">جورێ خەرجیێ</td>
			<td style="background-color: #9b59b6">پارێ خەرجیێ</td>
			<td style="background-color: #2980b9">ناڤێ کەسی</td>
			<td style="background-color: #27ae60">رۆژ</td>
			<td style="background-color: #16a085">تێبینی</td>
			<td style="background-color: #95a5a6">داخلکرن</td>
		</tr>
		<tr>
			<form method="POST" action="modal/cost.inc.php">
				<td><input type="text" name="type"></td>
			    <td><input type="text" name="money"></td>
			    <td><select name="name">
				    <option>حەمدی</option>
				    <option>ئەیاد</option>
			    </select></td>
			    <td><input type="date" name="day"></td>
			    <td><input type="text" name="note"></td>
			    <td><button name="submit">داخلکرن</button></td>
			</form>
		</tr>
	</table>
</div>


<!-- TODAY DATA -->
<div class="table-data">
	<div class="cost-title">
		<h1>فۆرما خەرجیێن ئەڤرۆ</h1>
	</div>
	<table width="90%">
		<tr>
			<td style="background-color: #353b48">ژمارە</td>
			<td style="background-color: #273c75">جورێ خەرجیێ</td>
			<td style="background-color: #7f8fa6">پارێ خەرجیێ</td>
			<td style="background-color: #dcdde1">ناڤێ کەسی</td>
			<td style="background-color: #c23616">رۆژ</td>
			<td style="background-color: #fbc531">تێبینی</td>
		</tr>
		<?php
		$sum = 0;
		$date = date("Y/m/d");
		echo $date;
		$query = mysqli_query($db , "SELECT * FROM `cost` WHERE `day` = '$date '");
		while($row = mysqli_fetch_assoc($query)){?>
		<tr>
			<td><?php echo sec($row['id']);?></td>
			<td><?php echo sec($row['type']);?></td>
			<td><?php echo sec($row['money']);?> دۆلار</td>
			<td><?php echo sec($row['name']);?></td>
			<td><?php echo sec($row['day']);?></td>
			<td><?php echo sec($row['note']);?></td>
		</tr>
	    <?php $sum += sec($row['money']); }?>
	</table>
	<h2>کۆی گشتی: <span><?php echo $sum; ?> دۆلار</span></h2>
</div>


<!-- MONTH DATA -->
<div class="table-data">
	<div class="cost-title">
		<h1>فۆرما خەرجیێن هەیڤێ</h1>
	</div>
	<div class="month-data-cards">
		<?php
		$date = date("Y/m/d");
		$query = mysqli_query($db , "SELECT MONTHNAME(day) AS mname, sum(money) AS total FROM `cost` GROUP BY MONTHNAME(day)");
		while($row = mysqli_fetch_assoc($query)){ ?>
			<div class="month-data">
				<h3><?php echo sec($row['mname']); ?></h3>
				<h3><?php echo sec($row['total']); ?> دۆلار</h3>
			</div>
		<?php } ?>
	</div>
</div>

<!-- ALL DATA TITLE -->
<center>
	<div class="cost-title">
	    <h1>فۆرما خەرجیان</h1>
	    <div class="cost-title-input">
	    	<form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>">
		        <input type="text" name="search" placeholder="بگەرێ بۆ ناڤ یان رۆژ">
	            <button>بگەرێ</button>
	        </form>
	    </div>
    </div>
</center>


<!--PHP Search -->
<?php
if(isset($_GET['search'])){
	$data = ($_GET['search']);
	$sql = mysqli_query($db , "SELECT * FROM `cost` WHERE `name` LIKE '%$data%' OR `day` LIKE '%$data%'");
	if(mysqli_num_rows($sql) > 0){ $sum = 0?>
	<div class="table-data">
		<table width="90%">
			<tr>
				<td style="background-color: #ED4C67">ژمارە</td>
			    <td style="background-color: #FDA7DF">جورێ خەرجیێ</td>
			    <td style="background-color: #12CBC4">پارێ خەرجیێ</td>
			    <td style="background-color: #C4E538">ناڤێ کەسی</td>
			    <td style="background-color: #FFC312">رۆژ</td>
			    <td style="background-color: #EA2027">تێبینی</td>
			</tr>
			<?php while($row = mysqli_fetch_assoc($sql)){ ;?>
				<tr>
			        <td><?php echo sec($row['id']);?></td>
			        <td><?php echo sec($row['type']);?></td>
			        <td><?php echo sec($row['money']);?> دۆلار</td>
			        <td><?php echo sec($row['name']);?></td>
			        <td><?php echo sec($row['day']);?></td>
			        <td><?php echo sec($row['note']);?></td>
		        </tr>
		        <?php $sum += sec($row['money']); }?>
		</table>
		<h2>کۆی گشتی: <span><?php echo $sum; ?> هزار</span></h2>
	</div>
	<?php 
}else{ ?>
	<center>
		<h4 style="font-weight: normal; direction: rtl; margin-top: 10px;">ببورە هیچ ناڤ ب ڤی ناڤی نینە...!</h4>
		<a href="dept.php"><i class="fas fa-arrow-left"></i>&nbspڤەگەرێ</a>
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
			<td style="background-color: #ED4C67">ژمارە</td>
			<td style="background-color: #FDA7DF">جورێ خەرجیێ</td>
			<td style="background-color: #12CBC4">پارێ خەرجیێ</td>
			<td style="background-color: #C4E538">ناڤێ کەسی</td>
			<td style="background-color: #FFC312">رۆژ</td>
			<td style="background-color: #EA2027">تێبینی</td>
		</tr>
		<?php
		$sum = 0;
		$date = date("Y/m/d");
		$query = mysqli_query($db , "SELECT * FROM `cost` ORDER BY `day` DESC");
		while($row = mysqli_fetch_assoc($query)){?>
		<tr>
			<td><?php echo sec($row['id']);?></td>
			<td><?php echo sec($row['type']);?></td>
			<td><?php echo sec($row['money']);?> دۆلار</td>
			<td><?php echo sec($row['name']);?></td>
			<td><?php echo sec($row['day']);?></td>
			<td><?php echo sec($row['note']);?></td>
		</tr>
		<?php $sum += sec($row['money']); }?>
	</table>
	<h2>کۆی گشتی: <span><?php echo $sum; ?> دۆلار</span></h2>
</div>

