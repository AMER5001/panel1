<?php
 
$ts3 = TeamSpeak3::factory("serverquery://{$tsConfig['username']}:{$tsConfig['password']}@{$tsConfig['address']}:{$tsConfig['tcp_port']}/?server_port={$tsConfig['udp_port']}&nickname=".printbotname()."");

$online = false;

foreach ($ts3->clientList(array('client_type' => '0', 'connection_client_ip' => $_SERVER['REMOTE_ADDR'])) as $ts3_client) {
  $nickname = htmlspecialchars($ts3_client["client_nickname"]); // Fetching user name!
  $uid = $ts3_client["client_unique_identifier"]; // Fetching user Unique identifier!
  $dbid = $ts3_client["client_database_id"]; // Fetching user database id!
  $totalconns = $ts3_client["client_totalconnections"]; // fetching user total connections!
  $desc = htmlspecialchars($ts3_client["client_description"]); // fetching client description!
  $csg = explode(",", $ts3_client["client_servergroups"]); // fetching user groups!
  $csgc = count(explode(",", $ts3_client["client_servergroups"])); // fetching user groups!
  $platform = $ts3_client["client_platform"]; // fetching user platform!
  $country = strtolower($ts3_client["client_country"]); // fetching user country!
  $countryb = $ts3_client["client_country"]; // fetching user country!
  $clientuid = $ts3->clientGetByUid($uid); // getting user by UID (Unique identifier)!
  $clientdbid = $ts3->clientGetByDbid($dbid); // getting user by Dbid (Database ID)!
  $online = true;
}


if(!$online){
	require_once("notOnline.php");
	exit;
}

if(!in_array($Bots['ActivateId'], $csg)){
	require_once("notActive.php");
	exit;
}


?>