<?php



class NewAction extends CommonAction{

	public function index(){

		$id=(int)I('get.id'); 

		$this->doNew($id,"id =%d");

	}



	public function html(){

		$url=I('get.url');

		$this->doNew($url,"url ='%s'");

	}



	protected function doNew($var,$where){

		$db=M('New');

		$newdata=$db->field('id,bid,pid,title,keywords,description,contents,time,thumb,hit,zuozhe,zuozhe2,date')->where($where,array($var))->find();

		if($newdata){
    		
    		$data['hit']= $newdata['hit']+1;
			
			$db->where($where,array($var))->save($data);
    			
			$newdata['contents']=$this->doInside($newdata['contents']);

			$this->news=$newdata;

			$this->newlist=M('list')->field('id,pid,bid,type,name')->find($newdata[pid]);

			//相关新闻

			$this->related=$db->field('id,url,title,time')->where("pid = $newdata[pid] and id <> $newdata[id]")->select();

		}else{

			$this->_empty();

			exit;

		}	

		$this->prevnext=$this->prevnext('New',$newdata[pid],$newdata[id],'title','篇');

		$this->display('index');

	}



	public function tags(){

		$this->doTags('New');

	}

	

}

?>