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
<style>
.page span{ margin:0 5px;}
.page a{ margin:0 5px;}
</style>
<link rel="stylesheet" href="<?php echo $tag['path.skin']; ?>res/css/colorbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo $tag['path.skin'];?>res/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $tag['path.skin'];?>res/js/jquery.colorbox.js"></script>
<script>
	$(document).ready(function(){
		$(".colorbox").colorbox({rel:'colorbox', transition:"fade"});
	});
</script>
<div class="products">
        	<ul>
            	<?php
				if( !empty( $tag['data.results'] ) )
				{
					foreach($tag['data.results'] as $k =>$data)
					{
					?>
                    <li>
                        <a class="colorbox" href="<?php echo $data['originalPic']?>" title="<?php echo $data['title'];?>" ><img src="<?php echo $data['smallPic']; ?>" width="213" height="213" /></a>
                        <span><?php echo $data['title'];?></span>
                    </li>
					  <?php
					}
				}
				else
				{
					echo '<li>暂无图片</li>';
				}
				?>
                <div class="clear"></div>
            </ul>
        </div>
        <div class="page"><?php if($tag['pager.cn']) echo $tag['pager.cn']; ?></div>