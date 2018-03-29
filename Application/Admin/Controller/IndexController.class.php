<?php
namespace Admin\Controller;
class IndexController extends BaseController 
{
    public function index()
    {
        $priModel=D('privilege');
        $btons=$priModel->getBtons();

        $this->assign('btons', $btons);
        $this->display();

    }
    public function welcome()
    {
    	$this->display();
    }

    
}