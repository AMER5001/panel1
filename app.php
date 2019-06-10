<?php
/**
 * APP Class
 * 	Main class
 */
 
class app
{
  public $site_name;
  public $site_desc;
  public $site_author;
  public $site_url;
  public $cssFile;
  public $imagesFile;
  public $jsFile;

  public function setSiteName($name){
    $this->site_name = $name;
  }
  public function printSiteName(){
    echo $this->site_name;
  }
  public function setSiteDesc($desc){
    $this->site_desc = $desc;
  }
  public function printSiteDesc(){
    echo $this->site_desc;
  }
  public function setSiteAuthor($author){
    $this->site_author = $author;
  }
  public function printSiteAuthors(){
    echo $this->site_author;
  }
  public function setSiteURL($url){
    $this->site_url = $url;
  }
  public function printSiteURL(){
    echo $this->site_url;
  }
  public function setCssDefaultFile($file) {
    $this->cssFile = $file;
  }

  public function cssDefaultFile() {
    echo $this->cssFile;
  }

  public function setImagesDefaultFile($file) {
    $this->imagesFile = $file;
  }
 
  public function imagesDefaultFile(){
    echo $this->imagesFile;
  }

  public function setJSDefaultFile($file) {
    $this->jsFile = $file;
  }

  public function jsDefaultFile() {
    echo $this->jsFile;
  }


}



$app = new app();


$app->setSiteName("ArabKings Network &mdash; Control Panel.");

$app->setSiteDesc("ArabKings Network - User Control panel.");

$app->setSiteAuthor("#FarisDev~, #PABLO~, vFaisal ツ [TimeToDev]");

$app->setSiteURL("http://91.134.254.76/panel");

$app->setCssDefaultFile("styles");

$app->setImagesDefaultFile("images");

$app->setJSDefaultFile("scripts");


?>