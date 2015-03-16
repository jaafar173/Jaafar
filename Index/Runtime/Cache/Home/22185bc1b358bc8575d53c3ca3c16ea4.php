<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo ($title); ?>-长沙橱柜设计师</title>

    


  <script src="/Public/js/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="/Public/css/bootstrap.css">
  <link rel="stylesheet" href="/Public/css/bootstrap-theme.css">
  <script src="/Public/js/bootstrap.js"></script>
  





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
    <!--     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">cosplay 大家庭1111</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">cosplay 大家庭</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">主页</a></li>
            <li><a href="#about">知名人物</a></li>
            <li><a href="#contact">关于我们</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>  -->
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
            <li><a href="/admin.php/Home/cat/addcat">增加栏目</a></li>
            <li><a href="/admin.php/Home/cat/catlist">栏目列表</a></li>
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
          <h1 class="page-header">用户中心</h1>

          <div class="row">
              <table class="table table-bordered">
                <div class="form-group">
                  <label class="col-sm-2 col-md-1 control-label">公司全名</label>
                  <div class="col-sm-7 col-md-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="请输入公司全名" value="<?php echo ($company["name"]); ?>">
                  </div>
                </div>
                <br>


                <div class="form-group">
                  <label for="title" class="col-sm-2 col-md-1 control-label">公司电话</label>
                  <div class="col-sm-7 col-md-10">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="请输入公司电话" value="<?php echo ($company["phone"]); ?>">
                  </div>
                </div>
                <br>


                <div class="form-group">
                  <label for="title" class="col-sm-2 col-md-1 control-label">公司地址</label>
                  <div class="col-sm-7 col-md-10">
                    <input type="text" class="form-control" id="street" name="street" placeholder="请输入公司地址" value="<?php echo ($company["street"]); ?>">
                  </div>
                </div>
                <br>


                <div class="form-group">
                  <label for="title" class="col-sm-2 col-md-1 control-label">详细信息</label>
                  <div class="col-sm-7 col-md-10">
                    <input type="text" class="form-control" id="description" name="description" placeholder="请输入公司详细信息" value="<?php echo ($company["description"]); ?>">
                  </div>
                </div>
                <br>

                <button type="button" id="submit">添加</button>



              </table>            


          </div>


        </div>
      </div>
    </div>
 <!-- 内容结束 -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript">
  $(document).ready(function(){
      $('#submit').click(function(){
          $.post('',{
              street:$('#street').val(),
              name:$('#name').val(),
              description:$('#description').val(),
              phone:$('#phone').val(),
            },function(data){
              if(data.ret==0){
                window.location = data.data;
              }else{
                alert(data.msg);
              }
          },"json");
      });
  });
</script>
  </body>
</html>