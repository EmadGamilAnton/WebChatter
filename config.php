<?php
ini_set("display_errors","on");
if(!isset($dbh)){
 session_start();

 $musername = "id2509870_root";
 $mpassword = "rootem";
 $hostname  = "localhost";
 $dbname    = "id2509870_users";
 $dbh=new PDO('mysql:dbname='.$dbname.';host='.$hostname.";port=3306",$musername, $mpassword);
 /*Change The Credentials to connect to database.*/
 include("user_online.php");
}
?>