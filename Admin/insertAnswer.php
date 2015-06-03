<?php
session_start();

$con = mysql_connect("localhost","root","cobrax01");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("mark_mtpanel", $con);

$pitanje = $_POST['question'];

$sql = "UPDATE faq SET odgovor_faq = '$_POST[odgovor]' WHERE pitanje_faq = '$pitanje'";
$sqq2 = "UPDATE user_faq SET odgovor_faq = '$_POST[odgovor]' WHERE pitanje_faq = '$pitanje'";  

 
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
if (!mysql_query($sqq2,$con))
  {
  die('Error: ' . mysql_error()); 
  }
  
 
 header("location: table.php");
 
mysql_close($con)
?>