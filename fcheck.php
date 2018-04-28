<?php
require_once('include/config.php');

$mnumber=$_GET['mnumber'];
$qs="select * from registration where mnumber='$mnumber'";
$data=mysql_query($qs);
if(mysql_num_rows($data)>0)
{
	echo "";
}
else
{
	echo "Incorrect Mobile number";
}
?>