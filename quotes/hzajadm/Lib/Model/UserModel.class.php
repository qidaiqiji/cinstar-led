<?php

class UserModel extends RelationModel {

//    protected $fields = [
//        'id',
//        'account',
//        'email',
//        'state',
//        'loginip',
//        '_pk' => 'id',
//        '_autoinc' => true,
//    ];
    public $_link = array(
        'UserDetail' => array(
            'mapping_type' => HAS_ONE,
            'class_name' => 'UserDetail',
            'foreign_key' => 'uid',
            'as_fields' => 'uname,birth,sex,quesion,avatar,phone,integrate',
        ),
    );

    protected $_validate = array(
        array('email','','该用户名已经存在!',0,'unique',3),
        //array('passwd','require','密码必须填写！'),
        array('email','require','用户名必须填写！'),
        //array('email','/^([a-zA-Z0-9_-))+@([a-zA-Z0-9_-))+(.[a-zA-Z0-9_-))+/','邮箱格式错误!',0),
        //array('phone','/(1[3-9)\d{9}$)/','电话号码格式错误',0),
        //array('uname','require','用户名不能为空！'),
        //array('phone','require','电话号码不能为空！'),
    );
	//自动完成
	protected $_auto = array(
            array('passwd','md5',1,'function'),
        );
}
