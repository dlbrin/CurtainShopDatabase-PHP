<?php include '../includes/config.php' ?>
<!-- INSERT AYAD -->
<?php
if(isset($_POST['submit'])){
	$money = mysqli_real_escape_string($db, $_POST['money']);
    $day = mysqli_real_escape_string($db, $_POST['day']);
    $note = mysqli_real_escape_string($db, $_POST['note']);

    if(empty($money) || empty($day)){
      header('Location: ../ayad_index.php?error');
    }else{
    	$query = mysqli_query($db , "INSERT INTO `ayad`(`money`, `day`, `note`) VALUES ('$money', '$day', '$note')");

    	if($query){
    		header('Location: ../ayad_index.php?drsta');
    	}
    }
}

?>

<!-- INSERT HAMDI -->
<?php
if(isset($_POST['insert'])){
    $money = mysqli_real_escape_string($db, $_POST['money']);
    $day = mysqli_real_escape_string($db, $_POST['day']);
    $note = mysqli_real_escape_string($db, $_POST['note']);

    if(empty($money) || empty($day)){
      header('Location: ../hamdi_index.php?error');
    }else{
        $query = mysqli_query($db , "INSERT INTO `hamdi`(`money`, `day`, `note`) VALUES ('$money', '$day', '$note')");

        if($query){
            header('Location: ../hamdi_index.php?drsta');
        }
    }
}


//DELETE HAMDI
if(isset($_GET['delete_hamdi'])){
    $id = htmlspecialchars($_GET['delete_hamdi']);
    $query = mysqli_query($db , "DELETE FROM `hamdi` WHERE `id` = '$id'");
    if($query){
        header('Location: ../hamdi_index.php?delete');
    }
}


//DELETE AYAD
if(isset($_GET['delete_ayad'])){
    $id = htmlspecialchars($_GET['delete_ayad']);
    $query = mysqli_query($db , "DELETE FROM `ayad` WHERE `id` = '$id'");
    if($query){
        header('Location: ../ayad_index.php?delete');
    }
}
?>