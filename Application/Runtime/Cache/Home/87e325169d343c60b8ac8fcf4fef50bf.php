<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if($titleL1): echo ($titleL1); ?>-<?php endif; echo ($title); ?>-<?php echo C('SITE_NAME');?></title>
<link href="/xingkong/Public/Home/css/public.css" rel="stylesheet" type="text/css" />
<!-- page special css plugin here -->
<link href="/xingkong/Public/Home/css/ysbf.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/xingkong/Public/Plugin/Cuplay/images/swfobject.js"></script>
</head>
<body>
<!--nav start-->
<div class="top">
  <div class="top_1">
    <div class="top_1_l"><span>欢迎来到星空影业网！</span><a href="#">登录</a>|<a href="#">注册</a>|<a href="#">OA系统</a></div>
    <div class="top_1_r">
      <div class="wenbenyu">
        <input class="wenbenyu" name="" type="text" />
      </div>
      <div class="anniu">
        <input name="" type="submit" class="anniu" value="" />
      </div>
    </div>
  </div>
</div>
<div class="daohang">
  <div class="daohang_1">
    <ul>
      <li><a <?php if((strtolower(CONTROLLER_NAME)) == "index"): ?>class="active"<?php endif; ?> href="<?php echo U('Index/index');?>">
        <p><img src="/xingkong/Public/Home/Images/1.png" width="33" height="33" /></p>
        <p>首页</p>
        </a></li>
      <li><a>
        <p><img src="/xingkong/Public/Home/Images/2.png" width="38" height="30" /></p>
        <p>电影</p>
        </a></li>
      <li><a <?php if((strtolower(CONTROLLER_NAME)) == "theater"): ?>class="active"<?php endif; ?> href="<?php echo U('Theater/index');?>">
        <p><img src="/xingkong/Public/Home/Images/3.png" width="36" height="34" /></p>
        <p>影城</p>
        </a></li>
      <li><a <?php if((strtolower(CONTROLLER_NAME)) == "news"): ?>class="active"<?php endif; ?> href="<?php echo U('News/index');?>">
        <p><img src="/xingkong/Public/Home/Images/4.png" width="31" height="31" /></p>
        <p>新闻</p>
        </a></li>
      <li><a <?php if((strtolower(CONTROLLER_NAME)) == "movie"): ?>class="active"<?php endif; ?> href="<?php echo U('Movie/index');?>">
        <p><img src="/xingkong/Public/Home/Images/5.png" width="29" height="30" /></p>
        <p>影视</p>
        </a></li>
      <li><a <?php if((strtolower(CONTROLLER_NAME)) == "interaction"): ?>class="active"<?php endif; ?> href="<?php echo U('Interaction/index');?>">
        <p><img src="/xingkong/Public/Home/Images/6.png" width="30" height="32" /></p>
        <p>互动</p>
        </a></li>
      <li><a href="#">
        <p><img src="/xingkong/Public/Home/Images/7.png" width="34" height="34" /></p>
        <p>购票</p>
        </a></li>
      <li><a <?php if((strtolower(CONTROLLER_NAME)) == "kanwu"): ?>class="active"<?php endif; ?> href="<?php echo U('kanwu/index');?>">
        <p><img src="/xingkong/Public/Home/Images/8.png" width="49" height="32" /></p>
        <p>广电报</p>
        </a></li>
      <li><a <?php if((strtolower(CONTROLLER_NAME)) == "about"): ?>class="active"<?php endif; ?> href="<?php echo U('About/index');?>">
        <p><img src="/xingkong/Public/Home/Images/9.png" width="33" height="35" /></p>
        <p>关于</p>
        </a></li>
    </ul>
  </div>
</div>
<?php if((strtolower(CONTROLLER_NAME)) != "index"): ?><div class="present">你现在的位置：<a href="javascript:;">首页</a> > <a href="javascript:;"><?php echo ($title); ?> </a><?php if($titleL1): ?>> <a href="javascript:;"><?php echo ($titleL1); ?></a><?php endif; ?></div><?php endif; ?>
<div class="clear"></div>
<!--nav end-->

