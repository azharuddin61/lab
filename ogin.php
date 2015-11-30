<?php
ob_start();
$host="localhost"; // Host name 
$db_name="validlogin"; // Database name 
$tbl_name="login"; // Table name 
// Connect to server and select databse.
mysql_connect("$host", "", "")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
// Define $myusername and $mypassword 
$aaa=$_POST['login']; 
$bbb=$_POST['password']; 
// To protect MySQL injection (more detail about MySQL injection)
$aa = stripslashes($aaa);
$bb = stripslashes($bbb);
$az = mysql_real_escape_string($aa);
$bz  = mysql_real_escape_string($bb);
$sql="SELECT * FROM $tbl_name WHERE user='$az' and pass='$bz'";
$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
header('Location: next.html');
// Register $myusername, $mypassword and redirect to file "login_success.php"
}
else {
echo "Wrong Username or Password";
}
ob_end_flush();
?>


