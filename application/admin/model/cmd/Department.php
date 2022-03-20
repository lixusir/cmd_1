<?php

namespace app\admin\model\cmd;

use think\Model;


class Department extends Model
{

    

    

    // 表名
    protected $name = 'cmd_department';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    protected $deleteTime = false;

    // 追加属性
    protected $append = [

    ];
    

    







}
