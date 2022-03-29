<?php include 'includes/config.php' ?>
<?php
if($userid == false){
	header('Location: index.php');
}
?>
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
	<?php
$id_print = sec($_GET['Print-Id']);
$query = mysqli_query($db , "SELECT * FROM `add_curtains` WHERE `id` = '$id_print' ");
while($row = mysqli_fetch_assoc($query)){?>
	<center>
	<div class="print-curtains-data">
				<div class="print-curtains-info-header">
					<div class="print-name-address">
						<label>الاسم: <?php echo sec($row['name']);?></label>
						<label>العنوان:<?php echo sec($row['address']);?></label>
						<label>الهاتف: <?php echo sec($row['phone']);?></label>
					</div>
					<div class="print-add_img">
						<img class="image" src="assets/img/sardamlogoo.png">
					</div>
					<div class="date-print-curtains-header">
						<label>تاريخ الفاتورة:</label><?php echo sec($row['date']);?>
						<label>رقم :</label><?php echo sec($row['id']);?>
					</div>
				</div>
					<hr style="color: black; width: 100%;">
					<div class="print-curtains-info-middle">
						<center><table width="400px">
							<tr>
								<td style="background-color: #7f8c8d;">رقم كود</td>
				                <td style="background-color: #7f8c8d;">عرض</td>
				                <td style="background-color: #7f8c8d;">طول</td>
				                <td style="background-color: #7f8c8d;">عدد</td>
				                <td style="background-color: #7f8c8d;">مجموع متر</td>
				                <td style="background-color: #7f8c8d;">سعر متر</td>
				                <td style="background-color: #7f8c8d;">الأجمالي</td>
							</tr>
							<tr>
								<td><?php echo sec($row['code_number']);?></td>
				                <td><?php echo sec($row['show_mtr']);?></td>
				                <td><?php echo sec($row['length']);?></td>
				                <td><?php echo sec($row['number_mtr']);?></td>
				                <td><?php echo sec($row['all_mtr']);?></td>
				                <td><?php echo sec($row['price_mtr']);?></td>
				                <td><?php echo sec($row['all_price']);?></td>
							</tr>
							<?php
								if($row['code_number_1'] != null && $row['show_mtr_1'] != null
									&& $row['length_1'] != null && $row['number_mtr_1'] != null
									 && $row['all_mtr_1'] != null && $row['price_mtr_1'] != null
									 && $row['all_price_1'] != null){?>
							<tr>
								<td><?php echo sec($row['code_number_1']);?></td>
				                <td><?php echo sec($row['show_mtr_1']);?></td>
				                <td><?php echo sec($row['length_1']);?></td>
				                <td><?php echo sec($row['number_mtr_1']);?></td>
				                <td><?php echo sec($row['all_mtr_1']);?></td>
				                <td><?php echo sec($row['price_mtr_1']);?></td>
				                <td><?php echo sec($row['all_price_1']);?></td>
							</tr>
						    <?php }else{ }?>
							<?php
								if($row['code_number_2'] != null && $row['show_mtr_2'] != null
									&& $row['length_2'] != null && $row['number_mtr_2'] != null
									 && $row['all_mtr_2'] != null && $row['price_mtr_2'] != null
									 && $row['all_price_2'] != null){?>
							<tr>
								<td><?php echo sec($row['code_number_2']);?></td>
				                <td><?php echo sec($row['show_mtr_2']);?></td>
				                <td><?php echo sec($row['length_2']);?></td>
				                <td><?php echo sec($row['number_mtr_2']);?></td>
				                <td><?php echo sec($row['all_mtr_2']);?></td>
				                <td><?php echo sec($row['price_mtr_2']);?></td>
				                <td><?php echo sec($row['all_price_2']);?></td>
							</tr>
						    <?php }else{ }?>
						    <?php
								if($row['code_number_3'] != null && $row['show_mtr_3'] != null
									&& $row['length_3'] != null && $row['number_mtr_3'] != null
									 && $row['all_mtr_3'] != null && $row['price_mtr_3'] != null
									 && $row['all_price_3'] != null){?>
							<tr>
								<td><?php echo sec($row['code_number_3']);?></td>
				                <td><?php echo sec($row['show_mtr_3']);?></td>
				                <td><?php echo sec($row['length_3']);?></td>
				                <td><?php echo sec($row['number_mtr_3']);?></td>
				                <td><?php echo sec($row['all_mtr_3']);?></td>
				                <td><?php echo sec($row['price_mtr_3']);?></td>
				                <td><?php echo sec($row['all_price_3']);?></td>
							</tr>
						    <?php }else{ }?>
						    <?php
								if($row['code_number_4'] != null && $row['show_mtr_4'] != null
									&& $row['length_4'] != null && $row['number_mtr_4'] != null
									 && $row['all_mtr_4'] != null && $row['price_mtr_4'] != null
									 && $row['all_price_4'] != null){?>
							<tr>
								<td><?php echo sec($row['code_number_4']);?></td>
				                <td><?php echo sec($row['show_mtr_4']);?></td>
				                <td><?php echo sec($row['length_4']);?></td>
				                <td><?php echo sec($row['number_mtr_4']);?></td>
				                <td><?php echo sec($row['all_mtr_4']);?></td>
				                <td><?php echo sec($row['price_mtr_4']);?></td>
				                <td><?php echo sec($row['all_price_4']);?></td>
							</tr>
						    <?php }else{ }?>
						    <?php
								if($row['code_number_5'] != null && $row['show_mtr_5'] != null
									&& $row['length_5'] != null && $row['number_mtr_5'] != null
									 && $row['all_mtr_5'] != null && $row['price_mtr_5'] != null
									 && $row['all_price_5'] != null){?>
							<tr>
								<td><?php echo sec($row['code_number_5']);?></td>
				                <td><?php echo sec($row['show_mtr_5']);?></td>
				                <td><?php echo sec($row['length_5']);?></td>
				                <td><?php echo sec($row['number_mtr_5']);?></td>
				                <td><?php echo sec($row['all_mtr_5']);?></td>
				                <td><?php echo sec($row['price_mtr_5']);?></td>
				                <td><?php echo sec($row['all_price_5']);?></td>
							</tr>
						    <?php }else{ }?>
						    <?php
								if($row['code_number_6'] != null && $row['show_mtr_6'] != null
									&& $row['length_6'] != null && $row['number_mtr_6'] != null
									 && $row['all_mtr_6'] != null && $row['price_mtr_6'] != null
									 && $row['all_price_6'] != null){?>
							<tr>
								<td><?php echo sec($row['code_number_6']);?></td>
				                <td><?php echo sec($row['show_mtr_6']);?></td>
				                <td><?php echo sec($row['length_6']);?></td>
				                <td><?php echo sec($row['number_mtr_6']);?></td>
				                <td><?php echo sec($row['all_mtr_6']);?></td>
				                <td><?php echo sec($row['price_mtr_6']);?></td>
				                <td><?php echo sec($row['all_price_6']);?></td>
							</tr>
						    <?php }else{ }?>
						    <?php
								if($row['code_number_7'] != null && $row['show_mtr_7'] != null
									&& $row['length_7'] != null && $row['number_mtr_7'] != null
									 && $row['all_mtr_7'] != null && $row['price_mtr_7'] != null
									 && $row['all_price_7'] != null){?>
							<tr>
								<td><?php echo sec($row['code_number_7']);?></td>
				                <td><?php echo sec($row['show_mtr_7']);?></td>
				                <td><?php echo sec($row['length_7']);?></td>
				                <td><?php echo sec($row['number_mtr_7']);?></td>
				                <td><?php echo sec($row['all_mtr_7']);?></td>
				                <td><?php echo sec($row['price_mtr_7']);?></td>
				                <td><?php echo sec($row['all_price_7']);?></td>
							</tr>
						    <?php }else{ }?>
						    <?php
								if($row['code_number_8'] != null && $row['show_mtr_8'] != null
									&& $row['length_8'] != null && $row['number_mtr_8'] != null
									 && $row['all_mtr_8'] != null && $row['price_mtr_8'] != null
									 && $row['all_price_8'] != null){?>
							<tr>
								<td><?php echo sec($row['code_number_8']);?></td>
				                <td><?php echo sec($row['show_mtr_8']);?></td>
				                <td><?php echo sec($row['length_8']);?></td>
				                <td><?php echo sec($row['number_mtr_8']);?></td>
				                <td><?php echo sec($row['all_mtr_8']);?></td>
				                <td><?php echo sec($row['price_mtr_8']);?></td>
				                <td><?php echo sec($row['all_price_8']);?></td>
							</tr>
						    <?php }else{ }?>
						    <?php
								if($row['code_number_9'] != null && $row['show_mtr_9'] != null
									&& $row['length_9'] != null && $row['number_mtr_9'] != null
									 && $row['all_mtr_9'] != null && $row['price_mtr_9'] != null
									 && $row['all_price_9'] != null){?>
							<tr>
								<td><?php echo sec($row['code_number_9']);?></td>
				                <td><?php echo sec($row['show_mtr_9']);?></td>
				                <td><?php echo sec($row['length_9']);?></td>
				                <td><?php echo sec($row['number_mtr_9']);?></td>
				                <td><?php echo sec($row['all_mtr_9']);?></td>
				                <td><?php echo sec($row['price_mtr_9']);?></td>
				                <td><?php echo sec($row['all_price_9']);?></td>
							</tr>
						    <?php }else{ }?>
						</table></center>
						<div class="all-price-style">
					    	<div class="done-price">
						    	<label>الرصيد السابق:  </label> 
		   		                <label>الرصيد النهائي:  </label>
						    </div>
						    <div class="all-price-data">
						    	<label>المجموع: <?php echo sec($row['all_data_price']);?>$ </label>
						    	<label>نسبة الخصم:  <?php echo sec($row['help_price']);?>$ </label>
						    	<label>مبلغ الفاتورة: <?php echo sec($row['final_price']);?>$ </label>  
						    </div>
						</div>
						<label style="margin: 0 10px; float: right;">ملاحظات : </label>
						<br>
						<textarea cols="23" rows="3" placeholder="<?php echo sec($row['all_note']);?>"></textarea>
				    </div>
				    <center>
				    	<a href="show_curtains.php" id ="myPrntbtn">ڤەگەرێ دەسپێکێ</a>
				    	<input id="myPrntbtn" type="button" value="Print" onclick="window.print();" >
				    </center>
			</div>
		</center>
	<?php }?>
</body>
</html>
