<?php
$id=$_GET['id'];
require_once('include/config.php');
$qs="select * from cities where city_state='$id'";
$data=mysql_query($qs);
while($row=mysql_fetch_array($data))
{
	echo "<option value='".$row['city_name']."'>".$row['city_name']."</option>";
}
?>
