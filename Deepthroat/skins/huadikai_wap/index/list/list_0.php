<li>
  <a href="<?php echo sys_href($data['channelId'],'list',$data['id'])?>" title="<?php echo $data['title']; ?>">
    <div class="li-title"><?php echo $data['title']; ?></div>
    <div class="li-date"><?php echo date('Y-m-d',strtotime($data['dtTime'])); ?></div>
  </a>
</li>