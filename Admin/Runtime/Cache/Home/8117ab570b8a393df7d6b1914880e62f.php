<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title>文章发布-cosplay中国站</title>
  
  <!-- 双核浏览器默认为webkit内核模式 -->
  <meta name="renderer" content="webkit">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
  <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

  <!-- 新 Bootstrap 核心 CSS 文件 -->
  <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">

  <!-- 可选的Bootstrap主题文件（一般不用引入） -->
  <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

  <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
  <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  <link href="/public/css/dashboard.css" rel="stylesheet">

  <script type="text/javascript">
     window.UEDITOR_HOME_URL = "/public/ueditor/";  
     window.onload = function (){
        UE.getEditor('content');
     }
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例

</script>
  <script type="text/javascript" src="/public/ueditor/ueditor.config.js"></script>
  <script type="text/javascript" src="/public/ueditor/ueditor.all.js"></script>


</head>

<body role="document">
    <!-- Fixed navbar -->
    <!--  -->
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </div>
      

    <div class="container-fluid">
      <div class="row">

        <!-- 左侧banner -->
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">发布文章</a></li>
            <li><a href="/admin.php/Home/Index/articlelist">文章列表</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>  

        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">文章发布</h1>



          <form class="form-horizontal" role="form" action="/admin.php/Home/Index/add_post_article" method="post">
            <div class="form-group">
              <label for="title" class="col-sm-2 col-md-1 control-label">标题</label>
              <div class="col-sm-7 col-md-10">
                <input type="text" class="form-control" id="title" name="title" placeholder="请输入标题">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-md-1 control-label">关键字</label>
              <div class="col-sm-7 col-md-10">
                <input type="text" class="form-control" id="keywods" name="keywords" placeholder="请输入关键字，关键字用逗号隔开">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 col-md-1 control-label">描述</label>
              <div class="col-sm-7 col-md-10">
                <input type="text" class="form-control" id="description" name="description" placeholder="请输入描述信息，字数限制在27以内">
              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 col-md-1 control-label">文章正文</label>
              <div class="col-sm-7 col-md-10">
                
                
                  <textarea name="content" id="content">
                      

                  </textarea>
              
                
              </div>
            </div>


            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          



        </div>
      </div>
    </div>
 <!-- 内容结束 -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>