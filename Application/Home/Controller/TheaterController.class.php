<?php

namespace Home\Controller;
use Home\Controller\BaseController;
/**
 * 影院分布
 * @author yuwei
 *
 */
class TheaterController extends BaseController {
    public function _initialize(){
        parent::_initialize();
        $this->title = "影城";
    }
    /**
     * 影院分布页
     */
    public function index() {
        $model = M('Theater');
        $cityDB = M('City');
        $map   = ['status' => 1];
        $city = $cityDB->where($map)->field('name, id')->order('sort')->select();
        foreach ($city as $k => $v) {
            $city[$k]['theater'] = $model->where(['city_id' =>$v['id']])->field('id, name')->select();
        }
        $this->city = $city;
        $this->display();
    }
    /**
     * 影院详细信息
     */
    public function detail () {
        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        $this->titleL1 = "影城信息";
        $theater = M('Theater')->where(['id' => $id])->find();
        $this->theater = $theater;
        $this->photo = M('TheaterPhoto')->where(['theater_id' => $theater['id']])->order('id desc')->limit(3)->select();
        $this->display();
    }
}