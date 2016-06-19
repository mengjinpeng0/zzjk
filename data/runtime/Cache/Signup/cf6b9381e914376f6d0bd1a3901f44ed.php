<?php if (!defined('THINK_PATH')) exit();?><head>
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
	     <h1 class="brand" style="float:right;">步骤3-选择第三方</h1>
       </div>
	</div>
</div>
</div>
<br><br><br>	
<div class="wrap">

        <section>
        	<div class="step">
				<ul class="unstyled">
					<li class="current"><em>1</em>身份验证</li>
					<li class="current"><em>2</em>选择驾考方式</li>
					<li class="current"><em>3</em>选择第三方</li>
					<li><em>4</em>在线支付</li>
				</ul>
			</div>

			<div class="install" id="log">
				<ul id="loginner" class="unstyled"></ul>
			</div>
			
		</section>
		<a href="/zzjk/index.php?g=signup&a=step5"><center><button type="submit" class="btn btn-primary">下一步</button></center></a>
		<script type="text/javascript">
			/*function showmsg(content,status){
				var icon='<i class="fa fa-check correct"></i> ';
				if(status=="error"){
					icon ='<i class="fa fa-remove error"></i> ';
				}
				$('#loginner').append("<li>"+icon+content+"</li>");
				$("#log").scrollTop(1000000000);
			}*/
		</script>
	</div>
	
</body>
</html>