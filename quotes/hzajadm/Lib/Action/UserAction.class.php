<?php
/*
 * 前台用户管理
 */
 
class UserAction extends CommonAction{

    public function index() {

           $keyw = I('get.keyword');
           $where['state'] = array('in','0,1');;
           $where['_string'] = "(email like '%{$keyw}%')  or ( truename like '%{$keyw}%')  or ( tel like '%{$keyw}%') or ( adress like '%{$keyw}%')";

        $count = D('User')->relation(true)->where($where)->count();
		import('ORG.Util.Page');
		$p=new Page($count,12);
        $list = D('User')->relation(true)->where($where)->order('addtime desc')->limit($p->firstRow . ',' . $p->listRows)->select();
        $this->assign('select', $list);
        $this->assign('page', $p->show());
        $this->display();
    }

    public function add() {

        $this->display();
    }

   
  public function insert(){
	if ($this->isPost()) {
	
        $db=D('User');

		if($data=$db->create()){

		  $data['logintime'] = time();
          $data['addtime']   = time();
          $data['account']   = time();
          $data['loginip']   = get_client_ip();
          $data['truename']   =  I('post.truename');
		  $data['tel']      =  I('post.tel');
		  $data['adress']     =  I('post.adress');
			if($db->data($data)->add()){

				$this->success('添加成功',U('User/index'));

			}else{

				$this->error('添加失败');	

			}

		}else{

			$this->error($db->getError());	

		}
		}else{
			$this->error('非法操作！');
		}	
    }
	 
    public function addajax(){
        $user = D('user');
        $data['email'] = I('post.email');
        $res = $user->where($data)->find();
        if($res){
            $msg = 200;
        }
        $this->ajaxReturn($msg);
    }
    
	
    public function edit($id){
        $user = D('User')->relation(true)->find($id);
        $this->assign('vo',$user);
        $this->display();
    }
    
    public function editt($id){
        $user = M('user');
        $where['state'] = 1;
        $result = $user->where("id='{$id}'")->data($where)->save();
        if($result > 0){
            $this->success('恢复成功',U('User/index'));
        }else{
            $this->error('恢复失败');
        }
    }
    //用户编辑收藏
    public function update(){
        $user = D('User');
        $data['email']      =   I('post.email');
        $data['passwd']      =  I('post.passwd');
		       if($data['passwd']==""){
					unset($data['passwd']);
				}else{
					$data['passwd']=md5($data['passwd']);
				}
		$data['truename']      =  I('post.truename');
		$data['tel']      =  I('post.tel');
		$data['adress']      =  I('post.adress');
        $data['UserDetail'] =   array(
            'uname'         =>  I('post.uname'),
            'phone'         =>  I('post.phone'),
            'integrate'     =>  I('post.integrate'),
        ); 
        $in['id'] = I('post.id');
        if(!$user->create()){
            $this->error($user->getError());
        }else{
            $result = $user->relation(true)->where($in)->data($data)->save();
//            if($result){
                $this->success('修改成功!',U('User/index'));
//            }else{
//                $this->error('修改失败!');
//        }
        }
        
        
    }
    
    public function del($id){
        $user = D('User');
        $result = $user->relation(true)->delete($id);
        if($result > 0){
            $this->success('删除成功',U('User/index'));
        }else{
            $this->error('删除失败');
        }
    }
    
    public function dell($id){
        $user = M('user');
        $where['state'] = 2;
        $result = $user->where("id='{$id}'")->data($where)->save();
        if($result > 0){
            $this->success('删除成功',U('User/index'));
        }else{
            $this->error('删除失败');
        }
    }
    
    public function cel(){
         $keyw = I('get.keyword');
           $where['state'] = '2';
           $where['_string'] = "(email like '%{$keyw}%')  or ( account like '%{$keyw}%')";
        $count = D('User')->relation(true)->where($where)->count();
        import('ORG.Util.Page');
		$p=new Page($count,12);
        $list = D('User')->relation(true)->where($where)->limit($p->firstRow . ',' . $p->listRows)->select();
        $this->assign('select', $list);
        $this->assign('page', $p->show());
        $this->display();
    }
    
      public function detail($id){
        $count = D('User')->relation(true)->find($id);
        $bank = M('user_bank')->where("uid='{$id}'")->find();
        $this->assign("user",$count);
        $this->assign("bank",$bank);
        $this->display();
    }
    
}
