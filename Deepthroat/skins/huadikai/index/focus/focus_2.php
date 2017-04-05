<?php
foreach($flash['results'] as $data)
{
?>
<a href="<?php echo $data['url'];?>"><img src="<?php echo $data['picpath'];?>" width="110" height="110"></a>
  <?php 
}
?>