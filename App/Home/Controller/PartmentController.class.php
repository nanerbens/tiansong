<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class PartmentController extends CommonController {
	//部门管理
    public function index(){
    	$p=M("Partment");
    	$count      = $p->count();// 查询满足要求的总记录数
    	$Page       = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
    	$show       = $Page->show();// 分页显示输出// 进行分页数据查询 
    	$this->assign("page",$show);
    	$result = $p->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign("result",$result);
    	$this->display();
    }

    //部门添加or编辑
    public function part_add(){
    	$p=M("Partment");
        $this->assign("title","添加部门");
    	if(IS_AJAX){
		    $data['name']=$_POST['name'];
    		$data['remark']=$_POST['remark'];
    		if(empty($_POST['id'])){
	    		if($p->data($data)->add()){
	    			$this->ajaxReturn(array("status"=>1,"msg"=>"添加成功"),"JSON");
	    		}else{
	    			$this->ajaxReturn(array("msg"=>"添加失败"),"JSON");
	    		}
    		}else{
    			if($p->where("id=%d",$_POST['id'])->data($data)->save()){
    				$this->ajaxReturn(array("status"=>1,"msg"=>"编辑成功"),"JSON");
    			}else{
    				$this->ajaxReturn(array("msg"=>"编辑失败或没有改变项"),"JSON");
    			}
    		}
    	}
    	if(isset($_GET['id'])){
    		$result=$p->where("id=%d",$_GET['id'])->find();
    		$this->assign("result",$result);
            $this->assign("title","编辑部门");
    	}
    	$this->display();
    }

    //删除部门
    public function del_part(){
    	if(IS_AJAX){
    		$p=M("Partment");
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