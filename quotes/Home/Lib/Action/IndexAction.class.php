<?php

class IndexAction extends CommonAction{
	
	public function index(){

        //C('TOKEN_ON',true);
		//$code_msg = (C('CNEN')=='cn') ? ''Captcha error!' : 'Captcha error!' ;
		$success_msg=(C('CNEN')=='cn') ? 'Message success' : 'Message success' ;

		if (!$this->isPost()) {
			$this->error('Error!!!');die();
		}
		
		//$code=$this->_post('code');		
		//if($_SESSION['verify']!==md5($code)){
			//$this->error($code_msg);
		//}			
			$db=D('Inquiry');

			if($data=$db->create()){	

			  $data['product'] = (I('product','','htmlspecialchars,trim')) ? I('product','','htmlspecialchars,trim') : '' ;	
			  $data['num'] = 0;
			  $data['name'] = I('name','','htmlspecialchars,trim');
			  $data['company'] = I('company','','htmlspecialchars,trim');
			  $data['adress'] = (I('adress','','htmlspecialchars,trim')) ? I('adress','','htmlspecialchars,trim') : '' ;
			  $data['tel'] = I('tel','','htmlspecialchars,trim');			  
			  $data['fax'] = (I('fax','','htmlspecialchars,trim')) ? I('fax','','htmlspecialchars,trim') : '' ;
			  $data['email'] = I('email','','htmlspecialchars,trim');
			  $data['contents'] = I('contents','','htmlspecialchars,trim');		
			  $data['add1'] = (I('add1','','htmlspecialchars,trim')) ? I('add1','','htmlspecialchars,trim') : '' ;			  
			  $data['add2'] = (I('add2','','htmlspecialchars,trim')) ? I('add2','','htmlspecialchars,trim') : '' ;
			  $data['add3'] = (I('add3','','htmlspecialchars,trim')) ? I('add3','','htmlspecialchars,trim') : '' ;	 
			  $data['time'] = time(); 
			  $data['fl'] = 0;			 
			 
			  if($db->data($data)->add()){

					  $this->success($success_msg);			  	  

			   }else{

				  $this->error('Error!');  

			   }	

			}else{

			  $this->error($db->getError());

			}

		}	
	

}

?>