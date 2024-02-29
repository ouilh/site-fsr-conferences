<?php
include("cnx.php");
$user=$_POST["user"];
$pass=$_POST["pass"];
$sql=$conx->prepare("select * from user where user = ? and pass = ?");
$sql->execute(array($user,$pass));
 if($sql->rowCount()==0){
   
    $error="0";
    
    header("location:login.php?ref=$error");
    
 }
 else{
   
   session_start();
    $_SESSION["user"] = $_POST["user"];
   
   
   header("location:index.php");
  
   
  
}
?>