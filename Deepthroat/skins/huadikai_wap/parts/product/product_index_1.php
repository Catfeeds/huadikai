<?php
    // 为方便并保证您以后的快速升级 请使用SHL提供的如下全局数组
	
	// 数组定义/config/dt-global.php
	
	// 如有需要， 请去掉注释，输出数据。
	/*
	echo '<pre>';
		print_r($tag);
	echo '</pre>';
	*/
?>
<div class="inside_r">
  <div class="in_pro">
    <ul>
    	<?php
		if( !empty( $tag['data.results'] ) )
		{
			foreach($tag['data.results'] as $k =>$data)
			{
			?>
            <li>
                <a href="<?php echo sys_href($data['channelId'],'product',$data['id'])?>"><img src="<?php echo $data['smallPic']; ?>" width="191" height="169"/></a>
                <span><a href="<?php echo sys_href($data['channelId'],'product',$data['id'])?>"><?php echo $data['title'];?></a></span>
            </li>
			  <?php
			}
		}
		else
		{
			echo '暂无数据';
		}
		?>
        <div class="clear"></div>
    </ul>
  </div>
  <div class="page"><?php if($tag['pager.cn']) echo $tag['pager.cn']; ?></div>
</div>