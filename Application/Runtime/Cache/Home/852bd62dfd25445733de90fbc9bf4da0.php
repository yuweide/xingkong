<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if($titleL1): echo ($titleL1); ?>-<?php endif; echo ($title); ?>-<?php echo C('SITE_NAME');?></title>
<link href="/xingkong/Public/Home/css/public.css" rel="stylesheet" type="text/css" />
<!-- page special css plugin here -->
<link href="/xingkong/Public/Home/css/foucs.css" rel="stylesheet" />
<script src="/xingkong/Public/Home/js/foucs.js" type="text/javascript"></script>
<link href="/xingkong/Public/Home/css/ys.css" rel="stylesheet" type="text/css" />
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
        <p>广播报</p>
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
<!-- focues start -->
<div class="mod_focus_show" id="divimgplay">
  <ul class="mod_focus_pic" id="divimginfog_imgPlayer">
    <li><a href="javascript:;" target="_blank"> <img src="/xingkong/Public/Home/images/b01.jpg" alt="" width="1120" height="400" /></a></li>
    <li><a href="javascript:;" target="_blank"> <img src="/xingkong/Public/Home/images/b02.jpg" alt="" width="1120" height="400" /></a></li>
    <li><a href="javascript:;" target="_blank"> <img src="/xingkong/Public/Home/images/b03.jpg" alt="" width="1120" height="400" /></a></li>
    <li><a href="javascript:;" target="_blank"> <img src="/xingkong/Public/Home/images/b04.jpg" alt="" width="1120" height="400" /></a></li>
    <li><a href="javascript:;" target="_blank"> <img src="/xingkong/Public/Home/images/b05.jpg" alt="" width="1120" height="400" /></a></li>
    <li><a href="javascript:;" target="_blank"> <img src="/xingkong/Public/Home/images/b06.jpg" alt="" width="1120" height="400" /></a></li>
  </ul>
  <ul class="mod_focus_title" id="ptitleg_imgPlayer">
    <li class="current">
      <h3><a href="javascript:;" target="_blank"></a></h3>
      <p></p>
    </li>
  </ul>
  <div class="focus_switch"><a href="javascript:;" class="icon_prev"></a><a href="javascript:;" class="icon_next"></a></div>
  <ul class="mod_focus_list" id="divpageinfog_imgPlayer">
    <li class="current"><a href="javascript:;" target="_blank"> <img src="/xingkong/Public/Home/images/small01.jpg" alt="第1张图片的描述信息" width="60" height="60" /><span class="border"></span><span class="mask"></span></a></li>
    <li><a href="javascript:;" target="_blank"> <img src="/xingkong/Public/Home/images/small02.jpg" alt="第2张图片的描述信息" width="60" height="60" /><span class="border"></span><span class="mask"></span></a></li>
    <li><a href="javascript:;" target="_blank"> <img src="/xingkong/Public/Home/images/small03.jpg" alt="第3张图片的描述信息" width="60" height="60" /><span class="border"></span><span class="mask"></span></a></li>
    <li><a href="javascript:;" target="_blank"> <img src="/xingkong/Public/Home/images/small04.jpg" alt="第4张图片的描述信息" width="60" height="60" /><span class="border"></span><span class="mask"></span></a></li>
    <li><a href="javascript:;" target="_blank"> <img src="/xingkong/Public/Home/images/small05.jpg" alt="第5张图片的描述信息" width="60" height="60" /><span class="border"></span><span class="mask"></span></a></li>
    <li><a href="javascript:;" target="_blank"> <img src="/xingkong/Public/Home/images/small06.jpg" alt="第6张图片的描述信息" width="60" height="60" /><span class="border"></span><span class="mask"></span></a></li>
  </ul>
</div>
<script type="text/javascript">
        foucsbox(2500);
