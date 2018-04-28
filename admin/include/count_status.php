<?php 
								$qs="select count(*) from missing where date(mdate)=curdate()";
								$data=mysql_query($qs)or die (mysql_error());
								$row=mysql_fetch_array($data);
								$today_miss=$row[0];
								$qs="select count(*) from missing";
								$data=mysql_query($qs)or die (mysql_error());
								$row=mysql_fetch_array($data);
								$total_miss=$row[0];
								$qs="select count(*) from sighting where date(sdate)=curdate()";
								$data=mysql_query($qs)or die (mysql_error());
								$row=mysql_fetch_array($data);
								$today_sight=$row[0];
								$qs="select count(*) from sighting";
								$data=mysql_query($qs)or die (mysql_error());
								$row=mysql_fetch_array($data);
								$total_sight=$row[0];
								?>
								