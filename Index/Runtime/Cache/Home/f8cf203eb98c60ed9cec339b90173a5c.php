<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title>长沙专业橱柜设计师</title>
  
  <!-- 双核浏览器默认为webkit内核模式 -->
  <meta name="renderer" content="webkit">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="我们可以只做橱柜设计，也可以提供橱柜设计、生产、安装、售后服务于一体的专业服务。优秀案例，保留所有权，盗图必究。">
  <meta name="keywords" content="长沙专业橱柜设计,橱柜制作,橱柜设计注意事项,长沙橱柜品牌,长沙整体橱柜 />
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

    <div class="container theme-showcase" role="main" style="padding-top:60px;">

      <div class="jumbotron">
          <h3>湛倩——长沙橱柜设计师!</h3>
          <p>
            1、本人接受过正规美术教育，具有良好的美术功底及艺术素养。
          </p>

          <p>2、每一张图纸都是我亲自设计，不求做到最完美，但每一个项目，我都尽力做到最好。
          </p>

          <p>2、有多年的展柜、橱柜等设计经验，能根据客户经验制作。
          </p>
          <p></p>
      </div> 

      <div class="row">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><div class="col-sm-4 col-md-4 col-xs-6 col-lg-3">
            <div style="height:100%;" class="thumbnail">

               <img src="<?php echo ($row["mainimg"]); ?>" 
               alt="<?php echo ($row["title"]); ?>">
            </div>  
            <div class="caption">
               <h3><a href="article/<?php echo ($row["id"]); ?>.html"><?php echo ($row["title"]); ?></a></h3>
              
            </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>



      </div>

    </div>  <!-- 内容结束 -->

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