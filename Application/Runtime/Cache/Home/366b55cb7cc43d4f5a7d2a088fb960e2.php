<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if($titleL1): echo ($titleL1); ?>-<?php endif; echo ($title); ?>-<?php echo C('SITE_NAME');?></title>
<link href="/xingkong/Public/Home/css/public.css" rel="stylesheet" type="text/css" />
<!-- page special css plugin here -->
<link rel="stylesheet" href="/xingkong/Public/Home/css/lrtk.css" type="text/css" media="screen" charset="gb2312" />
<link href="/xingkong/Public/Home/css/gbg.css" rel="stylesheet" type="text/css" />
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
  
  <div class="orbit-wrapper">
    <div id="featured" class="orbit"> <a href="#"><img src="/xingkong/Public/Home/Images/01.jpg" width="350" alt="《Just Married》" title="《Just Married》"></a> <a href="#"><img src="/xingkong/Public/Home/Images/02.jpg" width="350" alt="《佩加索斯》" title="《佩加索斯》"></a> <a href="#"><img src="/xingkong/Public/Home/Images/03.jpg" width="350" alt="《太庙的一场偶遇》" title="《太庙的一场偶遇》"></a> <a href="#"><img src="/xingkong/Public/Home/Images/04.jpg" width="350" alt="《为爱痴狂》" title="《为爱痴狂》"></a> <a href="#"><img src="/xingkong/Public/Home/Images/05.jpg" width="350" alt="《游走，在北京的每一条街》" title="《游走，在北京的每一条街》"></a> </div>
    <div class="claer"></div>
  </div>
  <!-- 代码 结束 -->
  
  <div class="all_1">
    <div class="all_1l">
      <div class="all_1l_l">
        <div class="all_1l_ll"><strong>电视电影</strong>TV＆MOVIE</div>
        <div class="all_1l_lr">MORE+</div>
        <div class="clear"></div>
      </div>
      <div class="all_1l_2">
        <div class="all_1l_2l"><img src="/xingkong/Public/Home/Images/43.png" width="368" height="276" />
          <p><a href="#"><strong>陈凯歌"完成穿越回归人家"</strong></a></p>
          <p>由新丽传媒、21世纪盛凯影业出品，陈凯歌导演，高圆圆、姚晨、赵又廷、陈红、王学圻、王珞丹、陈燃、张译主演的当代都市题材电影</p>
        </div>
        <div class="all_1l_2r">
          <ul>
            <li> <img src="/xingkong/Public/Home/Images/44.png" width="208" height="156" />
              <p><a href="#">陈凯歌"完成穿越回归人间"</a></p>
            </li>
            <li> <img src="/xingkong/Public/Home/Images/44.png" width="208" height="156" />
              <p><a href="#">陈凯歌"完成穿越回归人间"</a></p>
            </li>
            <li> <img src="/xingkong/Public/Home/Images/44.png" width="208" height="156" />
              <p><a href="#">陈凯歌"完成穿越回归人间"</a></p>
            </li>
            <li> <img src="/xingkong/Public/Home/Images/44.png" width="208" height="156" />
              <p><a href="#">陈凯歌"完成穿越回归人间"</a></p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="all_1r">
      <div class="all_lr_1">
        <div class="all_lr_1l">广播简简介</div>
        <div class="all_lr_1r"><img src="/xingkong/Public/Home/Images/45.png" width="37" height="24" /></div>
        <div class="clear"></div>
      </div>
      <div class="all_lr_2"> 伴随着贵州电视台锐意进取的改革步伐,《贵州广播电视报》坚持以娱乐资讯为自身特色，不断创新提高，使内容更加喜闻乐见，贴近生活、成为贵州省唯一的大型文娱资证综合类报纸。其"社会""生活""影视""体育"等栏目和精彩的版面，深受读者喜爱。《贵州广播电视报》坚持以娱乐资讯为自身特色，不断创新提高，使内容更加喜闻乐见，贴近生活、成为贵州省唯一的大型文娱资证综合类报纸。</div>
      <div class="all_lr_3">
        <div class="all_lr_3l"><img src="/xingkong/Public/Home/Images/46.png" width="102" height="102" /></div>
        <div class="all_lr_3r">
          <p>扫一扫</p>
          <p>关注广电报微信</p>
          <p>新闻热线：0851-1234567</p>
          <p>发行热线：0851-7654321 </p>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="all_2">
    <div class="all_21">
      <div class="all_21_l "><strong>娱乐时尚</strong>TV&amp;MOVIE</div>
      <div class="all_21_r ">MORE+</div>
      <div class="clear"></div>
    </div>
    <div class="all_22">
    <ul><li><img src="/xingkong/Public/Home/Images/47.png" width="258" height="341" /><span>明星机场装 大气简约范儿足够了</span></li><li><img src="/xingkong/Public/Home/Images/47.png" width="258" height="341" /><span>明星机场装 大气简约范儿足够了</span></li><li><img src="/xingkong/Public/Home/Images/47.png" width="258" height="341" /><span>明星机场装 大气简约范儿足够了</span></li><li><img src="/xingkong/Public/Home/Images/47.png" width="258" height="341" /><span>明星机场装 大气简约范儿足够了</span></li>
    </ul></div>
  </div>
  
  <DIV class="all_3">
  <div class="all_21">
      <div class="all_21_l all_21_la"><strong>健康</strong>HEALTHY</div>
      <div class="all_21_r all_21_ra">MORE+</div>
      <div class="clear"></div>
    </div>
    
    <div class="all_22">
    <ul><li><img src="/xingkong/Public/Home/Images/47.png" width="258" height="341" /></li><li><img src="/xingkong/Public/Home/Images/49.png" width="255" height="256" /><p>
    
 <strong>晚睡晚起不利于身体健康</strong>
    </p>
      <p>
    人要根据四季变化来调整自己的作息，顺应自然，能够改善睡眠质量，起到很好的养生作。如</p></li><li><img src="/xingkong/Public/Home/Images/49.png" width="255" height="256" /><p>
    
 <strong>晚睡晚起不利于身体健康</strong>
    </p>
      <p>
    人要根据四季变化来调整自己的作息，顺应自然，能够改善睡眠质量，起到很好的养生作。如</p></li><li><img src="/xingkong/Public/Home/Images/49.png" width="255" height="256" /><p>
    
 <strong>晚睡晚起不利于身体健康</strong>
    </p>
      <p>
    人要根据四季变化来调整自己的作息，顺应自然，能够改善睡眠质量，起到很好的养生作。如</p></li>
    </ul></div>
    </DIV><DIV class="all_3">
  <div class="all_21">
      <div class="all_21_l all_21_la"><strong>美食</strong>FOOD</div>
      <div class="all_21_r all_21_ra">MORE+</div>
      <div class="clear"></div>
    </div>
    
    <div class="all_22">
    <ul><li><img src="/xingkong/Public/Home/Images/47.png" width="258" height="341" /></li><li><img src="/xingkong/Public/Home/Images/49.png" width="255" height="256" /><p>
    
 <strong>晚睡晚起不利于身体健康</strong>
    </p>
      <p>
    人要根据四季变化来调整自己的作息，顺应自然，能够改善睡眠质量，起到很好的养生作。如</p></li><li><img src="/xingkong/Public/Home/Images/49.png" width="255" height="256" /><p>
    
 <strong>晚睡晚起不利于身体健康</strong>
    </p>
      <p>
    人要根据四季变化来调整自己的作息，顺应自然，能够改善睡眠质量，起到很好的养生作。如</p></li><li><img src="/xingkong/Public/Home/Images/49.png" width="255" height="256" /><p>
    
 <strong>晚睡晚起不利于身体健康</strong>
    </p>
      <p>
    人要根据四季变化来调整自己的作息，顺应自然，能够改善睡眠质量，起到很好的养生作。如</p></li>
    </ul></div>
    </DIV>
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
<script type="text/javascript" src="/xingkong/Public/Home/js/jquery.min.js"></script>
<script type="text/javascript" src="/xingkong/Public/Home/js/jq.orbit.js"></script> 
  <script type="text/javascript" src="/xingkong/Public/Home/js/orbit.js"></script> 
<!--脚部结束-->
</body>
</html>