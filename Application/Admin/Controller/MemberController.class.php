<?php
namespace Admin\Controller;
class MemberController extends BaseController 
{
    public function add()
    {
    	if(IS_POST)
    	{
    		$model = D('Member');
         $rule = array(

            array('username', 'require', '用户名不能为空！', 1, 'regex', 3),
            array('username', '1,30', '用户名的值最长不能超过 30 个字符！', 1, 'length', 3),
            array('password', 'require', '密码不能为空！', 1, 'regex', 1),
            array('password', '6,20', '密码的值最长不能超过 6-20 个字符！', 1, 'length', 3),
            array('cpassword', 'password', '两次密码输入不一致！', 1, 'confirm', 3),
            array('username', '', '用户名已经存在！', 1, 'unique', 3),

        );
            if($model->validate($rule)->create())
    		{
    			if($id = $model->add())
    			{
    				$this->success('添加成功！', U('lst?p='.I('get.p')));
    				exit;
    			}
    		}
    		$this->error($model->getError());
    	}


		$this->display();
    }
    public function edit()
    {
    	$id = I('get.id');
    	if(IS_POST)
    	{
            $rule = array(

            array('username', 'require', '用户名不能为空！', 1, 'regex', 3),
            array('username', '1,30', '用户名的值最长不能超过 30 个字符！', 1, 'length', 3),
            array('password', 'require', '密码不能为空！', 1, 'regex', 1),
            array('password', '6,20', '密码的值最长不能超过 6-20 个字符！', 1, 'length', 3),
            array('cpassword', 'password', '两次密码输入不一致！', 1, 'confirm', 3),
            array('username', '', '用户名已经存在！', 1, 'unique', 3),

        );
    		$model = D('Member');
            if($model->validate($rule)->create())
    		{
    			if($model->save() !== FALSE)
    			{
    				$this->success('修改成功！', U('lst', array('p' => I('get.p', 1))));
    				exit;
    			}
    		}
    		$this->error($model->getError());
    	}
    	$model = M('Member');
    	$data = $model->find($id);
    	$this->assign('data', $data);


		$this->display();
    }
    public function delete()
    {
    	$model = D('Member');
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
    	$model = D('Member');
    	$data = $model->search();
    	$this->assign(array(
    		'data' => $data['data'],
    		'page' => $data['page'],
    	));


    	$this->display();
    }
}