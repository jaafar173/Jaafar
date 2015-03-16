<?php
namespace Home\Controller;
use Think\Controller;
class CompanyController extends Controller {
    public function index(){
        echo 'die';
    }

    public function show(){
        $id=intval($_GET['id']);
        $Article = M('Article');
        $article = $Article->where("id =$id")->find();
        $list = $Article->order('status')->limit(10)->select();
        if(!$article){
            $this->error('没有这个操作项');
        }
        $article['content'] = stripslashes(htmlspecialchars_decode($article['content']));
        $this->assign('article',$article);
        $this->assign('list',$list);
       //dump($res);
    	$this->display('index');
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Home模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }

    public function article(){
    	$Article = M('Article');
    	$res = $Article->select();


    	dump($res);
    }

    // public function list(){
    //     \Think\Build::buildModel('Admin','Role');
    // }







}