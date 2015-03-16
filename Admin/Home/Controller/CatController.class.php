<?php
namespace Home\Controller;
use Think\Controller;
class CatController extends CommonController {

    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Home模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }

    /*增加栏目*/
    public function addcat(){


        //当post数据过来时，添加
        if($_POST){
            $Cat = M("Cat"); // 实例化Article对象
            $data=$this->setdata();
            $res = $Cat->add($data);
            if($res){
                redirect('catlist');
                //$this->success('新增成功', 'catlist');
                //$this->ajaxreturn(array('ret'=>-1,'msg'=>'文件添加失败，请联系管理员！'));
            }else{
                $this->error('新增失败');
                //$this->ajaxreturn(array('ret'=>0, 'data'=>'articlelist'));
            }
        }

        //显示数据
        $this->display();
    }

    public function catlist(){
        $Cat = M('Cat');
        $res = $Cat->select();
        $this->assign('catlist',$res);

        $this->display();
    }
    public function edit(){
        $id = intval($_GET['id']);
        if(!id){
            $this->error('路径错误！');
        }
        $oCat = M('Cat');
        if($_POST){
            $data = $this->setdata();
            $res = $oCat->where('id='.$id)->save($data);
            if($res){
                redirect('catlist');
            }else{
                $this->error('修改失败');
            }
        }

        $cat = $oCat->where('id='.$id)->find();
        $this->assign('cat',$cat);
        $this->display('addcat');
    }

    private function setdata(){
        $data['catname']= I('post.catname');
        $data['description']= I('post.description');
        $data['keywords']= I('post.keywords');
        $data['content']= I('post.content');
        return $data;
    }



}