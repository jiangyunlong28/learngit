<?php

if(!defined('IN_ROOT')){exit('Access denied');}
Administrator(2);
$action=SafeRequest("action","get");
;echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=';echo IN_CHARSET;;echo '">
<meta http-equiv="x-ua-compatible" content="ie=7" />
<title>支付配置</title>
<link href="static/admincp/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function $(obj) {return document.getElementById(obj);}
function change(type){
        if(type==1){
            $(\'pay_wx\').style.display=\'\';
            $(\'pay_zfb\').style.display=\'none\';
            $(\'pay_gr\').style.display=\'none\';
            $(\'pay_all\').style.display=\'none\';
        }else if(type==2){
            $(\'pay_wx\').style.display=\'none\';
            $(\'pay_zfb\').style.display=\'\';
            $(\'pay_gr\').style.display=\'none\';
             $(\'pay_all\').style.display=\'none\';
        }else if(type==3){
            $(\'pay_wx\').style.display=\'none\';
            $(\'pay_zfb\').style.display=\'none\';
            $(\'pay_gr\').style.display=\'\'
             $(\'pay_all\').style.display=\'none\';
        }else if(type==4){
            $(\'pay_wx\').style.display=\'none\';
            $(\'pay_zfb\').style.display=\'none\';
            $(\'pay_gr\').style.display=\'none\';
            $(\'pay_all\').style.display=\'\'
        }
}
</script>
</head>
<body>
';
switch($action){
case 'save':
save();
break;
default:
main();
break;
}
;echo '</body>
</html>
';function main(){;echo '<script type="text/javascript">parent.document.title = \'管理中心 - 全局 - 支付配置\';if(parent.$(\'admincpnav\')) parent.$(\'admincpnav\').innerHTML=\'全局&nbsp;&raquo;&nbsp;支付配置\';</script>
<form method="post" action="?iframe=config_pay&action=save">
<input type="hidden" name="hash" value="';echo $_COOKIE['in_adminpassword'];;echo '" />
<div class="container">
<div class="floattop"><div class="itemtitle"><h3>支付配置</h3><ul class="tab1">
<li><a href="?iframe=config"><span>全局配置</span></a></li>
<li><a href="?name=ffk.im&iframe=config_extend"><span>扩展配置</span></a></li>
<li><a href="?name=ffk.im&iframe=config_web"><span>站长配置</span></a></li>
<li class="current"><a href="?name=ffk.im&iframe=config_pay"><span>支付配置</span></a></li>
</ul></div></div><div class="floattopempty"></div>
<table class="tb tb2">
<tr><th colspan="15" class="partition">支付设置</th></tr>
<tr><td colspan="2" class="td27">支付方式:</td></tr>
<tr><td class="vtop rowform">
<ul>
';if(IN_PAY==1){echo "<li class=\"checked\">";}else{echo "<li>";};echo '<input class="radio" type="radio" name="IN_PAY" value="1" onclick="change(1);"';if(IN_PAY==1){echo " checked";};echo '>&nbsp;微信收款(企业)</li>
';if(IN_PAY==2){echo "<li class=\"checked\">";}else{echo "<li>";};echo '<input class="radio" type="radio" name="IN_PAY" value="2" onclick="change(2);"';if(IN_PAY==2){echo " checked";};echo '>&nbsp;支付宝(企业)</li>
';if(IN_PAY==3){echo "<li class=\"checked\">";}else{echo "<li>";};echo '<input class="radio" type="radio" name="IN_PAY" value="3" onclick="change(3);"';if(IN_PAY==3){echo " checked";};echo '>&nbsp;个人收款(扫码)</li>
';if(IN_PAY==4){echo "<li class=\"checked\">";}else{echo "<li>";};echo '<input class="radio" type="radio" name="IN_PAY" value="4" onclick="change(4);"';if(IN_PAY==4){echo " checked";};echo '>&nbsp;微信支付宝(企业)</li>
</ul>
</td>
<tbody class="sub" id="pay_wx"';if(IN_PAY<>1){echo " style=\"display:none;\"";};echo '>
<tr><td colspan="2" class="td27">商户号:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="';echo IN_WXMCHID;;echo '" name="IN_WXMCHID"></td><td class="vtop tips2">微信支付商户号，微信审核通过邮件内获取</td></tr>
<tr><td colspan="2" class="td27">API 密钥:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="';echo IN_WXKEY;;echo '" name="IN_WXKEY"></td><td class="vtop tips2">登录微信支付商户平台，帐户设置-密码安全-API安全</td></tr>
<tr><td colspan="2" class="td27">应用 ID:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="';echo IN_WXAPPID;;echo '" name="IN_WXAPPID"></td><td class="vtop tips2">微信后台开发者中心，获取AppId</td></tr>
</tbody>
<tbody class="sub" id="pay_zfb"';if(IN_PAY<>2){echo " style=\"display:none;\"";};echo '>
<tr><td colspan="2" class="td27">合作身份者 ID:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="';echo IN_ALIPAYID;;echo '" name="IN_ALIPAYID"></td><td class="vtop tips2">以2088开头的16位纯数字</td></tr>
<tr><td colspan="2" class="td27">安全检验码:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="';echo IN_ALIPAYKEY;;echo '" name="IN_ALIPAYKEY"></td><td class="vtop tips2">以数字和字母组成的32位字符</td></tr>
</tbody>


<tbody class="sub" id="pay_gr"';if(IN_PAY<>3){echo " style=\"display:none;\"";};echo '>
<tr><td colspan="2" class="td27">api平台(网址) :</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="';echo IN_PAYURL;;echo '" name="IN_PAYURL"></td><td class="vtop tips2">默认为https://pay.bbbapi.com/ 支持微信、支付宝</td></tr>
<tr><td colspan="2" class="td27">Token（秘钥）:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="';echo IN_PAYTOKEN;;echo '" name="IN_PAYTOKEN"></td><td class="vtop tips2">登录商户平台，帐户设置-我的api接口信息Token</td></tr>
<tr><td colspan="2" class="td27">Uid （商户号）:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="';echo IN_PAYUID;;echo '" name="IN_PAYUID"></td><td class="vtop tips2">登录商户平台，帐户设置-我的api接口信息Uid</td></tr>
</tbody>


<tbody class="sub" id="pay_all"';if(IN_PAY<>4){echo " style=\"display:none;\"";};echo '>
<tr><td><h2>微信支付</h2></td></tr>
<tr><td colspan="2" class="td27">商户号:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="';echo IN_WXMCHID;;echo '" name="IN_WXMCHID"></td><td class="vtop tips2">微信支付商户号，微信审核通过邮件内获取</td></tr>
<tr><td colspan="2" class="td27">API密钥:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="';echo IN_WXKEY;;echo '" name="IN_WXKEY"></td><td class="vtop tips2">登录微信支付商户平台，帐户设置-密码安全-API安全</td></tr>
<tr><td colspan="2" class="td27">应用ID:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="';echo IN_WXAPPID;;echo '" name="IN_WXAPPID"></td><td class="vtop tips2">微信后台开发者中心，获取AppId</td></tr>
<tr><td><h2>支付宝支付</h2></td></tr>
<tr><td colspan="2" class="td27">合作身份者 ID:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="';echo IN_ALIPAYID;;echo '" name="IN_ALIPAYID"></td><td class="vtop tips2">以2088开头的16位纯数字</td></tr>
<tr><td colspan="2" class="td27">安全检验码:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="';echo IN_ALIPAYKEY;;echo '" name="IN_ALIPAYKEY"></td><td class="vtop tips2">以数字和字母组成的32位字符</td></tr>
</tbody>


<tr><td colspan="15"><div class="fixsel"><input type="submit" class="btn" value="提交" /></div></td></tr>
</table>
</div>
</form>
';}function save(){
if(!submitcheck('hash',1)){ShowMessage("表单来路不明，无法提交！",$_SERVER['PHP_SELF'],"infotitle3",3000,1);}
$str=file_get_contents('source/system/config.inc.php');
$str=preg_replace("/'IN_PAY', '(.*?)'/","'IN_PAY', '".SafeRequest("IN_PAY","post")."'",$str);
$str=preg_replace("/'IN_WXMCHID', '(.*?)'/","'IN_WXMCHID', '".SafeRequest("IN_WXMCHID","post")."'",$str);
$str=preg_replace("/'IN_WXKEY', '(.*?)'/","'IN_WXKEY', '".SafeRequest("IN_WXKEY","post")."'",$str);
$str=preg_replace("/'IN_WXAPPID', '(.*?)'/","'IN_WXAPPID', '".SafeRequest("IN_WXAPPID","post")."'",$str);
$str=preg_replace("/'IN_ALIPAYID', '(.*?)'/","'IN_ALIPAYID', '".SafeRequest("IN_ALIPAYID","post")."'",$str);
$str=preg_replace("/'IN_ALIPAYKEY', '(.*?)'/","'IN_ALIPAYKEY', '".SafeRequest("IN_ALIPAYKEY","post")."'",$str);
$str=preg_replace("/'IN_PAYURL', '(.*?)'/", "'IN_PAYURL', '".SafeRequest("IN_PAYURL","post")."'", $str);
$str=preg_replace("/'IN_PAYTOKEN', '(.*?)'/", "'IN_PAYTOKEN', '".SafeRequest("IN_PAYTOKEN","post")."'", $str);
$str=preg_replace("/'IN_PAYUID', '(.*?)'/", "'IN_PAYUID', '".SafeRequest("IN_PAYUID","post")."'", $str);
if(!$fp = fopen('source/system/config.inc.php','w')){ShowMessage("保存失败，文件{source/system/config.inc.php}没有写入权限！",$_SERVER['HTTP_REFERER'],"infotitle3",3000,1);}
$ifile=new iFile('source/system/config.inc.php','w');
$ifile->WriteFile($str,3);
ShowMessage("恭喜您，设置保存成功！",$_SERVER['HTTP_REFERER'],"infotitle2",1000,1);
}

?>