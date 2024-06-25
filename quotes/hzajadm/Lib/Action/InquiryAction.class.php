<?php

class InquiryAction extends CommonAction{

	public function index(){
	
	    $keyw = I('get.keyword');
        $where['id'] = array('gt',0);
		if($keyw){
           $where['_string'] = "(company like '%{$keyw}%')  or ( name like '%{$keyw}%')  or ( tel like '%{$keyw}%') or ( email like '%{$keyw}%')";
        }
		$db=M('Inquiry');
		import('ORG.Util.Page');
		$count=$db->where($where)->count();
		$page=new Page($count,10);
		$this->show=$page->show();
		$inquiry=$db->field('id,product,num,name,company,adress,tel,fax,email,contents,time,fl')->where($where)->order('time desc')->limit($page->firstRow.','.$page->listRows)->select();
		
		        //foreach ($inquiry as $k => $v) {
                    //$list[$k]["delete_role"] = D('RoleView')->where('role.role_id = %d', $v['delete_role_id'])->find();
                //}

        $this->inquiry=$inquiry;
		$this->display();

	}

	

	public function view(){

		$id=$this->_get('id','intval');

		$this->inquiry=M('Inquiry')->field('id,product,num,name,company,adress,tel,fax,email,contents,time,fl,add1,add2,add3')->find($id);

		$this->display();

	}

	

	public function del(){

		$id=$this->_get('id','intval');

		

		$db=M('Inquiry');

		if($db->where(array('id'=>$id))->delete()){

			$this->success('删除信息成功',U('Inquiry/index'));

		}else{

			$this->error('删除失败');

		}

	}

	

	public function alldel(){

		$model = M("Inquiry");

		$model->query('delete from __TABLE__ ');

		$this->redirect('index');

	}

	

	

	

	

	

}

?>