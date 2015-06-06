<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if($titleL1): echo ($titleL1); ?>-<?php endif; echo ($title); ?>-<?php echo C('SITE_NAME');?></title>
<link href="/xingkong/Public/Home/css/public.css" rel="stylesheet" type="text/css" />
<!-- page special css plugin here -->
<link href="/xingkong/Public/Home/css/xkdy.css" rel="stylesheet" type="text/css" />
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
<div class="all">
  <div class="all_1"> 
		<a href="<?php echo U('Interaction/index');?>">热门活动</a>
		<a class="zzsy" href="<?php echo U('Interaction/exchange');?>">积分兑换</a>
		<a href="<?php echo U('Interaction/lostAndFound');?>">失物招领</a>
   </div>
  <div class="all_4">
    <div class="all_41">
      <div class="all_41_1"><img src="/xingkong/Public/Home/images/19.png" width="236" height="181" /></div>
      <div class="all_41_2"><p><strong>GGV套餐</strong></p>
      <p>大爆米花1份+中杯可乐2杯+烤肠2支</p>
      </div>
      <div class="all_41_3"><strong>2000份</strong><span>积分：300</span></div>
      <div class="all_41_4"><a href="#"><img src="/xingkong/Public/Home/images/20.png" width="94" height="32" /></a></div>
    </div><div class="all_41">
      <div class="all_41_1"><img src="/xingkong/Public/Home/images/19.png" width="236" height="181" /></div>
      <div class="all_41_2"><p><strong>GGV套餐</strong></p>
      <p>大爆米花1份+中杯可乐2杯+烤肠2支</p>
      </div>
      <div class="all_41_3"><strong>2000份</strong><span>积分：300</span></div>
      <div class="all_41_4"><a href="#"><img src="/xingkong/Public/Home/images/20.png" width="94" height="32" /></a></div>
    </div><div class="all_41">
      <div class="all_41_1"><img src="/xingkong/Public/Home/images/19.png" width="236" height="181" /></div>
      <div class="all_41_2"><p><strong>GGV套餐</strong></p>
      <p>大爆米花1份+中杯可乐2杯+烤肠2支</p>
      </div>
      <div class="all_41_3"><strong>2000份</strong><span>积分：300</span></div>
      <div class="all_41_4"><a href="#"><img src="/xingkong/Public/Home/images/20.png" width="94" height="32" /></a></div>
    </div><div class="all_41">
      <div class="all_41_1"><img src="/xingkong/Public/Home/images/19.png" width="236" height="181" /></div>
      <div class="all_41_2"><p><strong>GGV套餐</strong></p>
      <p>大爆米花1份+中杯可乐2杯+烤肠2支</p>
      </div>
      <div class="all_41_3"><strong>2000份</strong><span>积分：300</span></div>
      <div class="all_41_4"><a href="#"><img src="/xingkong/Public/Home/images/20.png" width="94" height="32" /></a></div>
    </div>
       <div class="all_41">
      <div class="all_41_1"><img src="/xingkong/Public/Home/images/19.png" width="236" height="181" /></div>
      <div class="all_41_2"><p><strong>GGV套餐</strong></p>
      <p>大爆米花1份+中杯可乐2杯+烤肠2支</p>
      </div>
      <div class="all_41_3"><strong>2000份</strong><span>积分：300</span></div>
      <div class="all_41_4"><a href="#"><img src="/xingkong/Public/Home/images/20.png" width="94" height="32" /></a></div>
    </div><div class="all_41">
      <div class="all_41_1"><img src="/xingkong/Public/Home/images/19.png" width="236" height="181" /></div>
      <div class="all_41_2"><p><strong>GGV套餐</strong></p>
      <p>大爆米花1份+中杯可乐2杯+烤肠2支</p>
      </div>
      <div class="all_41_3"><strong>2000份</strong><span>积分：300</span></div>
      <div class="all_41_4"><a href="#"><img src="/xingkong/Public/Home/images/20.png" width="94" height="32" /></a></div>
    </div><div class="all_41">
      <div class="all_41_1"><img src="/xingkong/Public/Home/images/19.png" width="236" height="181" /></div>
      <div class="all_41_2"><p><strong>GGV套餐</strong></p>
      <p>大爆米花1份+中杯可乐2杯+烤肠2支</p>
      </div>
      <div class="all_41_3"><strong>2000份</strong><span>积分：300</span></div>
      <div class="all_41_4"><a href="#"><img src="/xingkong/Public/Home/images/20.png" width="94" height="32" /></a></div>
    </div><div class="all_41">
      <div class="all_41_1"><img src="/xingkong/Public/Home/images/19.png" width="236" height="181" /></div>
      <div class="all_41_2"><p><strong>GGV套餐</strong></p>
      <p>大爆米花1份+中杯可乐2杯+烤肠2支</p>
      </div>
      <div class="all_41_3"><strong>2000份</strong><span>积分：300</span></div>
      <div class="all_41_4"><a href="#"><img src="/xingkong/Public/Home/images/20.png" width="94" height="32" /></a></div>
    </div>
       <div class="all_41">
      <div class="all_41_1"><img src="/xingkong/Public/Home/images/19.png" width="236" height="181" /></div>
      <div class="all_41_2"><p><strong>GGV套餐</strong></p>
      <p>大爆米花1份+中杯可乐2杯+烤肠2支</p>
      </div>
      <div class="all_41_3"><strong>2000份</strong><span>积分：300</span></div>
      <div class="all_41_4"><a href="#"><img src="/xingkong/Public/Home/images/20.png" width="94" height="32" /></a></div>
    </div><div class="all_41">
      <div class="all_41_1"><img src="/xingkong/Public/Home/images/19.png" width="236" height="181" /></div>
      <div class="all_41_2"><p><strong>GGV套餐</strong></p>
      <p>大爆米花1份+中杯可乐2杯+烤肠2支</p>
      </div>
      <div class="all_41_3"><strong>2000份</strong><span>积分：300</span></div>
      <div class="all_41_4"><a href="#"><img src="/xingkong/Public/Home/images/20.png" width="94" height="32" /></a></div>
    </div><div class="all_41">
      <div class="all_41_1"><img src="/xingkong/Public/Home/images/19.png" width="236" height="181" /></div>
      <div class="all_41_2"><p><strong>GGV套餐</strong></p>
      <p>大爆米花1份+中杯可乐2杯+烤肠2支</p>
      </div>
      <div class="all_41_3"><strong>2000份</strong><span>积分：300</span></div>
      <div class="all_41_4"><a href="#"><img src="/xingkong/Public/Home/images/20.png" width="94" height="32" /></a></div>
    </div><div class="all_41">
      <div class="all_41_1"><img src="/xingkong/Public/Home/images/19.png" width="236" height="181" /></div>
      <div class="all_41_2"><p><strong>GGV套餐</strong></p>
      <p>大爆米花1份+中杯可乐2杯+烤肠2支</p>
      </div>
      <div class="all_41_3"><strong>2000份</strong><span>积分：300</span></div>
      <div class="all_41_4"><a href="#"><img src="/xingkong/Public/Home/images/20.png" width="94" height="32" /></a></div>
    </div>
    
    
   
      <div class="clear"></div>
       <div class="page"><span>1</span>共3页 去
         <input name="" type="text" value="1" />页　　</div>
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
</body>
</html>