<?php
$con = mysql_connect("localhost","root","cobrax01");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("mark_mtpanel", $con);
?>