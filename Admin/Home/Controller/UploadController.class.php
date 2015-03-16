<?php
namespace Home\Controller;
use Think\Controller;
class UploadController extends CommonController {
    public function index(){
        echo "111";
    }

    public function upload(){
        //require '/Public/php/AjaxUpload.class.php';
        //$ajaxupload = new AjaxUploadController('form_name', 'file_size');
        if ($_POST) {

           // $form_name = $_GET['form_name'];
            $form_name = I('get.form_name');
            //$file_size = intval($_GET['file_size']);
            $file_size = intval(I('get.file_size'));
            $ajaxupload = new AjaxUploadController($form_name, $file_size);
            // 底部是thinkphp自带的上传文件类，不过暂时用不到。。
            // $upload = new \Think\Upload();// 实例化上传类    
            // $upload->maxSize   =     3145728 ;// 设置附件上传大小    
            // $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型  
            // $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录    // 上传文件     
            // $info   =   $upload->upload();    
            // if(!$info) {// 上传错误提示错误信息        
            //     $this->error($upload->getError());    
            // }else{
            //     // 上传成功        
            //     $this->success('上传成功！');  
            // }
        }
    }

}