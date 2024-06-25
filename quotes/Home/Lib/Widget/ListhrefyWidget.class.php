<?php


class ListhrefyWidget extends Widget{


	public function render($data){

		if ($data['link']!='') {

			$linkvar = (stripos($data['link'],"http://")!== false) ? $data['link'] : __APP__.$data['link'];

			return $linkvar;

		} else {

				$data['name']=M('List')->where(array('id'=>$data['id']))->getField('name');

				return $data['name'];

		}		

	}


}

?> 