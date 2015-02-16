<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {

    //登录
    public function index(){
        if(isset($_SESSION['uid'])){
            $this->redirect("Index/index");
        }
		$this->display("login");
    }

    //登录验证
    public function check_login(){

    	if(IS_AJAX){
    		if(empty($_POST['number'])){
    			$this->ajaxReturn(array("message"=>"请输入用户名"),"JSON");
    		}else if(empty($_POST['password'])){
    			$this->ajaxReturn(array("message"=>"请输入密码"),"JSON");
    		}else{
    			$m=M("Member");
    		$result=$m->where("number='%s'",$_POST['number'])->find();
    			if(!empty($result)){
    				if($result['password']==md5($_POST['password'])){
                        $username=$m->where('id=%d',$result['id'])->getField("truename");
                        session(C('USER_AUTH_KEY'),$result['id']);
                        $ip = get_client_ip();
                        $data['ip']=$ip;
                        $data['login_time']=date("Y-m-d H:m:s",time());
                        $res=$m->where("id=%d",$result['id'])->data($data)->save();

                        //权限操作后期
                        if ($result['number']==C('RBAC_SUPERADMIN')) {
                            session(C('ADMIN_AUTH_KEY'),true);
                        }
                       $RBAC= new \Org\Util\Rbac;
                       $RBAC::saveAccessList();
      


                        $this->ajaxReturn(array("status"=>1,"message"=>"登录成功"),"JSON");

    				}else{
    					$this->ajaxReturn(array("message"=>"密码错误"),"JSON");
    				}
    			}else{
    				$this->ajaxReturn(array("message"=>"账号错误"),"JSON");
    			}
    		}
    	}
    }

    //退出
    public function login_out(){
        if(isset($_SESSION['uid'])){
            session(null);
            $this->redirect("Public/index");
        }
    }
}