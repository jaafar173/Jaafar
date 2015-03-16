<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title>Bootstrap 3, from LayoutIt!</title>
  
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

  <link href="/public/css/signin.css" rel="stylesheet">


</head>

<body role="document">
    <!-- Fixed navbar -->
    <!--  -->
     <div class="container">

      <form class="form-signin" role="form">
        <h2 class="form-signin-heading">请登录</h2>
        <input type="email" class="form-control" placeholder="Email address" id="email" required autofocus>
        <input type="password" class="form-control" placeholder="Password" id="password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> 记住我
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="button" id="submit">Sign in</button>
      </form>

    </div>  <!-- 内容结束 -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
<script type="text/javascript">
  $(document).ready(function(){
      $('#submit').click(function(){
          $.post('<?php echo U('login/login');?>',{
              email:$('#email').val(),
              password:$('#password').val()
            },function(data){
              alert(data);
          },"json");
      });
  });


</script>


</html>