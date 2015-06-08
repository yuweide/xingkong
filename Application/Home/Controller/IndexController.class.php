<?php
namespace Home\Controller;
/**
 * 前台首页控制器
 * @author  yuwei <727955957@qq.com>
 * @date 2015-06
 * @version 1.0
 */
class IndexController extends BaseController {
    public function _initialize(){
        parent::_initialize();
            $this->title="首页";
    }
    public function index(){

    	//首页轮播图（广告位）
    	$this->ad = M('Ad')->where('pos=1')->order('sort asc,id desc')->limit(3)->select();

    	//热点新闻
		$this->hot  = M('News')->order('hot desc, id desc')->limit(1)->field('id,title,face200,desc')->find();
		$this->hots = M('News')->order('hot desc, id desc')->limit(1,3)->field('id,title')->select();   	

        //推荐视频
        $this->recommend = M('Movie')->order('recommend desc, id desc')->limit(4)->field('id, face160')->select();
        $this->display();
    }
}