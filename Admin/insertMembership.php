<?php
$con = mysql_connect("localhost","root","cobrax01");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}
 
mysql_select_db("mark_mtpanel", $con);
 
$sql = "INSERT INTO clanarina (ID_cl, opis_cl, cijena_cl) VALUES ('$_POST[ID_cl]', '$_POST[opis_cl]' ,'$_POST[cijena_cl]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "Članarina je unešena!";
 
mysql_close($con)
?>