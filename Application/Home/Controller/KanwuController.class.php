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
        
        $this->title = "广电报";
    }
   
    public function index()
    {
        
        $ArticleDB       = M('Article');
        //刊物
        $this->kanwu     = M('Kanwu')->order('id desc')->limit(5)->field('face508, url, number, id')->select();
        //电视电影
        $this->dsdy_hot  = $ArticleDB->where('cate_id=10')->order('sort asc, id desc')->limit(1)->field('face368, title, desc, id')->find();
        $this->dsdy      = $ArticleDB->where('cate_id=10')->order('sort asc, id desc')->limit(1,4)->field('face208, title, id')->select();

        //娱乐时尚
        $this->ylss      = $ArticleDB->where('cate_id=11')->order('sort asc, id desc')->limit(0,4)->field('face258, title, id')->select();
        
        //健康
        $this->jk        = $ArticleDB->where('cate_id=12')->order('sort asc, id desc')->limit(0,3)->field('face255, desc, title, id')->select();
        
        //美食
        $this->ms        = $ArticleDB->where('cate_id=13')->order('sort asc, id desc')->limit(0,3)->field('face255, desc, title, id')->select();
        
        
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

    //文章列表
    public function articleList() 
    {

        $this->display();
    }

    //文章详情页
    public function detail() 
    {

        $id = I('id', 0, 'intval');
        $this->titleL2 = "文章";
        if (!$id) $this->error('参数错误');
        $model = M('Article');
        $this->data  = $model->where(array('id' => $id))->find();
        $this->display();

    }

}