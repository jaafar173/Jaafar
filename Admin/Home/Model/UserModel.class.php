<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {

	public function  md5($password){
		return md5(MD5_key.$password);
	}


	
}


?>