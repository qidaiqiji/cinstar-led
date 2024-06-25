<?php

class IndexAction extends CommonAction {
    public function index(){
		$this->display();
    }
	
	public function top(){
		C('SHOW_PAGE_TRACE',false);
		$this->display('top');
	}
	
	public function left(){
		C('SHOW_PAGE_TRACE',false);
		$this->display('left');	
	}
	
	public function main(){
        $info = array(
            '操作系统'=>PHP_OS,
            '运行环境'=>$_SERVER["SERVER_SOFTWARE"],
            'PHP运行方式'=>php_sapi_name(),
            '上传附件限制'=>ini_get('upload_max_filesize'),
            '现在时间'=>gmdate("Y年n月j日 H:i:s",time()+8*3600),
            '服务器域名/IP'=>$_SERVER['SERVER_NAME'].' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]'.SERVERAME(),
            'register_globals'=>get_cfg_var("register_globals")=="1" ? "ON" : "OFF",
            'magic_quotes_gpc'=>(1===get_magic_quotes_gpc())?'YES':'NO',
            'magic_quotes_runtime'=>(1===get_magic_quotes_runtime())?'YES':'NO',
			'host'=>gethostbyname($_SERVER['SERVER_NAME']),
            );
        $this->assign('info',$info);
		$this->display('main');	
	}
	
	public function loginOut(){
		session_unset();
		session_destroy();
		$this->redirect('Login/index');
	}
}