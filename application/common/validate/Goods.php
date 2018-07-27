<?php
namespace app\common\validate;
use think\Validate;

class Goods extends Validate{
	 protected $rule = [
        ['goods_name',     'require',                        '商品名称不能为空'],
        ['cate_id1',     'require',                        '商品一级分类必选'],
        ['shop_price',     'require',                        '商品店铺价格必填'],
        ['market_price',     'require',                        '商品市场价格必填'],
    ];
    protected $scene = [
        'add'   =>  ['goods_name','cate_id1','shop_price','market_price'],
    ];    
}