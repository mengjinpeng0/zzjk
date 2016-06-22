<?php
namespace Signup\Controller;

use Common\Controller\HomeBaseController;
use Think\Controller;
use Think\Db;
/**
 * 首页
 */
class IndexController extends HomeBaseController {
	
    protected $users_model;
    function _initialize(){
        parent::_initialize();
        $this->users_model=D("Common/Users");

        $this->check_login();
        $this->check_user();
    }
   
   
	public function index() {
       $userid = sp_get_current_userid();
        $user=$this->users_model->find($userid);
        //var_dump($user);die();
         if ($user['coin'] == '1') {
             $this->success('亲，您已经报完名啦！正在跳转到考试页面。',__ROOT__.'/index.php?g=user&m=center&a=exam');
         } else {
           $this->display(":index");
         }
 	
    }
    

    function info_upload(){
        
        $config=array(
                'FILE_UPLOAD_TYPE' => sp_is_sae()?"Sae":'Local',//TODO 其它存储类型暂不考虑
                'rootPath' => './'.C("UPLOADPATH"),
                'savePath' => './avatar/',
                'maxSize' => 512000000,//500K
                'saveName'   =>    array('uniqid',''),
                'exts'       =>    array('jpg', 'png', 'jpeg'),
                'autoSub'    =>    false,
        );

        $upload = new \Think\Upload($config);//
        
        $info=$upload->upload();
        //开始上传
        if ($info) {
        //上传成功
        //写入附件数据库信息
            $first=array_shift($info);

            $file=$first['savename'];
            $_SESSION['infos']=$file;
            $this->ajaxReturn(sp_ajax_return(array("file"=>$file),"上传成功！",1),"AJAX_UPLOAD");
        } else {
            //上传失败，返回错误
            $this->ajaxReturn(sp_ajax_return(array(),$upload->getError(),0),"AJAX_UPLOAD");
        }
    }

    public function step2(){
        $userid=sp_get_current_userid();
        $user=$this->users_model->where(array("id"=>$userid))->find();
        $this->assign($user);
       
     
    	$this->display(":step2");
    }

    
    
    public function step3(){

       if(IS_POST){
            $userid=sp_get_current_userid();
            $_POST['id']=$userid;
            if ($this->users_model->create()) {

                if ($this->users_model->save()!==false) {
                    $user=$this->users_model->find($userid);
                    sp_update_current_user($user);
                   
                } else 
            {
                    $this->error("保存失败！");
                }
            } else {

                $this->error($this->users_model->getError());
            }
        }

        /*跳转到第三个页面*/
        $this->show('<script>
                     alert("保存成功");
                   </script>');

        $this->display(':step3');
    	
    }
    


    public function step4(){

        if(IS_POST){
            $userid=sp_get_current_userid();
            $_POST['id']=$userid;
            if ($this->users_model->create()) {

                if ($this->users_model->save()!==false) {
                    $user=$this->users_model->find($userid);
                    sp_update_current_user($user);
                    $this->display(':step4');
                } else 
            {
                    $this->error("保存失败！");
                }
            } else {

                $this->error($this->users_model->getError());
            }
        }
    }
    
    public function step5(){
        
        
      if(IS_POST){
            $userid=sp_get_current_userid();
            $_POST['id']=$userid;
            if ($this->users_model->create()) {

                if ($this->users_model->save()!==false) {
                    $user=$this->users_model->find($userid);
                    $rs = sp_update_current_user($user);   
                } else 
            {
                    $this->error("保存失败！");
                }
            } else {

                $this->error($this->users_model->getError());
            }
        }
        
        $this->display(':step5');
    	
    }
    
    public function step6(){
        $userid = sp_get_current_userid();
        $user=$this->users_model->find($userid);
        $user['coin'] = 1;
        $data1 =   array('coin' => $user['coin']);
         $rs = M('users')->where(array('id'=>$userid))->save($data1);
           
         $this->success('支付成功！正在跳转到考试页面！',__ROOT__.'/index.php?g=user&m=center&a=exam');
        //$this->redirect('user/center/exam');
    
    }
    
 
    public function testdbpwd(){
        if(IS_POST){
            $dbconfig=I("POST.");
            $dbconfig['DB_TYPE']="mysql";
            $db  = Db::getInstance($dbconfig);
            try{
               $db->query("show databases;");
            }catch (\Exception $e){
                die("");
            }
            exit("1");
        }else{
            exit("need post!");
        }
        
    }

}

