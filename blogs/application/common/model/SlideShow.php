<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/27
 * Time: 16:10
 */

namespace app\common\model;


use think\Model;

class SlideShow extends Model
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