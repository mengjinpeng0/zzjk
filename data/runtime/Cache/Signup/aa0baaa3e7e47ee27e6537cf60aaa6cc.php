<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>自主驾考报名</title>

<link rel="stylesheet" href="/zzjk/statics//simpleboot/themes/flat/theme.min.css" />
<link rel="stylesheet" href="/zzjk/statics//simpleboot/font-awesome/4.2.0/css/font-awesome.min.css" />

<link rel="stylesheet" href="/zzjk/statics//install/css/install.css" />

</head>
<body>
<div class="navbar navbar-fixed-top">
<div class="navbar-inner">
	<div class="container">   
	   <div class="header">
          
             <a class="brand" href="/zzjk/index.php?g=user&m=center&a=index"><h3>自主驾考平台<small>&nbsp;&nbsp;个人中心</small></h3></a>
	     <h1 class="brand" style="float:right;">步骤1-身份验证</h1>
       </div>
	</div>
</div>
</div>
<br><br><br>

	<div class="wrap">
		
		<section class="section">
			<div class="step">
				<ul class="unstyled">
					<li class="current"><em>1</em>身份验证</li>
					<li><em>2</em>选择驾考方式</li>
					<li><em>3</em>选择第三方</li>
					<li><em>4</em>在线支付</li>
				</ul>
			</div>
			<div class="server"><center>
			<form action="/zzjk/index.php?g=signup&a=step3" class="J_ajaxForm" method="post">
					 <div class="tab-content">
                                   <div class="tab-pane active" id="one">
                                   	
                                    
                                   		<label class="control-label" >身份证：<input type="file"  name="file" placeholder="上传身份证" /><br></label>
                                   		<label class="control-label" >真实姓名：<input type="text" name="uname" /> <br></label>
                                   		<label class="control-label" >电话号码：<input type="text" name="uphone" />
                                         </label>
                                   </div>
                      </div>
			                    <div class="control-group">
                                   				<label class="control-label" for="input-sex">性&nbsp;&nbsp;&nbsp;别：
                                   					<?php $sexs=array("1"=>"女","2"=>"男"); ?>
                                   					<select id="input-sex" name="sex">
                                   						<?php if(is_array($sexs)): foreach($sexs as $key=>$vo): $sexselected=$key==$sex?"selected":""; ?>
                                   							<option value="<?php echo ($key); ?>" <?php echo ($sexselected); ?>><?php echo ($vo); ?></option><?php endforeach; endif; ?>
                                   					</select>
                                   			</label>
                                </div>

			<button type="submit" class="btn btn-primary J_ajax_submit_btn">下一步</button>
			</form></center>	
			</div>
			</div>
			
		</section>
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


	<script type="text/javascript">
	function update_avatar(){
		var area=$(".uploaded_avatar_area img").data("area");
		$.post("<?php echo U('profile/avatar_update');?>"
			,area,
			function(data){
			if(data.status==1){
				reloadPage(window);
			}
			
		},"json");
		
	}

	function avatar_upload(obj){
		var $fileinput=$(obj);
		
		Wind.css("jcrop");
		Wind.use("ajaxfileupload","jcrop","noty",function(){
			$.ajaxFileUpload({
				url:"<?php echo U('signup/info_upload');?>",
				secureuri:false,
				fileElementId:"avatar_uploder",
				dataType: 'json',
				data:{},
				success: function (data, status){
					if(data.status==1){
					/*	$("#avatar_uploder").hide();
						var $uploaded_area=$(".uploaded_avatar_area");
						$uploaded_area.find("img").remove();
						var $img=$("<img/>").attr("src","/zzjk/data/upload/avatar/"+data.data.file);
						$img.prependTo($uploaded_area);
						$(".uploaded_avatar_btns").show();
						$img.Jcrop({
					    	aspectRatio:1/1,
					    	setSelect: [ 0, 0, 100, 100 ],
					    	onSelect: function(c){
					    		$img.data("area",c);
					    	}*/
					    });
						
					}else{
						noty({text: data.info,
                    		type:'error',
                    		layout:'center'
                    	});
					}
					
				},
				error: function (data, status, e){}
			});
		});
		
		
		
		return false;
	}
</script>
</body>
</html>