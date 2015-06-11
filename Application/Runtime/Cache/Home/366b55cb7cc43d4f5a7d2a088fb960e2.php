<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if($titleL1): echo ($titleL1); ?>-<?php endif; echo ($title); ?>-<?php echo C('SITE_NAME');?></title>
<link href="/xingkong/Public/Home/css/public.css" rel="stylesheet" type="text/css" />
<!-- page special css plugin here -->
<link rel="stylesheet" href="/xingkong/Public/Home/css/lrtk.css" type="text/css" media="screen" />
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
  
  <div class="orbit-wrapper">
    <div id="featured" class="orbit"> 
      <?php if(is_array($kanwu)): foreach($kanwu as $key=>$v): ?><a target="_blank" href="<?php echo U('Kanwu/viewer', ['id' => $v['id']]);?>">
          <img src="/xingkong/<?php echo ($v["face508"]); ?>" width="350" alt="第<?php echo ($v["number"]); ?>期" title="第<?php echo ($v["number"]); ?>期">
        </a><?php endforeach; endif; ?>
      
      </div>
    <div class="claer"></div>
  </div>
  <!-- 代码 结束 -->
  
  <div class="all_1">
    <div class="all_1l">
      <div class="all_1l_l">
        <div class="all_1l_ll"><strong>电视电影</strong>TV＆MOVIE</div>
        <div class="all_1l_lr"><a href="<?php echo U('article', ['cid' => 10]);?>">MORE+</a></div>
        <div class="clear"></div>
      </div>
      <div class="all_1l_2">
        <div class="all_1l_2l">
          <a href="<?php echo U('Kanwu/detail', ['id' => $dsdy_hot['id']]);?>">
            <img src="/xingkong/<?php echo ($dsdy_hot["face368"]); ?>" width="368" height="276" />
          </a>
          <p><a href="<?php echo U('Kanwu/detail', ['id' => $dsdy_hot['id']]);?>"><strong><?php echo ($dsdy_hot["title"]); ?></strong></a></p>
          <p><?php echo ($dsdy_hot["desc"]); ?></p>
        </div>
        <div class="all_1l_2r">
          <ul>
            <?php if(is_array($dsdy)): foreach($dsdy as $key=>$v): ?><li> 
                <a href="<?php echo U('Kanwu/detail', ['id' => $v['id']]);?>">
                  <img src="/xingkong/<?php echo ($v["face208"]); ?>" width="208" height="156" />
                  <p><?php echo (mb_substr($v["title"], 0, 11, 'UTF-8')); ?>...</p>
                </a>
              </li><?php endforeach; endif; ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="all_1r">
      <div class="all_lr_1">
        <div class="all_lr_1l">广电报简介</div>
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
      <div class="all_21_l "><strong>娱乐时尚</strong>FASHION</div>
      <div class="all_21_r "><a href="<?php echo U('article', ['cid' => 11]);?>">MORE+</a></div>
      <div class="clear"></div>
    </div>
  </div>
    <div class="all_22">
    <ul>
        <?php if(is_array($ylss)): foreach($ylss as $key=>$v): ?><li> 
            <a href="<?php echo U('Kanwu/detail', ['id' => $v['id']]);?>">
              <img src="/xingkong/<?php echo ($v["face258"]); ?>" width="258" height="341" />
            </a>
              <span><?php echo (mb_substr($v["title"], 0, 14, 'UTF-8')); ?></span>
          </li><?php endforeach; endif; ?>
  </div>
  
  <div class="all_3">
    <div class="all_21">
        <div class="all_21_l all_21_la"><strong>健康</strong>HEALTHY</div>
        <div class="all_21_r all_21_ra"><a href="<?php echo U('article', ['cid' => 10]);?>">MORE+</a></div>
        <div class="clear"></div>
    </div>
      
    <div class="all_22">
      <ul>
        <li>
          <img src="/xingkong/Public/Home/Images/health.jpg" width="258" height="341" />
        </li>
        <?php if(is_array($jk)): foreach($jk as $key=>$v): ?><li> 
            <a href="<?php echo U('Kanwu/detail', ['id' => $v['id']]);?>">
              <img src="/xingkong/<?php echo ($v["face255"]); ?>" width="255" height="256" />
              <p>
                <strong><?php echo (mb_substr($v["title"], 0, 14, 'UTF-8')); ?></strong>
              </p>
              <p>
                <?php echo (mb_substr($v["desc"], 0, 40, 'UTF-8')); ?>
              </p>
            </a>
          </li><?php endforeach; endif; ?>
      </ul>
    </div>
  </div>
  <div class="all_3">
  
  <div class="all_21">
    <div class="all_21_l all_21_la"><strong>美食</strong>FOOD</div>
    <div class="all_21_r all_21_ra"><a href="<?php echo U('article', ['cid' => 10]);?>">MORE+</a></div>
    <div class="clear"></div>
  </div>
    
    
    <div class="all_22">
      <ul>
        <li><img src="/xingkong/Public/Home/Images/food.jpg" width="258" height="341" /></li>
        <?php if(is_array($ms)): foreach($ms as $key=>$v): ?><li> 
            <a href="<?php echo U('Kanwu/detail', ['id' => $v['id']]);?>">
              <img src="/xingkong/<?php echo ($v["face255"]); ?>" width="255" height="256" />
              <p>
                <strong><?php echo (mb_substr($v["title"], 0, 14, 'UTF-8')); ?></strong>
              </p>
              <p>
                <?php echo (mb_substr($v["desc"], 0, 40, 'UTF-8')); ?>
              </p>
            </a>
          </li><?php endforeach; endif; ?>
      </ul>
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
<script type="text/javascript" src="/xingkong/Public/Home/js/jquery.min.js"></script>
<script type="text/javascript" src="/xingkong/Public/Home/js/jq.orbit.js"></script> 
  <script type="text/javascript" src="/xingkong/Public/Home/js/orbit.js"></script> 
<!--脚部结束-->
</body>
</html>