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
<style>/*新闻内页*/
.inside_r{width:100%; padding:16px 0;}
.inside_r_t{border-bottom:1px dashed #ddd; text-align:center; margin-bottom:20px;}
.inside_r_t span{color:#484848; font-size:20px; margin-bottom:16px; display:block;}
.inside_r_t label{color:#c2c2c2; font-size:12px; margin-bottom:16px; display:block; font-weight:lighter;}
.inside_m{width:100%; padding-bottom:20px; line-height:24px;}
.inside_m em{color:#9a9a9a; font-style:normal; display:block; margin-bottom:16px;}
.inside_b{border-top:1px dashed #ddd; padding-top:22px;}
.inside_b span{display:block; margin-bottom:14px; font-size:14px;}
.inside_b span a{color:#0385ea;}
.inside_b span a:hover{color:#f03e00;}
</style>
	<div class="con">
        <div class="inside_r">
    	<div class="inside_r_t">
                	<span><?php echo $data['title']; ?></span>
                    <label>发表于:<?php echo $data['dtTime']; ?> 来源：<?php echo $data['source']; ?></label>                
          </div>
          <div class="inside_m">
          	<em><?php echo $data['description']; ?></em>
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
	
