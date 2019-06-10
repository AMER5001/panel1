<?php
require_once("requires.php");

?>
<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title><?php $app->printSiteName(); ?></title>
  <meta name="description" content="<?php $app->printSiteDesc(); ?>">
  <meta name="author" content="<?php $app->printSiteAuthors(); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="favicon.ico">

  <!-- page level plugin styles -->
  <link rel="stylesheet" href="vendor/sweetalert/lib/sweet-alert.css">
  <link rel="stylesheet" href="<?php $app->cssDefaultFile(); ?>/climacons-font.css">
  <link rel="stylesheet" href="vendor/rickshaw/rickshaw.min.css">
  <link rel="stylesheet" href="vendor/chosen_v1.4.0/chosen.min.css">
  <link rel="stylesheet" href="vendor/checkbo/src/0.1.4/css/checkBo.min.css">
  <!-- /page level plugin styles -->

  <!-- build:css({.tmp,app}) styles/app.min.css -->
  <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="vendor/perfect-scrollbar/css/perfect-scrollbar.css">
  <link rel="stylesheet" href="<?php $app->cssDefaultFile(); ?>/roboto.css">
  <link rel="stylesheet" href="<?php $app->cssDefaultFile(); ?>/font-awesome.css">
  <link rel="stylesheet" href="<?php $app->cssDefaultFile(); ?>/panel.css">
  <link rel="stylesheet" href="<?php $app->cssDefaultFile(); ?>/feather.css">
  <link rel="stylesheet" href="<?php $app->cssDefaultFile(); ?>/animate.css">
  <link rel="stylesheet" href="<?php $app->cssDefaultFile(); ?>/urban.css">
  <link rel="stylesheet" href="<?php $app->cssDefaultFile(); ?>/urban.skins.css">
  <!-- endbuild -->
  
  <!--Font -->
  <link href="https://fonts.googleapis.com/css?family=Cairo:300" rel="stylesheet">
  <!-- Font --> 
  
  <style>
	.swal-overlay {
	  background-color: rgba(43, 165, 137, 0.45);
	}
	.swal-modal {
	  background-color: rgba(63,255,106,0.69);
	  border: 3px solid white;
	}
	.swal-title {
	margin: 0px;
	font-size: 16px;
	box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.21);
	margin-bottom: 28px;
	}
		.swal-text {
	  background-color: #FEFAE3;
	  padding: 17px;
	  border: 1px solid #F0E1A1;
	  display: block;
	  margin: 22px;
	  text-align: center;
	  color: #61534e;
	}
	.swal-footer {
  background-color: rgb(245, 248, 250);
  margin-top: 32px;
  border-top: 1px solid #E9EEF1;
  overflow: hidden;
}
  </style>
	

</head>

