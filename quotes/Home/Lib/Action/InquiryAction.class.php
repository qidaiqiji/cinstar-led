<?php

class InquiryAction extends CommonAction{

	public function index(){

		//C('TOKEN_ON',true);		
		$currentUrl = trim($_SERVER['REQUEST_URI']);
		$currentUrl = substr($currentUrl, 1, 1);
        if ($currentUrl=="_"){
		    $this->_empty();
			exit;
		}
		
		$title= I('bianhao','','htmlspecialchars,trim');			  
		if ($title) {
			//$this->error("ERROR");	
		$where['title'] = array('eq',$title);
		$db=M('Photo');		
		$links=$db->field('id,name,title,date,thumb,photo,description,contents,hit')->where($where)->find();
		if($links['id']){
		        $this->cz=2;		
		    	$data['hit']= $links['hit']+1;
				if($links['hit']==1){
				   $data['date']= time();
				}
				$db->where("id = $links[id]")->save($data);			
		}else{
		    $this->cz=1;
		}
		$this->links=$links;	
		$this->title=$title;
		$this->display();
		}else{
		   $this->display();
		   $this->cz=0;			
		}

	}


    public function success(){   	 
		C('TOKEN_ON',true);	
		$this->display();    	

    }
		




}

?>