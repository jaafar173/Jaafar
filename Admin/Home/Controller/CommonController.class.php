<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function _initialize(){
        if (!isset($_SESSION['user'])){
          $this->error('你没有权限,请重新登录', '/admin.php/home/login/login'); 
        }
    }

}