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
$middlePic   = explode('|',$data['middlePic']);
?>
		<div class="con">
			<h1><?php echo $data['title']; ?></h1>
			<hr />
			<img src="<?php echo ispic($middlePic[0])?>" />
			<hr />
			<?php echo $data['description']; ?>
			<?php sys_push($data['spec'],'<br/><span>{name}：{value}</span>',0)?><hr />
			<?php echo $data['content']; ?>
		</div>