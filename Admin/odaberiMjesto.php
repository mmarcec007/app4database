<?php
$con = mysql_connect("localhost","mark1","cobrax01");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}
 
mysql_select_db("mark_mtpanel", $con);
 
$sql = "SELECT * FROM mjesto WHERE nazivMjesto=" . $_POST['nazivMjesto'] . " and name='" .     $_POST['nazivMjesto'] . "'"; 
$query = mysql_query($sql);

echo '<select name="country" size="1">';
while ($row = mysql_fetch_array($query)) { 
echo '<option value="' . $row['nazivMjesto'] . '</option>';
}
echo '</select>';
 
mysql_close($con);
?>