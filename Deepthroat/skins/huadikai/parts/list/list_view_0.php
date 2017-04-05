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
<div class="right_m2">
<div class="inside_r">
    	<div class="inside_r_t">
                	<span><?php echo $data['title']; ?></span>
                    <label>发表于:<?php echo $data['dtTime']; ?> 来源：<?php echo $data['source']; ?></label>                
          </div>
          <div class="inside_m">
          	<em>简介：<?php echo $data['description']; ?></em>
            <?php echo $data['content']; ?>
          </div>
          <div class="inside_b">
          	<?php 
				/*
					以下程序添加于2009.09.08  最近修改 2011-09-10
					author:5只鸡(ps:鸡哥)
					Modifier:suny 一滴水 狗头巫师
				*/
				$is_up=$tag['pager.data.up'];
				$is_down=$tag['pager.data.down'];
				if(is_array($is_down))
				{
				?>
				<span>下一篇：<a href="<?php echo sys_href($params['id'],'list',$is_down['id'])?>"><?php echo $is_down['title']; ?></a></span>
				<?php 
				}	
				if(is_array($is_up))
				{
				?>
				<span>上一篇：<a href="<?php echo sys_href($params['id'],'list',$is_up['id'])?>"><?php echo $is_up['title']; ?></a> </span>
				<?php 	
				}	
				unset($is_up);
				unset($is_down);
			?>
          </div>
    </div>
</div>