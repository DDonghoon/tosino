<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<head>
<meta http-equiv="x-ua-compatible" content="IE=Edge; charset=euc-kr">
<title>-BLUE에 오신것을 환영합니다.-</title>
<!--[if IE 6]>
<style type="text/css">
html {
  filter: expression(document.execCommand("BackgroundImageCache", false, true));
}
</style>
<![endif]-->
<script language="javascript">
<!--
    function setPng24(obj) {
        obj.width=obj.height=1;
        obj.className=obj.className.replace(/\bpng24\b/i,'');

        obj.style.filter ="progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+ obj.src +"',sizingMethod='image');";
        obj.src='';
        return '';
    }
//-->
</script>
<script language="JavaScript">
<!--
function na_restore_img_src(name, nsdoc)
{
  var img = eval((navigator.appName.indexOf('Netscape', 0) != -1) ? nsdoc+'.'+name : 'document.all.'+name);
  if (name == '')
    return;
  if (img && img.altsrc) {
    img.src    = img.altsrc;
    img.altsrc = null;
  } 
}

function na_preload_img()
{ 
  var img_list = na_preload_img.arguments;
  if (document.preloadlist == null) 
    document.preloadlist = new Array();
  var top = document.preloadlist.length;
  for (var i=0; i < img_list.length-1; i++) {
    document.preloadlist[top+i] = new Image;
    document.preloadlist[top+i].src = img_list[i+1];
  } 
}

function na_change_img_src(name, nsdoc, rpath, preload)
{ 
  var img = eval((navigator.appName.indexOf('Netscape', 0) != -1) ? nsdoc+'.'+name : 'document.all.'+name);
  if (name == '')
    return;
  if (img) {
    img.altsrc = img.src;
    img.src    = rpath;
  } 
}

// -->
</script>
</head>
<script language="javascript">
// 자바스크립트에서 사용하는 전역변수 선언
var g4_path      = ".";
var g4_bbs       = "bbs";
var g4_agent	= "agent";
var g4_bbs_img   = "img";
var g4_url       = "http://blue525.com";
var g4_is_member = "";
var g4_is_admin  = "";
var g4_bo_table  = "";
var g4_sca       = "";
var g4_charset   = "euc-kr";
var g4_cookie_domain = ".blue525.com";
var g4_is_gecko  = navigator.userAgent.toLowerCase().indexOf("gecko") != -1;
var g4_is_ie     = navigator.userAgent.toLowerCase().indexOf("msie") != -1;
</script>
<script type="text/javascript" src="./js/common.js"></script>
<script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">var $j = jQuery.noConflict(); jQuery.ajaxSetup({cache:false});</script>
<script type="text/javascript" src="/js/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="/js/ion.sound.js"></script>
<script src="https://kit.fontawesome.com/e424ef4587.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="./js/ajax.js?z"></script>
<script type="text/javascript" src="./js/wz_tooltip.htm"></script>
<script type="text/javascript" src="./js/wsd.js"></script>
<script type="text/javascript" src="./js/flash.js"></script>
<body topmargin="0" leftmargin="0" style="background:url('/images/login_bg.jpg') no-repeat center center fixed; -webkit-background-size:cover; -moz-background-size:cover; -o-background-size:cover; background-size:cover;">
<a name="g4_head"></a>
<link type="text/css" rel="stylesheet" href="/css/common.css">
<link type="text/css" rel="stylesheet" href="/css/main.css?v=01">
<link type="text/css" rel="stylesheet" href="/css/layout.css?q">
<link href="/css/common.css" type="text/css" rel="stylesheet">
<link href="/css/login.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
<script language="javascript">
function fhead_submit(f) {
	if (!f.mb_id.value) {
		alert("회원아이디를 입력하십시오.");
		f.mb_id.focus();
		return false;
	}

	if (!f.mb_password.value) {
		alert("패스워드를 입력하십시오.");
		f.mb_password.focus();
		return false;
	}

	f.action = './bbs/login_check.php';
	return true;
}
</script>
<div id="tubular-container" style="overflow: hidden; position: fixed; z-index: 1; width: 100%; height: 100%">
</div>
<div id="tubular-shield" style="width: 100%; height: 100%; z-index: 2; position: absolute; left: 0; top: 0;"></div>
<div id="wrap_login" class="clearfix" style="position: relative; z-index: 0;"></div>
<div class="login active" style=" z-index: 3; ">
<div class="wrapper">
<div id="login_form" style="">
<form name="fhead" id="fhead" method="post">
<input type="text" id="mb_id" name="mb_id" maxlength="12" placeholder="ID" tabindex="1">
<div class="btn_action"><a href="/bbs/register.php" style="color:white;"><span>회원가입</span></a></div>
<div class="clear h5"></div>
<input type="password" id="mb_password" name="mb_password" maxlength="12" placeholder="PASSWORD" tabindex="2" onKeyDown="if(event.keyCode == 13) { if(fhead_submit(document.fhead)) document.fhead.submit(); }">
<div class="btn_action"><a href="javascript:;" style="color:white;" onclick="if(fhead_submit(document.fhead)) document.fhead.submit(); return false;" tabindex="3"><span>로그인</span></a></div>
</form>
</div>
</div>
</div>


<img class="logo" src="/images/logo.png">
</html>
