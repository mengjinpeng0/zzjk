<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<html>
	<head>
		<title> <?php echo ($site_name); ?></title>
		<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
		<meta name="description" content="<?php echo ($site_seo_description); ?>">
		<meta property="qc:admins" content="710500375620172050556375" />
			
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
	
		<link href="/zzjk/tpl_front/focus/Public/css/slippry/slippry.css" rel="stylesheet">
		<style>
			.caption-wraper{position: absolute;left:50%;bottom:2em;}
			.caption-wraper .caption{
			position: relative;left:-50%;
			background-color: rgba(0, 0, 0, 0.54);
			padding: 0.4em 1em;
			color:#fff;
			-webkit-border-radius: 1.2em;
			-moz-border-radius: 1.2em;
			-ms-border-radius: 1.2em;
			-o-border-radius: 1.2em;
			border-radius: 1.2em;
			}
			@media (max-width: 767px){
				.sy-box{margin: 12px -20px 0 -20px;}
				.caption-wraper{left:0;bottom: 0.4em;}
				.caption-wraper .caption{
				left: 0;
				padding: 0.2em 0.4em;
				font-size: 0.92em;
				-webkit-border-radius: 0;
				-moz-border-radius: 0;
				-ms-border-radius: 0;
				-o-border-radius: 0;
				border-radius: 0;}
			}
		</style>
	</head>
<body class="body-white">
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


<div class="container">

	
<div class="container header-top">

<div class="row" >
  <div class="span8">
	<?php $home_slides=sp_getslide("portal_index"); $home_slides=empty($home_slides)?$default_home_slides:$home_slides; ?>
    <ul id="homeslider" class="unstyled">
	<?php if(is_array($home_slides)): foreach($home_slides as $key=>$vo): ?><li>
		<div class="caption-wraper">
			<div class="caption"><?php echo ($vo["slide_name"]); ?></div>
		</div>
		<a href="<?php echo ($vo["slide_url"]); ?>"><img src="/zzjk./<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>" alt=""></a>
	    </li><?php endforeach; endif; ?>
    </ul>
	
  </div>

<div class="span4">
	<h2 class="page-header"><center>平台公告</center></h2>
<h4><?php echo ($ntc["gnotice"]); ?></h4>
	
</div>
</div>
</div>


<div class="container">	
	<div>
		<h3 class="text-center">understand our service</h3>
	</div>

<div class="row">
<div class="span6">
   <div class="s-mod" >
	<div class="s-mod-loding"></div>
             <ul >
		<li class="s-mod-item" style="margin-right: 4% !important;
		width:45%;position:relative;display:inline-block;" h="127" bg="#4392ec" cbg="#206fc8">
			<div class="s-mod-wrap" >
				<div class="s-mod-def" ><span style="font-size:40px;"><i class="fa fa-th-list"></i></span></div>
				<div class="s-mod-cur" ><span>通过完全的自主预约报名缴费体检学习，和聘请独立的私人教练进行驾驶技能学习的模式，完全自主地进行驾考<span></span></div>
                
			</div>
			<a href="<?php echo U('index/dljk');?>"><h2 class="font-large nospace text-center">独立驾考</h2></a>
		</li>

		<li class="s-mod-item" h="127" style="margin-left: 4% !important;
		width:45%;position:relative;display:inline-block;" t="0" bg="#20c8a6" cbg="#13af90">
			<div class="s-mod-wrap">
				<div class="s-mod-def"><span style="font-size:40px;"><i class="fa fa-user"></i></span></div>
				<div class="s-mod-cur"><span>通过预约科一科四，自主完成理论性较强的科一科四的学习。然后通过平台提供的驾校的科二科三的信息，外包服务进行实际技能和考试内容的训练。</span></div>
			</div>
			<a href="<?php echo U('index/zzjk');?>"><h2 class="font-large nospace text-center">自主驾考</h2></a>
		</li>
	     </ul>
   </div>			
</div>

<div class="span6">
<div class="s-mod" >
	<div class="s-mod-loding"></div>
             <ul >
		<li class="s-mod-item" style="margin-right: 4% !important;
		width:45%;position:relative;display:inline-block;" h="127" bg="#8DC027" cbg="#76A31B">
			<div class="s-mod-wrap" >
				<div class="s-mod-def" ><span style="font-size:40px;"><i class="font-large fa fa-group"></i></span></div>
				<div class="s-mod-cur" ><span>平台提供的全方位的第三方驾培机构提供的信息描述，结合平台抓取的官方的物价标准和名单，以及用户的培训评价，对驾培机构提供的全程服务进行选择。</span></div>		
			</div>
			<a href="<?php echo U('index/ctjk');?>"><h2 class="font-large nospace text-center">传统驾考</h2></a>
		</li>

		<li class="s-mod-item" h="127" style="margin-left: 4% !important; width:45%;position:relative;display:inline-block;" 
		t="0" bg="#0C6DB2" cbg="#09578E">
			<div class="s-mod-wrap">
				<div class="s-mod-def"><span style="font-size:40px;"><i class="fa fa-heart"></i></span></div>
				<div class="s-mod-cur"><span>学员在平台内，与第三方签订协议，如在后期出现矛盾或者纠纷，平台将协助学员维权和处理。</span></div>
			</div>
			<a href="/zzjk/index.php?g=portal&m=article&a=index&id=7"><h2 class="font-large nospace text-center">权益保障</h2></a>
		</li>
	     </ul>
 </div>			
	</div>

