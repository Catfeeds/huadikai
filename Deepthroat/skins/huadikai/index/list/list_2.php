<dl>
  <dt>
    <a href="<?php echo sys_href($data['channelId'],'list',$data['id'])?>">
      <img src="<?php echo ispic($data['originalPic']); ?>" width="172" height="136" />
    </a>
  </dt>
  <dd class="np1">
    <a href="<?php echo sys_href($data['channelId'],'list',$data['id'])?>"><?php echo $data['title']; ?></a>
  </dd>
  <dd class="np2">
    <?php echo $data['description']; ?>
  </dd>
  <dd class="np3">
    <a href="<?php echo sys_href(2);?>">MORE+</a>
  </dd>
  <div class="clear"></div>
</dl>