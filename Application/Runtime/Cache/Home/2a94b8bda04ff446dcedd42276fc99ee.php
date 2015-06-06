<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if($titleL1): echo ($titleL1); ?>-<?php endif; echo ($title); ?>-<?php echo C('SITE_NAME');?></title>
<link href="/xingkong/Public/Home/css/public.css" rel="stylesheet" type="text/css" />
<!-- page special css plugin here -->
<link href="/xingkong/Public/Home/css/index.css" rel="stylesheet" type="text/css" />
<link href="/xingkong/Public/Home/css/index-focus.css" rel="stylesheet" type="text/css" />
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
<!-- focus -->
<div class="idx-focus" id="j_idx_focus">
	
	<div class="idx-foc-tmp">
		<ul class="focus-pic" rel="xtaberItems">
			<a href="#" class="white">
				<li class="xtaber-item" back-img="/xingkong/Public/Home/images/f01.jpg"></li>
			<a href="#" class="white"></a>
				<li class="xtaber-item" back-img="/xingkong/Public/Home/images/f01.jpg"></li>
			</a>
			<a href="#" class="white">
				<li class="xtaber-item" back-img="/xingkong/Public/Home/images/f01.jpg"></li>
			</a>
		</ul>
	</div>
	<div  class="xtaber-tabs">
		<ul rel="xtaberTabs" id="tab-ul">
			<li rel="xtaberTabItem" class="current">
				<img src="/xingkong/Public/Home/images/images/s_90_54_20131107112540527b08344b08c.jpg" >
			</li>
			<li rel="xtaberTabItem"><img src="/xingkong/Public/Home/images/images/s_90_54_20131108165940527ca7fc97ed8.jpg" ></li>
			<li rel="xtaberTabItem"><img src="/xingkong/Public/Home/images/images/s_90_54_2013111114355452807acaf1c6d.jpg" ></li>
		</ul>
	</div>
	<li class="bg"></li>
	
	<a href="javascript:;" class="btn-prev"></a>
	<a href="javascript:;" class="btn-next"></a>
</div>

<!-- focus end -->

