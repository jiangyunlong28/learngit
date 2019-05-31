<?php
if(!defined('IN_ROOT')){exit('Access denied');}
Administrator(2);
$action=SafeRequest("action","get");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo IN_CHARSET; ?>">
<meta http-equiv="x-ua-compatible" content="ie=7" />
<title>站长配置</title>
<link href="static/admincp/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function $(obj) {return document.getElementById(obj);}
function change(type){
        if(type==1){
            $('mailopen').style.display='';
        }else if(type==2){
            $('mailopen').style.display='none';
        }else if(type==3){
            $('codeopen').style.display='';
        }else if(type==4){
            $('codeopen').style.display='none';
        }else if(type==5){
            $('in_open').style.display='none';
        }else if(type==6){
            $('in_open').style.display='';
        }
}
</script>
</head>
<body>
<?php
switch($action){
	case 'save':
		save();
		break;
	default:
		main();
		break;
	}
?>
</body>
</html>
<?php function main(){ ?>
<script type="text/javascript">parent.document.title = '管理中心 - 全局 - 全局配置';if(parent.$('admincpnav')) parent.$('admincpnav').innerHTML='全局&nbsp;&raquo;&nbsp;全局配置';</script>


<form method="post" action="?name=ffk.im&iframe=config_web&action=save">
<input type="hidden" name="hash" value="<?php echo $_COOKIE['in_adminpassword']; ?>" />
<div class="container">
<div class="floattop"><div class="itemtitle"><h3>站长配置</h3>
 <ul class="tab1">
<li><a href="?name=ffk.im&iframe=config"><span>全局配置</span></a></li>
<li><a href="?name=ffk.im&iframe=config_extend"><span>扩展配置</span></a></li>
<li class="current"><a href="?name=ffk.im&iframe=config_web"><span>站长配置</span></a></li>
<li><a href="?name=ffk.im&iframe=config_pay"><span>支付配置</span></a></li>
</ul></div></div><div class="floattopempty"></div>

    <table class="tb tb2">
<tr><th colspan="15" class="partition">域名配置</th></tr>
<tr><td colspan="2" class="td27">Plist域名:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_MYPURL; ?>" name="IN_MYPURL"></td><td class="vtop tips2">请勿随意更改，联系管理获得</td></tr>
<tr><td colspan="2" class="td27">附件下载域名:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_MYURL; ?>" name="IN_MYURL"></td><td class="vtop tips2">请勿随意更改，联系管理获得</td></tr>
<tr><td colspan="2" class="td27">CDN加速域名:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_NGURL; ?>" name="IN_NGURL"></td><td class="vtop tips2">请勿随意更改，联系管理获得</td></tr>
<tr><td colspan="2" class="td27">短链接域名:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_SUOURL; ?>" name="IN_SUOURL"></td><td class="vtop tips2">请勿随意更改，联系管理获得</td></tr>
</table>
 <!-- 暂时取消封装功能
  <table class="tb tb2">
<tr><th colspan="15" class="partition">应用封装</th></tr>
<tr><td colspan="2" class="td27">单次扣除:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_WEBVIEWPOINTS; ?>" name="IN_WEBVIEWPOINTS" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"></td><td class="vtop tips2">下载点数</td></tr>
</table>
-->
<table class="tb tb2">
<tr><th colspan="15" class="partition">应用分发（价格）</th></tr>
<tr><td colspan="2" class="td27">套餐一:</td></tr>
<tr>
 <td class="vtop tips2">
   价格：<input type="text" class="txt" value="<?php echo IN_PAYP1; ?>" name="IN_PAYP1" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">
   点数：<input type="text" class="txt" value="<?php echo IN_PAYD1; ?>" name="IN_PAYD1" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"></td>
 </tr>
 <tr><td colspan="2" class="td27">套餐二:</td></tr>
 <tr>
 <td class="vtop tips2">
   价格：<input type="text" class="txt" value="<?php echo IN_PAYP2; ?>" name="IN_PAYP2" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">  
   点数：<input type="text" class="txt" value="<?php echo IN_PAYD2; ?>" name="IN_PAYD2" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"></td>
 </tr>
<tr><td colspan="2" class="td27">套餐三:</td></tr>
<tr>
 <td class="vtop tips2">
   价格：<input type="text" class="txt" value="<?php echo IN_PAYP3; ?>" name="IN_PAYP3" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"> 
   点数：<input type="text" class="txt" value="<?php echo IN_PAYD3; ?>" name="IN_PAYD3" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"></td>
 </tr>
  <tr><td colspan="2" class="td27">套餐四（包月下载）:</td></tr>
  <td class="vtop tips2">
   价格：<input type="text" class="txt" value="<?php echo IN_PAYP4; ?>" name="IN_PAYP4" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"> 
   点数：<input type="text" class="txt" value="<?php echo IN_PAYD4; ?>" name="IN_PAYD4" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"></td>
 </tr>
<tr><td colspan="2" class="td27">每日登录:</td></tr>
<tr><td class="vtop tips2">免费：<input type="text" class="txt" value="<?php echo IN_LOGINPOINTS; ?>" name="IN_LOGINPOINTS" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">   下载点数</td></tr>
</table>
<table class="tb tb2">
<tr><th colspan="15" class="partition">企业签名(价格)</th></tr>
<tr><td colspan="2" class="td27">签名价格（单位：元，设置为0可关闭签名功能）</td> </tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_SIGN; ?>" name="IN_SIGN" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">  <td class="vtop tips2">包月价格</td>    </tr>
 <tr><td class="vtop rowform"> <input type="text" class="txt" value="<?php echo IN_SIGN_J; ?>" name="IN_SIGN_J" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">  <td class="vtop tips2">包季价格</td>    </tr>
<tr><td class="vtop rowform">  <input type="text" class="txt" value="<?php echo IN_SIGN_N; ?>" name="IN_SIGN_N" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">  <td class="vtop tips2">包年价格</td>    </tr>
<tr><td colspan="2" class="td27">每月补签:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_RESIGN; ?>" name="IN_RESIGN" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"></td><td class="vtop tips2">次</td></tr>
<tr><td colspan="2" class="td27">重置时间:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_RE_TIME; ?>" name="IN_RE_TIME" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"></td><td class="vtop tips2">秒 提示：最低不得少于100秒</td></tr>
</table> 
<table class="tb tb2">
<tr><th colspan="15" class="partition">底部375*70广告(广告位一)</th></tr>
<tr><td colspan="2" class="td27">去除广告:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_ADPOINTS_1; ?>" name="IN_ADPOINTS_1" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"></td><td class="vtop tips2">下载点数/扣除，只针对单个应用，设置为0可关闭广告功能</td></tr>
<tr><td colspan="2" class="td27">链接地址:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_ADLINK_1; ?>" name="IN_ADLINK_1"></td><td class="vtop tips2">以“<em class="lightnum">http://</em>”或“<em class="lightnum">https://</em>”开头</td></tr>
<tr><td colspan="2" class="td27">图片地址:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_ADIMG_1; ?>" name="IN_ADIMG_1"></td><td class="vtop tips2">尺寸：375x70，以“<em class="lightnum">http://</em>”或“<em class="lightnum">https://</em>”开头</td></tr>
</table>
   <table class="tb tb2">
<tr><th colspan="15" class="partition">顶部375*70广告(广告位二)</th></tr>
<tr><td colspan="2" class="td27">链接地址:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_ADLINK_3; ?>" name="IN_ADLINK_3"></td><td class="vtop tips2">以“<em class="lightnum">http://</em>”或“<em class="lightnum">https://</em>”开头</td></tr>
<tr><td colspan="2" class="td27">图片地址:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_ADIMG_3; ?>" name="IN_ADIMG_3"></td><td class="vtop tips2">尺寸：375x70，以“<em class="lightnum">http://</em>”或“<em class="lightnum">https://</em>”开头</td></tr>
</table>
 <table class="tb tb2">
<tr><th colspan="15" class="partition">漂浮73*73广告</th></tr>
<tr><td colspan="2" class="td27">链接地址:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_ADLINK_2; ?>" name="IN_ADLINK_2"></td><td class="vtop tips2">以“<em class="lightnum">http://</em>”或“<em class="lightnum">https://</em>”开头</td></tr>
<tr><td colspan="2" class="td27">图片地址:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_ADIMG_2; ?>" name="IN_ADIMG_2"></td><td class="vtop tips2">尺寸：73x73，以“<em class="lightnum">http://</em>”或“<em class="lightnum">https://</em>”开头</td></tr>
</table> 
<table class="tb tb2">
<tr><th colspan="15" class="partition">短链地址</th></tr>
<tr><td colspan="2" class="td27">伪静态:</td></tr>
<tr><td class="vtop rowform">
<select name="IN_REWRITE">
<option value="0">禁用</option>
<option value="1"<?php if(IN_REWRITE==1){echo " selected";} ?>>启用</option>
</select>
</td><td class="vtop tips2">如果您的服务器不支持 Rewrite，请选择“禁用”</td></tr>
</table>
<table class="tb tb2">
<tr><th colspan="15" class="partition">立即信任</th></tr>
<tr><td colspan="2" class="td27">呈现方式:</td></tr>
<tr><td class="vtop rowform">
<select name="IN_MOBILEPROVISION">
<option value="0">默认方式</option>
<option value="1"<?php if(IN_MOBILEPROVISION==1){echo " selected";} ?>>引导方式</option>
</select>
</td><td class="vtop tips2">安装iOS应用时，立即信任的呈现方式</td></tr>
</table>
<table class="tb tb2">
<tr><th colspan="15" class="partition">安装方式</th></tr>
<tr><td colspan="2" class="td27">是否遮罩:</td></tr>
<tr><td class="vtop rowform">
<select name="IN_MOBILESETUP">
<option value="0">无遮罩</option>
<option value="1"<?php if(IN_MOBILESETUP==1){echo " selected";} ?>>有遮罩</option>
</select>
</td><td class="vtop tips2">微信、QQ内打开应用地址是否显示遮罩层，防屏蔽</td></tr>
</table>
<table class="tb tb2">
<tr><th colspan="15" class="partition">实名认证</th></tr>
<tr><td colspan="2" class="td27">强制认证:</td></tr>
<tr><td class="vtop rowform">
<select name="IN_VERIFY">
<option value="0">关闭</option>
<option value="1"<?php if(IN_VERIFY==1){echo " selected";}?>>开启</option>
</select>
</td><td class="vtop tips2">开启后需要通过实名认证才能上传应用</td></tr>
</table>
  
  
<table class="tb tb2">
<tr><th colspan="15" class="partition">一键切图</th></tr>
<tr><td colspan="2" class="td27">打包格式:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_EXT; ?>" name="IN_EXT"></td><td class="vtop tips2">备用格式：40*40|60*60|58*58|87*87|80*80|120*120|120*120|180*180</td></tr>
</table>
  
<table class="tb tb2">
<tr><th colspan="15" class="partition">公告配置<th></tr>
<tr><td colspan="2" class="td27">滚动公告:</td> <td class="vtop tips2">显示站点公告信息，最多5条</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_GG_1; ?>" name="IN_GG_1"></td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_GG_2; ?>" name="IN_GG_2"></td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_GG_3; ?>" name="IN_GG_3"></td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_GG_4; ?>" name="IN_GG_4"></td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_GG_5; ?>" name="IN_GG_5"></td></tr>
  <tr><td colspan="15"><div class="fixsel"><input type="submit" class="btn" value="提交" /></div></td></tr> 
</table>
  
</div>
</form>
<?php }function save(){
if(!submitcheck('hash', 1)){ShowMessage("表单来路不明，无法提交！",$_SERVER['PHP_SELF'],"infotitle3",3000,1);}
$str=file_get_contents('source/system/config.inc.php');
$str=preg_replace("/'IN_MYPURL', '(.*?)'/", "'IN_MYPURL', '".SafeRequest("IN_MYPURL","post")."'", $str);
$str=preg_replace("/'IN_MYURL', '(.*?)'/", "'IN_MYURL', '".SafeRequest("IN_MYURL","post")."'", $str);
$str=preg_replace("/'IN_NGURL', '(.*?)'/", "'IN_NGURL', '".SafeRequest("IN_NGURL","post")."'", $str);
$str=preg_replace("/'IN_SUOURL', '(.*?)'/", "'IN_SUOURL', '".SafeRequest("IN_SUOURL","post")."'", $str);
$str=preg_replace("/'IN_GG_1', '(.*?)'/", "'IN_GG_1', '".SafeRequest("IN_GG_1","post")."'", $str);
$str=preg_replace("/'IN_GG_2', '(.*?)'/", "'IN_GG_2', '".SafeRequest("IN_GG_2","post")."'", $str);
$str=preg_replace("/'IN_GG_3', '(.*?)'/", "'IN_GG_3', '".SafeRequest("IN_GG_3","post")."'", $str);
$str=preg_replace("/'IN_GG_4', '(.*?)'/", "'IN_GG_4', '".SafeRequest("IN_GG_4","post")."'", $str);
$str=preg_replace("/'IN_GG_5', '(.*?)'/", "'IN_GG_5', '".SafeRequest("IN_GG_5","post")."'", $str);
$str=preg_replace("/'IN_ADPOINTS_1', '(.*?)'/", "'IN_ADPOINTS_1', '".SafeRequest("IN_ADPOINTS_1","post")."'", $str);
$str=preg_replace("/'IN_ADLINK_1', '(.*?)'/", "'IN_ADLINK_1', '".SafeRequest("IN_ADLINK_1","post")."'", $str);
$str=preg_replace("/'IN_ADIMG_1', '(.*?)'/", "'IN_ADIMG_1', '".SafeRequest("IN_ADIMG_1","post")."'", $str);
$str=preg_replace("/'IN_ADPOINTS_2', '(.*?)'/", "'IN_ADPOINTS_2', '".SafeRequest("IN_ADPOINTS_2","post")."'", $str);
$str=preg_replace("/'IN_ADLINK_2', '(.*?)'/", "'IN_ADLINK_2', '".SafeRequest("IN_ADLINK_2","post")."'", $str);
$str=preg_replace("/'IN_ADIMG_2', '(.*?)'/", "'IN_ADIMG_2', '".SafeRequest("IN_ADIMG_2","post")."'", $str);
$str=preg_replace("/'IN_ADPOINTS_3', '(.*?)'/", "'IN_ADPOINTS_3', '".SafeRequest("IN_ADPOINTS_3","post")."'", $str);
$str=preg_replace("/'IN_ADLINK_3', '(.*?)'/", "'IN_ADLINK_3', '".SafeRequest("IN_ADLINK_3","post")."'", $str);
$str=preg_replace("/'IN_ADIMG_3', '(.*?)'/", "'IN_ADIMG_3', '".SafeRequest("IN_ADIMG_3","post")."'", $str);
$str=preg_replace("/'IN_PAYP1', '(.*?)'/", "'IN_PAYP1', '".SafeRequest("IN_PAYP1","post")."'", $str);
$str=preg_replace("/'IN_PAYD1', '(.*?)'/", "'IN_PAYD1', '".SafeRequest("IN_PAYD1","post")."'", $str);
$str=preg_replace("/'IN_PAYP2', '(.*?)'/", "'IN_PAYP2', '".SafeRequest("IN_PAYP2","post")."'", $str);
$str=preg_replace("/'IN_PAYD2', '(.*?)'/", "'IN_PAYD2', '".SafeRequest("IN_PAYD2","post")."'", $str);
$str=preg_replace("/'IN_PAYP3', '(.*?)'/", "'IN_PAYP3', '".SafeRequest("IN_PAYP3","post")."'", $str);
$str=preg_replace("/'IN_PAYD3', '(.*?)'/", "'IN_PAYD3', '".SafeRequest("IN_PAYD3","post")."'", $str);
$str=preg_replace("/'IN_PAYP4', '(.*?)'/", "'IN_PAYP4', '".SafeRequest("IN_PAYP4","post")."'", $str);
$str=preg_replace("/'IN_PAYD4', '(.*?)'/", "'IN_PAYD4', '".SafeRequest("IN_PAYD4","post")."'", $str);
$str=preg_replace("/'IN_SIGN', '(.*?)'/", "'IN_SIGN', '".SafeRequest("IN_SIGN","post")."'", $str);
$str=preg_replace("/'IN_SIGN_J', '(.*?)'/", "'IN_SIGN_J', '".SafeRequest("IN_SIGN_J","post")."'", $str);
$str=preg_replace("/'IN_SIGN_N', '(.*?)'/", "'IN_SIGN_N', '".SafeRequest("IN_SIGN_N","post")."'", $str);
$str=preg_replace("/'IN_RESIGN', '(.*?)'/", "'IN_RESIGN', '".SafeRequest("IN_RESIGN","post")."'", $str);
$str=preg_replace("/'IN_RE_TIME', '(.*?)'/", "'IN_RE_TIME', '".SafeRequest("IN_RE_TIME","post")."'", $str);
$str=preg_replace("/'IN_REWRITE', '(.*?)'/", "'IN_REWRITE', '".SafeRequest("IN_REWRITE","post")."'", $str);
$str=preg_replace("/'IN_LOGINPOINTS', '(.*?)'/", "'IN_LOGINPOINTS', '".SafeRequest("IN_LOGINPOINTS","post")."'", $str);
$str=preg_replace("/'IN_MOBILEPROVISION', '(.*?)'/", "'IN_MOBILEPROVISION', '".SafeRequest("IN_MOBILEPROVISION","post")."'", $str);
$str=preg_replace("/'IN_MOBILESETUP', '(.*?)'/", "'IN_MOBILESETUP', '".SafeRequest("IN_MOBILESETUP","post")."'", $str);
$str=preg_replace("/'IN_EXT', '(.*?)'/", "'IN_EXT', '".SafeRequest("IN_EXT","post")."'", $str);
$str=preg_replace("/'IN_VERIFY', '(.*?)'/","'IN_VERIFY', '".SafeRequest("IN_VERIFY","post")."'",$str);
if(!$fp = fopen('source/system/config.inc.php', 'w')){ShowMessage("保存失败，文件{source/system/config.inc.php}没有写入权限！",$_SERVER['HTTP_REFERER'],"infotitle3",3000,1);}
$ifile=new iFile('source/system/config.inc.php', 'w');
$ifile->WriteFile($str, 3);
ShowMessage("恭喜您，设置保存成功！",$_SERVER['HTTP_REFERER'],"infotitle2",1000,1);
}
?>