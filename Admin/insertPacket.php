<?php
$con = mysql_connect("localhost","root","cobrax01");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}
 
mysql_select_db("mark_mtpanel", $con);
 
$sql = "INSERT INTO paket (ID_pa, cijena_pa, oprema_pa) VALUES ('$_POST[ID_pa]','$_POST[cijena_pa]', '$_POST[oprema_pa]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
//echo "Klijent je upisan!";
 
mysql_close($con)
?>