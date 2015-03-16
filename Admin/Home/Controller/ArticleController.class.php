<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends CommonController {

    private $upload_dir;

    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Home模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }

    public function addarticle(){
        if($_POST){
            $Article = M("Article"); // 实例化Article对象
            $data = $this->setdate();
            $res = $Article->add($data);
            if($res){
                redirect('articlelist');
            }else{
                $this->error('新增失败');
            }
        }

        $this->assign('title','文章发布');
        $this->display(); 
    }



    public function articlelist(){
        $Article = M("Article"); 
        $data = $Article->select();
        $this->list = $data;
        $this->display();
    }


    private function moveimg($tempfile,$filename){
        // @todo 这种rename方式是否安全，不确定
        $res = rename($tempfile, $filename);
        if(!$res){
            $this->ajaxreturn(array('ret'=>-2,'msg'=>'上传文件出错，请联系管理员！'));
        }

    }

    public function edit(){
        $id=intval(I('get.id'));
        $oArticle = M("Article"); 
        if($_POST){
            $data = $this->setdate();
            $res = $oArticle->where('id='.$id)->save($data);
            if($res){
                redirect('articlelist');
                //$this->success('修改成功', 'articlelist');
            }else{
                $this->error('修改失败');
            }
        }

        if($id){
            $article = $oArticle->where('id ='.$id)->find();
            $article['content'] = stripslashes(htmlspecialchars_decode($article['content']));
            $this->assign('title','文章编辑');
            $article['imgval'] = substr($article['mainimg'],1);
            $this->assign('article',$article);
            $this->display('Article/addarticle');
        }else{
             $this->error('错误路径..');
        }

    }

    //post过来的数据在这设置，简化代码
    private function setdate(){
        $data['title']= I('post.title');
        if(!$data['title']){
            $this->error('标题不能为空！');
        }
        $data['description']= I('post.description');
        $data['keywords']= I('post.keywords');
        $data['content']= $_POST['content'];
        $data['addtime']= time();
        $data['adminuserid']= $_SESSION['user']['id'];
        
        $filename = basename(I('post.mainimg'));
        $this->upload_dir = 'Public/'.date('Ym').'/'.$filename;
        if (!is_dir('Public/'.date('Ym'))) mkdir('Public/'.date('Ym'), 0777);
        $this->moveimg(I('post.mainimg'),$this->upload_dir);
        $data['mainimg']= '/'.$this->upload_dir;
        return $data;
    }

    public function test($value='')
    {
       $image = new \Think\Image(); 
       $image->open('./Public/images/test/1.jpg');
       $width = $image->width();
       echo $width;
    }



}