<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class RoleController extends CommonController {
    //职称管理
    public function index(){
        $r=D("Role");
        $count      = $r->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 
        $this->assign("page",$show);
        $result = $r->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign("result",$result);
        $this->display();
    }

    //职称添加or编辑
    public function role_add(){
        $t=M("Role");
        if(IS_AJAX){
            $data['name']=$_POST['name'];
            $data['status']=$_POST['status'];
            $data['remark']=$_POST['remark'];
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

    //权限列表
    public function role_access(){
        $uid=is_login();
        
       $rid=$_GET['id'];
        //读取有用字段
        $field=array('id','name','title','pid');
        $node=M('node')->order('sort')->field($field)->select();
        
        //读取用户原有权限
        $access=M('access')->where(array('role_id'=>$rid))->getField('node_id',true);

        $node=node_merge($node,$access);        

        $this->assign('rid',$rid);
        $this->assign('node',$node);
        $this->display();
    }

    //配置权限接受表单
    public function set_access(){
        $rid=$_POST['rid'];
        $db=M('access');
        //删除原权限
        $db->where(array('role_id' => $rid))->delete();
        //组合新权限
        $data=array();
        foreach($_POST['menu'] as $v){
            $tmp=explode('_',$v);
            $data[]=array(
                'role_id'=>$rid,
                'node_id'=>$tmp[0],
                'level'=>$tmp[1]
            );
        }



        //插入新权限
        if($db->addAll($data)){
            $this->ajaxReturn(array("status"=>1,"msg"=>"更新成功"),"JSON");
        }else{
           $this->ajaxReturn(array("msg"=>"更新失败"),"JSON");
        }
        
    }


}