</script> 
<!-- focus end -->
<div class="all">
<div class="all_1">
<div class="all_1l">
      <div class="all_1l_1">
      	<div class="all_1l_11">
        <a href="<?php echo U('Movie/lists', array('cid' => 4));?>">MORE+</a><strong>微电影大赛展播</strong><span>MICRO FFFILM CONTEST</span>
        </div>
      <div class="all_1l_12">
      	<ul>
      		<?php if(is_array($micro)): foreach($micro as $key=>$v): ?><li>
	            	<a href="<?php echo U('Movie/play', ['id' => $v['id']]);?>"><img src="/xingkong/<?php echo ($v["face196"]); ?>" width="196" height="110" /></a> 
	            	<p><?php echo (mb_substr($v["name"], 0, 15, 'UTF-8')); ?>...</p>
	            </li><?php endforeach; endif; ?>
        </ul>
      </div>
      <div class="clear"></div>
      </div>   <div class="all_1l_1">
      	<div class="all_1l_11">
        <a href="<?php echo U('Movie/lists', array('cid' => 5));?>">MORE+</a><strong>多彩贵州作品</strong><span>COLORFUL GUIZHOU WORKS</span>
        </div>
      <div class="all_1l_12">
      	<ul>
        	<?php if(is_array($colorful)): foreach($colorful as $key=>$v): ?><li>
	            	<a href="<?php echo U('Movie/play', ['id' => $v['id']]);?>"><img src="/xingkong/<?php echo ($v["face196"]); ?>" width="196" height="110" /></a>
	            	<p><?php echo (mb_substr($v["name"], 0, 15, 'UTF-8')); ?>...</p>
	            </li><?php endforeach; endif; ?>
        </ul>
      
      
      </div>
      <div class="clear"></div>
       </div>   <div class="all_1l_1">
      	<div class="all_1l_11">
        <a href="<?php echo U('Movie/lists', array('cid' => 6));?>">MORE+</a><strong>原创草根</strong><span>THE ORIGINAL ROOT </span>
        </div>
      <div class="all_1l_12">
      	<ul>
        	<?php if(is_array($root)): foreach($root as $key=>$v): ?><li>
	            	<a href="<?php echo U('Movie/play', ['id' => $v['id']]);?>"><img src="/xingkong/<?php echo ($v["face196"]); ?>" width="196" height="110" /></a>
	            	<p><?php echo (mb_substr($v["name"], 0, 15, 'UTF-8')); ?>...</p>
	            </li><?php endforeach; endif; ?>
        </ul>
      
      
      </div>
      <div class="clear"></div>
       </div>
    </div>
<div class="all_1r">
  <div class="all_1r_3g">  <div class="all_1r_1">
    推荐视频
    </div>
    
     <div class="all_1r_2">
     <ul>
     	<?php if(is_array($recommend)): foreach($recommend as $key=>$v): ?><li>
	     		<a href="<?php echo U('Movie/play', ['id' => $v['id']]);?>">
	     			<img src="/xingkong/<?php echo ($v["face80"]); ?>" width="80" height="45" />
	     		</a>
	     		<p> <?php echo (mb_substr($v["name"], 0, 5, 'UTF-8')); ?>...</p>
	   		</li><?php endforeach; endif; ?>
	</ul>
     <div class="clear"></div>
  </div> </div><div class="all_1r_3g"> <div class="all_1r_1">
    相关动态
    </div>
<div class="all_1r_3">
  <p>
  
  <a href="#">
  <strong>一个落魄流离失...</strong>
  微电影《占位》屌丝男偷窥车震引血光之灾
  </a>
  </p><img src="images/41.png" width="120" height="70" /> </div>
  
  
  <div class="all_1r_31">
	<ul><li><a href="#">微电影《她们》上集：家境贫寒女</a></li><li><a href="#">微电影《她们》上集：家境贫寒女</a></li><li><a href="#">微电影《她们》上集：家境贫寒女</a></li><li><a href="#">微电影《她们》上集：家境贫寒女</a></li><li><a href="#">微电影《她们》上集：家境贫寒女</a></li><li><a href="#">微电影《她们》上集：家境贫寒女</a></li><li><a href="#">微电影《她们》上集：家境贫寒女</a></li><li><a href="#">微电影《她们》上集：家境贫寒女</a></li></ul>  
  
  
  </div>  <div class="clear"></div></div>
  
  
  <div class="all_1r_3g all_1r_4"> <div class="all_1r_1">
    合作企业
    </div>
    
    <img src="/xingkong/Public/Home/images/42.png" width="245" height="115" /><img src="/xingkong/Public/Home/images/42.png" width="245" height="115" />    <img src="/xingkong/Public/Home/images/42.png" width="245" height="115" /></div>
  <div class="clear"></div>
</div>
<div class="clear"></div>



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
</body>
</html>