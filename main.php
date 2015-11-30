<html lang="en"> 

<head>
  <title>SHADOW IT URSELF</title>
</head>

<?php
if(isset($_POST['submit']))
{
$host="localhost"; // Host name 
$db_name="validlogin"; // Database name 
$tbl_name="login"; // Table name 
// Connect to server and select databse.
mysql_connect("$host", "root", "")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
// Define $myusername and $mypassword 
$aaa=$_POST['login']; 
$bbb=$_POST['password']; 
echo $aaa.$bbb;
die();
// To protect MySQL injection (more detail about MySQL injection)
$aa = stripslashes($aaa);
$bb = stripslashes($bbb);
$az = mysql_real_escape_string($aa);
$bz  = mysql_real_escape_string($bb);
$sql="SELECT * FROM $tbl_name WHERE user='$az' and pass='$bz'";
//echo $sql;
//die();
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
}
?>



<!-- <body background="C:\Users\ADMIN\Desktop\lab\bg.jpg"> -->
<body>
  <section class="container">
    <div class="login">
<h1><center>HD shades.in</center></h1>
<center>      
        <h4 align="centre">Login</h4>
        <form method="POST" action="#">
        <p><input type="text"        name="login" value="" placeholder="Username" id ="login"></p>
        <p><input type="password" name="password" value="" placeholder="Password" id ="password" ></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
 <button type="submit" value="submit">Login</button>
    </form>
    </div>
</center>
  </section>


</body>
</html>