<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if($titleL1): echo ($titleL1); ?>-<?php endif; echo ($title); ?>-<?php echo C('SITE_NAME');?></title>
<link href="/xingkong/Public/Home/css/public.css" rel="stylesheet" type="text/css" />
<!-- page special css plugin here -->
<link href="/xingkong/Public/Home/css/lite.css" rel="stylesheet" type="text/css" />
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
<div id="wvdm">
<div class="h35"></div>
    <div id="wvdm1">
        <div id="wcsk">
            <ul>
                <li class="llo"><a href="<?php echo U('About/index');?>">公司介绍</a></li>
                <li><a href="#">星空动态</a></li>
                <li><a href="#">加入星空</a></li>
            </ul>
           
        </div>
        <div id="wjx">
           <h3>贵州星空影业有限公司是贵州省电影行政管理职能划<br />
转至广电系统后贵州电影产业的重大举措、贵州文化产业的重点项目。</h3>
        <img src="/xingkong/Public/Home/images/about/3.jpg" width="768" height="125" />        </div>
        
        
        <div id="sawc">
            <div id="sawc1">
                <h3>规模化建设城市影院，打造电影全产业链<br />
</h3>
                <p>　　贵州星空影业有限公司专注于电影产业，是从连锁式数字影院投资建设、运营逐步向影片发行、制作及电影衍生品开发等领域进军，旨在打造全产业链的电影企业。在未来2-3年内，公司将在全省所有地州的中心城市兴建统一品牌、统一管理、统一供片、统一财务的连锁影城，让星空影城以最快的速度覆盖全省，成为管理标准化、规范化和模块化的贵州首个电影院线。</p>
          </div>
        </div>
        <div id="sawc0">
            <div id="sawc10">
                <h3>发展目标</h3>
                <p>近期目标——快速扩张影院规模，成立院线公司，介入发行领域；<br />

中期目标——跻身全国院线公司10强；<br />

远期目标——介入制片领域，全产业链运营。</p>
            </div>
            <div id="sawc100">
            <img src="/xingkong/Public/Home/images/about/10.jpg" width="241" height="201" /> </div>
      </div>
      <div id="sawc22">
            <div id="sawc12">
                <h3>规模化建设城市影院，打造电影全产业链<br />
</h3>
                <p>　　贵州星空影业有限公司专注于电影产业，是从连锁式数字影院投资建设、运营逐步向影片发行、制作及电影衍生品开发等领域进军，旨在打造全产业链的电影企业。在未来2-3年内，公司将在全省所有地州的中心城市兴建统一品牌、统一管理、统一供片、统一财务的连锁影城，让星空影城以最快的速度覆盖全省，成为管理标准化、规范化和模块化的贵州首个电影院线。</p>
          </div>
        </div>
      <div id="sawc4">
            <div id="sawc14">
                <h3>星空经营思路<br />
</h3>
                <p>围绕“城市电影产业化 农村电影公益化”的原则发展业务。<br />
                  规模化是公司的关键核心竞争力。<br />
　·　产生规模成本效应，利于企业降低运营成本；<br />
　·　推动营销、服务、管理的专业化和标准化建设；<br />
　·　获取渠道优势和市场主导权；<br />
　·　培育市场的资金实力。</p>
                
        </div>
          <div id="sawc100">
           <img src="/xingkong/Public/Home/images/about/11.jpg" width="241" height="201" /></div>
        </div>
      <div id="sawc15">
            <div id="sawc150">
                <h3>星空经营模式</h3>
                <p>影院连锁店模式<br />
　·　投资体系标准化，复制经营模式，快速扩展影院规模；<br />
　·　以资产为纽带，多形式、多要素参与投资兴建影院，影院实行项目制，责权利明确；<br />
　·　规模化、集约化经营，有利于降低成本；<br />
　·　管理标准化、规模化、模块化，坚持统一品牌、统一管理、统一供片、统一财务。<br />
                </p>
            </div>
            
      </div>
      
      <div id="sawc16">
        <div id="sawc160">
                <h3>星空经营模式</h3>
            <p>体制：所有权和经营权分离，治理结构完善。<br />
                  资源：资金充足，融资渠道多样；广电北京，<br />
                  团队：由贵州电视台经营体制核心成员和高新引进的专业人才构成。<br />
            </p>
          </div>
            
      </div>
    </div><div class="clear"></div>
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