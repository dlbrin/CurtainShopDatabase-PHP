<?php include '../includes/config.php' ?>

<?php
if(isset($_POST['submit'])){
    $type = mysqli_real_escape_string($db, $_POST['type']);
	$money = mysqli_real_escape_string($db, $_POST['money']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $day = mysqli_real_escape_string($db, $_POST['day']);
    $note = mysqli_real_escape_string($db, $_POST['note']);

    if(empty($type) || empty($money) || empty($name) || empty($day)){
      header('Location: ../cost.php?error');
    }else{
    	$query = mysqli_query($db , "INSERT INTO `cost`(`type`, `money`, `name`, `day`, `note`) VALUES ('$type', '$money', '$name', '$day', '$note')");

    	if($query){
    		header('Location: ../cost.php?drsta');
    	}
    }
}

?>