<body>


  <div class="app layout-fixed-header">

    <!-- sidebar panel -->
    <div class="sidebar-panel offscreen-left">

      <div class="brand">

        <!-- logo -->
        <div class="brand-logo">
          <font color="white" size="4">ArabKing NetWork</font>
        </div>
        <!-- /logo -->

        <!-- toggle small sidebar menu -->
        <a href="javascript:;" class="toggle-sidebar hidden-xs hamburger-icon v3" data-toggle="layout-small-menu">
          <span></span>
  	      <span></span>
  	      <span></span>
  	      <span></span>
        </a>
        <!-- /toggle small sidebar menu -->

      </div>

      <!-- main navigation -->
      <nav role="navigation">

        <ul class="nav">

          <!-- dashboard -->
          <li>
            <a href="index.php">
              <i class="fa fa-home"></i>
              <span>الصفحة الرئسية</span>
            </a>
          </li>
          <!-- /dashboard -->
		  <?php $i = 0; foreach($Bots['AdminsId'] as $sgid){ $i++;?>
			  <?php if(in_array($sgid,$csg)){ ?>
          <li>
            <a href="javascript:;">
              <i class="fa fa-users"></i>
              <span>الإدارة</span>
            </a>
            <ul class="sub-menu">
		   <li>
            <a href="Message.php">
			<i class="fa fa-comments"></i>
              <span>ساعي البريد</span>
            </a>
           </li>
			  <li>
				<a href="jail.php">
				<i class="fa fa-cog"></i>
					<span>السجن</span>
				</a>
			</li>
            </ul>
          </li>
			  <?php break; } } ?>
		  <li>
            <a href="YouTube.php">
              <i class="fa fa-youtube"></i>
              <span>طلب يوتيوبر</span>
            </a>
          </li>
		  <li>
            <a href="Games.php">
              <i class="fa fa-gamepad"></i>
              <span>الألعاب المفضلة</span>
            </a>
          </li>
          <!-- forms -->
		  <li>
            <a href="Features.php">
              <i class="fa fa-flask"></i>
              <span>الخصائص الشخصية</span>
            </a>
          </li>
		  <!-- Help -->
		  <li>
            <a href="http://panel.ak-ts.ga/ArabKing/Help.php">
              <i class="fa fa-exclamation-triangle"></i>
              <span>تقديم شكوى</span>
            </a>
          </li>
		  <!-- Mony -->
		  <li>
            <a href="http://panel.ak-ts.ga/ArabKing/Help.php">
              <i class="fa fa-usd"></i>
              <span>المتجر</span>
            </a>
          </li>
          <!-- ACT -->
		  <li>
            <a href="http://panel.ak-ts.ga/ArabKing/Code.php">
              <i class="fa fa-key"></i>
              <span>تفعيل الاكواد</span>
			  
            </a>
          </li>
		  <!-- Rank -->
     	  <li>
            <a href="http://panel.ak-ts.ga/ArabKing/createchannel.php">
              <i class="fa fa-trophy"></i>
              <span>إنشاء روم مثبت</span>
            </a>
          </li>  
          <!-- charts -->
          <li>
            <a href="javascript:;">
              <i class="fa fa-users"></i>
              <span>الكلان</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="Clans.php">
				<i class="fa fa-wrench"></i>
                  <span>أنشاء / التحكم بالكلان</span>
                </a>
              </li>
              <li>
                <a href="joinClans.php">
				<i class="fa fa-user"></i>
                  <span>قائمة الكلانات</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /charts -->


        </ul>
      </nav>
      <!-- /main navigation -->

    </div>
    <!-- /sidebar panel -->

    <!-- content panel -->
    <div class="main-panel">

      <!-- top header -->
      <header class="header navbar">

        <div class="brand visible-xs">
          <!-- toggle offscreen menu -->
          <div class="toggle-offscreen">
            <a href="#" class="hamburger-icon visible-xs" data-toggle="offscreen" data-move="ltr">
              <span></span>
              <span></span>
              <span></span>
            </a>
          </div>
          <!-- /toggle offscreen menu -->

          <!-- logo -->
          <div class="brand-logo">
            <img src="images/logo-dark.png" height="15" alt="">
          </div>
          <!-- /logo -->

          <!-- toggle chat sidebar small screen-->
          <div class="toggle-chat">
            <a href="javascript:;" class="hamburger-icon v2 visible-xs" data-toggle="layout-chat-open">
              <span></span>
              <span></span>
              <span></span>
            </a>
          </div>
          <!-- /toggle chat sidebar small screen-->
        </div>

        <ul class="nav navbar-nav hidden-xs">
          <li>
            <p class="navbar-text">
              ArabKing NetWork
            </p>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right hidden-xs">
          <li>
            <a href="javascript:;">
			  <?php
				$avatar = $clientdbid->avatarDownload(); 
if($avatar){
echo '<img src="includes/getavatar.php?avdbid='.$dbid.'" class="header-avatar img-circle ml10" alt="user" width="32" height="32" title="user">';
}else{
echo '<img src="images/no.jpg" class="header-avatar img-circle ml10" alt="user" title="user">';
} 
?>
              <span class="pull-left"><?php printClientNickname(); ?></span>
            </a>

          </li>

        </ul>
      </header>
      <!-- /top header -->
