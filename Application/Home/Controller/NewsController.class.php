<?php
namespace Home\Controller;

/**
 * 新闻类控制器
 * @author yuwei
 *
 */
class NewsController extends BaseController{
    public function _initialize () {
        parent::_initialize ();
        $this->title = "新闻";
    }
    /**
     * 新闻列表页
     */
    public function index () {
        $cate = M('Category')->where('type = 1 and status = 1')->field('id,name')->select();
        $cid  = I('cid', 0, 'intval');
        $cid  = $cid ? $cid : $cate[0]['id']; 
        $this->cid  = $cid;
        $this->cate = $cate;
        
        $model = M('News');
        $map   = array(
            'status'  => 1,
            'cate_id' => $cid
        );
        $count = $model->where($map)->count();
        $Page  = new \Think\Page($count,C('PAGE_SIZE'));
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show  = $Page->show();
        $list  = $model->where($map)->order('sort')->limit($Page->firstRow.','.$Page->listRows)->field('id, title, desc, create_time, face200')->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }
    /**
     * 新闻内容页
     */
    public function detail() {
        $id = I('id', 0, 'intval');
        $this->titleL1 = "正文";
        if (!$id) $this->error('参数错误');
        $model = M('News');
        $this->data  = $model->where(array('id' => $id))->find();
        $this->display();
    }
}