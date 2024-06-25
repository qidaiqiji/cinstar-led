<?php

class MemberAction extends CommonAction{
	public function index(){
		$this->member=M('Member')->field('id,username')->select();
		$this->display();
	}

	public function add(){
		$this->display();
	}

	public function addMember(){
		if ($this->isPost()) {
			$db=D('Member');
			if($data=$db->create()){
				if($db->data($data)->add()){
					$this->success('用户创建成功',U('Member/index'));
				}else{
					$this->error('用户添加失败');
				}
			}else{
				$this->error($db->getError());
			}			
		}else{
			$this->error('非法操作！');
		}	
	}

	public function mod(){
		$id=$this->_get('id','intval');
		$this->member=M('Member')->field('id,username')->find($id);
		$this->display();
	}

	public function upMember(){
		if ($this->isPost()) {
			$db=D('Member');
			if ($data=$db->create()) {
				if($data['password']==""){
					unset($data['password']);
				}else{
					$data['password']=md5($data['password']);
				}
				if ($db->data($data)->save()) {
					$this->success('用户修改成功',U('Member/index'));
				}else{
					$this->error('用户修改失败或没有修改数据');
				}
			}else{
				$this->error($db->getError());
			}
		}else{
			$this->error('非法操作！');
		}
	}

	public function del(){
		$id=$this->_get('id','intval');
		if ($id==$_SESSION['uid']) {
			$this->error('此用户正在登录中，不可以删除！');
		}
		if (M('Member')->where('id ='.$id)->delete()) {
			if (!M('Member')->find($_SESSION['uid'])) {
				session(null);
			}
			$this->success('删除用户成功');
		}else{
			$this->error('删除失败');
		}
	}



}
?>