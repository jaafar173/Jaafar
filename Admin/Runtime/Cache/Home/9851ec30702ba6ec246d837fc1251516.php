<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title><?php echo ($title); ?>-长沙橱柜设计师</title>
  
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
          <h1 class="page-header">文章发布</h1>



          <form class="form-horizontal" role="form" action="" method="post">
            <div class="form-group">
              <label for="title" class="col-sm-2 col-md-1 control-label">标题</label>
              <div class="col-sm-7 col-md-10">
                <input type="text" class="form-control" id="title" name="title" placeholder="请输入标题" value="<?php echo ($article["title"]); ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-md-1 control-label">关键字</label>
              <div class="col-sm-7 col-md-10">
                <input type="text" class="form-control" id="keywods" name="keywords" placeholder="请输入关键字，关键字用逗号隔开" value="<?php echo ($article["keywords"]); ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 col-md-1 control-label">描述</label>
              <div class="col-sm-7 col-md-10">
                <input type="text" class="form-control" id="description" name="description" placeholder="请输入描述信息，字数限制在27以内" value="<?php echo ($article["description"]); ?>">
              </div>
            </div>

            <div class="form-group">
              <label for="uplaod" class="col-sm-2 col-md-1 control-label">封面图片</label>
             

              <div class="col-sm-4 col-md-2">
                <span>
                  <p id="img_div"><img id="img_path" src="<?php echo ($article["mainimg"]); ?>" width=100px height=100px/> </p>  
                  <input type="hidden"  id="mainimg" name="mainimg" value="<?php echo ($article["imgval"]); ?>">
                </span>
                <button type="button" class="form-control" id="upload_button">上传图片</button>
              </div>
            </div>

        <!--     <button id="upload_button">上传背景</button> <img src="./images/loading.gif" style="display:none;" id="loadimg" />
<p id="img_div"><img id="img_path" /></p>
 -->

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 col-md-1 control-label">文章正文</label>
              <div class="col-sm-7 col-md-10">
                
                
                  <textarea name="content" id="content">
                      <?php echo ($article["content"]); ?>

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
  <script type="text/javascript">
$(document).ready(function(){
    ajaxUpload(
        'upload_button', //上传的按钮id名称
        1024,  //允许上传的文件大小（单位：kb）
        '../upload/upload?form_name=userfile&file_size=1024',
         //提交服务器端地址
        //form_name=userfile&file_size=1024
        'userfile', //提交服务器文件表单名称
        function(url){

          console.log('urlfunction');
          $('#img_path').attr('src','/'+url);
          $('#mainimg').val(url);
        }, //上传成功后执行的 js callback
        'loadimg'  //loading 图片id
    );
});
/**
 * Ajax 无刷新上传图片（jpg|gif|png）
 * @param string id_name id名称
 * @param int filesize 文件大小 k 为单位
 * @param string url   提交服务器端地址
 * @param string filename 提交服务器文件表单名称
 * @param string callback 上传成功运行代码
 * @param string loadingid loading 图片id名称
 * @return json
 */
function ajaxUpload(id_name, filesize, url, filename, callback, loadingid) {
    var button = $('#'+id_name), interval;
    var fileType = "pic", fileNum = "one";
    new AjaxUpload(button,{
        action: url,
        name: filename,
        onSubmit : function(file, ext){
            if(fileType == "pic") {
                if (ext && /^(jpg|png|jpeg|gif)$/.test(ext)){
                    this.setData({
                        'info': '文件类型为图片'
                    });
                } else {
                    alert('提示：您上传的是非图片类型！');
                    return false;
                }
            }
            $("#"+loadingid).show();
            if(fileNum == 'one') this.disable();
        },
        onComplete: function(file, response){
            console.log(file);
            console.log(response);
            response = JSON.parse(response);
            if(response.ok==1){
                console.log('OK!');
                callback(response.filename);
            }
            //eval("var obj="+response);
            // if (obj.ok) {
            //    // eval(callback);
            // } else {
            //     switch (response) {
            //         case '1':
            //             alert('提示：上传失败，图片不能大于'+filesize+'k！');
            //             break;
            //         case '3':
            //             alert('提示：图片只有部分文件被上传，请重新上传！');
            //             break;
            //         case '4':
            //             alert('提示：没有任何文件被上传！');
            //             break;
            //         case '5':
            //             alert('提示：非图片类型，请上传jpg|png|gif图片！');
            //             break;
            //         default:
            //             alert('提示：上传失败，错误未知，请您及时联系网站客服人员！');
            //             break;
            //     }
            // }
            // $("#"+loadingid).hide();
            // window.clearInterval(interval);
            // this.enable();
        }
    });
}
</script>
</html>