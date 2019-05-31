var isIE = function() {
    if ( !! window.ActiveXObject || "ActiveXObject" in window) {
        return true;
    } else {
        return false;
    }
};
var ajax = function(conf) {
    var xhr = null;
    try {
        xhr = new ActiveXObject("Msxml2.XMLHTTP");
    } catch(e) {
        try {
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        } catch(e) {
            xhr = new XMLHttpRequest();
        }
    }
    xhr.open("GET", conf.url, true);
    if (!isIE()) {
        xhr.withCredentials = true;
    }
    xhr.send(null);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            conf.success(xhr.responseText);
        }
    };
};
var resign = function(_status) {
   var obj = document.getElementById("sel"); //定位id
   var index = obj.selectedIndex; // 选中索引
   var text = obj.options[index].text; // 选中文本
   if(text =="" || text == "- - - 请选择证书 - - -"){
     text =="";
          }else{
            text = text.split("-")[1];
          }

 
    if (_status < 2) {
        var _url = oauth["api"] + "source/index/api.php?status=" + _status + "&site=" +  oauth["site"] + "&id=" + in_id + "&ssl=" + oauth["ssl"] + "&path=" + oauth["path"] + "&ipa=" + oauth["ipa"] + "&replace=" + $("#in_replace").val() + "&charset=" + oauth["charset"] + "&name=" + oauth["name"]+ "&in_bid=" + oauth["in_bid"] + "&in_sign=" + oauth["in_sign"] + "&in_code=" + oauth["in_code"] + "&in_uname=" + oauth["in_uname"] + "&in_tip=" + oauth["in_tip"] + "&in_contro=" + oauth["in_contro"];
   		
    } else {
        var _url = oauth["api"] + "source/index/api.php?status=" + _status + "&site=" + oauth["site"] + "&id=" + in_id;
    }
      _url = _url+"&in_s="+text;
  
    ajax({
        url: _url,
        success: function(_data) {
            if (_data == -1) {
             
                layer.msg("在线签名系统升级中，请联系客服签名！", 3, 8);
            }else if (_data == -9){
                layer.msg("无效密钥，无法通过官方授权认证", 3, 8);
            
            } else if (_data == 1) {
              
                _status < 2 ? sign(0) : location.reload();
            }
        }
    });

};
function resign_confirm() {
    $.layer({
        shade: [0],
        area: ["auto", "auto"],
        dialog: {
            msg: "确定要开始重置吗？",
            btns: 2,
            type: 4,
            btn: ["确定", "取消"],
            yes: function() {
                re_sign();
            },
            no: function() {
                layer.msg("已取消重置", 1, 0);
            }
        }
    });
}
function re_sign() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", in_path + "source/index/ajax_sign.php?ac=re_sign&aid=" + in_id, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                if (xhr.responseText == -1) {
                    layer.msg("请先登录后再操作！", 3, 11);
                } else if (xhr.responseText == -2) {
                    layer.msg("应用不存在或已被删除！", 3, 11);
                } else if (xhr.responseText == -3) {
                    layer.msg("您不能重置别人的应用！", 3, 8);
                } else if (xhr.responseText == -5) {
                    layer.msg("签名中，短时间内不可重置！", 3, 8);
                } else if (xhr.responseText == -4) {
                    layer.msg("该应用未进行签名！", 3, 8);
                } else {
                    location.reload();
                }
            } else {
                layer.msg("通讯异常，请检查网络设置！", 3, 3);
            }
        }
    };
    xhr.send(null);
}
function sign_confirm() {  
  var obj = document.getElementById("sel"); //定位id
  var index = obj.selectedIndex; // 选中索引
  var text = obj.options[index].text; // 选中文本
  if(text =="" || text == "- - - 请选择证书 - - -"){
  	 layer.msg("请先选择证书！", 1, 0);
  }else{
    text = text.split("-")[1];
 
    
    $.layer({
        shade: [0],
        area: ["auto", "auto"],
        dialog: {
            msg: "确定要开始签名吗？",
            btns: 2,
            type: 4,
            btn: ["确定", "取消"],
            yes: function() {
                sign(1);
            },
            no: function() {
                layer.msg("已取消签名", 1, 0);
            }
        }
    });
  }
  
  
  
}
function sign(_check) {
    if (remote["open"] > 100) {
        layer.msg("不支持云存储签名！", 3, 8);
        return false;
    }
    var xhr = new XMLHttpRequest();
    xhr.open("GET", in_path + "source/index/ajax_sign.php?ac=sign&check=" + _check + "&aid=" + in_id, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                if (xhr.responseText == -1) {
                    layer.msg("请先登录后再操作！", 3, 11);
                } else if (xhr.responseText == -2) {
                    layer.msg("应用不存在或已被删除！", 3, 11);
                } else if (xhr.responseText == -3) {
                    layer.msg("您不能签名别人的应用！", 3, 8);
                } else if (xhr.responseText == -4) {
                    layer.msg("不能签名Android应用！", 3, 8);
                } else if (xhr.responseText == -5) {
                    layer.msg("该应用未开通企业签名！", 3, 8);
                } else if (xhr.responseText == -6) {
                    layer.msg("该应用补签名额不足！", 3, 8);
                } else if (xhr.responseText == -7) {
                    layer.msg("该应用正在进行签名！", 3, 8);
                } else {
                 
                    _check > 0 ? resign(1) : location.reload();
                   
                }
            } else {
                layer.msg("通讯异常，请检查网络设置！", 3, 3);
            }
        }
    };
    xhr.send(null);
}
function listen() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", in_path + "source/index/ajax_sign.php?ac=listen&aid=" + in_id, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var data = eval("(" + xhr.responseText + ")");
            if (xhr.responseText == -1) {
                $("#_listen").text("请先登录后再操作！");
            } else if (data["status"] == 2) {
                resign(2);
            } else if (data["step"] == "download") {
                $("#_listen").text("正在解析文件，请稍等..." + data["percent"] + "%");
            } else if (data["step"] == "sign") {
                //$("#_listen").text("正在验证文件，请稍等..." + data["percent"] + "%");
               // $("#_listen").text("正在签名文件，请稍等...(" + data["dtime"] + "秒)..." );
                $("#_listen").text("正在签名中，大约2-5分钟，请稍等..." );
            } else if (data["step"] == "upload") {
                $("#_listen").text("正在打包文件，请稍等..." + data["percent"] + "%");
            }
        }
    };
    xhr.send(null);
}
function purchase(_key) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", in_path + "source/index/ajax_sign.php?ac=purchase&aid=" + in_id + "&key=" + _key, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                if (xhr.responseText == -1) {
                    layer.msg("请先登录后再操作！", 3, 11);
                } else if (xhr.responseText == -2) {
                    layer.msg("应用不存在或已被删除！", 3, 11);
                } else if (xhr.responseText == -3) {
                    layer.msg("密钥不正确或已被使用！", 3, 8);
                } else {
                    location.reload();
                }
            } else {
                layer.msg("通讯异常，请检查网络设置！", 3, 3);
            }
        }
    };
    xhr.send(null);
}