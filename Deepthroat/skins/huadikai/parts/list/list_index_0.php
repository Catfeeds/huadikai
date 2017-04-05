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
<div class="news">
  <div class="news_t">
    <div class="news_t2">新闻标题</div>
    <div class="news_t4">更新时间</div>
  </div>
  <div class="news_list">
    <?php
				if( !empty( $tag['data.results'] ) )
				{?>
    <ul>
    <?php foreach($tag['data.results'] as $k =>$data)
					{?>
      <li>
        <div class="news_list2">
          <label>
            <a href="<?php echo sys_href($data['channelId'],'list',$data['id'])?>"><?php echo sys_substr($data['title'],40,true); ?></a>
          </label>
        </div>
        <div class="news_list4"><?php echo date('Y-m-d',strtotime($data['dtTime'])); ?></div>
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
    <div class="clear"></div>
  </div>
  <div class="page"><?php if($tag['pager.cn']) echo $tag['pager.cn']; ?></div>
</div>
</div>