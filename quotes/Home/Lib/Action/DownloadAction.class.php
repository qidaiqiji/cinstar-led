<?php



class DownloadAction extends CommonAction{

	public function index(){

		$id=(int)I('get.id'); 

		$this->doDown($id,"id =%d");	

	}



	public function html(){

		$url=I('get.url');

		$this->doDown($url,"url ='%s'");

	}



	protected function doDown($var,$where){

		$db=M('Download');

		$down=$db->field('id,bid,pid,name,title,keywords,description,contents,filename,time,hit,zuozhe,zuozhe2')->where($where,array($var))->find();	

		if ($down) {

    		$data['hit']= $down['hit']+1;
			
			$db->where($where,array($var))->save($data);
			
			$down['contents']=$this->doInside($down['contents']);

			$this->down=$down;

			$this->downlist=M('list')->field('id,pid,bid,type,name')->find($down[pid]);

			$this->related=$db->field('id,url,name,time')->where("pid = $down[pid] and id <> $down[id]")->select();

		} else {

			$this->_empty();

			exit;

		}

		

		$this->prevnext=$this->prevnext('Download',$down[pid],$down[id],'name','篇');		

		$this->display('index');	

	}



	public function tags(){

		$this->doTags('Download');

	}





}

?>