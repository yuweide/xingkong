<?php
namespace Home\Controller;
class IndexController extends BaseController {
    public function _initialize(){
        parent::_initialize();
            $this->title="首页";
    }
    public function index(){
        $this->display();
    }
}