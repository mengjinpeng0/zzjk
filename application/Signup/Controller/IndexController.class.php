<?php
namespace Signup\Controller;

use Common\Controller\HomeBaseController;
use Think\Controller;
use Think\Db;
/**
 * 首页
 */
class IndexController extends HomeBaseController {
	
    function _initialize(){
        //parent::_initialize();
        $this->check_login();
        $this->check_user();
    }
   
   
	public function index() {
    	$this->display(":index");
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
        
     
    	$this->display(":step2");
    }

    
    
    public function step3(){


    	$this->display(":step3");
    }
    


    public function step4(){

        //执行支付环境 也可以自己独立安装一些步骤。
       
            
           /*
            $dbconfig['DB_TYPE']="mysql";
            $dbconfig['DB_HOST']=I('post.dbhost');
            $dbconfig['DB_USER']=I('post.dbuser');
            $dbconfig['DB_PWD']=I('post.dbpw');
            $dbconfig['DB_PORT']=I('post.dbport');
            $db  = Db::getInstance($dbconfig);
            $dbname=strtolower(I('post.dbname'));
            $sql = "CREATE DATABASE IF NOT EXISTS `{$dbname}` DEFAULT CHARACTER SET utf8";
            $db->execute($sql) || $this->error($db->getError());
            
            $this->display(":step4");
            
            //创建数据表
            $dbconfig['DB_NAME']=$dbname;
            $dbconfig['DB_PREFIX']=trim(I('post.dbprefix'));
            $db  = Db::getInstance($dbconfig);
            
            $table_prefix=I("post.dbprefix");
            sp_execute_sql($db, "thinkcmf.sql", $table_prefix);

            //更新配置信息
            sp_update_site_configs($db, $table_prefix);
            
            $authcode=sp_random_string(18);
            //创建管理员
            sp_create_admin_account($db, $table_prefix,$authcode);
            
            //生成网站配置文件
            sp_create_config($dbconfig, $authcode);
            session("_install_step",4);
            sleep(1);
            
            $this->redirect("step4");*/
            $this->display(':step4');

    }
    
    public function step5(){
        /*if(session("_install_step")==4){
            @touch('./data/install.lock');
            $this->display(":step5");
        }else{
            $this->error("非法安装！");
        }*/
        $this->display(':step5');    
    	
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

