<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>        
    <title>后台首页</title>            
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    
    <link rel="stylesheet" type="text/css" id="theme" href="<?php echo (C("Public")); ?>css/theme-default.css"/>
    <link rel="stylesheet" type="text/css" id="theme" href="<?php echo (C("Public")); ?>css/style.css"/>
</head>
<body>
<div class="page-container">

    <!-- 开始 左侧边栏 -->
    <div class="page-sidebar">
        <!-- 开始 左侧导航 -->
        <ul class="x-navigation">
            <li class="xn-logo">
                <a href="index.html">ATLANT</a>
                <a href="#" class="x-navigation-control"></a>
            </li>                                                                      
            <li>
                <a href="index.html"><span class="fa fa-desktop"></span> <span class="xn-text">主页</span></a>
            </li>                    
            <li class="xn-openable">
                <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">产品分类</span></a>
                <ul>
                    <li><a href="pages-gallery.html"><span class="fa fa-image"></span> 分类列表</a></li>
                    <li><a href="pages-profile.html"><span class="fa fa-user"></span> 添加分类</a></li>
                    <li><a href="pages-profile.html"><span class="fa fa-user"></span> 修改分类</a></li>
                </ul>
            </li>
        </ul>
        <!-- 结束 左侧导航 -->
    </div>
    <!-- 结束 左侧边栏 -->
    
    <!-- 开始 右侧内容 -->
    <div class="page-content">
        
        <div class="nav-right">
        	<ul class="menu-right pull-left">
	            <!-- 开始 左侧边栏开关按钮 -->
	            <li class="xn-icon-button">
	                <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
	            </li>
	            <!-- 结束 左侧边栏开关按钮 -->
	        </ul>
	        <ul class="menu-right pull-left">
	        	<li class="active">
	        		<a href=""><span class="fa fa-dedent"></span> 商品</a>
	        	</li>
	        	<li>
	        		<a href=""><span class="glyphicon glyphicon-user"></span> 会员</a>
	        	</li>
	        </ul>
        	<ul class="menu-right pull-right">
	            <!-- 开始 退出登录 -->
	            <li class="xn-icon-button pull-right">
	                <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
	            </li> 
	            <!-- 结束 退出登录 -->
	        	<li class="pull-right">
	        		<a href=""><span class="glyphicon glyphicon-user"></span> 查看网站</a>
	        	</li>
	        </ul>
        </div>
        
        <!-- 开始 面包屑 -->
        <ul class="breadcrumb">
            <li><a href="#">首页</a></li>                    
            <li class="active"> 当前</li>
        </ul>
        <!-- 结束 面包屑 -->                
        
        <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> 页面标题</h2>
        </div>                   
        
        <!-- 开始 主内容区域 -->
        <div class="page-content-wrap">
        
            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo (session('a')); ?></h3>
                        </div>
                        <div class="panel-body">
                            aaa
                        </div>
                    </div>

                </div>
            </div>
        
        </div>
        <!-- 结束 主内容区域 -->                
    </div>            
    <!-- 结束 右侧内容 } -->
</div>

    <!-- 开始 退出登录对话框 -->
    <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
        <div class="mb-container">
            <div class="mb-middle">
                <div class="mb-title"><span class="fa fa-sign-out"></span> 退出 <strong>登录</strong> ?</div>
                <div class="mb-content">
                    <p>确定要退出登录吗？</p>                    
                </div>
                <div class="mb-footer">
                    <div class="pull-right">
                        <a href="pages-login.html" class="btn btn-success btn-lg">确定</a>
                        <button class="btn btn-default btn-lg mb-control-close">取消</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 结束 退出登录对话框-->
    
<!-- 开始 脚本区域 -->
    <!-- 开始 基础插件 -->
    <script type="text/javascript" src="<?php echo (C("Public")); ?>js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo (C("Public")); ?>js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo (C("Public")); ?>js/plugins/bootstrap/bootstrap.min.js"></script>        
    <!-- 结束 基础插件 -->

    <!-- 开始 页面插件 -->

    <!-- 结束 页面插件 -->         

    <!-- 开始 模版插件 -->
    <script type="text/javascript" src="<?php echo (C("Public")); ?>js/plugins.js"></script>        
    <script type="text/javascript" src="<?php echo (C("Public")); ?>js/actions.js"></script>        
    <!-- 结束 模版插件 -->
<!-- 结束 脚本区域 -->         
</body>
</html>