<?php

    class AddressModel extends RelationModel{
         protected $_validate = array(
             array('true_name','require','姓名不能为空'),
             array('tel_phone','require','手机不能为空'),
         );
    }
    