<?php
    
    class OrderModel extends RelationModel{
        //关联查询模型
        protected $_link = array(
            'Goods'=>array(
                'mapping_type' => MANY_TO_MANY,
                'foreign'=>'goods_id',
                'relation_foreign'=>'order_id',
                'relation_table'=>'hzaj_order_goods',
                
            ),
            'OrderGoods'=>array(
                'mapping_type'=> HAS_MANY,
                'class_name'=>'OrderGoods',
                'foreign'=>'order_id',
            ),
        );
        
    }