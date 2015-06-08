<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta name="description" content="后台管理系统">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

    <title><?php echo ($titleL1); ?> - <?php echo C('BACKEND_NAME');?></title>
    <link rel="stylesheet" href="/xingkong/Public/Admin/vendor/offline/theme.css">
    <link rel="stylesheet" href="/xingkong/Public/Admin/vendor/pace/theme.css">


    <link rel="stylesheet" href="/xingkong/Public/Admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/xingkong/Public/Admin/css/font-awesome.min.css">
    <link rel="stylesheet" href="/xingkong/Public/Admin/css/animate.min.css">

    <link rel="stylesheet" href="/xingkong/Public/Admin/css/panel.css">

    <link rel="stylesheet" href="/xingkong/Public/Admin/css/skins/palette.1.css" id="skin">
    <link rel="stylesheet" href="/xingkong/Public/Admin/css/fonts/style.1.css" id="font">
    <link rel="stylesheet" href="/xingkong/Public/Admin/css/main.css">
    <link rel="stylesheet" href="/xingkong/Public/Admin/css/common.css">
    


    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="/xingkong/Public/Admin/vendor/modernizr.js"></script>
<!-- page special css plugin here -->
<link rel="stylesheet" href="/xingkong/Public/Plugin/uploadify/uploadify.css">
<style type="text/css">
	.uploadify-button {
	    background-color: transparent;
	    border: none;
	    padding: 0;
	}
	.uploadify:hover .uploadify-button {
	    background-color: transparent;
	}
