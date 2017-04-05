<?php
    // 为方便并保证您以后的快速升级 请使用SHL提供的如下全局数组
	
	// 数组定义/config/doc-global.php
	
	// 如有需要， 请去掉注释，输出数据。
	/*
	echo '<pre>';
		print_r($tag);
	echo '</pre>';
	*/
?>
<script language="javascript">
<!--
function validator()
{
 	if(document.getElementById('name').value=="")
	{alert("请输入申请人姓名!"); document.getElementById('name').focus(); return false;}
	if(document.getElementById('company').value=="")
	{alert("请输入申请单位!"); document.getElementById('company').focus(); return false;}
	if(document.getElementById('contact').value=="")
	{alert("请输电话号码!");document.getElementById('contact').focus();return false;}
	if(document.getElementById('address').value=="")
	{alert("请输收件地址!");document.getElementById('address').focus();return false;}
	if(document.all['content'].value=="")
	{alert("请输入您的申请理由!");document.all['content'].focus();return false;}
}
-->
</script>
<div class="inside_r">
  <div class="apply">
  	<form id="form1" name="form1" method="post" action="<?php echo sys_href(102,'form_action');?>" onsubmit="return validator()">
    <div class="cx_l">申请人姓名：</div>
    <div class="cx_r">
      <input name="name" type="text" id="name">
    </div>
    <div class="cx_r2"></div>
    <div class="cx_l">申请单位：</div>
    <div class="cx_r">
      <input name="custom[]" type="text" id="company">
    </div>
    <div class="cx_r2"><span>注：非美容机构填个人即可</span></div>
    <div class="cx_l">电话号码：</div>
    <div class="cx_r">
      <input name="contact" type="text" id="contact">
    </div>
    <div class="cx_r2"></div>
    <div class="clear"></div>
    <div class="cx_l">收件地址：</div>
    <div class="cx_r3">
      <textarea name="custom[]" id="address"></textarea>
    </div>
    <div class="clear"></div>
    <div class="cx_l">申请理由<br>
      需求备注</div>
    <div class="cx_r3">
      <textarea name="content" id="content"></textarea>
    </div>
    <div class="clear"></div>
    <div class="cx_l">验证码：</div>
    <div class="cx_r">
      <input name="checkcode" type="text" id="checkcode" class="useript usertel"  value=""/><img src="<?php echo URLREWRITE? '/':'./'; ?>inc/verifycode.php" />
    </div>
    <div class="clear"></div>
    <div class="mgt36"></div>
    <div class="txb_none3">
      <div class="cx_l2"></div>
      <div class="cx_r5"><input type="image" src="<?php echo $tag['path.skin']; ?>images/btn_sm.png" /></div>
      <div class="clear"></div>
    </div>
    </form>
  </div>
</div>