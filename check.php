<?php
require_once('include/config.php');

$email=$_GET['email'];
$qs="select * from registration where email='$email'";
$data=mysql_query($qs);
if(mysql_num_rows($data)>0)
{
	echo "User Exist";
}
else
{
	echo "";
}
?>