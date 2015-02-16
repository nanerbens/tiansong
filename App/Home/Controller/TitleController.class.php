<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class TitleController extends CommonController {
    //职称管理
    public function index(){
        $t=D("Title");
        $count      = $t->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 
        $this->assign("page",$show);
        $result = $t->order('id desc')->relation(true)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign("result",$result);
        $this->display();
    }

    //职称添加or编辑
    public function title_add(){
        $t=M("Title");
        if(IS_AJAX){
            $data['name']=$_POST['name'];
            $data['apid']=$_POST['pid'];
            if(empty($_POST['id'])){
                if($t->data($data)->add()){
                    $this->ajaxReturn(array("status"=>1,"msg"=>"添加成功"),"JSON");
                }else{
                    $this->ajaxReturn(array("msg"=>"添加失败"),"JSON");
                }
            }else{
                if($t->where("id=%d",$_POST['id'])->data($data)->save()){
                    $this->ajaxReturn(array("status"=>1,"msg"=>"编辑成功"),"JSON");
                }else{
                    $this->ajaxReturn(array("msg"=>"编辑失败或没有改变项"),"JSON");
                }
            }
        }
        if(isset($_GET['id'])){
            $result=$t->where("id=%d",$_GET['id'])->find();
            $this->assign("result",$result);
        }
        $this->assign("res",M("Partment")->select());
        $this->display();
    }

    //删除职称
    public function del_title(){
        if(IS_AJAX){
            $p=M("Title");
            $id=$_POST['id'];
            $result=$p->where("id=%d",$id)->delete();
            if($result){    
                $this->ajaxReturn(array("status"=>1,"msg"=>"删除成功"),"JSON");
            }else{
                $this->ajaxReturn(array("msg"=>"删除失败"),"JSON");
            }
        }
    }
}