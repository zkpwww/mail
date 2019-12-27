<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/26
 * Time: 14:40
 */

namespace app\common\logic;


use fast\Tree;

class ArticleCategory
{
    public $model;
    public $categorylist;
    public $categorydata;

    public function __construct()
    {
        $this->model =  model('ArticleCategory');
        $tree = Tree::instance();
        $tree->init(collection($this->model->order('weigh desc,id desc')->select())->toArray(), 'pid');
        $this->categorylist = $tree->getTreeList($tree->getTreeArray(0), 'name');
        $this->categorydata = [0 => ['type' => 'all', 'name' => __('None')]];
        foreach ($this->categorylist as $k => $v) {
            $this->categorydata[$v['id']] = $v;
        }
    }
}