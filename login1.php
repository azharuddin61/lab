<?php

$qry ="SELECT * FROM users WHERE login= '".$a"' AND password ='".$b"';
$c =mysql_query($qry);
$d =mysql_fetch_array($c);
$user=$d["login"];
$pass=$d["password"];
if($user==$a)
{
echo "success";
}
else
{
echo "failed";
}
?>