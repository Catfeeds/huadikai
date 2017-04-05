<?php
foreach($flash['results'] as $data)
{
?>
<li>
              <a href="<?php echo $data['url'];?>" title="<?php echo $data['title'];?>">
                <div class="li-thumb">
                  <span>
                    <img src="<?php echo $data['picpath'];?>"/>
                    <i></i>
                  </span>
                </div>
                <div class="li-title"><?php echo $data['title'];?></div>
              </a>
            </li>
  <?php 
}
?>