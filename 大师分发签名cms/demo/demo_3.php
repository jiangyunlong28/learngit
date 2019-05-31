<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name='keyword' content=''>
<meta name="viewport"
	content="width=device-width,initial-scale=0.5, user-scalable=no" />
<title><?php echo $hjtitle;?> - <?php echo IN_NAME; ?></title>
    <meta name="robots" content="noarchive">
<style type="text/css">
   
button {
    background-color: #044d50; /* Green */
    border: 1px solid bold;
    color: white;
    padding: 20px 52px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 25px;
    width:100%;
    font-weight:bold;

}
    .red{background-color: #f44336; text-align:left;}
    .blue{background-color: #008CBA; text-align:left;}
      .yellow{background-color: #BBBB44; text-align:left;}
</style>
</head>
<body>

    
<img src="<?php if($imgUrlnew==null||$imgUrlnew==''){ echo $imgUrl ; }else{ echo $imgUrlnew;}?>" width="100%" />
    
    <div><button class='blue'> <?php echo $hjcontext;?></button></div>

              <?php if($urlArray[0]['c1']!=''&&$urlArray[0]['c1']!=null&&$urlArray[0]['n1']!=''&&$urlArray[0]['n1']!=null){ ?>
             
                	<div>
					<button class="btn btn-primary btn-lg" onclick="javascrtpt:window.location.href='<?php echo $urlArray[0]['c1']; ?>'"><?php echo $urlArray[0]['n1']; ?> </button>
				</div>	
                <?php } ?>
              
              	<?php echo $c1; ?>
              <?php if($urlArray[0]['c2']!=''&&$urlArray[0]['c2']!=null&&$urlArray[0]['n2']!=''&&$urlArray[0]['n2']!=null){ ?>
             
                	<div>
					<button class="btn btn-primary btn-lg" onclick="javascrtpt:window.location.href='<?php echo $urlArray[0]['c2']; ?>'"><?php echo $urlArray[0]['n2']; ?> </button>
				</div>	
                <?php } ?>
              
  	
              <?php
 $num=1;
foreach ($result as $obj) {
?>
				
				<div>
					<button class="btn btn-primary btn-lg" onclick="javascrtpt:window.location.href='<?php echo getlink($obj['in_id']); ?>'" target="_blank"><?php echo $obj['in_name']; ?>&nbsp;&nbsp;  点击安装  </button>
                  </div>	
<?php
$num+=1;
                          }
?>	

      <div>
		<button class="blue" onclick="javascrtpt:window.location.href='<?php echo getlink($obj['in_id']); ?>'"> <?php echo $hjcontext;?></button>
	</div>

    
  <?php 
  	if($urlArray[0]['botPic']!=''&&$urlArray[0]['botPic']!=null){ ?>
    	<img src="/data/attachment/<?php echo $urlArray[0]['botPic']; ?>"  width="100%">
  <?php
    }else{?>
     <img src="<?php if($imgUrlnew==null||$imgUrlnew==''){ echo $imgUrl ; }else{ echo $imgUrlnew;}?>" width="100%" />
  <?php  }?>
    

    
	<br/><br/>

</body>
</html>

