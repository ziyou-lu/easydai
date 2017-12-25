<?php
// +----------------------------------------------------------------------
// | Yzncms [ 御宅男工作室 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2007 http://yzncms.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 御宅男 <530765310@qq.com>
// +----------------------------------------------------------------------
namespace app\admin\validate;
use \think\Validate;

/**
 * 用户验证器
 */
class Customer extends Validate
{
    //定义验证规则
    protected $rule = [
        'id|客户id' => 'require|number',
        'name|客户名称' => 'require',
        'phone|客户电话'  => 'require',
        'uid|客户身份证号' => 'require',
        'shebao_year|社保年限' => 'require|number',
        'shebao_num|社保基数' => 'require|number',
        'work_years|工作年限' => 'require|number',
        'work_wages|工资' => 'require|number',
        'update_time|记录日期'  => 'require',
        'wechat|微信号',
        'hometown|籍贯'
    ];

    //定义验证提示
    protected $message = [
        'id.require' => '客户信息找不到',
        'id.number' => '客户信息错误',
        'name.require' => '客户名称不能为空',
        'phone.require' => '客户电话不能为空',
        'uid.require' => '客户身份证号不能为空',
        'shebao_year.require' => '社保年限不能为空',
        'shebao_year.number' => '社保年限必须是数字',
        'shebao_num.require' => '社保基数不能为空',
        'shebao_num.number' => '社保基数必须是数字',
        'work_years.require' => '工作年限不能为空',
        'work_years.number' => '工作年限必须是数字',
        'work_wages.require' => '工资不能为空',
        'work_wages.number' => '工资必须是数字'
    ];

    //定义验证场景
    protected $scene = [
        'add'  =>  ['name','phone', 'uid','shebao_year','shebao_num', 'work_years', 'work_wages', 'update_time', 'wechat', 'hometown'],
        'edit'  =>   ['name','phone', 'uid','shebao_year','shebao_num', 'work_years', 'work_wages', 'update_time', 'wechat', 'hometown']
    ];
}