</style>
</head>
<body>
    <div class="app">
        <header class="header header-fixed navbar">
            <div class="brand">
                <a href="javascript:;" class="fa fa-bars off-left visible-xs" data-toggle="off-canvas" data-move="ltr"></a>
                <a href="<?php echo U('Index/index');?>" class="navbar-brand text-white">
                    <i class="fa fa-stop mg-r-sm"></i>
                    <span class="heading-font">
						星空影业<b>管理系统</b>
					</span>
                </a>
            </div>
            <form class="navbar-form navbar-left hidden-xs" role="search">
                <div class="form-group">
                    <button class="btn no-border no-margin bg-none no-pd-l" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                    <input type="text" class="form-control no-border no-padding search" placeholder="请输入电影名字">
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right off-right">
                <li class="hidden-xs">
                    <a href="javascript:;">
						欢迎您，<?php echo session('login');?>
					</a>
                </li>
                <li class="notifications dropdown hidden-xs">
                    <a href="javascript:;" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                        <div class="badge badge-top bg-danger animated flash">3</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right animated slideInRight">
                        <div class="panel bg-white no-border no-margin">
                            <div class="panel-heading no-radius">
                                <small>
									<b>Notifications</b>
								</small>
                                <small class="pull-right">
									<a href="javascript:;" class="mg-r-xs">mark as read</a>&#8226;
									<a href="javascript:;" class="fa fa-cog mg-l-xs"></a>
								</small>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="javascript:;">
                                        <span class="pull-left mg-t-xs mg-r-md">
											<img src="/xingkong/Public/Admin/img/face4.jpg" class="avatar avatar-sm img-circle" alt="">
										</span>
                                        <div class="m-body show pd-t-xs">
                                            <span>Dean Winchester</span>
                                            <span>Posted on to your wall</span>
                                            <small>2 mins ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javascript:;">
                                        <span class="pull-left mg-t-xs mg-r-md">
										<span class="fa-stack fa-lg">
											<i class="fa fa-circle fa-stack-2x text-warning"></i>
											<i class="fa fa-download fa-stack-1x fa-inverse"></i>
										</span>
                                        </span>
                                        <div class="m-body show pd-t-xs">
                                            <span>145 MB download in progress.</span>
                                            <div class="progress progress-xs mg-t-xs mg-b-xs">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                </div>
                                            </div>
                                            <small>Started 23 mins ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javascript:;">
                                        <span class="pull-left mg-t-xs mg-r-md">
											<img src="/xingkong/Public/Admin/img/face3.jpg" class="avatar avatar-sm img-circle" alt="">
										</span>
                                        <div class="m-body show pd-t-xs">
                                            <span>Application</span>
                                            <span>Where is my workspace widget</span>
                                            <small>5 days ago</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="panel-footer no-border">
                                <a href="javascript:;">See all notifications</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="quickmenu">
                    <a href="javascript:;" data-toggle="dropdown">
                        <img src="/xingkong/Public/Admin/img/avatar.jpg" class="avatar pull-left img-circle" alt="user" title="user">
                        <i class="caret mg-l-xs hidden-xs no-margin"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right mg-r-xs">
                        <li>
                            <a href="javascript:;">
                                <div class="pd-t-sm">
                                    gerald@morris.com
                                    <br>
                                    <small class="text-muted">4.2 MB of 51.25 GB used</small>
                                </div>
                                <div class="progress progress-xs no-radius no-margin mg-b-sm">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('My/index');?>">修改密码</a>
                        </li>
                        <li>
                            <a href="javascript:;">Upgrade</a>
                        </li>
                        <li>
                            <a href="javascript:;">Notifications
								<div class="badge bg-danger pull-right">3</div>
							</a>
                        </li>
                        <li>
                            <a href="javascript:;">Help ?</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo U('Login/logout');?>">退出</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>

        <section class="layout">

            <aside class="sidebar canvas-left">

                <nav class="main-navigation">
                    <ul>
                        <li <?php if((strtolower(CONTROLLER_NAME)) == "index"): ?>class="active"<?php endif; ?>>
                            <a href="<?php echo U('Index/index');?>">
                                <i class="fa fa-coffee"></i>
                                <span>首页</span>
                            </a>
                        </li>
                        <li class="dropdown show-on-hover <?php if((strtolower(CONTROLLER_NAME)) == "theater"): ?>active<?php endif; ?>">
                           
                            <a href="javascript:;">
                                <i class="fa fa-video-camera"></i>
                                <span>影城管理</span>
                            </a>
                             <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo U('Theater/add');?>">
                                        <span>添加影城</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Theater/index');?>">
                                        <span>影城列表</span>
                                    </a>
                                </li>
                            </ul>
                            
                        </li>
                         <li class="dropdown show-on-hover <?php if((strtolower(CONTROLLER_NAME)) == "movie"): ?>active<?php endif; ?>">
                           
                            <a href="javascript:;">
                                <i class="fa fa-play"></i>
                                <span>电影管理</span>
                            </a>
                             <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo U('Movie/add');?>">
                                        <span>添加电影</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Movie/index');?>">
                                        <span>电影列表</span>
                                    </a>
                                </li>
                            </ul>
                            
                        </li>
                        <li class="dropdown show-on-hover <?php if((strtolower(CONTROLLER_NAME)) == "news"): ?>active<?php endif; ?>">
                            <a href="javascript:;" data-toggle="dropdown">
                                <i class="fa fa-file"></i>
                                <span>新闻管理</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo U('News/add');?>">
                                        <span>添加新闻</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('News/index');?>">
                                        <span>新闻列表</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                         <li class="dropdown show-on-hover <?php if((strtolower(CONTROLLER_NAME)) == "admanage"): ?>active<?php endif; ?>">
                            <a href="javascript:;" data-toggle="dropdown">
                                <i class="fa fa-desktop"></i>
                                <span>广告位管理</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo U('AdManage/index');?>">
                                        <span>首页广告位</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('AdManage/index', ['pos' => 2]);?>">
                                        <span>影视列表页广告位</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo U('AdManage/index', ['pos' => 3]);?>">
                                        <span>广电报广告位</span>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>

                        <li class="dropdown show-on-hover">
                            <a href="javascript:;" data-toggle="dropdown">
                                <i class="fa fa-gears"></i>
                                <span>设置</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li >
                                    <a href="<?php echo U('Category/index');?>">
                                        <span>类别</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo U('City/index');?>">
                                        <span>城市</span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="<?php echo U('Enterprise/index');?>">
                                        <span>合作企业</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="mail.html">
                                <div class="badge bg-none pull-right">8</div>
                                <i class="fa fa-envelope"></i>
                                <span>Mailbox</span>
                            </a>
                        </li>
                        
                        <li class="dropdown show-on-hover">
                            <a href="javascript:;" data-toggle="dropdown">
                                <i class="fa fa-gift"></i>
                                <span>Extras</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="pricing.html">
                                        <span>Pricing Tables</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mail_alt.html">
                                        <span>Mail Alt.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="email.html">
                                        <span>Email Template</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="subscription.html">
                                        <span>Subscription</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="timeline.html">
                                        <span>Timeline</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="feed.html">
                                        <span>Feed</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <span>Chat</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="changelog.html">
                                <i class="fa fa-info"></i>
                                <span>Change log</span>
                            </a>
                        </li>
                    </ul>
                </nav>


                <footer>
                    <div class="about-app pd-md animated pulse">
                        <a href="javascript:;">
                            <img src="/xingkong/Public/Admin/img/about.png" alt="">
                        </a>
                        <span>
							<b>Cameo</b>&#32;is a responsive admin template powered by bootstrap 3.
							<a href="javascript:;">
								<b>Find out more</b>
							</a>
						</span>
                    </div>
                    <div class="footer-toolbar pull-left">
                        <a href="javascript:;" class="pull-left help">
                            <i class="fa fa-question-circle"></i>
                        </a>
                        <a href="javascript:;" class="toggle-sidebar pull-right hidden-xs">
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </div>
                </footer>

            </aside>
        <section class="main-content">
            <div class="content-wrap">
                <div class="row">
                	<div class="col-lg-12">
                 	<section class="panel">
                      <header class="panel-heading"><?php echo ($titleL2); ?></header>
                      <div class="panel-body">
                          <form class="form-horizontal bordered-group" role="form" action="<?php echo U('News/editHandle');?>" method="post">
                              <div class="form-group">
                                  <label class="col-sm-2 control-label"><span class="red">* </span>文章类别</label>
                                  <div class="col-sm-8">
                                      <select class="form-control" name="cate_id">
                                          <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>" <?php if($v['id'] == $data['cate_id']): ?>selected<?php endif; ?>><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label"><span class="red">* </span>文章标题</label>
                                  <div class="col-sm-8">
                                      <input type="text" name="title" placeholder="文章标题" value="<?php echo ($data["title"]); ?>" class="form-control" id="inputEmail3">
                                  </div>
                              </div>
                              
                              <div class="form-group">
                              	  
                                  <label for="inputEmail3" class="col-sm-2 control-label">封面</label>
                                  <div class="col-sm-2">
                                  	<img id="no-image" height="230" width="200" <?php if($data['face200']): ?>src="/xingkong/<?php echo ($data["face200"]); ?>"<?php else: ?>src="/xingkong/Public/Default/images/no_image.jpg"<?php endif; ?> >
                                  </div>
                                  <div class="col-sm-8" style="margin-top:60px;">
                                      <input type="file" name="face" id="upload" />
                                      <p class="help-block no-margin">格式：jpg、jpeg、gif、png 尺寸：200*230/px</p>
                                  </div>
                              </div>
                              
                              <div class="form-group">
                                  <label class="col-sm-2 control-label"><span class="red">* </span>描述</label>
                                  <div class="col-sm-8">
                                      <textarea name="desc" class="form-control" rows="2"><?php echo ($data["desc"]); ?></textarea>
                                  </div>
                              </div> 
                              
                               <div class="form-group">
                                  <label class="col-sm-2 control-label"><span class="red">* </span>内容</label>
                                  <div class="col-sm-8">
                                      <textarea name="content"  id="ue-content"><?php echo ($data["content"]); ?></textarea>
                                  </div>
                              </div> 

                              <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-8">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="hot" value="1" <?php if($data['hot']): ?>checked<?php endif; ?>>热点点新闻
                                        </label>
                                    </div>
                                </div>
                              </div>
                              
                              <div class="form-group">
                                  <label for="inputEmail6" class="col-sm-2 control-label">编辑</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" value="<?php echo ($data["editor"]); ?>" name="editor" id="inputEmail6" placeholder="编辑">
                                  </div>
                              </div>
                              
                              <div class="form-group">
                                  <label for="inputEmail4" class="col-sm-2 control-label">排序</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" name="sort" id="inputEmail4" value="<?php echo ($data["sort"]); ?>" placeholder="排序">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="inputEmail5" class="col-sm-2 control-label">来源</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" value="<?php echo ($data["from"]); ?>" name="from" id="inputEmail5" placeholder="新闻来源">
                                  </div>
                              </div>
                              
                              <input type="hidden" name="face200" value="<?php echo ($data["face200"]); ?>">
                              <input type="hidden" name="face80" value="<?php echo ($data["face80"]); ?>">
                              <input type="hidden" name="id" value="<?php echo ($data["id"]); ?>">
                              
                              <div class="form-group">
                                  <div class="col-sm-offset-2 col-sm-6">
                                      <button type="submit" class="btn btn-default">保存</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </section>
                 </div>
                </div>
            </div>
        </section>
    </section>
