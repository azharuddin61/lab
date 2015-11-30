<?php
$a = $_REQUEST["login"];
$b = $_REQUEST["password"];

$con = mysql_connect("localhost","root","");

if(! $con)
{
  die('connection failed'.mysql_error());
}
mysql_select_db("validlogin",$con);

$result = mysql_query("SELECT login,password FROM users WHERE login = $a");

$row = mysql_fetch_array($result);

if($row["login"]==$a && $row["password"]==$b)
echo"you are a validated user";
else
echo"sorry please try again";

?>