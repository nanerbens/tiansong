<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function _initialize(){
    	if(!isset($_SESSION[C('USER_AUTH_KEY')])){
			$this->redirect("Public/index");
		}

		$notAuth=in_array(MODULE_NAME, explode(',', C('NOT_AUTH_MODULE')))||in_array(ACTION_NAME, explode(',', C('NOT_AUTH_ACTION')));//不需要验证的模块，在配置文件中定义//如果前一个为真，这不走后一个in_array
		if(C('USER_AUTH_ON')){
			  $RBAC= new \Org\Util\Rbac;
              $RBAC::AccessDecision()||$this->error('没有权限');;

			/* $RBAC= new \Org\Util\Rbac;
			 $RBAC::AccessDecision(GROUP_NAME)||$this->error('没有权限');//*/
			 //如果为多模块，则为$Rbac::AccessDecision(GTOUP_NAME);
		}
		/*if(!isset($_SESSION['uid'])){
			$this->redirect("Public/index");
		}*/
		$truename=M("Member")->where("id=%d",$_SESSION['uid'])->getField("truename");
		$this->assign("truename",$truename);
		/*if(!isset($_SESSION[C('USER_AUTH_KEY')])){
			$this->redirect("Public/index");
		}
		$notAuth=in_array(MODULE_NAME, explode(',', C('NOT_AUTH_MODULE')))||in_array(ACTION_NAME, explode(',', C('NOT_AUTH_ACTION')));//不需要验证的模块，在配置文件中定义//如果前一个为真，这不走后一个in_array
		if(C('USER_AUTH_ON')&& !$notAuth){
			 $RBAC= new \Org\Util\Rbac;
			 $RBAC::AccessDecision()||$this->error('没有权限');//如果为多模块，则为$Rbac::AccessDecision(GTOUP_NAME);
		}*/
    }
}