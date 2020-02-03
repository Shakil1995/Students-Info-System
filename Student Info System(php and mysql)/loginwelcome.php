<?php

$dbusername="na.shakil1995@gmail.com";
$dbpass="shakil1995";


$useremail= $_REQUEST ["username"];
echo "<br/>";
$userpass= $_REQUEST ["password"];


echo "<h1>Database Info</h1>";
echo $dbusername;
echo "<br/>";
echo  $dbpass;

echo "<hr/>";
echo "<h1>User Info</h1>";
echo  $useremail;
echo "<br/>";
echo $userpass;

echo "<br/>";
echo "<h1>Database Result</h1>";
if($dbpass==$userpass){
	echo " <font color ='green'> login successfully</font>";
}else{
	echo "worng Password";
}



?>