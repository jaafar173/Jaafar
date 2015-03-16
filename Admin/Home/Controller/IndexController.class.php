<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        echo 'aaaa';
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Home模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }

    public function login(){
    	$this->display();
    }

    public function addarticle(){
    	$this->display();
    }

    public function add_post_article(){
    	$Article = M("Article"); // 实例化Article对象
        $data['title']= I('post.title');
        $data['description']= I('post.description');
        $data['keywords']= I('post.keywords');
        $data['content']= I('post.content');
        $res = $Article->add($data);
        if($res){
            echo "添加成功！";
        }
    }

    public function articlelist(){
        $Article = M("Article"); 
        $data = $Article->select();
        //dump($data);
        $this->list = $data;
        $this->display();
    }
}