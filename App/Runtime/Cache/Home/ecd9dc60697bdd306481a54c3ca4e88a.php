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




    <li > <a href="charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
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
  <div id="content-header">
    <div id="breadcrumb"> <a href="/luo/Home/Index/index" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> 首页</a> <a href="/luo/Home/Index/index" class="current">我的信息</a> </div>

  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">

        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>修改资料</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="/luo/Home/Index/myinfo"  method="post" class="form-horizontal" id="form">
             <div class="control-group">
              <label class="control-label">我的编号:</label>
              <div class="controls">
                <input type="hidden" value="<?php echo ($result["id"]); ?>" name="id" id="id">
                <input type="text" class="span11" placeholder="" value="<?php echo ($result["number"]); ?>" readonly="readonly" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">真实姓名:</label>
              <div class="controls">
                <input type="text" name="truename" id="truename" value="<?php echo ($result["truename"]); ?>" class="span11" placeholder="First name" />
              </div>
            </div>
         
            <div class="control-group">
              <label class="control-label">新密码:</label>
              <div class="controls">
                <input type="password" name="password1" id="password1" class="span11" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">确认新密码:</label>
              <div class="controls">
                <input type="text" name="password2" id="password2" class="span11"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">电话:</label>
              <div class="controls">
                <input type="text" class="span11"  name="tel" id="tel" value="<?php echo ($result["tel"]); ?>" />
            </div>
            <div class="control-group">
              <label class="control-label">住址:</label>
              <div class="controls">
                <input type="text" class="span11"  name="address" id="address" value="<?php echo ($result["address"]); ?>" />
            </div>
            <div class="form-actions">
              <button type="button" class="btn btn-success">保存</button>
            </div>
          </form>
        </div>
      </div>


      </div>
    </div>

  </div>
</div>
<!--main-container-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in/">Themedesigner.in</a> </div>
</div>
<?php echo FOOTERX();?>
<script type="text/javascript">
   $(".btn-success").click(function(){
      var id=$("#id").val();
      var truename=$("#truename").val();
      var tel=$("#tel").val();
      var address=$("#address").val();
      var password1=$("#password1").val();
      var password2=$("#password2").val();
      $.post("/luo/Home/Index/myinfo",{id:id,truename:truename,tel:tel,address:address,password2:password2,password1:password1},function(data){
            var d=dialog({
                title:"提示",
                width:200,
                content:data.msg,
                okValue:"确定",
                ok:function(){
                    if(data.status==1){
                      window.location.reload();
                    }
                }
            })
            d.show();
      })
   })
</script>
</body>
</html>