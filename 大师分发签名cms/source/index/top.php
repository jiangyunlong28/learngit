<link rel="stylesheet" href="/incss/dbqcss/style.css">
<link rel="stylesheet" href="https://static.pgyer.com/static-20180712/assets/build/header_include_fashion.min.css">
<script src="/incss/dbqcss/jquery.min.js"></script>
<script src="/incss/dbqcss/bootstrap.min.js"></script>
<div class="landing-page hide-sidebar" data-gr-c-s-loaded="true" ryt12216="1">
<nav class="navbar navbar-default">
    <div class="container head-container">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle navbar-toggle1 collapsed btn-mobile-more" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo IN_PATH; ?>"><img src="/incss/dbqcss/logo.png" class="mt-10" style="width:212px;"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
             <ul class="nav navbar-nav navbar-nav1 navbar-right">
               	<li><a href="<?php echo IN_PATH; ?>">首页</a></li>
				<li><a href="<?php echo IN_PATH.'index.php/install'; ?>">下载价格</a></li>
				<?php if(IN_SIGN){ ?><li><a href="<?php echo IN_PATH.'index.php/sign'; ?>">签名价格</a></li><?php } ?>
				<?php if($GLOBALS['userlogined']){ ?>
				<li><a href="<?php echo IN_PATH.'index.php/home'; ?>">应用管理</a></li>
                
                <?php if(IN_SIGN){ ?><li><a href="<?php echo IN_PATH.'index.php/useradmin'; ?>">账单管理</a></li><?php } ?>
                
				<li class="signup"><a href="<?php echo IN_PATH.'index.php/logout'; ?>">退出</a></li>
				<?php }else{ ?>
				<li><a href="<?php echo IN_PATH.'index.php/login'; ?>">立即登录</a></li>
				<li class="signup"><a href="<?php echo IN_PATH.'index.php/reg'; ?>">免费注册</a></li>
				<?php } ?>
             </ul>
        </div>
    </div>
</nav>
</div>  

