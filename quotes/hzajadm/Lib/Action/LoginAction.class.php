<?php

class LoginAction extends Action{

	public function index(){
		$this->display();	
	}

	public function checkLogin(){
		header("Content-Type:text/html; charset=utf-8");
		if($_SESSION['verify'] != $this->_post('code','md5')){
			$this->error('验证码错误！');
		}
		if($this->isPost()){
			$db=M('Member');
			$where['username']=array('eq',$_POST['username']);
			$where['password']=array('eq',$this->_post('password','md5'));
			$where['_logic'] = 'and';
			$result=$db->where($where)->find();
			if(!$result){
				$this->error('用户名或密码错误！');
			}else{
				session('uid',$result['id']);
				session('uname',$result['username']);
				redirect(__APP__);
			}	
		}else{
			$this->error('非法操作');		
		}	
	}

	public function verify(){
		import('ORG.Util.Image');
		Image::buildImageVerify();
	}
	
	public function test(){
		
	}
	protected function setconfig($array,$file){
		$config=array_merge(include $file , array_change_key_case($array,CASE_UPPER));
		$str = "<?php\r\nreturn " . var_export($config, true) . ";\r\n?>";
		if(file_put_contents($file,$str)){
			return true;
		}else{
			return false;
		}
	}

}
?>