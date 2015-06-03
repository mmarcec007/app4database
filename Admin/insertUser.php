   
<?php
$con = mysql_connect("localhost","root","cobrax01");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}
 
mysql_select_db("mark_mtpanel", $con);
 
$sql = "INSERT INTO user (ID_us, ime_us, prezime_us) VALUES ('$_POST[ID_us]', '$_POST[ime_us]', '$_POST[prezime_us]')";
$sqq2 = "INSERT INTO boraviu (ID_us, nazivMjesto, adresa) VALUES ('$_POST[ID_us]', '$_POST[mjesto]', '$_POST[adresa]')";
$sql3 = "INSERT INTO jespojen (ID_us, ID_cvor, nazivKonekcije) VALUES ('$_POST[ID_us]', '$_POST[ID_cvor]', '$_POST[nazivKonekcije]')";
$sql4 = "INSERT INTO profile (naziv_pro, PW_pro) VALUES ('$_POST[nazivPro]', '$_POST[PWPro]')";
$sql5 = "INSERT INTO ima_profil (ID_us, naziv_pro, vrsta_pro) VALUES ('$_POST[ID_us]', '$_POST[nazivPro]', '$_POST[optionsRadios]')";

$dt2 = date("Y-m-d H:i:s");
$sql6 = "INSERT INTO je_narucio (ID_us, ID_pa, datum_aktiviranja_pa) VALUES ('$_POST[ID_us]', '$_POST[ID_pa]', '$dt2')";


$date1 = str_replace('-', '/', $dt2);

$one_quartal = date('Y-m-d',strtotime($date1 . "+90 days"));

$sql7 = "INSERT INTO je_platio (ID_us, ID_pa, ID_cl, rok_uplate) VALUES ('$_POST[ID_us]', '$_POST[ID_pa]', '$_POST[ID_cl]', '$one_quartal')";

$sqlUpdate = "UPDATE cvor SET brSpojenikKorisnika = brSpojenikKorisnika + 1 WHERE ID_cvor = '$_POST[ID_cvor]'";
  
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
if (!mysql_query($sqq2,$con))
  {
  die('Error: ' . mysql_error()); 
  }
  
if (!mysql_query($sql3,$con))
  {
  die('Error: ' . mysql_error());
  }
  
if (!mysql_query($sql4,$con))
  {
  die('Error: ' . mysql_error());
  }
  
if (!mysql_query($sql5,$con))
  {
  die('Error: ' . mysql_error());
  }

if (!mysql_query($sql6,$con))
  {
  die('Error: ' . mysql_error());
  }

if (!mysql_query($sql7,$con))
  {
  die('Error: ' . mysql_error());
  }
  
if (!mysql_query($sqlUpdate,$con))
  {
  die('Error: ' . mysql_error());
  }
//echo "Klijent je upisan!";
 
 header("location: form.php");
 
mysql_close($con)
?>