<?php include '../includes/config.php' ?>

<?php
if(isset($_POST['submit'])){
    $code = mysqli_real_escape_string($db, $_POST['code']);
	$money = mysqli_real_escape_string($db, $_POST['money']);
    $mtr = mysqli_real_escape_string($db, $_POST['mtr']);
    $day = mysqli_real_escape_string($db, $_POST['day']);
    $company_name = mysqli_real_escape_string($db, $_POST['company_name']);
    $note = mysqli_real_escape_string($db, $_POST['note']);

    if(empty($code) || empty($money) || empty($mtr)){
      header('Location: ../gogah.php?error');
    }else{
    	$query = mysqli_query($db , "INSERT INTO `gogah`(`code`, `money`, `mtr`, `day`, `company_name` , `note`) VALUES ('$code', '$money', '$mtr', '$day', '$company_name' , '$note')");

    	if($query){
    		header('Location: ../gogah.php?drsta');
    	}
    }
}

//delete data
if(isset($_GET['delete'])){
    $id = htmlspecialchars($_GET['delete']);
    $query = mysqli_query($db , "DELETE FROM `gogah` WHERE `id` = '$id'");
    if($query){
        header('Location: ../gogah.php?delete');
    }
}

?>