<?php require_once("left.php");?>
<style type="text/css">
#webcam{width:520px; height:370px; margin:66px auto 22px; line-height:360px; background:#ccc; color:#666; text-align:center}
.button_pane{text-align:center;}
.btn_blue,.btn_green{width:99px; height:38px; line-height:32px; margin:0 4px; border:none; display:inline-block; text-align:center; font-size:14px; color:#fff !important; text-shadow:1px 1px 1px #277c9b; background:url(images/buttons.png) no-repeat}
.btn_green{background:url(images/buttons.png) no-repeat right top;text-shadow:1px 1px 1px #498917;}
.hidden{display:none}

#photos{width:80%; margin:40px auto}
#photos:hover a{opacity:0.5}
#photos a:hover{opacity:1}
</style>
   <div id="camera">
       <div id="cam"></div>
       <div id="webcam"></div>
       <div id="buttons">
    	  <div class="button_pane" id="shoot">
        	<a id="btn_shoot" href="" class="btn_blue">拍照</a>
          </div>
          <div class="button_pane hidden" id="upload">
        	<a id="btn_cancel" href="" class="btn_blue">取消</a> <a id="btn_upload" href="" class="btn_green">上传</a>
          </div>
       </div>
   </div>
<form enctype="multipart/form-data" method="post" name="upform" action="index.php?r=teacher/img">  
  上传文件:  
  <input name="upfile" type="file">  
  <input type="submit" value="上传"><br>   
</form> 
</div>
<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="js/webcam.js"></script>
<script type="text/javascript" src="js/script.js"></script>