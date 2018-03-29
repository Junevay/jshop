<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends BaseController
{

    public function delete()
    {
        $model = D('Order');
        if($model->delete(I('get.id', 0)) !== FALSE)
        {
            $this->success('删除成功！', U('lst', array('p' => I('get.p', 1))));
            exit;
        }
        else
        {
            $this->error($model->getError());
        }
    }
    public function lst()
    {
        $model = D('Order');
        $data = $model->search(10,FALSE);

        $this->assign(array(
            'data' => $data['data'],
            'page' => $data['page'],
        ));


        $this->display();
    }

	

}





