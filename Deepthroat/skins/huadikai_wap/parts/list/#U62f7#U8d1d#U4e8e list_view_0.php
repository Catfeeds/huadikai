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
<?php 
	//2011-09-10
	$data=$tag['data.row']; 
?>
<div class="right">
  <div id="div1" style="width:auto; overflow:hidden; height:350px; width:600px; padding:10px; line-height:1.5; margin-top:100px; background:url(<?php echo $tag['path.skin']; ?>images/in.png);">
  <?php echo $data['content']; ?>
  </div>
  <script type="text/javascript">
  jsScroll(document.getElementById('div1'), 10, 'divScrollBar');
  jsScroll(document.getElementById('div2'));
  jsScroll(document.getElementById('div3'));
  </script>
</div>