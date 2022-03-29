<?php include 'includes/nav.php' ?>
<?php
if($userid == false){
	header('Location: index.php');
}
?>

<div class="first">
	<div class="first-img">
		<img src="assets/img/complete.jpg">
	</div>
	<div class="first-txt">
		<h1>بەشێ بینینا فۆرمێن دۆماهیک هاتین </h1>
	    <p>ئەڤ بەشە تایبەتە ب بینینا فورمێن پەردا، هیڤیدارین ئاگەهداربەو دەستکاریێ نەکە.</p>
	    <center><button><a href="show_curtains.php">
	    بینینا فۆرمێن دۆماهیک نە هاتین</a></button></center>
	</div>
</div>
<div class="show-curtains">
	<?php
    $query = mysqli_query($db , "SELECT * FROM `add_curtains` WHERE `done` = 'done' ORDER BY `id` DESC");
    while($row = mysqli_fetch_assoc($query)){?>
		<div class="show-curtains-data">
			<div class="show-curtains-info">
				<div class="show-curtains-info-header">
					<div class="name-address">
						<label>الاسم: <?php echo sec($row['name']);?></label>
						<label>العنوان:: <?php echo sec($row['address']);?></label>
						<label>الهاتف::: <?php echo sec($row['phone']);?></label>
					</div>
					<div class="add_img">
						<img class="image" src="assets/img/sardamlogoo.png">
					</div>
					<div class="date-show-curtains-header">
						<label>تاريخ الفاتورة:: </label><?php echo sec($row['date']);?>
						<label>رقم : </label><?php echo sec($row['id']);?>
					</div>
				</div>
					<hr>
					<div class="show-curtains-info-middle">
						<center><table>
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
						    	<label>الرصيد السابق:  <?php echo sec($row['old_price']);?>$</label> 
		   		                <label>الرصيد النهائي:  <?php echo sec($row['final_old_price']);?>$</label>
						    </div>
						    <div class="all-price-data">
						    	<label>المجموع: <?php echo sec($row['all_data_price']);?>$ </label>
						    	<label>نسبة الخصم:  <?php echo sec($row['help_price']);?>$ </label>
						    	<label>مبلغ الفاتورة: <?php echo sec($row['final_price']);?>$ </label>  
						    </div>
						</div>
						<label style="margin: 0 10px;">ملاحظات : </label>
						<br>
						<textarea cols="23" rows="3" placeholder="<?php echo sec($row['all_note']);?>"></textarea>
				    </div>
				    <center>
				    	<button><a href="print_curtains.php?Print-Id=<?php echo sec($row['id']);?>">پرێنت</a></button>
				    	<button data-bs-toggle="modal" data-bs-target="#edit<?php echo $row['id'];?>">دەستکاری</button>
				    </center>
			</div>
		</div>
	<?php } ?>
</div>

<!-- MODAL EDIT -->
<?php 
$query = mysqli_query($db , "SELECT * FROM `add_curtains` WHERE `done` = 'done' ORDER BY `id` DESC");
while($row = mysqli_fetch_assoc($query)){?>
	<div class="modal fade" id="edit<?php echo $row['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
      	            <center>
      	                <form method="POST" action="modal/curtains.inc.php">
      	                    <input type="text" name="id" value="<?php echo $row['id'];?>" hidden>
      	                    <label>الرصيد السابق:  </label>
      	                    <input type="text" name="edit_old_price" value="<?php echo $row['old_price'];?>">
      	                    <br>
      	                    <label>الرصيد النهائي:  </label>
      	                    <input type="text" name="edit_final_old_price" value="<?php echo $row['final_old_price'];?>">
      		                <br>
      		                <br>
      	                    <button type="button" style="background-color: red;" class="btn btn-secondary btn-lg mt-2 w-25" data-bs-dismiss="modal">بگرە</button>
      	                    <button name="edit_done" class="btn btn-primary btn-lg mt-2 w-25">بگۆهرە</button>
                        </form>
      	            </center>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
