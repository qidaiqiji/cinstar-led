<?php

class AboutWidget extends Widget{

	public function render($data){

		$aboutdata=M('List')->field('id,url,contents,title,thumb,keywords,description')->where("id = ".$data['id']." and type='page'")->find();

		$len=$data['len'];
		
    if($data['id']==125) {

		$about=strip_tags($aboutdata['contents']);

		$about=strlen($about)<=$len ? $about : (mb_substr($about,0,$len,'utf-8'));

		$data['contents']=$about;

		$data['url']=$aboutdata['url'];
		$data['title']=$aboutdata['title'];
		$data['thumb']=$aboutdata['thumb'];
		$data['keywords']=$aboutdata['keywords'];
		$data['description']=$aboutdata['description'];
		
        }
    else{
	
        $data['contents']=$aboutdata['contents'];

		$data['url']=$aboutdata['url'];
		$data['title']=$aboutdata['title'];
		$data['thumb']=$aboutdata['thumb'];
		$data['keywords']=$aboutdata['keywords'];
		$data['description']=$aboutdata['description'];
		
		}

		$content=$this->renderFile('about',$data);

		return $content;

	}	

}

?>