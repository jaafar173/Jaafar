<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title><?php echo ($listname); ?>----<?php echo WEBSITE_NAME;?></title>
  
  <!-- 双核浏览器默认为webkit内核模式 -->
  <meta name="renderer" content="webkit">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo ($company["description"]); ?>">
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

  <style type="text/css">
   .blog-main img{
    max-width: 100%
   }
  </style>


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

      <div class="blog-header">
        <h1 class="blog-title"><?php echo ($company["title"]); ?></h1>
        <p class="lead blog-description"><?php echo ($company["description"]); ?></p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">
          

          <!-- 表格开始 -->
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>公司名</th>
                <th>公司地址</th>
                <th>联系人手机</th> 
              </tr>
            </thead>
            <tbody>
              <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                  <td><?php echo ($vo["id"]); ?></td>
                  <td><?php echo ($vo["name"]); ?></td>
                  <td><?php echo ($vo["street"]); ?></td>
                  <td><?php echo ($vo["user"]["phone"]); ?></td> 
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
          </table>
          <!-- 表格结束-->

          <!-- /.blog-post -->





          <div class="blog-post"></div><!-- /.blog-post -->

          <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
          </ul>

        </div><!-- /.blog-main -->

                <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>关于作品</h4>
            <p>本人拥有作品的所有权利，如果抄袭、仿冒，必究!</p>
          </div>
          <div class="sidebar-module">
            <h4>个人设计作品一览</h4>
            <ol class="list-unstyled">
              <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li><a href="/article/<?php echo ($row["id"]); ?>.html"><?php echo ($row["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ol>
          </div>
<!--           <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div> -->
        </div><!-- /.blog-sidebar --> <!-- /.blog-sidebar -->

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