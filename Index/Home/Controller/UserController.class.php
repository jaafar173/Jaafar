<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
        $id = $_SESSION['user']['id'];
        if(!$id){
            $this->error('还没有登陆，请登陆！','login');
        }
        $oUser = M('user');
        $user = $oUser->where("id=$id")->find();
        $this->assign('user',$user);
        $this->display('User/index');
    }

    public function login(){
        if($_POST){

            $password = I('post.password');
            $email = I('post.email');
            $res = $this->md5password($password);

            $oUser = M('user');
            $where['email']=$email;
            $user = $oUser->where($where)->find();
            if($user['password']==$res){
                session('user',$user);
                $arr = array('ret'=>0,data=>U('User/index'));
                $this->ajaxReturn($arr);
            }else{
                $arr = array('ret'=>-1,msg=>'密码错误');
                $this->ajaxReturn($arr);
            }
        }
        $this->assign('menu','login');
        $this->display('User/login');
    }


    public function register(){
        $this->assign('menu','register');
        $this->display('User/register');
    }

    public function add(){
        $oUser    = M('user');
        $password = I('post.password');
        $email    = I('post.email');

        //验证是否为邮箱
        $res = filter_var($email, FILTER_VALIDATE_EMAIL);
        if(!$res){
            $arr = array('ret'=>-4,msg=>'邮箱格式不符合，请检查！');
            $this->ajaxReturn($arr);
        }

        $map['email'] = $email;
        $user = $oUser->where($map)->find();
        if($user){
            $arr = array('ret'=>-1,msg=>'邮箱已经注册过！请使用此账号登陆');
            $this->ajaxReturn($arr);
        }
        //验证邮箱是否唯一

        //密码加密，没有使用盐
        $res = $this->md5password($password);
        $data['email']    = $email;
        $data['password'] = $res;
        $res = $oUser->add($data);
        if($res){
            $arr = array('ret'=>0,data=>U('User/index'));
            $this->ajaxReturn($arr);
        }else{

            //注册失败，添加到记录表中
            //@todo 
            $arr = array('ret'=>-3,msg=>'注册失败，请联系管理员'); 
        }
    }


    private function md5password($password){
        return md5(MD5_key.$password); 
    }

    //个人账户下的公司信息
    public function company(){

        $oCompany = M('Company');
        $userid = $_SESSION['user']['id'];
        if(!$userid){
            $this->error('还没有登陆，请登陆！','user/login');
        };
        $where['userid'] = $userid;
        $company= $oCompany->where($where)->find();


        $this->assign('company',$company);
        $this->display();
    }

    public function setcompany(){
        $oCompany = M('Company');
        $userid = $_SESSION['user']['id'];
        if(!$userid){
            $this->error('还没有登陆，请登陆！','user/login');
        };
        if($_POST){
            $data['name']    = I('post.name');
            $data['street']  = I('post.street');
            $data['addtime'] = date('Y-m-d H:i:s',time());
            $data['description'] =  I('post.description');
            $data['userid']  = $_SESSION['user']['id'];

            //公司名不能重复
            $map['name'] = $data['name'];
            $res=$oCompany->where($map)->find();
            if($res){
                $arr = array('ret'=>-2,msg=>'公司名已经注册过，不能再重复注册！'); 
                //$this->ajaxReturn($arr);
            }

            //一个账号下，只能有一个公司
            $map = array();
            $map['userid'] = $data['userid'];
            $res=$oCompany->where($map)->find();
            if($res){
                $arr = array('ret'=>-3,msg=>'您已经添加过相关公司，不能再添加！');
                //$this->ajaxReturn($arr); 
            }
            //一个地址下，只能有一个公司，待定。可能两个公司在一起办公@todo


            $res = $oCompany->add($data);
            if($res){
                $arr = array('ret'=>0,data=>U('User/index'));
                //$this->ajaxReturn($arr);
            }else{
                //注册失败，添加到记录表中
                //@todo 
                $arr = array('ret'=>-1,msg=>'添加失败，请联系管理员'); 
            }
        }
        
        $this->assign('menu','setcompany');
        $this->display();
    }




}