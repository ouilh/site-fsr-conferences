<?php
include("cnx.php");
session_start();
$nom=$_POST["nom"];
$descriptio=$_POST["description"];
$description=$_POST["description"];
$user=$_SESSION["user"];
$type=$_POST["type"];
$nature=$_POST["nature"];
$date=$_POST["date"];
$N_participants=$_POST["n_p"];
$pic=file_get_contents($_FILES["pic"]["tmp_name"]);
$sql="INSERT INTO `conference`( 'user',`nom`, `description`, `image_con`) VALUES ('{$name}','{$description}','".addslashes($pic)."')";
$l=$conx->query($sql);
if($l==TRUE){
    echo"<script> window.location = 'index.php'</script>";
}






?>