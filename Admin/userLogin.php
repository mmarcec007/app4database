
<?php
session_start();
// include('connection.php');
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="cobrax01"; // Mysql password
$db_name="mark_mtpanel"; // Database name


// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$_SESSION['typeUsernameCurr'] = '';
$_SESSION['usernameCurr'] = '';
$_SESSION['ID_user'] = '';


// username and password sent from form
$myusername = $_POST['username'];
$mypassword = $_POST['password'];
$type = $_POST['type'];


$username = $myusername;

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$type = stripslashes($type);

$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$type = mysql_real_escape_string($type);


$sql="SELECT profile.naziv_pro, ima_profil.ID_us, profile.PW_pro, ima_profil.vrsta_pro FROM profile INNER JOIN ima_profil ON profile.naziv_pro = ima_profil.naziv_pro 
WHERE ima_profil.naziv_pro = '$myusername' AND profile.PW_pro = '$mypassword'"; //AND ima_profil.vrsta_pro = '$type'

$result=mysql_query($sql);
$row  = mysql_fetch_array($result);

if (!$result) {
    echo "Something gone wrong";
}

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1) {

    // Register $myusername, $mypassword and redirect to file "login_success.php"ž
    //session_start();
    //session_register("$myusername");
    //session_register("$mypassword");
    
    if ($row['vrsta_pro'] == "Admin") {
        
	    $_SESSION["Login"] = true;
        $_SESSION['ID_user'] = $row['ID_us'];
        $_SESSION["currUsername"] = $row['naziv_pro'];
        
        header("location: mainPage.php");
    }
    
    else {
        //session_generate_id();
        $_SESSION["Login"] = true;
        $_SESSION['ID_user'] = $row['ID_us'];
        $_SESSION["currUsername"] = $row['naziv_pro'];
        header("location: mainUserPage.php");
    }
}

else {
    $_SESSION["Login"] = false;
    echo "Wrong Username or Password";
}
?>

