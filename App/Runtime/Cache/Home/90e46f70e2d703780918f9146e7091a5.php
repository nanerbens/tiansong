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
    <div id="breadcrumb"> <a href="<?php echo U('Index/index');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> 首页</a> </div>

  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">

        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>考勤添加</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="/luomanage/index.php?s=/Home/Check/check_add"  method="post" class="form-horizontal" id="form">
          <div class="control-group">
              <label class="control-label">所属部门:</label>
              <div class="controls">
                <select name="pid" id="pid" class="span4"> 
                  <option value="-1" selected="selected">请选择部门</option>
                  <?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($vo['id'] == $result['pid']): ?>selected<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">被考勤人:</label>
              <div class="controls">
                <select name="tid" id="tid" class="span4"> 
                <?php if(!empty($result['id'])): if(is_array($member)): $i = 0; $__LIST__ = $member;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($vo['id'] == $result['mid']): ?>selected<?php endif; ?>><?php echo ($vo["truename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; endif; ?> 
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">记录人:</label>
              <div class="controls">

                <input type="text" class="span4" readyonly="readonly" name="from_username" id="from_username" value="<?php echo ($truename); ?>"  />
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">扣款金额:</label>
              <div class="controls">
                <input type="text" class="span4" name="money" id="money" value="<?php echo ($result["money"]); ?>"  />
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">考勤类型:</label>
              <div class="controls">
                <select name="type" id="type" class="span4">
                  <?php if(is_array($type)): foreach($type as $key=>$name): ?><option value="<?php echo ($key); ?>" <?php if(($key == $result['type'])): ?>selected<?php endif; ?>><?php echo ($name); ?></option><?php endforeach; endif; ?>
                </select>
              </div>
            </div>

              <div class="control-group">
              <label class="control-label">考勤日期:</label>
              <div class="controls">
                <input type="hidden" name="id" id="id" value="<?php echo ($result["id"]); ?>"> 
                <input type="text" class="span4" name="date" id="date" value="<?php echo ($result["date"]); ?>"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">备注:</label>
              <div class="controls">
                <textarea name="remark" id="remark" class="span4"><?php echo ($result["remark"]); ?></textarea>
              </div>
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-success">保存</button>
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
$('#form').submit(function(){
  $(this).ajaxSubmit({
    type: "post",
    dataType: "json",
    success: function(data){
      var d=dialog({
          title:"提示",
          width:200,
          content:data.msg,
          okValue:"确定",
          ok:function(){
              window.location.href="/luomanage/index.php?s=/Home/Check/index";
                
          }
      })
      d.show();
    }
  });
  return false;
});

$("#pid").change(function(){
    var tid=$(this).val();
    $.post("/luomanage/index.php?s=/Home/Check/change_title",{tid:tid},function(data){
        $("#tid").empty();
        for(var key in data){
          var param="<option value=' "+data[key].id+" '>"+data[key].truename+"</option>";
          $("#tid").append(param);
        }
        return false;
    })
})

</script>
</body>
</html>