<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo (C("Wname")); ?></title>
<?php echo HEADERX();?>
</head>

<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text"><?php echo ($truename); ?></span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo U('Index/myinfo');?>"><i class="icon-user"></i>修改资料</a></li>
        <li class="divider"></li>
        <li class="divider"></li>
        <li><a href="<?php echo U('Public/login_out');?>"><i class="icon-key"></i>退出登录</a></li>
      </ul>
    </li>
    <li class=""><a  href="<?php echo U('Public/login_out');?>"><i class="icon icon-share-alt"></i> <span class="text">退出登录</span></a></li>
  </ul>
</div>

<!--sidebar-menu-->
<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-inbox"></i> Widgets1</a>
  <ul>
    <li  class="<?php if((MODULE_NAME) == "Index"): ?>active<?php endif; ?>"><a href="<?php echo U('Index/index');?>"><i class="icon icon-home"></i> <span>我的面板</span></a> </li>
    <li > <a href="<?php echo U('Partment/index');?>"><i class="icon icon-signal"></i> <span>部门管理</span></a> </li>
    <li > <a href="<?php echo U('Title/index');?>"><i class="icon icon-signal"></i> <span>职称管理</span></a> </li>
     <li > <a href="<?php echo U('Role/index');?>"><i class="icon icon-signal"></i> <span>角色管理</span></a> </li>
    <li class="submenu"> <a href="javascript:"><i class="icon icon-th-list"></i> <span>员工管理</span> </a>
      <ul>
        <li><a href="<?php echo U('Member/index');?>">员工列表</a></li>
        <li><a href="form-validation.html">档案管理</a></li>
      </ul>
    </li>
    <li > <a href="<?php echo U('Check/index');?>"><i class="icon icon-signal"></i> <span>考勤管理</span></a> </li>








    <li  > <a href="widgets.html"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li>
    <li><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
    <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="form-common.html">Basic Form</a></li>
        <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li>
    <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
    <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="index2.html">Dashboard2</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="invoice.html">Invoice</a></li>
        <li><a href="chat.html">Chat option</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="error403.html">Error 403</a></li>
        <li><a href="error404.html">Error 404</a></li>
        <li><a href="error405.html">Error 405</a></li>
        <li><a href="error500.html">Error 500</a></li>
      </ul>
    </li>
    <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"><a href="<?php echo U('Index/index');?>" title="首页" class="tip-bottom"><i class="icon-home"></i> 首页</a> </div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">

    <div class="row-fluid">
                
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>考勤列表</h5>
          <div class="buttons">
          	<a title="添加考勤" class="btn btn-mini" href="<?php echo U('Check/check_add');?>"><i class="icon-plus"></i></a>
          </div>
        </div>
        <div class="widget-content">
        
        
          <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                <th>考勤编号</th>
                  <th>姓名</th>
                  <th>所属部门</th>
                  <th>记录人</th>
                  <th>扣款金额</th>
                  <th>扣款类型</th>
                  <th>缺勤日期</th>
                  <th>填写时间</th>
                  <th>备注</th>
                  <th>操作</th>
                </tr>
              </thead>
              
              <tbody>
              	<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td><?php echo ($vo["id"]); ?></td>
                <td><?php echo ($vo["Member"]["truename"]); ?></td>
                <td><?php echo ($vo["Partment"]["name"]); ?></td>
                <td><?php echo ($vo["from_username"]); ?></td>
                <td>
                  <?php echo ($vo["money"]); ?>
                </td>
                <td>
                  <?php if(is_array($type)): foreach($type as $key=>$name): if(($key == $vo['type']) ): echo ($name); endif; endforeach; endif; ?>
                </td>
                <td><?php echo ($vo["date"]); ?></td>
                <td><?php echo ($vo["truetime"]); ?></td>
                <td><?php echo ($vo["remark"]); ?></td>

                  <td>
                  	<a   class="btn btn-info" href="<?php echo U('Check/check_add',array('id'=>$vo['id']));?>"
                    	<i class="icon-edit icon-white"></i>
                        编辑
                    </a>
                     <a class="btn btn-danger" href="javascript:" id="<?php echo ($vo["id"]); ?>">
                      <i class="icon-lock icon-white"></i>
                      删除
                    </a>
                  </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
              </tbody>
          </table>
          
          <div class="pagination alternate text-center"><ul><?php echo ($page); ?></ul></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--end-main-container-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in/">Themedesigner.in</a> </div>
</div>
<input type="hidden" id="del_value">
<input type="hidden" id="del_type">

</body>
</html>
<?php echo FOOTERX();?>
<script type="text/javascript">
 $(function(){
    $(".btn-danger").click(function(){
        var id=$(this).attr("id");
        var d=dialog({
            title:"提示",
            content:"确定删除该职称吗？",
            okValue:"确定",
            ok:function(){
                $.post("/luomanage1/index.php?s=/Home/Check/del_title",{id:id},function(data){
                    var s=dialog({
                        title:"提示",
                        content:data.msg,
                        width:200,
                        okValue:"确定",
                        ok:function(){
                            window.location.reload();
                        }
                    })
                    s.show();
                })
            },
            cancelValue:"取消",
            cancel:function(){

            }
        })
        d.show();
    })
 })

</script>