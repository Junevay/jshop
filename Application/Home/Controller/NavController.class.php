<?php
namespace Home\Controller;
use Think\Controller;
class NavController extends Controller 
{
	public function __construct()
    {
        // 必须先调用父类的构造函数
        parent::__construct();
        $catModel = D('Admin/Category');
        $catData = $catModel->getNavData();
        $goodsModel = D('Admin/Goods');
        $goods3 = $goodsModel->getRecGoods('is_hot',5); // 热卖
        $goods4 = $goodsModel->getRecGoods('is_best'); // 精品

        $cartModel = D('Cart');
        $cartData = $cartModel->cartList();

        $this->assign('catData', $catData);
        $this->assign('hotGoods', $goods3);
        $this->assign('bestGoods', $goods4);
        $this->assign('cartData', $cartData);
    }
}