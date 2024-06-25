<?php

class AproWidget extends Widget{

	public function render($data){

		$aprodata=M('List')->field('id,name,title,url,thumb,description')->where("id = ".$data['id'])->find();

		$data['id']=$aprodata['id'];
		
		$data['name']=$aprodata['name'];
		
		$data['title']=$aprodata['title'];
		
		$data['url']=$aprodata['url'];
				
		$data['description']=$aprodata['description'];

		$content=$this->renderFile('apro',$data);

		return $content;

}	

}

?>