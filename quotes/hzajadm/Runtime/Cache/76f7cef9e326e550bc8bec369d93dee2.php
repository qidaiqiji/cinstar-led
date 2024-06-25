<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../Public/js/select.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<title>后台首页</title>
</head>
<body>

    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td class="LineRightBlue1">
            <table width="95%" border="0" cellpadding="0" cellspacing="0" style="margin-left:20px;">
          <tr>
            <td width="88%" height="24"><strong style="color:#697e95;">快捷操作：</strong></td>
            <td width="12%" align="right" class="bt_add"></td>
          </tr>
        </table>
        </td>
      </tr>
    </table>

    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px #BFC9D2 solid; border-top:none;">
      <tr>
        <td height="92">
          <div class="panel">
            <ul>
			  <li><a href="<?php echo U('Inquiry/index');?>"><span><img src="../Public/images/blue_2010/photo.gif" alt="" hspace="20" border="0" /></span><p>在线留言</p></a></li>
			  <li><a href="<?php echo U('member/index');?>"><span><img src="../Public/images/blue_2010/link.gif" alt="" hspace="20" border="0" /></span><p>密码修改</p></a></li>
            </ul>
          </div>
        </td>
      </tr>
	</table>

  <div class="tablelisthead">
    <ul pid='0'>
      <li class="li_15">&nbsp;系统基本信息</li>
      <li class="li_40"></li>
    </ul>
  </div>
  
  <div id="languageBox2">
    <div class="tablelist">
        <ul onmouseover="this.style.background ='#FFFDD7'" onmouseout="this.style.background ='#FFFFFF'" style="height:30px; padding-top:5px;">
            <li class="li_15" style="display:none;">&nbsp;</li>
            <li class="li_40">系统信息：</li>
        </ul>
        <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><ul onmouseover="this.style.background ='#FFFDD7'" onmouseout="this.style.background ='#FFFFFF'" style="height:30px; padding-top:5px;">
            <li class="li_15">&nbsp;<?php echo ($key); ?>：</li>
            <li class="li_40"><?php echo ($v); ?></li>
        </ul><?php endforeach; endif; else: echo "" ;endif; ?>
        <ul onmouseover="this.style.background ='#FFFDD7'" onmouseout="this.style.background ='#FFFFFF'" style="height:30px; padding-top:5px; display:none;">
            <li class="li_15">&nbsp;技术支持：</li>
            <li class="li_40">sinsiu</li>
        </ul>
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
 
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>