<div class="all">
  <div class="all_1">
    <div class="all_11"><?php echo ($data["name"]); ?></div>
    <div class="all_12">
      <div class="all_12_l" id="CuPlayer" class="video"></div>
      <div class="all_12_r">
      <div class="all_12_r1">
      
      	<h1>推荐列表</h1>
        <ul>
        	<?php if(is_array($recommend)): foreach($recommend as $key=>$v): ?><li>
		      		<div class="all_12_r1l"><a href="<?php echo U('Movie/play', ['id' => $v['id']]);?>"><img src="/xingkong/<?php echo ($v["face142"]); ?>" width="142" height="81" /></a></div>
            		<div class="all_12_r1r" style="line-height:20px;"><a href="<?php echo U('Movie/play', ['id' => $v['id']]);?>"><?php echo ($v["name"]); ?></a></div>
		         </li><?php endforeach; endif; ?>
        </ul>
      </div>
      </div>
       <div class="clear"></div>
    </div>
    
    <div class="all_13">
    <div class="all_13_l"><?php echo ($data["intro"]); ?></div>
    
    <div class="all_13_r bdsharebuttonbox"><span>分享：</span>
		<a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
    </div>
      <div class="clear"></div>
    </div>
    
    
    <div class="all_14">
   	  <h1>更多视频</h1>
    <ul>
    	<?php if(is_array($more)): foreach($more as $key=>$v): ?><li>
	         	<a href="<?php echo U('Movie/play', ['id' => $v['id']]);?>">
	      			<img src="/xingkong/<?php echo ($v["face96"]); ?>" width="96" height="85" />
	      		</a>
	      		<p><a href=""><?php echo (mb_substr($v["name"], 0, 7, 'UTF-8')); ?>...</a></p>
	         </li><?php endforeach; endif; ?>
    </ul>
    <div class="clear"></div>
    </div>
    
    <div class="all_15">
    <h1>影评</h1>
    <div class="all_151">
    	<form>
	    	 <textarea name="content" rows="1"  id="ue-content"></textarea>
	    	 <input type="hidden" value="<?php echo ($data["id"]); ?>" name="id">
	    	 <input type="image" src="/xingkong/Public/Home/images/btn.jpg" style="float:right; margin-right:30px; margin-top:10px;">
   		</form>
    </div>
    </div>
  </div>
  
  <div class="clear"></div>
</div>


<!--脚部开始-->
<div class="foot">
  <div class="foot_1">
    <div class="foot_11">
      <div class="foot_11_1">
        <div class="foot_11_1_1"> <img src="/xingkong/Public/Home/Images/11.png" width="58" height="58" /></div>
        <div class="foot_11_1_2">
          <p>商务合作</p>
          <p><strong>0851-1234567</strong></p>
        </div>
      </div>
      <div class="foot_11_1">
        <div class="foot_11_1_1"> <img src="/xingkong/Public/Home/Images/11.png" width="58" height="58" /></div>
        <div class="foot_11_1_2">
          <p>售票服务</p>
          <p><strong>0851-1234567</strong></p>
        </div>
      </div>
      <div class="foot_11_1 foot_11_1g">
        <div class="foot_11_1_1"> <img src="/xingkong/Public/Home/Images/12.png" width="64" height="64" /></div>
        <div class="foot_11_1_2">
          <p>官方微信</p>
          <p>获取更多影讯</p>
        </div>
      </div>
      <div class="foot_11_1 foot_11_1g">
        <div class="foot_11_1_1 "> <img src="/xingkong/Public/Home/Images/13.png" width="62" height="62" /></div>
        <div class="foot_11_1_2">
          <p>官方微博</p>
          <p>获取更多影讯</p>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="foot_12"> Copyright  2014-2015 贵州广电传媒集团-贵州星空影业有限公司  All Rights Reserved.  黔ICP备07000443号  技术支持：贵州慈恩软件开发有限公司 </div>
  </div>
</div>
<!--脚部结束-->
<script type="text/javascript" charset="utf-8" src="/xingkong/Public/Admin/vendor/jquery-1.11.1.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/xingkong/Public/Plugin/ueditor/ueditor.config_comment.js"></script>
<script type="text/javascript" charset="utf-8" src="/xingkong/Public/Plugin/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/xingkong/Public/Plugin/ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
	//实例化编辑器
	UE.getEditor('ue-content');
</script>
<script type="text/javascript">
	var swf = "/xingkong/Public/Plugin/Cuplay/CuPlayerMiniV4.swf";
	var flv = "/xingkong/<?php echo ($data["url"]); ?>";
	var php = "/xingkong/Public/Plugin/Cuplay/CuPlayerSetFile.php";
	var start = "/xingkong/Public/Plugin/Cuplay/images/load.gif";
	var so = new SWFObject(swf,"CuPlayerV4","752","454","9","#000000");
	so.addParam("allowfullscreen","true");
	so.addParam("allowscriptaccess","always");
	so.addParam("wmode","opaque");
	so.addParam("quality","high");
	so.addParam("salign","lt");
	so.addVariable("CuPlayerSetFile",php); 
	so.addVariable("CuPlayerFile",flv); 
	so.addVariable("CuPlayerImage",start);
	so.addVariable("CuPlayerWidth","600"); 
	so.addVariable("CuPlayerHeight","410"); 
	so.addVariable("CuPlayerAutoPlay","yes"); 
	//so.addVariable("CuPlayerLogo","images/logo.png"); 
	//so.addVariable("CuPlayerPosition","bottom-right"); 
	so.write("CuPlayer");
</script>

<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

<script>
	$(function() {
		var url = "<?php echo U('Movie/comment');?>";
		$('input[type=image]').click(function() {
			var data = $('form').serialize();
			$.ajax({
				  method  : "POST",
				  url     : url,
				  data    : data,
				  success : function(data){
					  if (data == 1) {
						  alert('评论成功');
					  } else {
						  alert('评论失败');
					  }
				  }
			})
			return false;
		});
	});


</script>



</body>
</html>