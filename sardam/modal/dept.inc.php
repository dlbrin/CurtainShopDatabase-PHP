<?php include '../includes/config.php' ?>

<?php
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($db, $_POST['name']);
	$money = mysqli_real_escape_string($db, $_POST['money']);
    $date = mysqli_real_escape_string($db, $_POST['date']);
    $form_code = mysqli_real_escape_string($db, $_POST['form_code']);
    $confirm = mysqli_real_escape_string($db, $_POST['confirm']);
    $confirm_date = mysqli_real_escape_string($db, $_POST['confirm_date']);
    $note = mysqli_real_escape_string($db, $_POST['note']);

    if(empty($name) || empty($money) || empty($date)){
      header('Location: ../cost.php?error');
    }else{
    	$query = mysqli_query($db , "INSERT INTO `dept`(`name`, `money`, `date` , `form_code` , `confirm`, `confirm_date` , `note`) VALUES ('$name', '$money', '$date' , '$form_code', '$confirm', '$confirm_date' , '$note')");

    	if($query){
    		header('Location: ../dept.php?drsta');
    	}
    }
}



//delete data
if(isset($_GET['delete'])){
    $id = htmlspecialchars($_GET['delete']);
    $query = mysqli_query($db , "DELETE FROM `dept` WHERE `id` = '$id'");
    if($query){
        header('Location: ../dept.php?delete');
    }
}

//edit data
if(isset($_POST['edit'])){
    $name_edit = mysqli_real_escape_string($db, $_POST['name_edit']);
    $money_edit = mysqli_real_escape_string($db, $_POST['money_edit']);
    $date_edit = mysqli_real_escape_string($db, $_POST['date_edit']);
    $form_code_edit = mysqli_real_escape_string($db, $_POST['form_code_edit']);
    $confirm_edit = mysqli_real_escape_string($db, $_POST['confirm_edit']);
    $confirm_date_edit = mysqli_real_escape_string($db, $_POST['confirm_date_edit']);
    $note_edit = mysqli_real_escape_string($db, $_POST['note_edit']);
    $id_edit = mysqli_real_escape_string($db, $_POST['id']);

    $query = mysqli_query($db , "UPDATE `dept` SET `name`='$name_edit' , `money`='$money_edit' , `date`='$date_edit'  , `form_code`='$form_code_edit' , `confirm`='$confirm_edit' , `confirm_date`='$confirm_date_edit' , `note`='$note_edit' WHERE `id` = '$id_edit'");
              if($query){
            header('Location: ../dept.php?update');
          }
        }
?>