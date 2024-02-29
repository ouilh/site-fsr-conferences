<?php
include("cnx.php");
session_start();
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$pic=file_get_contents($_FILES["pic"]["tmp_name"]);
$sql="update user set nom='{$nom}',prenom='{$prenom}', image='".addslashes($pic)."' where user = '".$_SESSION["user"]."'";
$l=$conx->query($sql);
if($l==TRUE){
    echo"<script> window.location = 'index.php'</script>";
}
else{
    echo "error";
}

?>