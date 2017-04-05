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
<div class="right">
  <div class="honor">
      <ul>
      	  <?php
			  if( !empty( $tag['data.results'] ) )
			  {
				  foreach($tag['data.results'] as $k =>$data)
				  {
		  
					  ?>
                      <li>
                          <a href="#">
                              <span><?php echo sys_substr($data['title'],75,true) ?></span>
                          </a>
                      </li>
					  <?php			
				  }
			  }
			  else
			  {
				  echo '暂无资料';
			  }
		  ?>
          <div class="clear"></div>
          <div class="page" style="margin-top:10px;">
          	  <?php if(!empty($tag['pager.cn'])) echo $tag['pager.cn']; ?>
          </div>
      </ul>
  </div>
  
</div>