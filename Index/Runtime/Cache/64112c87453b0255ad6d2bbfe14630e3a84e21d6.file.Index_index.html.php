<?php /* Smarty version Smarty-3.1.6, created on 2014-10-19 15:27:48
         compiled from "./Index/Home/View\Index_index.html" */ ?>
<?php /*%%SmartyHeaderCode:514554435946bc19e5-20199026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64112c87453b0255ad6d2bbfe14630e3a84e21d6' => 
    array (
      0 => './Index/Home/View\\Index_index.html',
      1 => 1413703662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '514554435946bc19e5-20199026',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_544359470d8b6',
  'variables' => 
  array (
    '__ROOT__' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544359470d8b6')) {function content_544359470d8b6($_smarty_tpl) {?><!DOCTYPE html>
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


</head>

<body role="document">
    <!-- Fixed navbar -->
    <?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <div class="container theme-showcase" role="main" style="padding-top:60px;">

      <div class="row">
        <div class="col-xs-6 col-sm-3 col-md-3">
            <a href="#" class="thumbnail">
               <img src="<?php echo @__ROOT__;?>
/public/images/1.jpg"
               alt="通用的占位符缩略图">
            </a>
         </div>
         <div class="col-xs-6 col-sm-3 col-md-3">
            <a href="#" class="thumbnail">
               <img src="<?php echo @__ROOT__;?>
/public/images/1.jpg"
               alt="通用的占位符缩略图">
            </a>
         </div>
         <div class="col-xs-6 col-sm-3 col-md-3">
            <a href="#" class="thumbnail">
               <img src="<?php echo $_smarty_tpl->tpl_vars['__ROOT__']->value;?>
/public/images/1.jpg"
               alt="通用的占位符缩略图">
            </a>
         </div>
         <div class="col-xs-6 col-sm-3 col-md-3">
            <a href="#" class="thumbnail">
               <img src="<?php echo $_smarty_tpl->tpl_vars['__ROOT__']->value;?>
/public/images/1.jpg"
               alt="通用的占位符缩略图">
            </a>
         </div>
         <div class="col-xs-6 col-sm-3 col-md-3">
            <a href="#" class="thumbnail">
               <img src="<?php echo $_smarty_tpl->tpl_vars['__ROOT__']->value;?>
/public/images/1.jpg"
               alt="通用的占位符缩略图">
            </a>
         </div>

         <div class="col-xs-6 col-sm-3 col-md-3">
            <a href="#" class="thumbnail">
               <img src="<?php echo $_smarty_tpl->tpl_vars['__ROOT__']->value;?>
/public/images/1.jpg"  style="width:100%"
               alt="通用的占位符缩略图">
            </a>
         </div>
      </div>

    </div>  <!-- 内容结束 -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>
<?php }} ?>