</div>
<script src="/xingkong/Public/Admin/vendor/jquery-1.11.1.min.js"></script>
<script src="/xingkong/Public/Admin/bootstrap/js/bootstrap.js"></script>
<script src="/xingkong/Public/Admin/vendor/jquery.easing.min.js"></script>
<script src="/xingkong/Public/Admin/vendor/jquery.placeholder.js"></script>
<script src="/xingkong/Public/Admin/vendor/fastclick.js"></script>

<script src="/xingkong/Public/Admin/vendor/offline/offline.min.js"></script>
<script src="/xingkong/Public/Admin/vendor/pace/pace.min.js"></script>
<script src="/xingkong/Public/Admin/js/off-canvas.js"></script>
<script src="/xingkong/Public/Admin/js/main.js"></script>
<script src="/xingkong/Public/Admin/js/panel.js"></script>

<script src="/xingkong/Public/Admin/js/components.js"></script>
<script src="/xingkong/Public/Admin/vendor/slider/bootstrap-slider.js"></script>
<script src="/xingkong/Public/Admin/vendor/isotope/isotope.pkgd.min.js"></script>
<script src="/xingkong/Public/Admin/js/feed.js"></script>

<script src="/xingkong/Public/Admin/js/common.js"></script> 
<!-- page special js plugin here -->
<script type="text/javascript" src="/xingkong/Public/Plugin/uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/xingkong/Public/Plugin/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/xingkong/Public/Plugin/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/xingkong/Public/Plugin/ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
	//实例化编辑器
	UE.getEditor('ue-content');
</script>
<script>
  $(function() {
	setTimeout(function() {
		 var sid = "<?php echo session_id();?>";
		    $('#upload').uploadify({
		      'swf'           :    "/xingkong/Public/Plugin/uploadify/uploadify.swf",
		      'uploader'      :    "<?php echo U('Base/uploadNewsFace');?>",
		      'buttonImage'   :    "/xingkong/Public/Plugin/uploadify/browse-btn.png",
		      'width'         :    "120",
		      'height'        :    "30",
		      'fileTypeDesc'  :    "Image file",
		      'fileTypeExts'  :    "*.jpg;*.jpeg;*.gif;*.png",
		      'formData'      :    {"session_id"  : sid},
		      'multi'         :     false,
		      'removeTimeout' :     1,
		      onUploadSuccess :     function(file, data, response) {
		        eval('var data = ' + data);
		        if (data.status == 1) {
		        	$('input[name=face200]').val(data.path.face200);
		        	$('input[name=face80]').val(data.path.face80);
		        	$('#no-image').attr('src', "/xingkong/"+data.path.face200);
		        } else {
		          $('#info').html('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button><strong>错误！</strong>'+ data.msg +'</div>');
		        }
		      }
		    });
	}, 10);
  });
</script>

</body>
</html>