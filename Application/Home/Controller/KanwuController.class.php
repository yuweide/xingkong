<?php
namespace Home\Controller;
/**
 * 刊物（广电报）
 * @author yuwei
 *
 */
class KanwuController extends BaseController 
{
    public function _initialize() 
    {
        //刊物
        $this->kanwu = M('Kanwu')->order('id desc')->limit(5)->field('face508, url, number, id')->select();
        $this->title = "广电报";
    }
   
    public function index()
    {
        
        $this->display();
    }

    //在线观看
    public function viewer()
    {

        $id = I('id', 0, 'intval');
        if (!$id) $this->error('参数错误');
        $this->url = M('Kanwu')->where(['id' => $id])->getField('url');
        $this->display();
    }

}