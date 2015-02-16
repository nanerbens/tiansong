<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
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
    <li class="submenu"> <a href="javascript:"><i class="icon icon-th-list"></i> <span>工资管理</span> </a>
      <ul>
        <li><a href="<?php echo U('Member/index');?>">工资单</a></li>
        <li><a href="form-validation.html">工资历史</a></li>
      </ul>
    </li>


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
<!--close-top-serch--> 
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="<?php echo U('Index/index');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> 首页</a> </div>

</div>
<div class="container-fluid">
  <div class="row-fluid">


      

    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>个人档案</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#" class="form-horizontal">
            <table class="table table-bordered table-striped">
              <thead>
              </thead>
              <tbody>
                <tr class="odd gradeX">
                  <td>员工编号:<input type="text" name="number" id="number"></td>
                  <td>员工姓名：<input type="text" name="username" id="username"></td>
                  <td class="">员工性别：<select name="education" id="education">
                      <option value="">请选择学历</option>
                      </selected></td>
                  <td>所属部门:<input type="text" name="partment" id="partment"></td>
                </tr>
                <tr class="even gradeC">
                  <td>出生日期:<input type="text" name="number" id="number"></td>
                  <td>身份证号：<input type="text" name="username" id="username"></td>
                   <td class="">在职状态：<select name="education" id="education">
                      <option value="">请选择在职状态</option>
                      </selected></td>
                   <td>所属职称:<input type="text" name="partment" id="partment"></td>
                </tr>
                <tr class="odd gradeA">
                <td>选择学历:<select name="education" id="education">
                      <option value="">请选择学历</option>
                      </selected>
                  </td>
                  <td colspan="">毕业学校：<input type="text" name="partment" id="partment"></td>
                  <td colspan="">家庭住址：<input type="text" name="partment" id="partment"></td>
                   <td>入职日期:<input type="text" name="partment" id="partment"></td>
                </tr>
                <tr class="odd gradeA">
                <td>
                  <td colspan="">照片上传:<input type="file" id="file_up"  name="file_up" onchange="ajaxFileUpload1()"></td>
                   <td><img id="image" src="/luomanage1/Public/images/on_pic.jpg"></td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>
  </div>
</div>
</div>
</div>


<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in/">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part--> 
<?php echo FOOTERX();?>
<script type="text/javascript">

	function ajaxFileUpload1(){
		$.ajaxFileUpload({
			url:"/luomanage1/index.php?s=/Home/Member/upload",
			secureuri:false,
			fileElementId:"file_up",
			dataType:"json",
			success:function(data,status){
				$("#image").attr("src",data.msg);
			}
		})
		return false;
	}
</script>

</body>
</html>