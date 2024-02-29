<?php
$srvr="localhost:8888";
$dbname="fsr";
$login="root";
$pw="";
try{
$conx=new PDO("mysql:host=$srvr;dbname=$dbname",$login,$pw);

}
catch(PDOException $e){$e->getMessage();die();}


?>