</div>
<br><br>

	<div>

		<a href="http://www.jzgajx.com/homepart/default2.aspx"><h3 class="text-center">最新资讯</h3></a>
	</div>
	<div class="row">
		
		<div class="span3">
            	<h3 class="page-header"><i class="fa fa-road">&nbsp;</i>官方信息</h3> 
            	  <?php $content=sp_sql_posts_paged('cid:1;field:tid,post_title,post_excerpt,post_hits,post_date,smeta;limit 6;'); ?>  

             <?php if(is_array($content['posts'])): foreach($content['posts'] as $key=>$vo): ?><div class="list-boxes">					
					<img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>"  style="max-height:80px;width: 15%;" class="img-rounded"/>										
					<div style="width: 82%;float: right;">	
					<?php $smeta=json_decode($vo['smeta'],true); ?>		
					<h2><a href="<?php echo u('article/index',array('id'=>$vo['tid']));?>"><?php echo ($vo["post_title"]); ?></a></h2>
					<p><?php echo (msubstr($vo["post_excerpt"],0,256)); ?></p>
					<div>

						<div class="pull-left">
							<div class="list-actions">
							<a href="#"><i class="fa fa-eye"><?php echo ($vo["post_hits"]); ?></i><span></span></a>
							<!-- <a href="<?php echo u('article/index',array('id'=>$vo['tid']));?>" class="J_count_btn"><i class="fa fa-thumbs-up"></i><span class="count"></span></a> -->
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="pull-center"><?php echo ($vo["post_date"]); ?></span>
							</div>
						</div>						
					</div>
					</div>
				</div><?php endforeach; endif; ?>
            </div>


		 <div class="span4">
            	<h3 class="page-header"><i class="fa fa-send">&nbsp;</i>考试技巧</h3>
                   <?php $content2=sp_sql_posts_paged('cid:3;field:tid,post_title,post_hits,smeta,post_excerpt,post_date;limit 6;'); ?>

                <?php if(is_array($content2['posts'])): foreach($content2['posts'] as $key=>$vo): ?><div class="list-boxes">					
					<img src="/zzjk/tpl_front/focus/Public/images/demo.jpg"  style="max-height:80px;width: 15%;" class="img-rounded"/>										
					<div style="width: 82%;float: right;">			
					<h2><a href="<?php echo u('article/index',array('id'=>$vo['tid']));?>"><?php echo ($vo["post_title"]); ?></a></h2>
					<p><?php echo msubstr($vo['post_excerpt'],0,32);?></p>
					<div>
						<div class="pull-left">
							<div class="list-actions">
							<a href="#"><i class="fa fa-eye"></i><span><?php echo ($vo["post_hits"]); ?></span></a>
							
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="pull-center"><?php echo ($vo["post_date"]); ?></span>
							</div>
						</div>						
					</div>
					</div>
				</div><?php endforeach; endif; ?>

            </div>



               <div class="span5"> 
        <h3 class="page-header"><i class="fa fa-car">&nbsp;</i>驾校信息</h3>
        <?php $list=sp_sql_posts_paged('cid:2;field:tid,post_title,smeta,post_excerpt,post_date,smeta;limit 6;'); ?>

       <?php if(is_array($list['posts'])): foreach($list['posts'] as $key=>$vo): ?><div class="span2">						          	             	 
                <div class="item">
					<div class="tc-gridbox">
                        <div class="header">
                          <?php $smeta=json_decode($vo['smeta'],true); ?>
                      	<?php if(!empty($smeta['thumb'])): ?><div class="item-image">
                      		<a href="#">
								<img  src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>" class="img-responsive" alt="">
							</a>
						</div>
                      	<?php else: endif; ?>
                     
                       <h3><a href="<?php echo u('article/index',array('id'=>$vo['tid']));?>">
                       	<?php echo ($vo["post_title"]); ?></a></h3>                            
                        </div>
                        <div class="body">
                        	<a href="<?php echo leuu('article/index',array('id'=>$vo['tid']));?>">
                        		<?php echo ($vo["post_excrept"]); ?></a>
                        </div>
                        <div class="footer">
                        	<div class="pull-left"><span class="meta">费用</span><?php echo ($vo["post"]); ?></div>
                        	<div class="pull-right">
	                        	<a href="javascript:;"><i class="fa fa-eye"></i><span>
	                        		<?php echo ($vo["post_hits"]); ?></span></a>
								<a href="<?php echo U('article/do_like',array('id'=>$vo['object_id']));?>" class="J_count_btn">
								    <i class="fa fa-thumbs-up"></i>
								    <span class="count"><?php echo ($vo["post_like"]); ?></span>
								</a>									
							</div>

							<div class="clearfix"></div>
						</div>
					</div>
                </div>
    
		</div><?php endforeach; endif; ?>

        </div>
		
	</div>
	


<!-- 插件测试  前端使用方法   
<?php echo hook('footer');?>
<?php echo hook('footer_end');?>
-->

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

<script src="/zzjk/tpl_front/focus/Public/js/slippry.min.js"></script>
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