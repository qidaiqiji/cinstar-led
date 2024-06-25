<?php

class JoinAction extends CommonAction{

	public function index(){

		$db=M('Join');

		import('ORG.Util.Page');

		$count=$db->count();

		$page=new Page($count,5);

		$this->show=$page->show();

		

		$this->join=$db->field('id,tel,time,name,fl')->order('time desc')->limit($page->firstRow.','.$page->listRows)->select();

		$this->display();

	}

	

	public function view(){

		$id=$this->_get('id','intval');

		$this->join=M('Join')->field('id,title,name,tel,email,add,add2,contents,time,fl,sex,youbian,tel1,tel2,tel3,tel4,hwjz,fjsj,dawenti,xiaowenti,mianji,company,car1,car2,car3,car4,car5,cangku,kaocha,zhuce')->find($id);

		$this->display();

	}

	

	public function del(){

		$id=$this->_get('id','intval');

		

		$db=M('Join');

		if($db->where(array('id'=>$id))->delete()){

			$this->success('删除信息成功',U('Join/index'));

		}else{

			$this->error('删除失败');

		}

	}

	

	public function alldel(){

		$model = M("Join");

		$model->query('delete from __TABLE__ ');

		$this->redirect('index');

	}

	

	

	

	

	

}

?>