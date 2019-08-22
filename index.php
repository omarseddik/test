<?php
phpinfo()

$server = "iis-php.database.windows.net";  //server name   ="welcome"
$user = "issphp";     //user name     ="std"
$pass = "sqlserver@1";   // password      ="3434&^%"



$con = mssql_connect($server, $user, $pass) or die("Couldn't connect to MSSQL Server on $server");
var_dump($con);
?>
