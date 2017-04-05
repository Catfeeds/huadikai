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
    <?php
		if( !empty( $tag['data.results'] ) )
		{
			foreach($tag['data.results'] as $k =>$data)
			{
	
				?>
                <div class="branch_in">
                    <div class="branch_in_l"><a href="<?php echo sys_href($data['channelId'],'list',$data['id'])?>"><img src="<?php echo ispic($data['originalPic']); ?>" alt="" width="270" height="138" /></a></div>
                    <div class="branch_in_r">
                    	<?php echo $data['description']; ?>
                        佛山 普君店<br />
                        地址：佛山市禅城区普郡新城东路<br />10号
                        电话：0757-82061356<br />
                    </div>
                </div>
				<?php			
			}
		}
		else
		{
			echo '暂无文章。';
		}
	?>
    <div class="branch_in">
          <div class="branch_in_l"><img src="images/fendian.jpg" alt="" width="270" height="138" /></div>
          <div class="branch_in_r">
              佛山 普君店<br />
              地址：佛山市禅城区普郡新城东路<br />10号
              电话：0757-82061356<br />
          </div>
      </div>
      <div class="branch_in">
          <div class="branch_in_l"><img src="images/fendian.jpg" alt="" width="270" height="138" /></div>
          <div class="branch_in_r">
              佛山 普君店<br />
              地址：佛山市禅城区普郡新城东路<br />10号
              电话：0757-82061356<br />
          </div>
      </div>
      <div class="branch_in">
          <div class="branch_in_l"><img src="images/fendian.jpg" alt="" width="270" height="138" /></div>
          <div class="branch_in_r">
              佛山 普君店<br />
              地址：佛山市禅城区普郡新城东路<br />10号
              电话：0757-82061356<br />
          </div>
      </div>
      <div class="branch_btn"><a href="#"><img src="images/up.png" alt="" width="20" height="11" /></a>　<a href="#"><img src="images/down.png" alt="" width="20" height="11" /></a></div>
  </div>
  
</div>