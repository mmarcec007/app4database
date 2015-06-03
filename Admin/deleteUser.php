<?php
require('config.php');

	if( isset($_GET['del']) || isset($_GET['del2']) || isset($_GET['del3']) )
	{
		$id = $_GET['del'];
		$id2 = $_GET['del2'];
		$id3 = $_GET['del3'];
		
		$sql = "DELETE FROM boraviu WHERE ID_us = '$id'";
		$sql2 = "DELETE FROM jespojen WHERE ID_us = '$id'";
		$sql3 = "DELETE FROM je_narucio WHERE ID_us = '$id'";
		$sql4 = "DELETE FROM je_platio WHERE ID_us = '$id'";
		$sql5 = "DELETE FROM ima_profil WHERE ID_us = '$id'";
		$sql6 = "DELETE FROM profile WHERE naziv_pro = '$id2'";
		$sql7 = "DELETE FROM user WHERE ID_us = '$id'";
		
		$sqlUpdate = "UPDATE cvor SET brSpojenikKorisnika = brSpojenikKorisnika - 1 WHERE ID_cvor = '$id3'";
		
		$res = mysql_query($sql) or die("Failed".mysql_error());
		$res2 = mysql_query($sql2) or die("Failed".mysql_error());
		$res3 = mysql_query($sql3) or die("Failed".mysql_error());
		$res4 = mysql_query($sql4) or die("Failed".mysql_error());
		$res5 = mysql_query($sql5) or die("Failed".mysql_error());
		$res6 = mysql_query($sql6) or die("Failed".mysql_error());
		$res7 = mysql_query($sql7) or die("Failed".mysql_error());
		
		$res8 = mysql_query($sqlUpdate) or die("Failed".mysql_error());
		
		//echo "<meta http-equiv='refresh' content='0;url=index.php'>";
		
		 
	}
	
	header("location: table.php");
?>