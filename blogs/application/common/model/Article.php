<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/24
 * Time: 18:01
 */

namespace app\common\model;


use think\Model;

class Article extends Model
{
    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';
    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';

    protected $append = [
        'type_text'
    ];

    public $typeList = [
        1 => '普通文章',
        2 => '重点推荐',
        3 => '热门软件',
        4 => '友情链接',
    ];

    public function getNameAttr($value, $data)
    {
        return __($value);
    }

    public function getTypeTextAttr($value, $data)
    {
        return isset($data['type']) ? $this->typeList[$data['type']] : '--';
    }

    public function ArticleCategory()
    {
        return $this->belongsTo('ArticleCategory','category_id','id','','LEFT')->setEagerlyType(0);
    }
}