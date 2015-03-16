<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title><?php echo ($cat["title"]); ?></title>
  
  <!-- 双核浏览器默认为webkit内核模式 -->
  <meta name="renderer" content="webkit">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo ($cat["description"]); ?>">
  <meta name="author" content="">
  <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
  <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

  <!-- 新 Bootstrap 核心 CSS 文件 -->
  <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">

  <!-- 可选的Bootstrap主题文件（一般不用引入） -->
  <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

  <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
  <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


</head>

<body role="document">
    <!-- Fixed navbar -->
  
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
            <li class="active"><a href="#">橱柜设计案例</a></li>
            <li><a href="#">关于我们</a></li>
            <li><a href="#contact">本网站使用技术</a></li>
          </ul>
        </div>
      </div>
    </div> 

    <div class="container" style="padding-top:60px;">

      <div class="blog-header">
        <h1 class="blog-title"><?php echo ($cat["title"]); ?></h1>
        <p class="lead blog-description"><?php echo ($cat["description"]); ?></p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">
          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo ($cat["title"]); ?></h2>
            <p class="blog-post-meta"><?php echo ($cat["addtime"]); ?><a href="/">长沙橱柜设计网</a></p>

            <?php echo ($cat["content"]); ?>
          </div><!-- /.blog-post -->

          <div class="blog-post"></div><!-- /.blog-post -->

          <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
          </ul>

        </div><!-- /.blog-main -->

         <!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- 内容结束 -->

     <footer class="footer ">
  <div class="container">
    <div class="row footer-top">
      <div class="col-sm-6 col-lg-6">
<!--         <h4>
          <img src="/www/assets/img/logo.png">
        </h4> -->
        <p>本网站采用bootstrap3开发，因此在移动端的效果也非常不错。</p>
        <p><a href="http://www.miibeian.gov.cn/" target="_blank">湘ICP备14016707号-1</a></p>
      </div>
      <div class="col-sm-6  col-lg-5 col-lg-offset-1">


      </div>
    </div>
    <hr/>
<!--     <div class="row footer-bottom">
      <ul class="list-inline text-center">
        <li><a href="http://www.miibeian.gov.cn/" target="_blank">湘ICP备14016707号-1</a></li>
      </ul>
    </div> -->
  </div>
</footer>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F84bbcd12f6842f82eb708727e8608936' type='text/javascript'%3E%3C/script%3E"));
</script>

 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>