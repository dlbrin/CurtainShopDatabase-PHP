<?php
session_start();
$db = mysqli_connect('localhost','root','','sardam');
if (!$db){
	echo mysqli_connect_error($db);
	echo "DataBase Niya";
}

function sec($data){
    global $db;
    $data = mysqli_real_escape_string($db,htmlspecialchars($data));
    return $data;
}

function dla($condition){
	global $db;
	$query = mysqli_query($db , "SELECT * FROM $condition");
	echo mysqli_num_rows($query);
}

if(isset($_SESSION['userid'])){
    $userid = $_SESSION['userid'];
}
if(isset($_SESSION['ayad_id'])){
    $ayad_id = $_SESSION['ayad_id'];
}
if(isset($_SESSION['hamdi_id'])){
    $hamdi_id = $_SESSION['hamdi_id'];
}
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
}
if(isset($_GET['logout'])){
    session_unset();
    unset($_SESSION['userid']);
    session_destroy();
    header('Location: index.php');
    }


 
?>