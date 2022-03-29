<?php include 'includes/nav.php' ?>
<?php
if($userid == false){
	header('Location: index.php');
}
?>
<!-- MODAL EDIT -->
<?php 
$query = mysqli_query($db , "SELECT * FROM `dept` ORDER BY `date` DESC");
while($row = mysqli_fetch_assoc($query)){?>
	<div class="modal fade" id="edit<?php echo $row['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
      	            <center>
      	                <form method="POST" action="modal/dept.inc.php">
      	                    <input type="text" name="id" value="<?php echo $row['id'];?>" hidden>
      		                <label>ناڤ: </label><input type="text" name="name_edit" value="<?php echo $row['name'];?>">

      	                    <label>پارە: </label><input type="text" name="money_edit" value="<?php echo $row['money'];?>">
      	                    <label>رۆژا برنێ: </label><input type="date" name="date_edit" value="<?php echo $row['date'];?>">
      	                    <label>کۆدا فۆرمێ : </label><input type="text" name="form_code_edit" value="<?php echo $row['form_code'];?>">
      	                    <br>
      	                    <label>واصل: </label><select name="confirm_edit">
      	                    	<option>نەخێر</option>
      	                    	<option>بەلێ</option>
      	                    </select>
      	                    <br>
      	                    <br>
      	                    <label> رۆژا پارە دانێ: </label><input type="date" name="confirm_date_edit" value="<?php echo $row['confirm_date'];?>">
      	                    <label>تێبینی: </label><input type="text" name="note_edit" value="<?php echo $row['note'];?>">
      	                    <button type="button" style="background-color: red;" class="btn btn-secondary btn-lg mt-2 w-25" data-bs-dismiss="modal">بگرە</button>
      	                    <button name="edit" class="btn btn-primary btn-lg mt-2 w-25">بگۆهرە</button>
                        </form>
      	            </center>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- TITLE DATA -->
<div class="first">
	<div class="first-img">
		<img src="assets/img/dept.png">
	</div>
	<div class="first-txt">
		<h1>قەرزێن سەردەم کومپانی</h1>
	    <p>تایباتە ب قەرزێن کومپانیا سەردەم, هیڤیدارین بێ هۆکار دەسکاریێ نەکە.</p>
	</div>
</div>

<!-- INSERT DATA -->
<div class="table-data">
	<table width="90%">
		<tr>
			<td style="background-color: #D6A2E8">ناڤ</td>
			<td style="background-color: #9AECDB">پارە</td>
			<td style="background-color: #FD7272">رۆژا برنێ</td>
			<td style="background-color: #f9ca24">کۆدا فورمێ</td>
			<td style="background-color: #25CCF7">واصل</td>
			<td style="background-color: #B33771">رۆژا پارە دانێ</td>
			<td style="background-color: #EAB543">تێبینی</td>
			<td style="background-color: #1B9CFC">داخلکرن</td>
		</tr>
		<tr>
			<form method="POST" action="modal/dept.inc.php">
				<td><input type="text" name="name"></td>
			    <td><input type="text" name="money"></td>
			    <td><input type="date" name="date"></td>
			    <td><input type="text" name="form_code"></td>
			    <td>
			    	<select name="confirm">
			    		<option>نەخێر</option>
			    		<option>بەلێ</option>
			    	</select>
			    </td>
			    <td><input type="date" name="confirm_date"></td>
			    <td><input type="text" name="note"></td>
			    <td><button name="submit">داخلکرن</button></td>
			</form>
		</tr>
	</table>
</div>


<!-- ALL DATA TITLE -->
<center>
	<div class="cost-title">
	    <h1>فۆرما قەرزان</h1>
	    <div class="cost-title-input">
	    	<form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>">
		        <input type="text" name="search" placeholder="بگەرێ بۆ ناڤ یان رۆژ یان واصل یان کۆد">
	            <button>بگەرێ</button>
	        </form>
	    </div>
    </div>
</center>


<!--PHP Search -->
<?php
if(isset($_GET['search'])){
	$data = ($_GET['search']);
	$sql = mysqli_query($db , "SELECT * FROM `dept` WHERE `name` LIKE '%$data%' OR `date` LIKE '%$data%' OR `confirm` LIKE '%$data%' OR `form_code` LIKE '%$data%'");
	if(mysqli_num_rows($sql) > 0){ $sum = 0?>
	<div class="table-data">
		<table width="90%">
			<tr>
				<td style="background-color: #4b4b4b">ژمارە</td>
			    <td style="background-color: #7d5fff">ناڤ</td>
			    <td style="background-color: #18dcff">پارە</td>
			    <td style="background-color: #7efff5">رۆژا برنێ</td>
			    <td style="background-color: #f9ca24">کۆدا فورمێ</td>
			    <td style="background-color: #32ff7e">واصل</td>
			    <td style="background-color: #ff4d4d">رۆژا پارە دانێ</td>
			    <td style="background-color: #cd84f1">تێبینی</td>
			    <td style="background-color: #fff200">دەستکاری</td>
			</tr>
			<?php while($row = mysqli_fetch_assoc($sql)){ ;?>
				<tr>
			        <td><?php echo sec($row['id']);?></td>
			        <td><?php echo sec($row['name']);?></td>
			        <td><?php echo sec($row['money']);?> دۆلار</td>
			        <td><?php echo sec($row['date']);?></td>
			        <td><?php echo sec($row['form_code']);?></td>
			        <td><?php echo sec($row['confirm']);?></td>
			        <td><?php echo sec($row['confirm_date']);?></td>
			        <td><?php echo sec($row['note']);?></td>
			        <td><button style="background-color: green;" data-bs-toggle="modal" data-bs-target="#edit<?php echo $row['id'];?>">گۆهرین</button>
			        	&nbsp 
				    <button type="delete" style="background-color: red;"><a style="color: white;" href="modal/dept.inc.php?delete=<?php echo $row['id'];?>">ژێبرن   </a></button>
			        </td>
		        </tr>
		        <?php
		        $confirm_yes = sec($row['confirm']);
		        if($confirm_yes == 'نەخێر'){
                    $sum += sec($row['money']);
                }else{

                } }?>
		</table>
		<h2>کۆی گشتی: <span><?php echo $sum; ?> دۆلار</span></h2>
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
			<td style="background-color: #4b4b4b">ژمارە</td>
			<td style="background-color: #7d5fff">ناڤ</td>
			<td style="background-color: #18dcff">پارە</td>
			<td style="background-color: #7efff5">رۆژا برنێ</td>
			<td style="background-color: #f9ca24">کۆدا فورمێ</td>
			<td style="background-color: #32ff7e">واصل</td>
			<td style="background-color: #ff4d4d">رۆژا پارە دانێ</td>
			<td style="background-color: #cd84f1">تێبینی</td>
			<td style="background-color: #fff200">دەستکاری</td>
		</tr>
		<?php
		$sum = 0;
		$date = date("Y/m/d");
		$query = mysqli_query($db , "SELECT * FROM `dept` ORDER BY `date` DESC");
		while($row = mysqli_fetch_assoc($query)){?>
		<tr>
			<td><?php echo sec($row['id']);?></td>
			<td><?php echo sec($row['name']);?></td>
			<td><?php echo sec($row['money']);?> دۆلار</td>
			<td><?php echo sec($row['date']);?></td>
			<td><?php echo sec($row['form_code']);?></td>
			<td><?php echo sec($row['confirm']);?></td>
			<td><?php echo sec($row['confirm_date']);?></td>
			<td><?php echo sec($row['note']);?></td>
			<td><button style="background-color: green;" data-bs-toggle="modal" data-bs-target="#edit<?php echo $row['id'];?>">گۆهرین</button> 
				&nbsp 
				<button type="delete" style="background-color: red;"><a style="color: white;" href="modal/dept.inc.php?delete=<?php echo $row['id'];?>">ژێبرن   </a></button>
			</td>
		</tr>
		<?php
		$confirm_yes = sec($row['confirm']);
		if($confirm_yes == 'نەخێر'){
            $sum += sec($row['money']);
        }else{

        }
		}?>
	</table>
	<h2>کۆی گشتی: <span><?php echo $sum; ?> دۆلار</span></h2>
</div>