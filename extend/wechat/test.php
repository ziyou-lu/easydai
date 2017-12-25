<?php 
namespace Wechat;
class test{
  public $expire_time;
  public $access_token;
  public $jsapi_ticket;
  public function __construct()
  {
    $this->expire_time = 0;
    $this->access_token = "";
    $this->jsapi_ticket = "";
  }
}