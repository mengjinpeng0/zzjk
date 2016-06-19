<?php

/**
 * 会员中心
 */
namespace User\Controller;
use Common\Controller\MemberbaseController;
class CenterController extends MemberbaseController {
	
	protected $users_model;
	function _initialize(){
		parent::_initialize();
		$this->users_model=D("Common/Users");
	}
    //会员中心
	public function index() {
		$userid=sp_get_current_userid();
		$user=$this->users_model->where(array("id"=>$userid))->find();
		$this->assign($user);
    	$this->display(':center');
    }


    public function exam(){
       //调取驾考的api，然后在此实现。
    	    $ch = curl_init();
            $url = 'http://apis.baidu.com/bbtapi/jztk/jztk_query?subject=1&model=c1&testType=rand';
            $header = array( 'apikey:0395ac329ec7fee0ce679ecee30746ca', );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);

    $rsa = json_decode($res,true);
       
    
    $rsa2 = array($rsa['result']);

    $rs3 = $rsa2[0];
    $this->assign('rs3',$rs3);
     

      $ch1 = curl_init();
      $url1 = 'http://apis.baidu.com/bbtapi/jztk/jztk_query?subject=4&model=c1&testType=rand';
      $header1 = array( 'apikey:0395ac329ec7fee0ce679ecee30746ca', );
    // 添加apikey到header
    curl_setopt($ch1, CURLOPT_HTTPHEADER  , $header1);
    curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch1 , CURLOPT_URL , $url1);
    $res1 = curl_exec($ch1);

    $rsa1 = json_decode($res1,true);
       
    
    $rsa4 = array($rsa1['result']);

    $rs4 = $rsa4[0];
    $this->assign('rs4',$rs4);
     
    $this->display(':exam');
    }

}
