<?php
{
$gameVersion = $_GET["gameVersion"];
	
if (strcasecmp( $gameVersion, '1.0' ) == 0)
{
 $login_info = array(
 "ResultCode" => 1,
 "Message" => "Auth OK",
 );
} else {
 //For failure return use this variable array
 $login_info = array(
 "ResultCode" => 2,
 "Message" => "Authentication failed.",
 );
}

$json = json_encode($login_info);
echo $json;
}
?>
