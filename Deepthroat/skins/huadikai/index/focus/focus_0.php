<div class="banner" id="banner" >
		<?php
		foreach($flash['results'] as $data)
		{
	   ?>
       <a href="<?php echo $data['url'];?>" class="d1" style="background:url(<?php echo $data['picpath'];?>) center no-repeat;"></a>
		  <?php 
		}
		?>
  <div class="d2" id="banner_id">
    <ul>
    	<?php
		foreach($flash['results'] as $data)
		{
	   ?>
       <li></li>
		  <?php 
		}
		?> 
    </ul>
  </div>
  <div class="banner_t"></div>
</div>
<script type="text/javascript">banner()</script> 