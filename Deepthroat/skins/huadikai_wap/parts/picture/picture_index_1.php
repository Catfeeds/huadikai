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
  
  <div class="branch">
  	  <div class="branch_hide" id="branch_hide">
	  <?php
      if( !empty( $tag['data.results'] ) )
      {
          foreach($tag['data.results'] as $k =>$data)
          {
          ?>
            <div class="branch_in">
                <!--<div class="branch_in_l"><img src="<?php echo $data['originalPic']?>" alt="" width="270" height="138" /></div>-->
                <div class="branch_in_r">
                    <?php echo $data['content']; ?>    
                </div>
            </div>
            <?php
          }
      }
      else
      {
          echo '暂无分店信息';
      }
      ?>
      </div>
      <div class="branch_btn"><a href="#" id="btn_down"><img src="<?php echo $tag['path.skin']; ?>images/up.png" alt="" width="20" height="11" /></a>　<a href="#" id="btn_up"><img src="<?php echo $tag['path.skin']; ?>images/down.png" alt="" width="20" height="11" /></a></div>
  
  </div>
</div>