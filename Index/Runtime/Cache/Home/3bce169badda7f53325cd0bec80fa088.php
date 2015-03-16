<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title>注册页面----<?php echo WEBSITE_NAME;?></title>
  
  <!-- 双核浏览器默认为webkit内核模式 -->
  <meta name="renderer" content="webkit">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  
   


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



  <link href="/Public/css/signin.css" rel="stylesheet">
  <style type="text/css">
    .form-signin input[type="email"] {
        margin-bottom: 10px;
    }
  </style>


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
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only"></span>   
            <span class="icon-bar"></span>   
            <span class="icon-bar"></span>   
            <span class="icon-bar"></span>    
          </button>
          <a class="navbar-brand" href="/">长沙专业橱柜设计师</a>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php if($menu == 'article'): ?>class="active"<?php endif; ?>><a href="#">橱柜设计案例</a></li>
            <li <?php if($menu == 'aboutus'): ?>class="active"<?php endif; ?>><a href="#">关于我们</a></li>
            <li <?php if($menu == 'techlonegy'): ?>class="active"<?php endif; ?>><a href="#contact">本网站使用技术</a></li>
            <li <?php if($menu == 'register'): ?>class="active"<?php endif; ?>><a href="/user/register">用户注册</a></li>
            <li <?php if($menu == 'login'): ?>class="active"<?php endif; ?>><a href="/user/login">用户登陆</a></li>
            <li <?php if($menu == 'listcompany'): ?>class="active"<?php endif; ?>><a href="/company/listcompany">橱柜厂家</a></li>
          </ul>
        </div>
      </div>
    </div> 
     <div class="container">

      <form class="form-signin" role="form">
        <h2 class="form-signin-heading">欢迎注册长沙橱柜网</h2>
        <input type="email"    class="form-control" placeholder="请输入邮箱" id="email" required >
        <input type="password" class="form-control" placeholder="请输入密码" id="password" required>

<!--         <input type="password" class="form-control" placeholder="请再次输入密码" id="password" required>

 -->
        <label class="checkbox">
         <!--  <input type="checkbox" value="remember-me"> --> <!-- 您在这注册，意味着同意我们的条例 -->
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="button" id="submit">点击注册</button>
      </form>

    </div>  <!-- 内容结束 -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
<script type="text/javascript">
  $(document).ready(function(){
      $('#submit').click(function(){



          $.post('<?php echo U('User/add');?>',{
              email:$('#email').val(),
              password:$('#password').val()
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


</html>