<?php
foreach($flash['results'] as $data)
{
?>
<li>
  <em>
    <img src="<?php echo $data['picpath'];?>" >
  </em>
  <span><?php echo $data['title'];?></span>
  <label><?php echo $data['description'];?></label>
</li>
  <?php 
}
?>