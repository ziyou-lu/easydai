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
namespace app\home\model;
use \think\Model;
use think\Db;
/**
 * 菜单基础模型
 */
class Shixubing extends Model
{
    //获取菜单列表
    public static function getList()
    {
        return Db::name('shixubing')->order(array('update_time','id'=>'DESC'))->select();
    }

    // 根据手机号获取库里有没有
    public static function havePhone($phone)
    {
        $data = Db::name('shixubing')
            ->alias('a')
            ->where("a.phone='$phone'")
            ->select();
        if($data == null)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    // 获取菜单
    public static function getInfo($id)
    {
        return Db::name('shixubing')->where($id)->find();
    }

    // 更新数据
    public static function edit($data)
    {
        return Db::name('shixubing')->update($data);
    }

    // 删除数据
    public static function remove($id)
    {
        return Db::name('shixubing')->delete($id);
    }

    // 添加资料
    public static function add($data)
    {
        return Db::name('shixubing')->insert($data);
    }

    //查询数据数量
    public static function getCount()
    {
        return Db::name('shixubing')->count();
    }


}