<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    /* -- 添加自定义function -- */
    public function index(){
        $this->display();
    }
}