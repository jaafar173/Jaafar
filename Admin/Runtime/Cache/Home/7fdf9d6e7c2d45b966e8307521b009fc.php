<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title>甜酒栏目-cosplay中国站</title>
  
  <!-- 双核浏览器默认为webkit内核模式 -->
  <meta name="renderer" content="webkit">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  
  
  <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
  <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>







  <link href="/Public/css/dashboard.css" rel="stylesheet">
  <script src="/Public/js/ajaxupload.3.5.js"></script>

  <script type="text/javascript">
     window.UEDITOR_HOME_URL = "/Public/ueditor/";  
     window.onload = function (){
        UE.getEditor('content');
     }
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例

</script>
  <script type="text/javascript" src="/Public/ueditor/ueditor.config.js"></script>
  <script type="text/javascript" src="/Public/ueditor/ueditor.all.js"></script>

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
            <li class="active"><a href="/admin.php/Home/article/addarticle.html">发布文章</a></li>
            <li><a href="/admin.php/Home/article/articlelist">文章列表</a></li>
            <li><a href="/admin.php/Home/article/addcat">增加栏目</a></li>
            <li><a href="/admin.php/Home/article/catlist">栏目列表</a></li>
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
          <h1 class="page-header">增加栏目</h1>



          <form class="form-horizontal" role="form" action="../Article/addcat" method="post">
            <div class="form-group">
              <label for="catname" class="col-sm-2 col-md-1 control-label">栏目标题</label>
              <div class="col-sm-7 col-md-10">
                <input type="text" class="form-control" id="catname" name="catname" placeholder="请输入标题" value="<?php echo ($cat["catname"]); ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-md-1 control-label">关键字</label>
              <div class="col-sm-7 col-md-10">
                <input type="text" class="form-control" id="keywods" name="keywords" placeholder="请输入关键字，关键字用逗号隔开" value="<?php echo ($cat["keywords"]); ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 col-md-1 control-label">描述</label>
              <div class="col-sm-7 col-md-10">
                <input type="text" class="form-control" id="description" name="description" placeholder="请输入描述信息，字数限制在27以内" value="<?php echo ($cat["description"]); ?>">
              </div>
            </div>



        <!--     <button id="upload_button">上传背景</button> <img src="./images/loading.gif" style="display:none;" id="loadimg" />
<p id="img_div"><img id="img_path" /></p>
 -->


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