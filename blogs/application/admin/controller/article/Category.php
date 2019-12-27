<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/24
 * Time: 15:31
 */

namespace app\admin\controller\article;


use app\common\controller\Backend;
use app\common\logic\ArticleCategory;
use fast\Tree;

class Category extends Backend
{
    protected $model;
    protected $categoryLogic;

    public function _initialize()
    {
        parent::_initialize();
        $this->categoryLogic = new ArticleCategory();
        $this->model =   $this->categoryLogic->model;
        $this->view->assign("parentList", $this->categoryLogic->categorydata);
    }

}