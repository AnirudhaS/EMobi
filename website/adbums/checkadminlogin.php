<?php
$host="localhost"; // Host name
$user="root";
$password=""; // Mysql password
$db_name="pgr"; // Database name
$tbl_name="admin"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$user", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myadminname=$_POST['myadminname'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myadminname = stripslashes($myadminname);
$mypassword = stripslashes($mypassword);
$myadminname = mysql_real_escape_string($myadminname);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE myadminname='$myadminname' and mypassword='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myadminname and $mypassword, table row must be 1 row

if($count==1){
// Register $myadminname, $mypassword and redirect to file "login_success.php"
session_register("myadminname");
session_register("mypassword");
header("location:login_admin_success.php");
}
else {
header("location:hack.php");
}
?>