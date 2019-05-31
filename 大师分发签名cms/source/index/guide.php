<?php if(!defined('IN_ROOT')){exit('Access denied');} ?>
<?php
	$array = '';
	for($i = 0; $i < strlen($_SERVER['HTTP_HOST']); $i++){
		$str = substr($_SERVER['HTTP_HOST'], $i, 1);
		$arr[] = '"'.$str.'"';
		$array .= $str == '.' ? '<i class="icon-comma trans"></i>' : '<i class="icon-" style="font-style:normal;font-size:100px;font-weight:bold">'.$str.'</i>';
	}
	$letter_doodle = implode(',', $arr);
?>
<!--
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="<?php echo IN_CHARSET; ?>">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
<meta name="keywords" content="<?php echo IN_KEYWORDS; ?>">
<meta name="description" content="<?php echo IN_DESCRIPTION; ?>">
<title><?php echo IN_NAME; ?> - App托管服务分发平台|安卓应用托管|iOS分发|ipa企业签名</title>
<link href="<?php echo IN_PATH; ?>static/index/icons.css" rel="stylesheet">
<link href="<?php echo IN_PATH; ?>static/index/bootstrap.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo IN_PATH; ?>static/index/analytics.js"></script>
<script type="text/javascript">
var startTime = new Date();
var reg_link = '<?php echo IN_PATH.'index.php/reg'; ?>';
var letter_doodle = ["B","e","t","a","A","p","p","H","o","s","t","<br>","{","<br>","     ","r","e","t","u","r","n"," ",'"',<?php echo $letter_doodle; ?>,'"',"<br>","}"];
var end_letter_doodle = '<?php echo $array; ?>';
</script>
</head>
<body>
//<div id="loadingCover" onclick="location.reload()" class="loading-cover" style="cursor:pointer">
//	<span class="circle prepare"><img src="<?php echo IN_PATH; ?>static/index/loading-Home.gif"></span>
//</div>
-->

<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="<?php echo IN_CHARSET; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="author" content="91大师极速分发，极速app证书签名 ios棋牌游戏签名 ipa封装签名证书打包代ios签名">
<meta name="keywords" content="<?php echo IN_KEYWORDS; ?>">
<meta name="description" content="<?php echo IN_DESCRIPTION; ?>">
<title><?php echo IN_NAME; ?> - App托管服务分发平台|安卓应用托管|iOS分发|ipa企业签名</title>
<link href="<?php echo IN_PATH; ?>static/index/icons.css" rel="stylesheet">
<link href="<?php echo IN_PATH; ?>static/index/bootstrap.css" rel="stylesheet">

<script type="text/javascript">
var startTime = new Date();
var reg_link = '<?php echo IN_PATH.'index.php/reg'; ?>';
var letter_doodle = ["B","e","t","a","A","p","p","H","o","s","t","<br>","{","<br>","     ","r","e","t","u","r","n"," ",'"',<?php echo $letter_doodle; ?>,'"',"<br>","}"];
var end_letter_doodle = '<?php echo $array; ?>';
</script>
  
  <!-- Vendor styles -->
  <link rel="stylesheet" href="./incss/dbqcss/font-awesome.css">
  <link rel="stylesheet" href="./incss/dbqcss/metisMenu.css">
  <link rel="stylesheet" href="./incss/dbqcss/animate.css">
  <link rel="stylesheet" href="./incss/dbqcss/bootstrap.min.css">

  <!-- App styles -->
  <link rel="stylesheet" href="./incss/dbqcss/pe-icon-7-stroke.css">
  <link rel="stylesheet" href="./incss/dbqcss/helper.css">
  <link rel="stylesheet" href="./incss/dbqcss/style.css">
  <link rel="stylesheet" href="./incss/dbqcss/custom.css">
  <link rel="stylesheet" href="./incss/dbqcss/sidebar.css?v=2">
  <link rel="stylesheet" href="./incss/dbqcss/menu.css">
<link rel="stylesheet" href="./incss/dbqcss/signature.css?v=2">
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
.en-markup-crop-options {
    top: 18px !important;
    left: 50% !important;
    margin-left: -100px !important;
    width: 200px !important;
    border: 2px rgba(255,255,255,.38) solid !important;
    border-radius: 4px !important;
}

.en-markup-crop-options div div:first-of-type {
    margin-left: 0px !important;
}

</style>

