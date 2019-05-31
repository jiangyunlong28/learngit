$(function() {
	$(document).on({
		dragleave: function(e) {
			e.preventDefault();
			$("#_drop1").show();
			$("#_drop2").hide();
		},
		drop: function(e) {
			e.preventDefault();
		},
		dragenter: function(e) {
			e.preventDefault();
		},
		dragover: function(e) {
			e.preventDefault();
			$("#_drop1").hide();
			$("#_drop2").show();
		}
	});
	$("upload-card")[0].addEventListener("drop", function(e) {
		e.preventDefault();
		var fileList = e.dataTransfer.files;
		if(fileList.length == 0) {
			return false;
		}
		var upfile = fileList[0];
		$("#dialog-uploadify").show();
		
      
      var vip_contain = $("#vip_contain").attr("value");//容量
    var vip_size = $("#vip_size").attr("value");//可上传大小
    vip_size = (vip_size - 0).toFixed(2);
    var size = $("#size").attr("value");//已上传文件大小
    var dec = (vip_contain - size).toFixed(2);//剩余容量
   // var upfile = $("#upload_app")[0].files[0];
    $("#dialog-uploadify").show();
    if (vip_size > upfile.size / 1048576) {
        if (dec > 0 && (dec - upfile.size / 1048576) > 0) {} else {
            $("#speed-uploadify").text("空间容量不足,请升级您的会员等级！");
            return false;
        }
    } else {
        $("#speed-uploadify").text("上传文件大小超出限制,请升级您的会员等级！");
        return false;
    }
      
		
		if(upfile.size > in_size * 1048576) {
			$("#speed-uploadify").text("上传失败，大小不能超过" + in_size + "MB！");
			return false;
		}
		if(upfile.size < 1048576) {
			var _size = Math.floor(upfile.size / 1024) + "kb";
		} else {
			var _fixed = upfile.size / 1048576;
			var _size = _fixed.toFixed(2) + "MB";
		}
		if(upfile.name.length > 10) {
			var _name = upfile.name.substr(0, 10) + "...";
		} else {
			var _name = upfile.name;
		}
		$("#speed-uploadify").html(_name + "(" + _size + ')<span id="percentage"></span>');
		$(".turbo-upload").html('<a class="ng-binding" href="/index.php/home">取消</a>');
		var fd = new FormData();
		fd.append("app", upfile);
		fd.append("time", in_time);
		app_xhr = new XMLHttpRequest();
		app_xhr.open("post", in_path + "source/pack/upload/index-uplog.php");
		app_xhr.onload = complete_app;
		app_xhr.onerror = failed_app;
		app_xhr.upload.onprogress = progress_app;
		app_xhr.upload.onloadstart = function(evt) {
			app_ot = new Date().getTime();
			app_oloaded = 0;
		};
		app_xhr.send(fd);
	}, false);
}
  
 
 );

