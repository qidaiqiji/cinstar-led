<?php

class NavWidget extends Widget{
	public function render($data){

		$template=strtolower($data['table']);

	

		if(S('listdata'.$data['id'])){

			$data=S('listdata'.$data['id']);

		}else{

			

			if($result=M('List')->field('name,type')->find($data['id'])){

				//��Ʒ�Ƽ��ж�

				//if($result['type']=='product' || $result['type']=='photo' || $result['type']=='download' || $result['type']=='new'){

					//$where['featured']=array('eq',1);
					//$where['toped']=array('eq',1);
					//$where['hotted']=array('eq',1);

				//}
								
				if($data['featured']>0){
				$where['featured']=array('eq',$data['featured']);
				}
				
				//if($data['toped']==1){
				//$where['toped']=array('eq',1);
				//}
				
				//if($data['hotted']==1){
				//$where['hotted']=array('eq',1);
				//}

				if($data['bid']==$data['id']){

					//һ����������

					$where['bid']=$data['id'];

				}else{

					//������������

					if($indb=M('List')->field('id')->where('pid = '.$data['id'])->select()){

					  foreach($indb as $v){

						  $inpid.=$v['id'].',';

					  }

					  $where['pid']=array('in',rtrim($data['id'].",".$inpid,","));

					}else{

						$where['pid']=array('eq',$data['id']);

					}

				}

			}else{

				$topid=M('List')->field('id,type')->where("type='".$template."' and pid =0" )->order('sort')->limit(0,1)->select();

				//if($topid[0]['type']=='product' || $topid[0]['type']=='photo' || $topid[0]['type']=='download' || $topid[0]['type']=='new'){

					//$where['featured']=array('eq',1);
					//$where['toped']=array('eq',1);
					//$where['hotted']=array('eq',1);

				//}
				
				if($data['featured']>0){
				$where['featured']=array('eq',$data['featured']);
				}
				
				//if($data['toped']==1){
				//$where['toped']=array('eq',1);
				//}
				
				//if($data['hotted']==1){
				//$where['hotted']=array('eq',1);
				//}
				

				$where['bid']=array('eq',$topid[0]['id']);

			}

			



			$article=M($data['table'])->where($where)->order('sort asc,id desc')->select();

			$data[$template]=$article;

			//S('listdata'.$data['id'],$data,3600 * 24);

		}

		$data['pronum']=C('INDEX_NUM');

		$content=$this->renderFile($template,$data);

		

		return $content;

	}	

	

	

}
?>