<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends CommonController {
    public function index(){
        echo 'aaaa';
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Home模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }

    public function login(){
        if($_POST){
            $password = I('post.password');
            $email = I('post.email');
            echo $password;
            echo $email;
            exit();
            die();
            // $adminuser = M('adminuser');
            // $userlist = $adminuser->select();
            // var_dump($userlist);
        }
    	$this->display('Index/login');
    }

    public function addarticle(){
    	$this->display();
    }

    private function check(){

    }

    private function md5password($password){
        return md5(MD5_key.$password);
        
    }


}