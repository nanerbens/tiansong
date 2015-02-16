<?php 

/**
检验用户是否登录，0未登录，大于0用户id
*/
function is_login(){
		$id=$_SESSION['uid'];
		if(empty($id)){
			return 0;
		}else{
			return $id;
		}

}

	//考勤类型
 function checktype($i){
 	switch ($i) {
 		case 'check'://客户类型
			return array("0"=>"考勤类型","1"=>"迟点","2"=>"早退","3"=>"请假");
			break;

	}
}

//应用头部css文件
function HEADERX(){
	$header='<meta charset="UTF-8" />';
	$header.='<meta name="viewport" content="width=device-width, initial-scale=1.0" />';
	$header.='<link rel="stylesheet" href="'.C('URL').'Public/css/bootstrap.min.css" />';
	$header.='<link rel="stylesheet" href="'.C('URL').'Public/css/bootstrap-responsive.min.css" />';
	$header.='<link rel="stylesheet" href="'.C('URL').'Public/css/matrix-style.css" />';
	$header.='<link rel="stylesheet" href="'.C('URL').'Public/css/matrix-media.css" />';
	$header.='<link rel="stylesheet" href="'.C('URL').'Public/css/dialog.css" />';
	$header.='<link href="'.C('URL').'Public/font-awesome/css/font-awesome.css" rel="stylesheet" />';

	$header.="<link href='http://fonts.useso.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>";
	return $header;

}

function OTHERX(){
	$other='<script src="__ROOT__/Public/js/dialog.js"></script> ';
	return $other;
}


//应用js文件
function FOOTERX(){
        $footer='<script src="'.C('URL').'Public/js/jquery.js"></script>';
        $footer.='<script src="'.C('URL').'Public/js/dialog.js"></script> ';
        $footer.='<script src="'.C('URL').'Public/js/jquery.form.js"></script> ';
        $footer.='<script src="'.C('URL').'Public/js/ajaxupload.js"></script> ';
     	$footer.='<script src="'.C('URL').'Public/js/bootstrap.min.js"></script> ';
     	$footer.='<script src="'.C('URL').'Public/js/jquery.ui.custom.js"></script> ';
     	$footer.='<script src="'.C('URL').'Public/js/matrix.js"></script>';
        return $footer;
}


?>