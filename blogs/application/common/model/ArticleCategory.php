<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/24
 * Time: 15:33
 */

namespace app\common\model;


use think\Model;

class ArticleCategory extends Model
{
    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';
    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';

    public function getNameAttr($value, $data)
    {
        return __($value);
    }
}