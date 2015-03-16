<?php
namespace Home\Controller;
use Think\Controller;
class CompanyController extends Controller {
    public function index(){
        echo 'die';
    }

    public function show(){
        $id=intval($_GET['id']);
        $Company = M('Company');
        $company = $Company->where("id =$id")->find();
        $list = $Company->limit(10)->select();

        if(!$company){
            $this->error('不存在这个id，请检查');
        }
        $this->assign('company',$company);
        $this->assign('list',$list);
    	$this->display('index');
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Home模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }

    public function listcompany(){
        $Company = M('Company');
    	$list = $Company->limit(10)->select();

        foreach ($list as $key => &$value) {
            $User = M('User');
            $where['id'] = $value['userid'];
            $user = $User->where($where)->find();
            $value['user'] =  $user;
        }
        

        $this->assign('menu','companylist');
        $this->assign('list',$list);
        $this->display('list');
    }

    public function add(){

        $userid = $_SESSION['user']['id'];
        if(!$userid){
            $this->error('还没有登陆，请登陆！','user/login');
        }
        if($_POST){
            $oCompany = M('Company');
            $data['name']   = I('post.name');
            $data['street'] = I('post.street');
            $data['addtime']  = time();
            $data['phone']   = I('post.phone');
            $data['userid']  = $userid;

            $data['description'] = I('post.description');

            $res = $oCompany->add($data);
            if($res){
                    $arr = array('ret'=>0,data=>U('Company/listcompany'));
                    $this->ajaxReturn($arr);
            }else{
                    $arr = array('ret'=>-1,'msg'=>'添加错误，请联系管理员');
                    $this->ajaxReturn($arr);
            }
        }
    } 



}