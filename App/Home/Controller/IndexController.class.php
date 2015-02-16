<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController{

	//我的面板
    public function index(){
    	$id=is_login();
    	$m=M("Member");
    	$result=$m->where("id={$id}")->find();
    	$this->assign("result",$result);
		$this->display();
    }

    //我的基本信息
    public function myinfo(){
    	$id=is_login();
        $m=M("Member");
        if(IS_POST){
           $data['truename']=$_POST['truename'];
           $data['tel']=$_POST['tel'];
           $data['address']=$_POST['address'];
           if(!empty($_POST['password1'])){
                if($_POST['password1']==$_POST['password2']){
                    $data['password']=md5($_POST['password1']);
                }else{
                    $this->ajaxReturn(array("msg"=>"两次输入密码不一致"),"JSON");
                }
           }
           $res=$m->where("id=%d",$_POST['id'])->data($data)->save();
           if($res){
                $this->ajaxReturn(array("status"=>1,"msg"=>"修改成功"),"JSON");
           }else{
                $this->ajaxReturn(array("msg"=>"修改失败"),"JSON");
           }
        }
    	$result=$m->where("id={$id}")->find();
    	$this->assign("result",$result);
    	$this->display();
    }
}