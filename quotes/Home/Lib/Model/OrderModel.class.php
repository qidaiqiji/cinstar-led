<?php

    class OrderModel extends RelationModel{
         protected $_link = array(
             //模型一
             'Goods'=>array(
                 'mapping_type' => MANY_TO_MANY,   
                 'foreign' =>"goods_id",
                 'relation_foreign'=>'order_id',
                 'relation_table'=>'hzaj_order_goods',
             ),
             //模型二
             'OrderGoods'=>array(
                 'mapping_type'=> HAS_MANY,
                 'class_name'=>'OrderGoods',
                 'foreign'=>'order_id',
             ),
         );
        
    }
    