<div class="all">
  <div class="all_1">
    <div class="all_1l">
      <div class="all_1l_1"><a href="#">更多》</a><strong>热点新闻</strong></div>
      <div class="all_1l_2">
        <div class="all_1l_2l"><img src="/xingkong/Public/Home/images/68.png" width="139" height="95" /></div>
        <div class="all_1l_2r">
          <h3>贵州旅游广播"旅游偶像"颁奖</h3>
          <p>由贵州旅游广播主办的得利多莱平安夜旅游偶像——水墨不插电音乐会在陕西路水墨春秋咖啡厅举行。主持人、众多旅游偶像及听众度过了一个愉快的平安夜晚。</p>
        </div>
        <div class="clear"></div>
      </div>
      <div class="all_1l_3">
        <ul>
          <li><span>04-01</span><a href="#">广电集团领导到贵州广播电视报社慰问加班</a></li>
          <li><span>04-01</span><a href="#">广电集团领导到贵州广播电视报社慰问加班</a></li>
          <li><span>04-01</span><a href="#">广电集团领导到贵州广播电视报社慰问加班</a></li>
        </ul>
      </div>
    </div>
    <div class="all_1r">
      <div class="all_1l_1"><a href="#">更多》</a><strong>视频</strong></div>
      <div class="all_1r_1">
        <ul>
          <li><img src="/xingkong/Public/Home/images/69.png" width="160" height="181" /></li>
          <li><img src="/xingkong/Public/Home/images/69.png" width="160" height="181" /></li>
          <li><img src="/xingkong/Public/Home/images/69.png" width="160" height="181" /></li>
          <li><img src="/xingkong/Public/Home/images/69.png" width="160" height="181" /></li>
        </ul>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="all_2">
    <div class="all_2l"> <img src="/xingkong/Public/Home/images/70.png" width="812" height="318" /></div>
    <div class="all_2r">
      <div class="all_2r_1"> 伴随着贵州电视台锐意进取的改革步伐,《贵州广播电视报》坚持以娱乐资讯为自身特色，不断创新提高，使内容更加喜闻乐见，贴近生活、成为贵州省唯一的大型文娱资证综合类报纸。其"社会""生活""影视""体育"等栏目和精彩的版面，深受读者喜爱。《贵州广播电视报》坚持以娱乐资讯为自身特色，不断创新提高，使内容更加喜闻乐见，贴近生活、成为贵州省唯一的大型文娱资证综合类报纸。</div>
      <div class="all_2r_2">
        <div class="all_2r_2l"><img src="/xingkong/Public/Home/images/71.png" width="88" height="88" /></div>
        <div class="all_2r_2r">
          <p><strong>扫一扫</strong></p>
          <p><strong>关注广电报威信</strong></p>
          <p><strong>新闻热线：</strong>0851-1234567</p>
          <p><strong>发行热线：</strong>0851-1231233</p>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="all_3">
    <div class="all_3l">
      <div class="all_3l_1"> <a class="sangying" href="#">影城正在上映</a><a href="#">即将上映</a> </div>
      <div class="all_3l_2">
        <ul>
          <li><img src="/xingkong/Public/Home/images/72.png" width="186" height="248" /></li>
          <li><img src="/xingkong/Public/Home/images/72.png" width="186" height="248" /></li>
          <li><img src="/xingkong/Public/Home/images/72.png" width="186" height="248" /></li>
          <li><img src="/xingkong/Public/Home/images/72.png" width="186" height="248" /></li>
          <li><img src="/xingkong/Public/Home/images/72.png" width="186" height="248" /></li>
          <li><img src="/xingkong/Public/Home/images/72.png" width="186" height="248" /></li>
          <li><img src="/xingkong/Public/Home/images/72.png" width="186" height="248" /></li>
          <li><img src="/xingkong/Public/Home/images/72.png" width="186" height="248" /></li>
          <li><img src="/xingkong/Public/Home/images/72.png" width="186" height="248" /></li>
          <li><img src="/xingkong/Public/Home/images/72.png" width="186" height="248" /></li>
          <li><img src="/xingkong/Public/Home/images/72.png" width="186" height="248" /></li>
          <li><img src="/xingkong/Public/Home/images/72.png" width="186" height="248" /></li>
          <li><img src="/xingkong/Public/Home/images/72.png" width="186" height="248" /></li>
          <li><img src="/xingkong/Public/Home/images/72.png" width="186" height="248" /></li>
          <li><img src="/xingkong/Public/Home/images/72.png" width="186" height="248" /></li>
          <li><img src="/xingkong/Public/Home/images/72.png" width="186" height="248" /></li>
          <li><img src="/xingkong/Public/Home/images/72.png" width="186" height="248" /></li>
          <li><img src="/xingkong/Public/Home/images/72.png" width="186" height="248" /></li>
          <li><img src="/xingkong/Public/Home/images/72.png" width="186" height="248" /></li>
          <li><img src="/xingkong/Public/Home/images/72.png" width="186" height="248" /></li>
        </ul>
      </div>
    </div>
    <div class="all_3r" >
      <div class="all_3r_1">
        <ul>
          <li><img src="/xingkong/Public/Home/images/73.png" width="88" height="86" /></li>
          <li><img src="/xingkong/Public/Home/images/74.png" width="88" height="86" /></li>
          <li><img src="/xingkong/Public/Home/images/75.png" width="88" height="86" /></li>
          <li><img src="/xingkong/Public/Home/images/76.png" width="88" height="86" /></li>
          <li><img src="/xingkong/Public/Home/images/77.png" width="88" height="86" /></li>
          <li><img src="/xingkong/Public/Home//xingkong/Public/Home/images/78.png" width="88" height="86" /></li>
        </ul>
      </div>
      <div class="all_3r_2"> <img src="/xingkong/Public/Home/images/79.png" width="278" height="110" /><img src="/xingkong/Public/Home/images/80.png" width="278" height="110" /><img src="/xingkong/Public/Home/images/81.png" width="278" height="110" /><img src="/xingkong/Public/Home/images/82.png" width="278" height="110" /><img src="/xingkong/Public/Home/images/83.png" width="278" height="110" /></div>
    </div>
  </div>
  <div class="clear"></div>
</div>


<div class="friendship">
<div class="friendship_1">
<div class="friendship_l">
友情链接：

</div><div class="friendship_r">
  <img src="/xingkong/Public/Home/images/84.png" width="161" height="54" /><img src="/xingkong/Public/Home/images/85.png" width="161" height="54" /><img src="/xingkong/Public/Home/images/86.png" width="161" height="54" /><img src="/xingkong/Public/Home/images/87.png" width="161" height="54" /><img src="/xingkong/Public/Home/images/88.png" width="161" height="54" /><img src="/xingkong/Public/Home/images/89.png" width="161" height="54" /></div>

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
<script src="/xingkong/Public/Home/js/jquery.min.js"></script>
<script src="/xingkong/Public/Home/js/index-focus.js"></script>
<script src="/xingkong/Public/Home/js/jquery.taber.js"></script>
<script type="text/javascript">
$(function(){
    /* 首页焦点图 */
    if(isNeeded('#j_idx_focus')){
        var obj = $('#j_idx_focus');
        $.fn.xTaber({
            content: obj,
            tab: obj,
            auto: true,
            style: 'left',
            prev: obj.find('.btn-prev'),
            next: obj.find('.btn-next')
        });
    }
});
</script>
<!--脚部结束-->
</body>
</html>