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
<div class="right_m2">
  <?php
			if(!empty($tag['data.results']))
			{
				foreach($tag['data.results'] as $k =>$data)
				{
					echo $data['content'];
				}
			}else{
				echo '暂无数据！';
			}
			?>
</div>