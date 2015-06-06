<?php
namespace Home\Controller;

/**
 * 互动管理控制器
 * @author yuwei
 *
 */
class InteractionController extends BaseController{
    public function _initialize () {
        parent::_initialize ();
        $this->title = "互动";
    }
    /**
     * 新闻列表页
     */
    public function index () {
        $this->display();
    }
    /**
     * 积分兑换
     */
    public function exchange () {
        $this->display();
    }
    /**
     * 失物招领
     */
    public function lostAndFound() {
        $this->success('页面开发中..');
    }
}