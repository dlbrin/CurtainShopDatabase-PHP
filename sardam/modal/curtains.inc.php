<?php include '../includes/config.php' ?>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
	$address = $_POST['address'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $code_number = $_POST['code_number'];
    $note = $_POST['note'];
    $show = $_POST['show'];
    $length = $_POST['length'];
    $number_mtr = $_POST['number_mtr'];
    $all_mtr = $_POST['all_mtr'];
    $price_mtr = $_POST['price_mtr'];
    $all_price = $_POST['all_price'];

    $code_number_1 = $_POST['code_number_1'];
    $note_1 = $_POST['note_1'];
    $show_1 = $_POST['show_1'];
    $length_1 = $_POST['length_1'];
    $number_mtr_1 = $_POST['number_mtr_1'];
    $all_mtr_1 = $_POST['all_mtr_1'];
    $price_mtr_1 = $_POST['price_mtr_1'];
    $all_price_1 = $_POST['all_price_1'];

    $code_number_2 = $_POST['code_number_2'];
    $note_2 = $_POST['note_2'];
    $show_2 = $_POST['show_2'];
    $length_2 = $_POST['length_2'];
    $number_mtr_2 = $_POST['number_mtr_2'];
    $all_mtr_2 = $_POST['all_mtr_2'];
    $price_mtr_2 = $_POST['price_mtr_2'];
    $all_price_2 = $_POST['all_price_2'];

    $code_number_3 = $_POST['code_number_3'];
    $note_3 = $_POST['note_3'];
    $show_3 = $_POST['show_3'];
    $length_3 = $_POST['length_3'];
    $number_mtr_3 = $_POST['number_mtr_3'];
    $all_mtr_3 = $_POST['all_mtr_3'];
    $price_mtr_3 = $_POST['price_mtr_3'];
    $all_price_3 = $_POST['all_price_3'];

    $code_number_4 = $_POST['code_number_4'];
    $note_4 = $_POST['note_4'];
    $show_4 = $_POST['show_4'];
    $length_4 = $_POST['length_4'];
    $number_mtr_4 = $_POST['number_mtr_4'];
    $all_mtr_4 = $_POST['all_mtr_4'];
    $price_mtr_4 = $_POST['price_mtr_4'];
    $all_price_4 = $_POST['all_price_4'];

    $code_number_5 = $_POST['code_number_5'];
    $note_5 = $_POST['note_5'];
    $show_5 = $_POST['show_5'];
    $length_5 = $_POST['length_5'];
    $number_mtr_5 = $_POST['number_mtr_5'];
    $all_mtr_5 = $_POST['all_mtr_5'];
    $price_mtr_5 = $_POST['price_mtr_5'];
    $all_price_5 = $_POST['all_price_5'];

    $code_number_6 = $_POST['code_number_6'];
    $note_6 = $_POST['note_6'];
    $show_6 = $_POST['show_6'];
    $length_6 = $_POST['length_6'];
    $number_mtr_6 = $_POST['number_mtr_6'];
    $all_mtr_6 = $_POST['all_mtr_6'];
    $price_mtr_6 = $_POST['price_mtr_6'];
    $all_price_6 = $_POST['all_price_6'];

    $code_number_7 = $_POST['code_number_7'];
    $note_7 = $_POST['note_7'];
    $show_7 = $_POST['show_7'];
    $length_7 = $_POST['length_7'];
    $number_mtr_7 = $_POST['number_mtr_7'];
    $all_mtr_7 = $_POST['all_mtr_7'];
    $price_mtr_7 = $_POST['price_mtr_7'];
    $all_price_7 = $_POST['all_price_7'];

    $code_number_8 = $_POST['code_number_8'];
    $note_8 = $_POST['note_8'];
    $show_8 = $_POST['show_8'];
    $length_8 = $_POST['length_8'];
    $number_mtr_8 = $_POST['number_mtr_8'];
    $all_mtr_8 = $_POST['all_mtr_8'];
    $price_mtr_8 = $_POST['price_mtr_8'];
    $all_price_8 = $_POST['all_price_8'];

    $code_number_9 = $_POST['code_number_9'];
    $note_9 = $_POST['note_9'];
    $show_9 = $_POST['show_9'];
    $length_9 = $_POST['length_9'];
    $number_mtr_9 = $_POST['number_mtr_9'];
    $all_mtr_9 = $_POST['all_mtr_9'];
    $price_mtr_9 = $_POST['price_mtr_9'];
    $all_price_9 = $_POST['all_price_9'];

    $all_data_price = $_POST['all_data_price'];
    $help_price = $_POST['help_price'];
    $final_price = $_POST['final_price'];
    $all_note = $_POST['all_note'];
    $old_price = $_POST['old_price'];
    $final_old_price = $_POST['final_old_price'];


            $query = mysqli_query($db , "INSERT INTO `add_curtains`(`name` , `address` , `phone` , `date` , `code_number` , `note` ,`show_mtr` , `length` , `number_mtr` , `all_mtr` , `price_mtr` , `all_price` , `code_number_1` , `note_1` , `show_mtr_1` , `length_1` , `number_mtr_1` , `all_mtr_1` , `price_mtr_1` , `all_price_1` , `code_number_2` ,  `note_2` , `show_mtr_2` , `length_2` , `number_mtr_2` , `all_mtr_2` , `price_mtr_2` , `all_price_2` , `code_number_3` , `note_3` , `show_mtr_3` , `length_3` , `number_mtr_3` , `all_mtr_3` , `price_mtr_3` , `all_price_3` , `code_number_4` , `note_4` , `show_mtr_4` , `length_4` , `number_mtr_4` , `all_mtr_4` , `price_mtr_4` , `all_price_4` , `code_number_5` , `note_5` , `show_mtr_5` , `length_5` , `number_mtr_5` , `all_mtr_5` , `price_mtr_5` , `all_price_5`  , `code_number_6` , `note_6` , `show_mtr_6` , `length_6` , `number_mtr_6` , `all_mtr_6` , `price_mtr_6` , `all_price_6` , `code_number_7` , `note_7` , `show_mtr_7` , `length_7` , `number_mtr_7` , `all_mtr_7` , `price_mtr_7` , `all_price_7` , `code_number_8` , `note_8` , `show_mtr_8` , `length_8` , `number_mtr_8` , `all_mtr_8` , `price_mtr_8` , `all_price_8` , `code_number_9` , `note_9` , `show_mtr_9` , `length_9` , `number_mtr_9` , `all_mtr_9` , `price_mtr_9` , `all_price_9` , `all_data_price` , `help_price` , `final_price` , `all_note` , `old_price` , `final_old_price`) VALUES ('$name' , '$address' , '$phone' , '$date' , '$code_number' , '$note' , '$show' , '$length' , '$number_mtr' , '$all_mtr' , '$price_mtr' , ' $all_price' , '$code_number_1' , '$note_1' , '$show_1' , '$length_1' , '$number_mtr_1' , '$all_mtr_1' , '$price_mtr_1' , ' $all_price_1' , '$code_number_2' , '$note_2' , '$show_2' , '$length_2' , '$number_mtr_2' , '$all_mtr_2' , '$price_mtr_2' , ' $all_price_2' , '$code_number_3' , '$note_3' , '$show_3' , '$length_3' , '$number_mtr_3' , '$all_mtr_3' , '$price_mtr_3' , ' $all_price_3' , '$code_number_4' , '$note_4' , '$show_4' , '$length_4' , '$number_mtr_4' , '$all_mtr_4' , '$price_mtr_4' , ' $all_price_4' , '$code_number_5' , '$note_5' , '$show_5' , '$length_5' , '$number_mtr_5' , '$all_mtr_5' , '$price_mtr_5' , ' $all_price_5' , '$code_number_6' , '$note_6' , '$show_6' , '$length_6' , '$number_mtr_6' , '$all_mtr_6' , '$price_mtr_6' , ' $all_price_6'  , '$code_number_7' , '$note_7' , '$show_7' , '$length_7' , '$number_mtr_7' , '$all_mtr_7' , '$price_mtr_7' , ' $all_price_7' , '$code_number_8' , '$note_8' , '$show_8' , '$length_8' , '$number_mtr_8' , '$all_mtr_8' , '$price_mtr_8' , ' $all_price_8' , '$code_number_9' , '$note_9' , '$show_9' , '$length_9' , '$number_mtr_9' , '$all_mtr_9' , '$price_mtr_9' , ' $all_price_9' , '$all_data_price' , '$help_price' , '$final_price' , '$all_note' , '$old_price' , '$final_old_price')");
    	if($query){
    		header('Location: ../add_curtains.php?drsta');
    	}
    }

