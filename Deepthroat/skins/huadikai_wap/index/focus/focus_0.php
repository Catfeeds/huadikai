<div class="banner">
  <div class="banner-list">
    <ul class="clearfix">
<?php
		foreach($flash['results'] as $data)
		{
	   ?>
<li>
  <a href="<?php echo $data['url'];?>"><img src="<?php echo $data['picpath'];?>" width="100%"/>
  </a>
</li>
<?php 
		}
		?>
    </ul>
  </div>
</div>

