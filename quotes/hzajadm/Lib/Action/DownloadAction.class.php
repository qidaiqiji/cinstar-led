<?php



class DownloadAction extends CommonAction{

	public function index(){

		$db=M('Download');

		import('ORG.Util.Page');

		$count=$db->count();

		$page=new Page($count,20);

		$this->show=$page->show();	

		$this->down=$db->field('id,pid,name,sort,xx,yy,zz,featured,toped,hotted,zuozhe,zuozhe2')->order('sort asc,id desc')->limit($page->firstRow.','.$page->listRows)->select();

		$this->list=recursive(M('List')->field('id,pid,name,type')->where("type = 'download'")->order('sort')->select());

		$this->display();	

	}

	

	//添加页面

	public function add(){
	
		$bid=$this->_get('bid', 'intval');
		
		
		if($bid>0){
		$this->list=M('List')->field('id,pid,name,type')->where("bid = pid and type = 'download'")->order('sort')->select();
		$this->listd=M('List')->field('id,pid,name,type')->where("bid != pid and pid = $bid and type = 'download'")->order('sort')->select();
        }else{
		$this->list=M('List')->field('id,pid,name,type')->where("bid = pid and type = 'download'")->order('sort')->select();
        }
		

		//$count=M('Download')->count();

		//$this->sort=$count+1;
		
		$this->bid1 = $bid;
		
		$this->display();

	}

	

	//添加网点

	public function savedown(){

		$db=D('Download');

		//$_POST['url'] = ($_POST['url']!="") ? preg_replace('/[\s]+/', '-', $_POST['url']) : 'download-'.rand(0,9).'-'.rand(0,99);
		
		$bidName=$this->_post('bid', 'intval');
		
		$pidName=$this->_post('pid', 'intval');
		
		$bidName1=M('list')->where("id = $bidName")->getField('name');
		
		$pidName1=M('list')->where("id = $pidName")->getField('name');

		$_POST['url']=getSeoUrl('download',$_POST['url']);

		if($data=$db->create()){

			$info=$this->uploaddown();

			$data['filename']=$info[0]['savename'];

			$data['bid']=$this->getbigid($data['pid']);
			
			$data['province']=$bidName1;
						
			$data['city']=$pidName1;

			if($db->data($data)->add()){

				$this->success('添加网点成功',U('Download/index'));

			}else{

				$this->error('添加失败');

			}

		}else{

			$this->error($db->getError());

		}

	}

	

	//修改页面

	public function mod(){


		$bid=$this->_get('bid', 'intval');
		
		$down=M('Download')->field('id,pid,bid,sort,url,title,name,keywords,description,contents,filename,xx,yy,zz,featured,toped,hotted,zuozhe,zuozhe2,jinli,chuanz,email,kefu,tel,zcPsArea,teSePsArea,selfArea,bips,teshu,remark,mapAddr')->find($this->_get('id','intval'));
				
		if($down){
		
		$bidy=M('list')->where("id = $down[pid] and type = 'download'")->getField('pid');

		$this->list=M('List')->field('id,pid,name,type')->where("bid = pid and type = 'download'")->order('sort')->select();
		
		  if($bid>0){
		    $this->listd=M('List')->field('id,pid,name,type')->where("bid != pid and pid = $bid and type = 'download'")->order('sort')->select();
			$this->bid1 = $bid;
			$this->pid1 = '';
		  }else{
		    $this->listd=M('List')->field('id,pid,name,type')->where("bid != pid and pid = $bidy and type = 'download'")->order('sort')->select();
			$this->bid1 = $bidy;
			$this->pid1 = $down['pid'];
		  }
        
        }
		
        $this->down = $down; 
		$this->display();

	}

	

	//修改网点

	public function updatedown(){

		$db=D('Download');

		$id=$this->_post('id','intval');

		$num=$this->_post('num','intval');
		
		$bidName=$this->_post('bid', 'intval');
		
		$pidName=$this->_post('pid', 'intval');
		
		$bidName1=M('list')->where("id = $bidName")->getField('name');
		
		$pidName1=M('list')->where("id = $pidName")->getField('name');

		$_POST['url']=getSeoUrl('download',$_POST['url']);

		if($data=$db->create()){

			$data['bid']=$this->getbigid($data['pid']);
			
			$data['province']=$bidName1;
						
			$data['city']=$pidName1;

			if($num){

				$info=$this->uploaddown();

				$data['filename']=$info[0]['savename'];

			}

			if($db->data($data)->save()){

				$this->success('修改成功',U('Download/index'));

			}else{

				$this->error('修改失败或没有数据被修改');	

			}

		}else{

			$this->error($db->getError());

		}

	}

	

	//删除网点数据

	public function del(){

		$db=M('Download');

		$id=$this->_get('id','intval');

		$filename=$db->where('id='.$id)->getField('filename');

		if($db->where('id='.$id)->delete()){

			if(delimg('../Uploads/download/'.$filename)){

				$this->success('删除成功');

			}else{

				$this->error('数据删除成功，但删除文件失败');

			}			

		}else{

			$this->error('删除失败');

		}

	}



	//全选删除

	public function delall(){

		if ($this->isPost()) {

			if ($_POST['dell']=="") {

				$this->error('您未选择任何数据');

			}

			foreach ($_POST['dell'] as $value) {

				$filename=M('Download')->where('id='.$value)->getField('filename');

				if ($filename) {

					delimg('../Uploads/download/'.$filename);

				}			

			}

			$ids=implode(",", $_POST['dell']);

			$where['id']=array('in',$ids);

			if (M('Download')->where($where)->delete()) {

				$this->success('删除成功');

			} else {

				$this->error('删除失败');

			}	

		}

	}



	//删除文件

	public function delfile(){

		$name=$this->_get('name');

		$id=$this->_get('id','intval');

		

		if($name && $id){

			if(M('Download')->where('id='.$id)->setField('filename','')){

				if(delimg('../Uploads/download/'.$name)){

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

	

	

	//更新排序

	public function uporder(){

		$this->getSort('Download');

	}

	

	//搜索

	public function search(){

		$this->getSearch('download','name','down');

	}

	

	

}

?>