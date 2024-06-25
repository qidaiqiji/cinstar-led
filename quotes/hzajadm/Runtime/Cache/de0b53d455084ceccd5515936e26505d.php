<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/css/style.css" />
<title>在线咨询管理</title>
<script type="text/javascript">
	$(function () {
		// $( '.del' ).click( function () {
		// 	return confirm('确认删除该信息？');
		// } );
		
		$( '.alldel' ).click( function () {
			return confirm('确认删除全部信息？');
		} );
	});
</script>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="LineRightBlue1">
        <table width="95%" border="0" cellpadding="0" cellspacing="0" style="margin-left:20px;">
      <tr>
        <td width="54%" height="24">
          <div style="float:left; width:312px; padding-top:6px;">快捷操作：
          </div>
        
          <td width="33%" height="24">
            <form method="get" action="<?php echo U('Inquiry/index');?>">
              <div style="float:left; width:280px; height:24px;">搜索：<input type="text" name="keyword" class="FormSmall" style="height:12px;"></div>
              <div style="float:left;"><input type="submit" value="搜索" class="bginput" style="width:50px; height:24px; font-size:12px;"/></div>
            </form>
          </td>
        </td>
        <td width="13%" align="right" class="bt_add"></td>
      </tr>
    </table>
    </td>
  </tr>
</table>
  <div class="tablelisthead">
    <ul pid='0'>
      <li class="li_10">姓名</li>
	  <li class="li_10">公司</li>
	  <li class="li_10">邮箱</li>
	  <li class="li_10">联系方式</li>
	  <li class="li_25">内容</li>
	  <li class="li_15">日期</li>
      <li class="li_10">编辑</li>
    </ul>
  </div>
  
  <div id="languageBox2">
    <div class="tablelist">
    <?php if(is_array($inquiry)): $i = 0; $__LIST__ = $inquiry;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul onmouseover="this.style.background ='#FFFDD7'" onmouseout="this.style.background ='#FFFFFF'">
          <li class="li_10"><?php echo ($vo["name"]); ?></li>
		  <li class="li_10"><?php echo ($vo["company"]); ?></li>
		  <li class="li_10"><?php echo ($vo["email"]); ?></li>
		  <li class="li_10"><?php echo ($vo["tel"]); ?></li>
		  <li class="li_25"><?php echo ($vo["contents"]); ?></li>
          <li class="li_15"><?php echo (date("Y-m-d H:i:s",$vo["time"])); ?></li>
          <li class="li_10">
            <a href="<?php echo U('del',array('id'=>$vo['id']));?>" class='del'>删除</a>
          </li>
      </ul><?php endforeach; endif; else: echo "" ;endif; ?>  
    </div>
  </div>
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="36" class="BotNavBg">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="8%" style="padding-left:5px;">
            </td>
            <td width="92%" align="center">
            <div class="page"><?php echo ($show); ?></div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>