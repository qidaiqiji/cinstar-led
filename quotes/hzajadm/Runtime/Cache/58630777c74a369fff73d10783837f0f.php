<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<title>修改管理员</title>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="LineRightBlue1">
      <table width="95%" border="0" cellpadding="0" cellspacing="0" style="margin-left:20px;">
      <tr>
        <td width="88%" height="24">修改管理员 【<a href="<?php echo U('Member/index');?>">返回管理员列表</a>】</td>
        <td width="12%" align="right" class="bt_add"></td>
      </tr>
    </table>
    </td>
  </tr>
</table>

<form action="<?php echo U('upMember');?>" method="post">
<DIV class="PageContent">
<table width="98%" border="0" style="margin:20px;" class="ListCategory">
  <tr>
    <td width="9%">管理员名：</td>
    <td width="91%" height="35"><input name="username" value="<?php echo ($member["username"]); ?>" readonly="readonly" type="text" class="FormSmall" style="width: 220px;"> 
    </td>
  </tr>
  
  <tr>
    <td>密 码：</td>
    <td height="35"><input name="password" type="password" class="FormSmall" style="width: 220px;">
    <span style="color:#999999; font-size:12px;"></span>
    </td>
  </tr>
  
  <tr>
    <td height="55" align="center">
    </td>
    <td height="55" align="left">
    <input type="hidden" name="id" value="<?php echo ($member["id"]); ?>">
    <input type="submit" value="确认修改" class="bginput">
    </td>
    </tr>
</table>
</DIV>
</form>
</body>
</html>