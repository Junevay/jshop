<?php
namespace Home\Controller;
use Think\Controller;
class CartController extends NavController
{
	public function add()
	{
		if(IS_POST)
		{
			$cartModel = D('Cart');

			if($cartModel->create(I('post.'), 1))
			{
				if($cartModel->add())
				{

					$this->success('添加成功!', U('lst'));
					exit;
				}
			}
			$this->error('添加失败，原因：'.$cartModel->getError());
		}
	}
	// 购物车列表页
	public function lst()
	{
		//header('Content-Type:text/html;charset=utf-8');
		$cartModel = D('Cart');
		$data = $cartModel->cartList();


		// 设置页面信息
    	$this->assign(array(
    		'data' => $data,
    		'_page_title' => '购物车列表',
    		'_page_keywords' => '购物车列表',
    		'_page_description' => '购物车列表',
    	));
		$this->display();
	}
	public function ajaxCartList()
	{
		$cartModel = D('Cart');
		$data = $cartModel->cartList();
		echo json_encode($data);
	}

	public function ajaxDelGoods(){

	    $id=I("get.id");
	    $attr_id=I("get.attr_id");
        $cartModel = D('Cart');
        $data = $cartModel->deleteGoods($id,$attr_id);
        if($data){
            $this->success();
            exit();
        }else{
            $this->error();
        }
    }

    public function ajaxChangeGoods(){
        $id=I("post.id");
        $attr_id=I("post.attr_id");
        $num=I("post.num");
        $cartModel = D('Cart');
        $data = $cartModel->changeGoods($id,$attr_id,$num);
        if($data){
            $this->success();
            exit();
        }else{
            $this->error();
        }
    }
}





