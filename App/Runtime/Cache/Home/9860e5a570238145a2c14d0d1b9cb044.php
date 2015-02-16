<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Matrix Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/luomanage1/Public/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/luomanage1/Public/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="/luomanage1/Public/css/matrix-login.css" />
        <link rel="stylesheet" href="/luomanage1/Public/css/dialog.css" />
        <link href="/luomanage1/Public/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href='http://fonts.useso.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" method="post">
                 <div class="control-group normal_text"> <h3><img src="/luomanage1/Public/img/logo.png" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"></i></span><input type="text" name="number" id="number" placeholder="Username" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" id="password" name="password" placeholder="Password" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-right"><button type="button"  class="btn btn-success" /> 登录</button></span>
                </div>
            </form>
        </div>
        
<script src="/luomanage1/Public/js/jquery.js"></script>  
<script src="/luomanage1/Public/js/dialog.js"></script> 

<script type="text/javascript">
   $(function(){
     $(".btn-success").click(function(){

        var number=$("#number").val();
        var password=$("#password").val();
        $.post("/luomanage1/index.php?s=/Home/Public/check_login",{number:number,password:password},function(data){
           var d=dialog({
                    title:"提示",
                    width:200,
                    content:data.message,
                    okValue:"确定",
                    ok:function(){
                        if(data.status==1){
                            window.location.href="<?php echo U('Index/index');?>";
                        }
                    }
                })
                d.show();
        })
    })
   })
</script>
    </body>
</html>