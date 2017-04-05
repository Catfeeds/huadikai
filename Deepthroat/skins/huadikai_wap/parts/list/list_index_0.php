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
<div class="con">
  <?php
				if( !empty( $tag['data.results'] ) )
				{?>
  <ul class="txt">
    <?php foreach($tag['data.results'] as $k =>$data)
					{?>
    <li>
      <a href="<?php echo sys_href($data['channelId'],'list',$data['id'])?>" title="<?php echo sys_substr($data['title'],40,true); ?>">
        <div class="li-title"><?php echo sys_substr($data['title'],40,true); ?></div>
        <div class="li-date"><?php echo date('Y-m-d',strtotime($data['dtTime'])); ?></div>
      </a>
    </li>
    <?php			
					}?>
  </ul>
  <?php	}
				else
				{
					echo '暂无数据';
				}
			?>
</div>
<div class="listpage" >
  <div class="xiaocms-page">
    <?php if($tag['pager.cn']) echo $tag['pager.cn']; ?>
  </div>
</div>
