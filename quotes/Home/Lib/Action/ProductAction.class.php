<?php





class ProductAction extends CommonAction{

	public function index(){

		$id=(int)I('get.id'); 

		$this->doPro($id,"id =%d");

	}



	public function html(){

		$url=I('get.url');

		$this->doPro($url,"url ='%s'");

	}



	protected function doPro($var,$where){

		$db=M('Product');

		$product=$db->field('id,pid,bid,name,property1,property2,property3,property4,property5,property6,property7,property8,property9,title,keywords,description,photo,thumb,contents,contents1,contents2,contents3,time,hit')->where($where,array($var))->find();

		if ($product) {

			$product['contents']=$this->doInside($product['contents']);

			$this->related=$db->field('id,name,description,url,thumb,time,property1,property2,property3,property4,property6')->where("pid = $product[pid] and id <> $product[id]")->select();
			
			$this->relatedy=$db->field('id,name,description,url,thumb,time,property1,property2,property3,property4,property6')->where("property8 = '$product[property8]' and id <> $product[id]")->select();

			if(!empty($product['photo'])){

			  $this->photo=explode(',',$product['photo']);	

			}

			$this->prolist=M('list')->field('id,pid,bid,type,name')->find($product[pid]);

		}else{

			$this->_empty();

			exit;

		}

		$this->prevnext=$this->prevnext('Product',$product[pid],$product[id],'name','篇');

		$this->product=$product;

		$this->display('index');

	}



	public function tags(){

		$this->doTags('Product');

	}





}

?>