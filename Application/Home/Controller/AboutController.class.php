<?php

namespace Home\Controller;
/**
 * 关于星空影城
 * @author yuwei
 *
 */
class AboutController extends BaseController {
    public function _initialize(){
        parent::_initialize();
        $this->title = "关于";
    }
    /**
     * 公司介绍
     */
    public function index() {
        $this->titleL1 = "公司介绍";
        $this->display();
    }
}