//edit data
if(isset($_POST['edit'])){
    $done = mysqli_real_escape_string($db, $_POST['done']);
    $id_edit = mysqli_real_escape_string($db, $_POST['id']);

    $query = mysqli_query($db , "UPDATE `add_curtains` SET `done`='$done' WHERE `id` = '$id_edit'");
              if($query){
            header('Location: ../show_curtains.php?update');
          }
        }




//delete data
if(isset($_GET['delete'])){
    $id = htmlspecialchars($_GET['delete']);
    $query = mysqli_query($db , "DELETE FROM `add_curtains` WHERE `id` = '$id'");
    if($query){
        header('Location: ../show_curtains.php?delete');
    }
}


//edit data done page
if(isset($_POST['edit_done'])){
    $edit_old_price = mysqli_real_escape_string($db, $_POST['edit_old_price']);
    $edit_final_old_price = mysqli_real_escape_string($db, $_POST['edit_final_old_price']);
    $id_edit_1 = mysqli_real_escape_string($db, $_POST['id']);

    $query = mysqli_query($db , "UPDATE `add_curtains` SET `old_price`='$edit_old_price' , `final_old_price`='$edit_final_old_price' WHERE `id` = '$id_edit_1'");
              if($query){
            header('Location: ../done_show_curtains.php?update');
          }
        }
?>


