<?php
foreach($flash['results'] as $data)
{
?>
<li>
    <a href="<?php echo $data['url'];?>">
    <span><?php echo $data['title'];?></span>
    </a>
    <img src="<?php echo $data['picpath'];?>" width="242" height="163">
</li>
  <?php 
}
?>