<?php
session_start();

$con = mysql_connect("localhost","root","cobrax01");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("mark_mtpanel", $con);



$sql = "INSERT INTO faq (pitanje_faq) VALUES ('$_POST[pitanje]')";
$sqq2 = "INSERT INTO user_faq (ID_us, pitanje_faq) VALUES ('$_SESSION[ID_user]', '$_POST[pitanje]')";  
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
if (!mysql_query($sqq2,$con))
  {
  die('Error: ' . mysql_error()); 
  }
  
 
 header("location: formUser.php");
 
mysql_close($con)
?>