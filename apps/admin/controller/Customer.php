<?php

namespace app\admin\controller;
use \think\Request;
use \think\Loader;
use think\Db;
use \think\Paginator as Page;
use app\common\controller\Adminbase;
use app\admin\logic\Customer as CustomerLogic;
use app\admin\model\Customer as CustomerModel;

/**
 * 后台菜单管理
 */
class Customer extends Adminbase
{
    protected function _initialize()
    {
        parent::_initialize();
    }

    /**
     * 菜单首页
     */
    public function index()
    {
// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $p = isset($_GET['p'])?$_GET['p']:1;
        $perPage = 30;
        $list = Db::name('customer')->order('update_time', 'DESC')->page($p.','.$perPage)->select();
        $allList = CustomerModel::getList();
        $maxPage = ceil(count($allList) / $perPage);
        $allCount = count($allList);

        $this->assign('list', $list);
        $this->assign('p', $p);
        $this->assign('maxPage', $maxPage);
        $this->assign('allCount', $allCount);
        return $this->fetch();
    }

    /**
     * 客户删除
     */
    public function delete()
    {
        $id = Request::instance()->param('id');
        if (CustomerModel::remove($id) !== false) {
            $this->success("删除客户成功！");
        } else {
            $this->error("删除客户失败！");
        }
    }
}
