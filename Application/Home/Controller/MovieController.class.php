<?php

namespace Home\Controller;
use Think\Page;
/**
 * 电影
 * @author yuwei
 *
 */
class MovieController extends BaseController{
    public function _initialize () {
        parent::_initialize();
        $this->title = "电影";
    }
    /**
     * 首页
     */
    public function index() {
        //微电影大赛展播 cate_id = 4
        $model = M('Movie');
        $this->micro = $model->where(['cate_id' => 4, 'status' => 1])->order('sort asc, id desc')->limit(8)->field('id,name,face196')->select();
        //多彩贵州 cate_id = 5
        $this->colorful = $model->where(['cate_id' => 5, 'status' => 1])->order('sort asc, id desc')->limit(8)->field('id,name,face196')->select();
        //草根原创 cate_id = 6
        $this->root = $model->where(['cate_id' => 6, 'status' => 1])->order('sort asc, id desc')->limit(8)->field('id,name,face196')->select();
        //推荐 recommend = 1,
        $recommend = $model->where(['status' => 1, 'recommend' => 1])->order('sort asc, id desc')->limit(9)->field('id,name,face80')->select();
        $count = count(recommend);
        if ( $count < 9 ) {
            $limit = 9-$count;
            $addRec  = $model->where('status=1')->order('sort asc, id desc')->limit($limit)->field('id,name,face80')->select();
            $recommend = array_merge($recommend, $addRec);
        }
        $this->recommend = $recommend;
        //相关动态
        $model = M('News');
        $this->art  = $model->where('cate_id=9')->order('sort asc, id desc')->limit(1)->field('id, title, desc, face200')->find();
        $this->arts = $model->where('cate_id=9')->order('sort asc, id desc')->limit(1,8)->field('id, title')->select();
        $this->enterprise = M('Enterprise')->order('sort asc, id desc')->limit(3)->field('face245, url, name')->select();
        
        //轮播图（广告位）
        $this->ad = M('Ad')->where('pos=2')->order('sort asc,id desc')->limit(6)->select();
        $this->display();
    }
    /**
     * 列表
     */
    public function lists () {
        $cid = I('cid', 0, 'intval');
        if (!$cid)
            $this->error('参数错误');
        $this->titleL1 = "电影列表";
        $this->cid = $cid;
        $model = M('Movie');
        $cate = M('Category')->where('status=1 and type=2')->field('id, name')->select();
        $this->cate = $cate;
        $map['cate_id'] = $cid;
        $map['status'] = 1;
        $count = $model->where($map)->count();
        $Page  = new Page($count, 20);
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show  = $Page->show();
        $list  = $model->where($map)->field('name, id ,face209')->order('sort asc, id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list', $list);
        $this->assign('page',$show);
        $this->display();
    }
    /**
     * 合作企业
     */
    public function enterprise () {

        $cate = M('Category')->where('status=1 and type=2')->field('id, name')->select();
        $this->cate = $cate;
        $this->enterprise = M('Enterprise')->field('face245, url, name')->order('sort asc, id desc')->select();
        $this->display();
    }
   /**
    * 播放
    */
    public function play() {
        $id=I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        $model = M('Movie');
        $data = $model->where(['id' => $id])->find();
        $this->titleL1 = $data['name'];
        $this->data = $data;
        //推荐 查找本类中推荐的电影， 不够的从本类中挑选
        $cid = $data['cate_id'];
        $recommend = $model->where(['cate_id' => $cid, 'status' => 1])->order('sort asc, id desc')->limit(4)->field('id,name,face142')->select();
        $count = count($recommend);
        if ( $count < 4 ) {
            $limit = 4-$count;
            $addRec  = $model->where('status=1')->order('sort asc, id desc')->limit($limit)->field('id,name,face142')->select();
            $recommend = array_merge($recommend, $addRec);
        }
        $this->recommend = $recommend;
        //更多视频
        $this->more = $model->where(['cid' => $data['cid'], 'id' => ['neq',$data['id']]])->order('sort asc, id desc')->limit(6)->field('id, name, face96')->select();
        $this->display();
    }
    /**
     * 评论
     */
    public function comment() {
        $content = I('content');
        $obj_id  = I('id', 0,'intval');
        if (!$content || !$obj_id) {
            echo 0;
            exit;
        }
        $data = [
            'type'    => 1,
            'obj_id'  => $obj_id,
            'comment_time' => $_SERVER['REQUEST_TIME'],
            'content'  => $content
        ];
        if (M('Comment')->add($data)) {
            echo 1;
            exit;
        } else {
            echo 0;
        }
    }
}