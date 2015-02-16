<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class CheckController extends CommonController{

	   //考勤列表
    public function index(){
        $c=D("Check");
        $count      = $c->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 
        $result = $c->order('id desc')->relation(true)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign("result",$result);
        $this->assign("type",checktype('check'));

        $this->assign("page",$show);
        $this->display();
    }

    //考勤添加
    public function check_add(){
      $id=is_login();
      $c=M("Check");
      if(IS_AJAX){
          $data['pid']=$_POST['pid'];
          $data['truetime']=date("Y-m-d H:m:s",time());
          $data['date']=$_POST['date'];
          $data['mid']=$_POST['tid'];//员工
          $data['from_username']=$_POST['from_username'];
          $data['money']=$_POST['money'];
          $data['type']=$_POST['type'];
          $data['remark']=$_POST['remark'];
          if(empty($_POST['id'])){//添加
              if($c->data($data)->add()){
                $this->ajaxReturn(array("msg"=>"添加成功"),"JSON");
              }else{
                $this->ajaxReturn(array('msg'=>"添加失败"),"JSON");
              }
          }else{//编辑->a
              if($c->where("id=%d",$_POST['id'])->data($data)->save()){
                $this->ajaxReturn(array('status'=>1,"msg"=>"编辑成功"),"JSON");
              }else{
                $this->ajaxReturn(array("msg"=>"编辑失败"),"JSON");
              }
          }
      }
      $m=M("Member");
      if($_GET['id']){
          $result=$c->where("id=%d",$_GET['id'])->find();
          $member=$m->where("id=%d",$result['mid'])->select();
          $this->assign("member",$member);
      }
      
      $truename=$m->where("id={$id}")->getField("truename");
      $p=M("Partment");
      $res=$p->select();
      $this->assign("res",$res);
      $this->assign("result",$result);     
      $this->assign("type",checktype('check'));
      $this->display();
    
    }

    public function change_title(){
        if(IS_AJAX){
          $m=M('Member');
          $id=$_POST['tid'];
          $list=$m->where("pid={$id}")->select();

          $data=array();
          foreach ($list as $key => $value) {
              $data[$key]['id']=$value['id'];
              $data[$key]['truename']=$value['truename'];
          }
          $this->ajaxReturn($data);
        }
    }

    
}