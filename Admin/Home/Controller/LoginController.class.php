<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        echo 'aaaa';
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Home模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }

    public function login(){
        if($_POST){
            $password = I('post.password');
            $email = I('post.email');
            $res = $this->md5password($password);

            $adminuser = M('adminuser');
            $where['email']=$email;
            $user = $adminuser->where($where)->find();
            if($user['password']==$res){
                //$this->ajax
                session('user',$user);
                $arr = array('ret'=>0,data=>U('Article/addarticle'));
                $this->ajaxReturn($arr);
                // $json_string = json_encode($arr);
                // echo $json_string;
                // exit();
            }else{
                $arr = array('ret'=>-1,msg=>'密码错误');
                $this->ajaxReturn($arr);
            }
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