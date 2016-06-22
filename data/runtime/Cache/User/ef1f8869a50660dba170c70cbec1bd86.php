<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title><?php echo ($site_name); ?></title>
<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
<meta name="description" content="<?php echo ($site_seo_description); ?>">
<meta name="author" content="ThinkCMF">
	
	<?php $portal_index_lastnews=2; $portal_hot_articles="1,2"; $portal_last_post="1,2"; $tmpl=sp_get_theme_path(); $default_home_slides=array( array( "slide_name"=>"ThinkCMFX2.0.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/1.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.0.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/2.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.0.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/3.jpg", "slide_url"=>"", ), ); ?>
	<meta name="author" content="ThinkCMF">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
   	<!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
    <!--[if IE 7]>
	<link rel="stylesheet" href="/zzjk/tpl_front/focus/Public/simpleboot/font-awesome/4.2.0/css/font-awesome-ie7.min.css">
	<![endif]-->

	<link rel="icon" href="/zzjk/tpl_front/focus/Public/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/zzjk/tpl_front/focus/Public/images/favicon.ico" type="image/x-icon">

    <link href="/zzjk/tpl_front/focus/Public/simpleboot/themes/cmf/theme.min.css" rel="stylesheet">
    <link href="/zzjk/tpl_front/focus/Public/simpleboot/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/zzjk/tpl_front/focus/Public/simpleboot/font-awesome/4.2.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">

    <link href="/zzjk/tpl_front/focus/Public/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="/zzjk/tpl_front/focus/Public/css/style2.css">
    
	<!-- <link rel="stylesheet" href="/zzjk/tpl_front/focus/Public/css/style_index.css">
    <link href="/zzjk/tpl_front/focus/Public/css/slippry/slippry.css" rel="stylesheet"> -->

    <script type="text/javascript" src="/zzjk/tpl_front/focus/Public/js/tabbedContent.js"></script>

	<style>
		/*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
		#backtotop{position: fixed;bottom: 50px;right:20px;display: none;cursor: pointer;font-size: 50px;z-index: 9999;}
		#backtotop:hover{color:#333}
		#main-menu-user li.user{display: none}
	</style>
	
</head>
<body class="body-white" id="top">
	<?php echo hook('body_start');?>
<div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
       <a class="brand" style="margin:12px auto; font-size: 23px;" href="#"><span>锦州</span></a>
       <a class="brand" href="/zzjk/index.php"><h3>自主驾考平台</h3></a>
       <div class="nav-collapse collapse" id="main-menu">


       <div class="nav-collapse collapse" id="main-menu">
      <!--  	
            <?php
 $effected_id=""; $filetpl="<a href='\$href' target='\$target'>\$label</a>"; $foldertpl="<a href='\$href' target='\$target' class='dropdown-toggle' data-toggle='dropdown'>\$label <b class='caret'></b></a>"; $ul_class="dropdown-menu" ; $li_class="" ; $style="nav"; $showlevel=6; $dropdown='dropdown'; echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); ?> 
      	-->
		
		<ul class="nav pull-right" id="main-menu-user">
			<li class="dropdown user login">
	            <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
	            <img src="/zzjk/tpl_front/focus//Public/images/headicon.png" class="headicon"/>
	            <span class="user-nicename"></span><b class="caret"></b></a>
	            <ul class="dropdown-menu pull-right">
	               <li><a href="<?php echo u('user/center/index');?>"><i class="fa fa-user"></i> &nbsp;个人中心</a></li>
	               <li class="divider"></li>
	               <li><a href="<?php echo u('user/index/logout');?>"><i class="fa fa-sign-out"></i> &nbsp;退出</a></li>
	            </ul>
          	</li>
          	<li class="dropdown user offline">
	            <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
	           		<img src="/zzjk/tpl_front/focus//Public/images/headicon.png" class="headicon"/>登录<b class="caret"></b>
	            </a>
	            <ul class="dropdown-menu pull-right">
	               <li><a href="<?php echo U('api/oauth/login',array('type'=>'sina'));?>"><i class="fa fa-weibo"></i> &nbsp;微博登录</a></li>
	               <li><a href="<?php echo U('api/oauth/login',array('type'=>'qq'));?>"><i class="fa fa-qq"></i> &nbsp;QQ登录</a></li>
	               <li><a href="<?php echo u('user/login/index');?>"><i class="fa fa-sign-in"></i> &nbsp;登录</a></li>
	               <li class="divider"></li>
	               <li><a href="<?php echo u('user/register/index');?>"><i class="fa fa-user"></i> &nbsp;注册</a></li>
	            </ul>
          	</li>
		</ul>
		<div class="pull-right">
        	<form method="post" class="form-inline" action="<?php echo U('portal/search/index');?>" style="margin:18px 0;">
				 <input type="text" class="" placeholder="Search" name="keyword" value="<?php echo I('get.keyword');?>"/>
				 <input type="submit" class="btn btn-info" value="Go" style="margin:0"/>
			</form>
      
		</div>

         <div class=" nav pull-right brand" style="margin:12px auto; font-size: 21px;">
             <a class="" href="<?php echo U('Index/showmap');?>">&nbsp;附近自主驾考场</a>
          </div>
       </div>
     </div>
   </div>
 </div>
  </div>

		<div class="container tc-main">
                <div class="row">
                    <div class="span3">
	                    
<div class="list-group">
	<a class="list-group-item" href="<?php echo u('user/center/exam');?>">
		<h3>
		<i class="fa fa-paste"></i> 在线模拟考试
		</h3>
	</a>
</div>
<div class="list-group">
	<a class="list-group-item" href="<?php echo u('signup/index/index');?>">
		<h3>
		<i class="fa fa-user-md"></i> 自主驾考报名
		</h3>
	</a>
</div>

<div class="list-group">
	<a class="list-group-item" href="<?php echo u('user/profile/edit');?>"><i class="fa fa-list-alt"></i> 修改资料</a>
	<a class="list-group-item" href="<?php echo u('user/profile/password');?>"><i class="fa fa-lock"></i> 修改密码</a>
	<a class="list-group-item" href="<?php echo u('user/profile/avatar');?>"><i class="fa fa-user"></i> 编辑头像</a>
	<a class="list-group-item" href="<?php echo u('user/profile/bang');?>"><i class="fa fa-exchange"></i> 绑定账号</a>
	<a class="list-group-item" href="<?php echo u('user/favorite/index');?>"><i class="fa fa-star-o"></i> 我的收藏</a>
	<a class="list-group-item" href="<?php echo u('comment/comment/index');?>"><i class="fa fa-comments-o"></i> 我的评论</a>
</div>


                    </div>
                    <div class="span9">
                           <div class="tabs">
                               <ul class="nav nav-tabs">
                                   <li class="active"><a href="#one" data-toggle="tab"><i class="fa fa-exchange"></i> 绑定账号</a></li>
                               </ul>
                               <div class="tab-content">
                                   <div class="tab-pane active" id="one">
	                                   <?php if(!empty($oauths['qq'])): ?><button class="btn"><i class="fa fa-qq"></i> 已绑定腾讯QQ账号</button>
	                                   <?php else: ?>
	                                   		<a class="btn btn-primary" href="<?php echo U('api/oauth/bang',array('type'=>'qq'));?>"><i class="fa fa-qq"></i> 绑定腾讯QQ账号</a><?php endif; ?>
	                                   <?php if(!empty($oauths['sina'])): ?><button class="btn"><i class="fa fa-weibo"></i> 已绑定新浪微博账号</button>
	                                   <?php else: ?>
	                                   		<a class="btn btn-primary" href="<?php echo U('api/oauth/bang',array('type'=>'sina'));?>"><i class="fa fa-weibo"></i> 绑定新浪微博账号</a><?php endif; ?>
                                   </div>
                               </div>							
                           </div>
                    </div>
                </div>

		<br><br><br>

      

      <div id="footer">


        <!-- 
        <div class="links">
        <?php $links=sp_getlinks(); ?>
        <?php if(is_array($links)): foreach($links as $key=>$vo): ?><a href="<?php echo ($vo["link_url"]); ?>" target="<?php echo ($vo["link_target"]); ?>"><?php echo ($vo["link_name"]); ?></a><?php endforeach; endif; ?>
        </div> 
        -->

           <p class="text-center">
         <script  type="text/javascript">
        var cp= new Date();
        var update = cp.getFullYear();
        document.write("<br><br><hr><center><h4>2013-"+update+"Copyright@All rights reserved | 自主驾考平台</h4></center> ");
       
        </script>
        </p>
     </div>

      <div id="backtotop"><i class="fa fa-arrow-circle-up"></i></div>
      <?php echo ($site_tongji); ?>


	</div>
	<!-- /container -->

	<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/zzjk/",
    JS_ROOT: "statics/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/zzjk/statics/js/jquery.js"></script>
    <!---->
    <script src="/zzjk/statics/js/wind.js"></script>
    <script src="/zzjk/statics/js/frontend.js"></script>

   <script src="/zzjk/tpl_front/focus/Public/simpleboot/bootstrap/js/bootstrap.min.js"  type="text/javascript" ></script>
    <script src="/zzjk/tpl_front/focus/Public/js/base.js" type="text/javascript" ></script>    
    <script src="/zzjk/tpl_front/focus/Public/js/slippry.min.js"  type="text/javascript" ></script>

	<script>
	$(function(){
		$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
		
		$("#main-menu li.dropdown").hover(function(){
			$(this).addClass("open");
		},function(){
			$(this).removeClass("open");
		});
		
		$.post("<?php echo U('user/index/is_login');?>",{},function(data){
			if(data.status==1){
				if(data.user.avatar){
					$("#main-menu-user .headicon").attr("src",data.user.avatar.indexOf("http")==0?data.user.avatar:"/zzjk/data/upload/avatar/"+data.user.avatar);
				}
				
				$("#main-menu-user .user-nicename").text(data.user.user_nicename!=""?data.user.user_nicename:data.user.user_login);
				$("#main-menu-user li.user.login").show();
				
			}
			if(data.status==0){
				$("#main-menu-user li.user.offline").show();
			}
			
		});	
		;(function($){
			$.fn.totop=function(opt){
				var scrolling=false;
				return this.each(function(){
					var $this=$(this);
					$(window).scroll(function(){
						if(!scrolling){
							var sd=$(window).scrollTop();
							if(sd>100){
								$this.fadeIn();
							}else{
								$this.fadeOut();
							}
						}
					});
					
					$this.click(function(){
						scrolling=true;
						$('html, body').animate({
							scrollTop : 0
						}, 500,function(){
							scrolling=false;
							$this.fadeOut();
						});
					});
				});
			};
		})(jQuery); 
		
		$("#backtotop").totop();
		
		
	});
	</script>
<script>
$(function() {
	var demo1 = $("#homeslider").slippry({
		transition: 'fade',
		useCSS: true,
		captions: false,
		speed: 1000,
		pause: 3000,
		auto: true,
		preload: 'visible'
	});
});
</script>

</body>
</html>