<style type="text/css" id="MEIQIA-ICON-STYLE">.MEIQIA-ICON { background-size: 40px auto !important; background-repeat: no-repeat !important; background-image: url("https://static.meiqia.com/dist/images/icon-mq.png?v=0p50kc0vf54mfgvi") !important; } @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2/1), only screen and (min-device-pixel-ratio: 2) { .MEIQIA-ICON { background-image: url("https://static.meiqia.com/dist/images/icon-mq@2x.png?v=0p50kc0vf54mfgvi") !important; } } .MEIQIA-ICON-CHAT1 { background-position: 0 0 !important; } .MEIQIA-ICON-CHAT2 { background-position: 0 -20px !important; } .MEIQIA-ICON-CHAT3 { background-position: 0 -40px !important; } .MEIQIA-ICON-CHAT4 { background-position: 0 -60px !important; } .MEIQIA-ICON-CHAT5 { background-position: 0 -80px !important; } .MEIQIA-ICON-CHAT6 { background-position: 0 -100px !important; } .MEIQIA-ICON-CHAT7 { background-position: 0 -120px !important; } .MEIQIA-ICON-CHAT8 { background-position: 0 -140px !important; } .MEIQIA-ICON-CHAT9 { background-position: 0 -160px !important; } .MEIQIA-ICON-CHAT10 { background-position: 0 -180px !important; } .MEIQIA-ICON-CHAT11 { background-position: 0 -200px !important; } .MEIQIA-ICON-CHAT12 { background-position: 0 -220px !important; } .MEIQIA-ICON-TICKET1 { background-position: -20px 0 !important; } .MEIQIA-ICON-TICKET2 { background-position: -20px -20px !important; } .MEIQIA-ICON-TICKET3 { background-position: -20px -40px !important; } .MEIQIA-ICON-TICKET4 { background-position: -20px -60px !important; } .MEIQIA-ICON-TICKET5 { background-position: -20px -80px !important; } .MEIQIA-ICON-TICKET6 { background-position: -20px -100px !important; } .MEIQIA-ICON-TICKET7 { background-position: -20px -120px !important; } .MEIQIA-ICON-TICKET8 { background-position: -20px -140px !important; } .MEIQIA-ICON-TICKET9 { background-position: -20px -160px !important; } .MEIQIA-ICON-TICKET10 { background-position: -20px -180px !important; } .MEIQIA-ICON-TICKET11 { background-position: -20px -200px !important; } .MEIQIA-ICON-TICKET12 { background-position: -20px -220px !important; } </style><style type="text/css" id="MEIQIA-PANEL-STYLE">#MEIQIA-PANEL-HOLDER { position: fixed; bottom: 0;  right: 60px;  z-index: -1; width: 320px; height: 480px; padding: 0; margin: 0; overflow: hidden; visibility: hidden; background-color: transparent; box-shadow: 0 0 20px 0 rgba(0, 0, 0, .15); border: 1px solid #eee\0; *border: 1px solid #eee; } #MEIQIA-IFRAME { position: absolute; top: 0; right: 0; bottom: 0; left: 0; display: none; width: 100% !important; height: 100% !important; border: 0; padding: 0; margin: 0; float: none; background: none; } </style><style type="text/css" id="MEIQIA-BTN-STYLE">#MEIQIA-BTN-HOLDER { display: none; position: fixed; bottom: 0;  right: 60px;  z-index: 2147483647; width: auto; height: auto; padding: 0; margin: 0; border: 0; font-family: 'Helvetica Neue', Helvetica, Arial, 'Hiragino Sans GB', 'Microsoft YaHei', sans-serif; background-color: transparent; } #MEIQIA-BTN, #MEIQIA-BTN span, #MEIQIA-BTN div, #MEIQIA-BTN img { float: none; width: auto; height: auto; padding: 0; margin: 0; border: 0; background: none; } #MEIQIA-BTN { display: block; height: 40px; font-size: 16px; color: #fff; text-align: center; border-left: 1px solid rgba(0, 0, 0, .1); border-top: 1px solid rgba(0, 0, 0, .1); border-right: 1px solid rgba(0, 0, 0, .1); box-shadow: 0 0 14px 0 rgba(0, 0, 0, .16); cursor: pointer; text-decoration: none; background-color: #1abc9c; } #MEIQIA-BTN #MEIQIA-BTN-ICON { display: block; float: left; width: 20px; height: 20px; margin: 10px 10px 0; } #MEIQIA-BTN #MEIQIA-BTN-LINE { display: block; float: left; width: 1px; height: 100%; background-color: rgba(0, 0, 0, .08); background-color: #000\9; opacity: .1\9; filter: alpha(opacity=10)\9; vertical-align: middle; } #MEIQIA-BTN #MEIQIA-BTN-TEXT { display: block; float: left; height: 40px; margin: 0 10px; line-height: 40px; overflow-y: hidden; font-size: 16px; color: #fff; } #MEIQIA-BTN #MEIQIA-CIRCLE { position: absolute; top: -13px; left: -13px; display: none; width: 26px; height: 26px; text-align: center; line-height: 26px; font-size: 14px; color: #fff; border-radius: 15px; background-color: #ff3b30; } #MEIQIA-BTN #MEIQIA-BUBBLE { position: absolute; bottom: 64px; display: none; width: 260px; border: 1px solid #f7f7f7; border-radius: 4px; color: #000; text-align: left; box-shadow: 0 0 14px 0 rgba(0, 0, 0, .16); line-height: 1.428571429; background-color: #fff; } #MEIQIA-BTN #MEIQIA-BUBBLE-ARROW1 { position: absolute; z-index: 2; font-size: 0; line-height: 0; border-width: 8px 7px 0px; border-color: #fff transparent; border-style: solid dashed dashed; } #MEIQIA-BTN #MEIQIA-BUBBLE-ARROW2 { position: absolute; z-index: 1; font-size: 0; line-height: 0; border-width: 10px 8px 0px; border-color: #f7f7f7 transparent; border-style: solid dashed dashed; }  #MEIQIA-BTN #MEIQIA-BUBBLE { right: 0; } #MEIQIA-BTN #MEIQIA-BUBBLE-ARROW1 { right: 12px; bottom: -8px; } #MEIQIA-BTN #MEIQIA-BUBBLE-ARROW2 { right: 11px; bottom: -10px; }  #MEIQIA-BTN #MEIQIA-BUBBLE-CLOSE { position: absolute; display: none; top: 12px; right: 12px; width: 10px; height: 10px; background-position: -5px -245px; cursor: pointer; } #MEIQIA-BTN #MEIQIA-BUBBLE:hover #MEIQIA-BUBBLE-CLOSE { display: block; } #MEIQIA-BTN #MEIQIA-BUBBLE-INSIDE { margin: 12px 18px; } #MEIQIA-BTN #MEIQIA-BUBBLE-AVATAR { width: 26px; height: 26px; border-radius: 13px; margin-right: 6px; vertical-align: top; box-shadow: 0 0 8px 0 rgba(0, 0, 0, .15); } #MEIQIA-BTN #MEIQIA-BUBBLE-NAME { display: inline-block; margin-top: 3px; font-size: 16px; color: #000; } #MEIQIA-BTN #MEIQIA-BUBBLE-MSG { *height: 40px; max-height: 40px; margin-top: 5px; font-size: 14px; overflow: hidden; color: #000; } #MEIQIA-BTN #MEIQIA-BUBBLE-MSG img { width: 16px; height: 16px; } </style><style type="text/css" id="MEIQIA-INVITE-STYLE">#MEIQIA-INVITE, #MEIQIA-INVITE div, #MEIQIA-INVITE span { float: none; width: auto; height: auto; padding: 0; margin: 0; border: 0; background: none; } #MEIQIA-INVITE { position: fixed; z-index: 2147483647; display: none; width: 340px; height: 130px; margin-bottom: 64px; border: 1px solid #f7f7f7; border-radius: 4px; box-shadow: 0 0 14px 0 rgba(0, 0, 0, .16); text-align: left; cursor: pointer; color: #000; line-height: 1.428571429; background-color: #fff; } #MEIQIA-INVITE #MEIQIA-INVITE-ARROW1, #MEIQIA-INVITE #MEIQIA-INVITE-ARROW2 { position: absolute; font-size: 0; line-height: 0; } #MEIQIA-INVITE #MEIQIA-INVITE-ARROW1 { z-index: 2; } #MEIQIA-INVITE #MEIQIA-INVITE-ARROW2 { z-index: 1; }   #MEIQIA-INVITE { right: 60px; bottom: 0; } #MEIQIA-INVITE #MEIQIA-INVITE-ARROW1 { right: 12px; bottom: -8px; border-top: 8px solid #fff; border-right: 7px solid transparent; border-left: 7px solid transparent; } #MEIQIA-INVITE #MEIQIA-INVITE-ARROW2 { right: 11px; bottom: -10px; border-top: 9px solid #f7f7f7; border-right: 8px solid transparent; border-left: 8px solid transparent; }     #MEIQIA-INVITE #MEIQIA-INVITE-CLOSE { position: absolute; right: -20px; top: -20px; width: 40px; height: 40px; cursor: pointer;  background-position: 0 -260px;  } #MEIQIA-INVITE #MEIQIA-INVITE-CLOSE:hover {  background-position: 0 -300px;  } #MEIQIA-INVITE #MEIQIA-INVITE-INSIDE { width: 300px; height: 44px; margin: 46px 20px 0; text-align: left; font-size: 14px; line-height: 22px; overflow: hidden; color: #000; /*word-break: break-all;*/ } </style> 

  
</head>
<body class="landing-page hide-sidebar" data-gr-c-s-loaded="true" ryt12216="1">



<?php
if(checkmobile() || strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger')){
	include 'source/index/index_new.php';
}else{
	include 'source/index/index_new.php';
}  
 ?> 
</body>  
  </html>
 