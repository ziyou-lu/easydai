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
namespace app\admin\model;
use \think\Model;
use think\Db;

/**
 * 菜单基础模型
 */
class Customer extends Model
{
    //获取菜单列表
    public static function getList()
    {
        return Db::name('customer')->order(array('update_time','id'=>'DESC'))->select();
}

    // 获取菜单
    public static function getInfo($id)
    {
        return Db::name('customer')->where($id)->find();
    }

    // 更新数据
    public static function edit($data)
    {
        return Db::name('customer')->update($data);
    }

    // 删除数据
    public static function remove($id)
    {
        return Db::name('customer')->delete($id);
    }

    //查询数据数量
    public static function getCount()
    {
        return Db::name('customer')->count();
    }


}