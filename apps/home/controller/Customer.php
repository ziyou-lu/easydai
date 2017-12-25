<?php

namespace app\home\controller;
use \think\Request;
use \think\Loader;
use think\Db;
use app\common\controller\Adminbase;
use app\home\model\Customer as CustomerModel;
use app\common\controller\Base;

/**
 * 后台菜单管理
 */
class Customer extends Base
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
        return $this->fetch('form');
    }

    /**
     * 客户删除
     */
    public function add()
    {
        $data['name'] = $_POST['name'];
        $data['phone'] = $_POST['phone'];
        $data['uid'] = $_POST['idcard'];
        $data['shebao_years'] = $_POST['payyear'];
        $data['shebao_num'] = $_POST['paynumber'];
        $data['work_years'] = $_POST['workyear'];
        $data['work_wages'] = $_POST['wages'];
        $time = time();
        $data['update_time'] = date("y-m-d H:i",$time);
        $data['wechat'] = $_POST['wechat'];
        $data['hometown'] = $_POST['place'];
        if (CustomerModel::add($data)) {
            $this->success("提交成功！", url("Index/index"));
        } else {
            $error = CustomerModel::getError();
            $this->error($error ? $error : '添加失败！');
        }
    }

    public function addSuccess()
    {
        return $this->fetch('formSuccess');
    }
}
