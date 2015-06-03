<?php
$con = mysql_connect("localhost","root","cobrax01");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}
 
mysql_select_db("mark_mtpanel", $con);
 
$sql = "INSERT INTO cvor (ID_cvor, maxBrojPodrzanihKorisnika) VALUES ('$_POST[ID_cvor]', '$_POST[maxBrojPodrzanihKorisnika]')";
$sql2 = "INSERT INTO jepostavljen (ID_cvor, nazivMjesto) VALUES ('$_POST[ID_cvor]', '$_POST[mjesto]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
  if (!mysql_query($sql2,$con))
  {
  die('Error: ' . mysql_error());
  }
//echo "Klijent je upisan!";
 
mysql_close($con)
?>