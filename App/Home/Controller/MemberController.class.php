<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class MemberController extends CommonController {
    //员工列表
    public function index(){
        $t=D("Member");
        $count      = $t->where("id !=1")->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 

        $result = $t->where("id!=1")->order('id desc')->relation(true)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign("result",$result);
        $this->assign("page",$show);
        $this->display();
    }

    //员工添加or编辑
    public function member_add(){
        $m=M("Member");
        $p=M('Partment');
        $res=$p->select();
        $this->assign("res",$res);
        if(IS_AJAX){
            $data['number']=$_POST['number'];
            $data['truename']=$_POST['truename'];
            $data['tel']=$_POST['tel'];
            $data['remark']=$_POST['remark'];
            $data['address']=$_POST['address'];
            $data['pid']=$_POST['pid'];
            $data['tid']=$_POST['tid'];
            if(!empty($_POST['password'])){
                if($_POST['password']!=$_POST['password1']){
                    $this->ajaxReturn(array("msg"=>"两次输入密码不一致"),"JSON");
                }else{
                    $data['password']=md5($_POST['password']);
                }
            }else{
                $_POST['password']=md5("123456");
            }
            if(empty($_POST['id'])){
                if(!empty($m->where("number='%s'",$_POST['number'])->find())){
                    $this->ajaxReturn(array("msg"=>"该账号已存在"),"JSON");
                }else{
                    if($user_id=$m->data($data)->add()){ 
                        $ru=M("Role_user");
                        foreach ($_POST['role_id'] as $key => $value) {
                            $ru -> user_id=$user_id;
                            $ru -> role_id=$value;
                            $ru -> add();
                          
                        }
                        $this->ajaxReturn(array("status"=>1,"msg"=>"添加成功".$ru->getlastsql()),"JSON");
                    }else{
                        $this->ajaxReturn(array("msg"=>"添加失败"),"JSON");
                    }
                }
            }else{//编辑
                if($m->where("id=%d",$_POST['id'])->data($data)->save()){
                    $ru=M("Role_user");
                    $del_role=$ru->where("user_id=%d",$_POST['id'])->delete();//清空role_user里的信息，重新写入
                    foreach ($_POST['role_id'] as $key => $value) {
                        $ru -> user_id=$_POST['id'];
                        $ru -> role_id=$value;
                        $ru -> add();
                    }
                    $this->ajaxReturn(array("status"=>1,'msg'=>"编辑成功"),"JSON");
                }else{//如果只改变角色不改变其他项的话执行
                    $ru=M("Role_user");
                    $del_role=$ru->where("user_id=%d",$_POST['id'])->delete();//清空role_user里的信息，重新写入
                    foreach ($_POST['role_id'] as $key => $value) {
                        $ru -> user_id=$_POST['id'];
                        $ru -> role_id=$value;
                        $ru -> add();
                    }
                     $this->ajaxReturn(array("status"=>1,"msg"=>"编辑成功"),"JSON");
                }
            }
        }
        //获取权限
        $r=M("Role");
        $list=$r->where("status=1")->select();
        if($_GET['id']){
            $ru=M("Role_user");
            $rulist=$ru->where("user_id=%d",$_GET['id'])->select();
            $this->assign("rulist",$rulist);
            $result=$m->where("id=%d",$_GET['id'])->find();
            $this->assign("result",$result);
            $t=M("Title");
            $title=$t->select();
            $this->assign("title",$title);
        }
        $this->assign("list",$list);
        $this->display();
    }

    //选择职称
    public function change_title(){
         if(IS_AJAX){
            $t=M("title");
            $data['apid']=array("IN",$_POST['tid']);
            $title=$t->where($data)->select();
            $data=array();
            foreach ($title as $key => $value) {
                $data[$key]['id']=$value['id'];
                $data[$key]['name']=$value['name'];
            }
             $this->ajaxReturn($data);

        }
    }

    //删除员工
    public function del_member(){
        $id=$_POST['id'];
        $m=M("Member");
        $ru=M("Role_user");
        if($m->where("id=%d",$_POST['id'])->delete()){
            if($ru->where("user_id=%d",$_POST['id'])->delete()){
                $this->ajaxReturn(array("status"=>1,"msg"=>"删除成功"),"JSON");
            }
        }else{
            $this->ajaxReturn(array("msg"=>"删除失败"),"JSON");
        }
    }

  
    //个人档案列表
    public function chives(){

        $this->display();
    }

    //头像异步上传操作
    public function upload(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath  =      './../Public/Uploads/'; // 设置附件上传目录    // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
          foreach($info as $file){
              $file_result=$file['savepath'].$file['savename'];
          }
          $data['flag']=1;
          $data['msg']=$file_result;
          $this->ajaxReturn($data);
        }
    }



}