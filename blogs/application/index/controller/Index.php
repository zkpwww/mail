<?php

namespace app\index\controller;

use app\common\controller\Frontend;

class Index extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = 'index_default';
    protected $articleMod;
    protected $categoryMod;
    protected $slideShowMod;
    protected $blogrollMod;
    protected $softwareMod;

    public function _initialize()
    {
        parent::_initialize();
        $this->articleMod = model('article');
        $this->categoryMod = model('article_category');
        $this->slideShowMod = model('slide_show');
        $this->blogrollMod = model('blogroll');
        $this->softwareMod = model('software');
    }

    public function index()
    {
        $categoryList = $this->categoryMod->where('status','normal')->order('weigh desc')->select();
        $articleList = $this->articleMod->where(['status' => 'normal','type' => 1])->order('is_top desc,weigh desc')->limit(8)->select();
        $recommendList = $this->articleMod->where(['status' => 'normal','type' => 2])->order('is_top desc,weigh desc')->limit(2)->select();
        $softwareList = $this->softwareMod->where(['status' => 'normal'])->order('id desc')->limit(4)->select();
        $linkList = $this->blogrollMod->where(['status' => 'normal'])->order('id desc')->limit(4)->select();
        $slideList = $this->slideShowMod->where('status','normal')->select();
        $this->assign(compact('categoryList','articleList','recommendList','softwareList','linkList','slideList'));
        return $this->view->fetch();
    }

    public function news()
    {
        $newslist = [];
        return jsonp(['newslist' => $newslist, 'new' => count($newslist), 'url' => 'https://www.fastadmin.net?ref=news']);
    }

}
