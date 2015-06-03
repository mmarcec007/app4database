$host="localhost"; // Host name
$username="root"; // Mysql username
$password="cobrax01"; // Mysql password
$db_name="mark_mtpanel"; // Database name


// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$_SESSION['usernameCurr'] = '';
$_SESSION['ID_user'] = '';
