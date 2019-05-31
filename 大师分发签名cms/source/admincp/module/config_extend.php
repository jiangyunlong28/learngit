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
<title>扩展配置</title>
<link href="static/admincp/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function $(obj) {return document.getElementById(obj);}
function change(type){
        if(type==1){
            $('remote').style.display='';
        }else if(type==2){
            $('remote').style.display='none';
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
<script type="text/javascript">parent.document.title = '管理中心 - 全局 - 扩展配置';if(parent.$('admincpnav')) parent.$('admincpnav').innerHTML='全局&nbsp;&raquo;&nbsp;扩展配置';</script>
<form method="post" action="?name=ffk.im&iframe=config_extend&action=save">
<input type="hidden" name="hash" value="<?php echo $_COOKIE['in_adminpassword']; ?>" />
<div class="container">
<div class="floattop"><div class="itemtitle"><h3>扩展配置</h3><ul class="tab1">
<li><a href="?name=ffk.im&iframe=config"><span>全局配置</span></a></li>
<li class="current"><a href="?name=ffk.im&iframe=config_extend"><span>扩展配置</span></a></li>
<li><a href="?name=ffk.im&iframe=config_web"><span>站长配置</span></a></li>
<li><a href="?name=ffk.im&iframe=config_pay"><span>支付配置</span></a></li>
</ul></div></div><div class="floattopempty"></div>

<!--默认商户微信支付 已取消
 <table class="tb tb2">
<tr><th colspan="15" class="partition">个人支付（支持微信支付宝）</th></tr>
<tr><td colspan="2" class="td27">api平台(网址) :</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_WXMCHID; ?>" name="IN_WXMCHID"></td><td class="vtop tips2">平台api地址，默认为https://pay.bbbapi.com/ 一般不用修改</td></tr>
<tr><td colspan="2" class="td27">Token（秘钥）:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_WXKEY; ?>" name="IN_WXKEY"></td><td class="vtop tips2">登录微信支付商户平台，帐户设置-密码安全-API安全</td></tr>
<tr><td colspan="2" class="td27">Uid （商户号）:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_WXAPPID; ?>" name="IN_WXAPPID"></td><td class="vtop tips2">微信后台开发者中心，获取AppId</td></tr>
</table>
-->
<table class="tb tb2">
<tr><th colspan="15" class="partition">Cdn下载（接口）</th></tr>  
<tr><td colspan="2" class="td27">cdn_url:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_CDNYUN; ?>" name="IN_CDNYUN"></td><td class="vtop tips2">请勿随意更改，联系管理获得</td></tr>
<tr><td colspan="2" class="td27">cdn_api:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_CDNLIST; ?>" name="IN_CDNLIST"></td><td class="vtop tips2">请勿随意更改，联系管理获得</td></tr>
<tr><td colspan="2" class="td27">cdn_key:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_CDNKEY; ?>" name="IN_CDNKEY"></td><td class="vtop tips2">请勿随意更改，联系管理获得</td></tr>
  
<!--取消比例兑换，直接按套餐形式
<table class="tb tb2">
<tr><th colspan="15" class="partition">应用分发</th></tr>
<tr><td colspan="2" class="td27">充值汇率:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_RMBPOINTS; ?>" name="IN_RMBPOINTS" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"></td><td class="vtop tips2">下载点数/每元</td></tr>
<tr><td colspan="2" class="td27">每日登录:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_LOGINPOINTS; ?>" name="IN_LOGINPOINTS" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"></td><td class="vtop tips2">下载点数</td></tr>
</table>
-->
<table class="tb tb2">
<tr><th colspan="15" class="partition">企业签名(接口)</th></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_RESIGN; ?>" name="IN_RESIGN" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"></td><td class="vtop tips2">次</td></tr>
<tr><td colspan="2" class="td27">监控频率:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_LISTEN; ?>" name="IN_LISTEN" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"></td><td class="vtop tips2">单位：毫秒，网络状况不太良好的站点建议把值调高</td></tr>
<tr><td colspan="2" class="td27">接口地址:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_API; ?>" name="IN_API"></td><td class="vtop tips2">签名时要请求的接口地址</td></tr>
<tr><td colspan="2" class="td27">接口密匙:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_SECRET; ?>" name="IN_SECRET"></td><td class="vtop tips2">签名时要验证的接口密匙</td></tr>
<tr><td colspan="2" class="td27">签名后缀:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_POSTFIX; ?>" name="IN_POSTFIX"></td><td class="vtop tips2">签名生成新文件后缀</td></tr> 
<tr><td colspan="2" class="td27">续期方法:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_SECCTO; ?>" name="IN_SECCTO" ></td><td class="vtop tips2">【提示】&nbsp;&nbsp;&nbsp;3：直接闪退&nbsp;&nbsp;&nbsp;4：提示不闪退&nbsp;&nbsp;&nbsp; 5：提示后闪退</td></tr>
<tr><td colspan="2" class="td27">续期提示语:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_SECTIP; ?>" name="IN_SECTIP" ></td><td class="vtop tips2">过期弹窗提示</td></tr>

</table>

  
<table class="tb tb2">
<tr><th colspan="15" class="partition">远程上传</th></tr>
<tr><td colspan="2" class="td27">云存储:</td></tr>
<tr><td class="vtop rowform">
<ul>
<?php if(IN_REMOTE==1){echo "<li class=\"checked\">";}else{echo "<li>";} ?><input class="radio" type="radio" name="IN_REMOTE" value="1" onclick="change(1);"<?php if(IN_REMOTE==1){echo " checked";} ?>>&nbsp;开启</li>
<?php if(IN_REMOTE==0){echo "<li class=\"checked\">";}else{echo "<li>";} ?><input class="radio" type="radio" name="IN_REMOTE" value="0" onclick="change(2);"<?php if(IN_REMOTE==0){echo " checked";} ?>>&nbsp;关闭</li>
</ul>
</td><td class="vtop tips2">PHP5.5以下版本不支持上传进度条</td></tr>
<tbody class="sub" id="remote"<?php if(IN_REMOTE<>1){echo " style=\"display:none;\"";} ?>>
<tr><td colspan="2" class="td27">上传标识:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_REMOTEPK; ?>" name="IN_REMOTEPK"></td><td class="vtop tips2">云存储的扩展目录，程序内置oss与qiniu</td></tr>
<tr><td colspan="2" class="td27">外网域名:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_REMOTEDK; ?>" name="IN_REMOTEDK"></td><td class="vtop tips2">以“<em class="lightnum">http://</em>”开头、“<em class="lightnum">/</em>”结尾</td></tr>
<tr><td colspan="2" class="td27">Bucket:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_REMOTEBK; ?>" name="IN_REMOTEBK"></td><td class="vtop tips2">云存储的空间名称</td></tr>
<tr><td colspan="2" class="td27">AccessKey:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_REMOTEAK; ?>" name="IN_REMOTEAK"></td><td class="vtop tips2">云存储的通信密钥</td></tr>
<tr><td colspan="2" class="td27">SecretKey:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_REMOTESK; ?>" name="IN_REMOTESK"></td><td class="vtop tips2">云存储的通信密钥</td></tr>
<tr><td colspan="2" class="td27">SignID:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_REMOTESID; ?>" name="IN_REMOTESID"></td><td class="vtop tips2">防盗链</td></tr>
<tr><td colspan="2" class="td27">SignTime:</td></tr>
<tr><td class="vtop rowform"><input type="text" class="txt" value="<?php echo IN_REMOTESTM; ?>" name="IN_REMOTESTM"></td><td class="vtop tips2">过期时间</td></tr>
</tbody>
<tr><td colspan="15"><div class="fixsel"><input type="submit" class="btn" value="保存" /></div></td></tr>
</table>
</div>
</form>
<?php }function save(){
if(!submitcheck('hash', 1)){ShowMessage("表单来路不明，无法提交！",$_SERVER['PHP_SELF'],"infotitle3",3000,1);}
$str=file_get_contents('source/system/config.inc.php');
$str=preg_replace("/'IN_RMBPOINTS', '(.*?)'/", "'IN_RMBPOINTS', '".SafeRequest("IN_RMBPOINTS","post")."'", $str);
$str=preg_replace("/'IN_LISTEN', '(.*?)'/", "'IN_LISTEN', '".SafeRequest("IN_LISTEN","post")."'", $str);
$str=preg_replace("/'IN_API', '(.*?)'/", "'IN_API', '".SafeRequest("IN_API","post")."'", $str);
$str=preg_replace("/'IN_SECRET', '(.*?)'/", "'IN_SECRET', '".SafeRequest("IN_SECRET","post")."'", $str);
$str=preg_replace("/'IN_SECCTO', '(.*?)'/", "'IN_SECCTO', '".SafeRequest("IN_SECCTO","post")."'", $str);
$str=preg_replace("/'IN_SECTIP', '(.*?)'/", "'IN_SECTIP', '".SafeRequest("IN_SECTIP","post")."'", $str);
$str=preg_replace("/'IN_POSTFIX', '(.*?)'/", "'IN_POSTFIX', '".SafeRequest("IN_POSTFIX","post")."'", $str);
$str=preg_replace("/'IN_REMOTE', '(.*?)'/", "'IN_REMOTE', '".SafeRequest("IN_REMOTE","post")."'", $str);
$str=preg_replace("/'IN_REMOTEPK', '(.*?)'/", "'IN_REMOTEPK', '".SafeRequest("IN_REMOTEPK","post")."'", $str);
$str=preg_replace("/'IN_REMOTEDK', '(.*?)'/", "'IN_REMOTEDK', '".SafeRequest("IN_REMOTEDK","post")."'", $str);
$str=preg_replace("/'IN_REMOTEBK', '(.*?)'/", "'IN_REMOTEBK', '".SafeRequest("IN_REMOTEBK","post")."'", $str);
$str=preg_replace("/'IN_REMOTEAK', '(.*?)'/", "'IN_REMOTEAK', '".SafeRequest("IN_REMOTEAK","post")."'", $str);
$str=preg_replace("/'IN_REMOTESK', '(.*?)'/", "'IN_REMOTESK', '".SafeRequest("IN_REMOTESK","post")."'", $str);
$str=preg_replace("/'IN_REMOTESID', '(.*?)'/", "'IN_REMOTESID', '".SafeRequest("IN_REMOTESID","post")."'", $str);
$str=preg_replace("/'IN_REMOTESTM', '(.*?)'/", "'IN_REMOTESTM', '".SafeRequest("IN_REMOTESTM","post")."'", $str);
$str=preg_replace("/'IN_CDNYUN', '(.*?)'/", "'IN_CDNYUN', '".SafeRequest("IN_CDNYUN","post")."'", $str);
$str=preg_replace("/'IN_CDNLIST', '(.*?)'/", "'IN_CDNLIST', '".SafeRequest("IN_CDNLIST","post")."'", $str);
$str=preg_replace("/'IN_CDNKEY', '(.*?)'/", "'IN_CDNKEY', '".SafeRequest("IN_CDNKEY","post")."'", $str);
if(!$fp = fopen('source/system/config.inc.php', 'w')){ShowMessage("保存失败，文件{source/system/config.inc.php}没有写入权限！",$_SERVER['HTTP_REFERER'],"infotitle3",3000,1);}
$ifile=new iFile('source/system/config.inc.php', 'w');
$ifile->WriteFile($str, 3);
ShowMessage("恭喜您，设置保存成功！",$_SERVER['HTTP_REFERER'],"infotitle2",1000,1);
}
?>