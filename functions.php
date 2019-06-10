<?php

function printbotname(){
  global $tsConfig;
 
  $botname = $tsConfig['botname'];

  $name = str_replace(' ', '%20', $botname);

  $rand = mt_rand(0,500);

  $name2 = $name."%20[".$rand."]";

  return $name2;
}


function printClientNickname(){
	global $nickname;

	
	echo $nickname;
}

function printClientDescription(){
  global $desc;

  if($desc == NULL){
    echo "You don't have description in our teamspeak!";
  } else {
    	if(is_numeric($desc) && strlen($desc) > 10){
      $desc = intval(substr($desc, 0, 10));
    } else if(is_numeric($desc)){
      $desc = intval($desc);
    } else if(mb_strlen($desc) > 100){
      $desc = mb_substr($desc, 0, 75)."...";
    }
    echo $desc;
  }

}

  function YCD($sgid,$type){
    global $ts3;
    global $dbid;
    global $nickname;
    global $clientdbid;
    global $image;
    global $subs;
    global $videos;
    global $uid;
    global $views;
    global $description;
    global $name;
    global $Channelid;
    global $database;
    global $Bots;

	if($type == 0){
    try{$clientdbid->addServerGroup($sgid);} catch (Exception $e) { }
	$clientdbid->poke("[COLOR=#aa0000][B]تم ربط حسابك بنجاح[/B][/COLOR]");
	$conn = $database->openConnection();
	$sqlr = $conn->query("SELECT * FROM Youtubers WHERE subs > $subs ORDER BY subs ASC LIMIT 1");
	if ($sqlr->rowCount() == 0)
	{

		$order = 0;

	}else{
    $result = $sqlr->fetchAll(PDO::FETCH_ASSOC);

	foreach($result as $row){
		$order = $row['cid'];

	}
	}
	$rand = mt_rand(0,9);
	$cid = $ts3->channelCreate(array(
	"channel_name"				=>  "$nickname$rand",
	"channel_description"		=> "[center][size=15][COLOR=#55557f][B]تبي قناتي ياشنب اضغط ع الصورة[/b][/COLOR]

	[url=https://www.youtube.com/channel/$Channelid][img]".$image."[/img]
	[/center]
[right][size=10][B]
[COLOR=#aa007f]عدد مشتركيني : ".$subs."[/COLOR]
[COLOR=#55aa7f]عدد مقاطعي : ".$videos."[/COLOR]
[COLOR=#55007f]عدد مشاهداتي : ".$views."[/COLOR]
[COLOR=#ff0000][size=5]#قلب[/COLOR][COLOR=#ff0000] [/COLOR][hr][B]
[size=7][COLOR=#00557f]".$name." : قناتي[/right]
	",
	"channel_topic"				=> "$uid | $subs",
	"channel_codec"				=> TeamSpeak3::CODEC_OPUS_VOICE,
	"channel_flag_permanent"	=> TRUE,
	"cpid"						=> $Bots['YoutuberSpacer'],
	"channel_order"				=> $order
	));
	try{$iconid = crc32($ts3->servergroupGetByid($sgid)->iconid);} catch (Exception $e) { $iconid = 0; }
	if($iconid !== 0){
	try{$ch = $ts3->channelGetById($cid);} catch (Exception $e) { }
	try{$ch["channel_icon_id"] = $iconid;} catch (Exception $e) { }
	}
	try{$clientdbid->move($cid);} catch (Exception $e) { }
	try{$clientdbid->setChannelGroup($cid , $Bots['AdminHighLevel']);} catch (Exception $e) { }
	$sql = $conn->query("INSERT INTO Youtubers VALUES ('', '$dbid','$Channelid', '$name', '$views','$subs','$videos','$description','$image', '$cid')");
	$database->closeConnection();
?>success<?php
	}elseif($type == 1){
		$clientdbid->poke("[B]تم تجديد الحساب الخاص بك[/B]");
	foreach($Bots['YoutuberId'] as $group) {
		if(in_array($group,explode(",", $csg))){
			try{$clientdbid->remservergroup($group);} catch (Exception $e) { }
	}
}
	$conn = $database->openConnection();
	$sqlr = $conn->query("SELECT * FROM Youtubers WHERE subs > $subs ORDER BY subs ASC LIMIT 1");
	if ($sqlr->rowCount() == 0)
	{

		$order = 0;

	}else{
    $result = $sqlr->fetchAll(PDO::FETCH_ASSOC);

	foreach($result as $row){
		$order = $row['cid'];

	}
	}
	$sqlr = $conn->query("SELECT * FROM Youtubers WHERE dbid='$dbid'");
	$row = $sqlr->fetchAll(PDO::FETCH_ASSOC);
	$channel = $ts3->channelGetById($row['chid']);
		$channel->modify(array(
			"channel_description"		=> "[center][size=15][COLOR=#55557f][B]تبي قناتي ياشنب اضغط ع الصورة[/b][/COLOR]

	[url=https://www.youtube.com/channel/$Channelid][img]".$image."[/img]
	[/center]
[right][size=10][B]
[COLOR=#aa007f]عدد مشتركيني : ".$subs."[/COLOR]
[COLOR=#55aa7f]عدد مقاطعي : ".$videos."[/COLOR]
[COLOR=#55007f]عدد مشاهداتي : ".$views."[/COLOR]
[COLOR=#ff0000][size=5]#قلب[/COLOR][COLOR=#ff0000] [/COLOR][hr][B]
[size=7][COLOR=#00557f]".$name." : قناتي[/right]
	",
	"channel_topic"				=> "$uid | $subs",
	"channel_order"				=> $order
		));
	try{$iconid = crc32($ts3->servergroupGetByid($sgid)->iconid);} catch (Exception $e) { $iconid = 0; }
	if($iconid !== 0){
	try{$ch = $ts3->channelGetById($cid);} catch (Exception $e) { }
	try{$ch["channel_icon_id"] = $iconid;} catch (Exception $e) { }
	}
	$sql = $conn->query("UPDATE Youtubers SET name='$name', views='$views', subs='$subs', videos='$videos', desc='$description', logo='$image' WHERE dbid='$dbid'");
	$database->closeConnection();
?>success<?php
	}else{
		?>error<?php
	}

  }
  function numberuser($sgid){
  global $ts3;
  $i = 0;
  try{$sgt = $ts3->serverGroupClientList($sgid); } catch (Exception $e) { }
  foreach($sgt as $s){$i++;}
  return $i;
  }
  
?>