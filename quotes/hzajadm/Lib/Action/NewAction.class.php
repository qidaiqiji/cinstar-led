<?php



class NewAction extends CommonAction{

	public function index(){

		$db=M('New');

		import('ORG.Util.Page');

		$count=$db->count();

		$page=new Page($count,20);

		$this->show=$page->show();

		$this->news=$db->field('id,pid,title,sort,featured,toped,hotted,zuozhe,zuozhe2')->order('sort asc,id desc')->limit($page->firstRow.','.$page->listRows)->select();

		$this->list=recursive(M('List')->field('id,pid,name,type')->where("type = 'new'")->order('sort')->select());

		$this->display();	

	}



	public function add(){

		$this->list=recursive(M('List')->field('id,pid,name,type')->where("type='new'")->order('sort')->select());

		//$count=M('New')->count();

		//$this->sort=$count+1;

		$this->display();

	}

	

	public function mod(){

		$this->list=recursive(M('List')->field('id,pid,name,type')->where("type='new'")->order('sort')->select());

		$this->news=M('New')->field('id,pid,sort,url,title,keywords,description,contents,thumb,featured,toped,hotted,zuozhe,zuozhe2,date')->find($this->_get('id','intval'));

		$this->display();	

	}

	

	//修改新闻

	public function updatenew(){

		$db=D('New');

		//$_POST['url'] = ($_POST['url']!="") ? preg_replace('/[\s]+/', '-', $_POST['url']) : 'new-'.rand(0,9).'-'.rand(0,99);

		$_POST['url']=getSeoUrl('new',$_POST['url']);
		
	    $num=$this->_post('num','intval');

		if($data=$db->create()){

			$data['bid']=$this->getbigid($data['pid']);
			
			$data['date']=$this->_post('date','htmlspecialchars');
		    $data['date'] = trim($data['date']);	
			
			if($num){

				$info=$this->uploadimg();

				$data['thumb']=$info[0]['savename'];

			}

			if($db->data($data)->save()){

				$this->success('修改新闻成功',U('New/index'));

			}else{

				$this->error('修改失败或没修改数据');

			}

		}else{

			$this->error($db->getError());

		}

	}

	

	//添加新闻

	public function savenew(){

		$db=D('New');

		$_POST['url']=getSeoUrl('new',$_POST['url']);

		if($data=$db->create()){

			$data['bid']=$this->getbigid($data['pid']);
			
			$data['date']=$this->_post('date','htmlspecialchars');
		    $data['date'] = trim($data['date']);
			
			$info=$this->uploadimg();

			$data['thumb']=$info[0]['savename'];

			if($db->data($data)->add()){

				$this->success('添加新闻成功',U('New/index'));

			}else{

				$this->error('添加失败');	

			}

		}else{

			$this->error($db->getError());	

		}

	}

	

	//删除新闻

	public function del(){

		$id=$this->_get('id','intval');

		if($id){

			if(M('New')->where('id='.$id)->delete()){

				$this->success('删除成功');

			}else{

				$this->error('删除失败');	

			}

		}else{

			$this->error('非法操作');	

		}

	}

	

	//更新排序

	public function uporder(){

		$this->getSort('New');

	}


	//删除文件

	public function delphoto(){

		$name=$this->_get('name');

		$id=$this->_get('id','intval');

		if($name && $id){

			if(M('New')->where('id='.$id)->setField('thumb')){

				if(delimg('../Uploads/'.$name)){

					$this->success('删除成功',U('mod',array('id'=>$id)));

				}else{

					$this->error('数据删除成功，但找不到要删除的文件',U('mod',array('id'=>$id)));

				}

			}else{

				$this->error('操作失败');

			}

		}else{

			$this->error('非法操作');

		}

	}
	
	//全选删除

	public function delall(){

		if ($this->isPost()) {

			if ($_POST['dell']=="") {

				$this->error('您未选择任何数据');

			}

			$ids=implode(",", $_POST['dell']);

			$where['id']=array('in',$ids);

			if (M('New')->where($where)->delete()) {

				$this->success('删除成功');

			} else {

				$this->error('删除失败');

			}		

		} else {

			$this->error('非法请求');

		}

	}



	//搜索新闻

	public function seach(){

		$this->getSearch('new','title','news');

	}



}

?>