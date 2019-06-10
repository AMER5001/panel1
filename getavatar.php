<?php
include_once('requires.php');
if(isset($_GET['avdbid']) && !empty($_GET['avdbid'])) {
  if(preg_match('/^\d+$/',$_GET['avdbid'])) { // regex check!
    if($dbid == $_GET['avdbid']){
      $avatar = $ts3->clientGetByDbid($_GET['avdbid'])->avatarDownload();
      header("Content-Type: " . TeamSpeak3_Helper_Convert::imageMimeType($avatar));
      echo $avatar;
    } else {
      die("You don't have access to see other avatars!");
    }
  } else {
    die("Don't try!");
  }
} else {
  die("Error");
}


?>