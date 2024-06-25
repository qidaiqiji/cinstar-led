<?php





class PhotoAction extends CommonAction{

	public function index(){

		$id=(int)I('get.id'); 

		$this->doPho($id,"id =%d");

	}



	public function html(){

		$url=I('get.url');

		$this->doPho($url,"url ='%s'");

	}



	protected function doPho($var,$where){

		$db=M('Photo');

		$photodata=$db->field('id,pid,bid,name,title,keywords,description,thumb,photo,contents,time,property1,property2,hit,zuozhe,zuozhe2')->where($where,array($var))->order('sort')->find();

		if ($photodata) {

    		$data['hit']= $photodata['hit']+1;
			
			$db->where($where,array($var))->save($data);
			
			$photodata['contents']=$this->doInside($photodata['contents']);

			$this->related=$db->field('id,name,description,url,thumb,time')->where("pid = $photodata[pid] and id <> $photodata[id]")->select();			

			if(!empty($photodata['photo'])){

				$this->photo=explode(',',$photodata['photo']);

			}

			$this->photolist=M('list')->field('id,pid,bid,type,name')->find($photodata[pid]);

		} else {

			$this->_empty();

			exit;

		}

		$this->prevnext=$this->prevnext('Photo',$photodata[pid],$photodata[id],'name','篇');

		$this->photodata=$photodata;

		$this->display('index');

	}

	

	public function tags(){

		$this->doTags('Photo');

	}

		



}

?>