<?php include '../includes/config.php' ?>
<!-- index login -->
<?php
if(isset($_POST['submit'])){
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);

if(empty($email) || empty($password)){
    header("Location:../index.php");
}else{
    $password = hash('gost', $password); 
    $query = mysqli_query($db , "SELECT * FROM `admin` WHERE `email` = '$email' AND `password` = '$password'");
    if(mysqli_num_rows($query) == 1){
        while($row = mysqli_fetch_assoc($query)){
            $_SESSION['userid'] = $row['id'];
            header('Location: ../home.php');
        }
        die();
    }else{
        header("Location:../index.php");
    }
}
}
?>


<!-- ayad login -->
<?php
if(isset($_POST['ayad_login'])){
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);

if(empty($email) || empty($password)){
    header("Location:../ayad.php");
}else{
    $password = hash('gost', $password); 
    $query = mysqli_query($db , "SELECT * FROM `admin` WHERE `email` = '$email' AND `password` = '$password'");
    if(mysqli_num_rows($query) == 1){
        while($row = mysqli_fetch_assoc($query)){
            $ayad_email = sec($row['email']);
            if($ayad_email == 'dlaakre26@gmail.com'){
                $_SESSION['userid'] = $row['id'];
                $_SESSION['ayad_id'] = $row['id'];
                header('Location: ../ayad_index.php');
            }else{
                header("Location:../ayad.php");
            }
        }
        die();
    }else{
        header("Location:../ayad.php");
    }
}
}
?>


<!-- hamdi login -->
<?php
if(isset($_POST['hamdi_login'])){
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);

if(empty($email) || empty($password)){
    header("Location:../hamdi.php");
}else{
    $password = hash('gost', $password); 
    $query = mysqli_query($db , "SELECT * FROM `admin` WHERE `email` = '$email' AND `password` = '$password'");
    if(mysqli_num_rows($query) == 1){
        while($row = mysqli_fetch_assoc($query)){
            $ayad_email = sec($row['email']);
            if($ayad_email == 'dlbrenakre@yahoo.com'){
                $_SESSION['userid'] = $row['id'];
                $_SESSION['hamdi_id'] = $row['id'];
                header('Location: ../hamdi_index.php');
            }else{
                header("Location:../hamdi.php");
            }
        }
        die();
    }else{
        header("Location:../hamdi.php");
    }
}
}
?>