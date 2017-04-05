<li>
            <span>
              <a href="<?php echo sys_href($data['channelId'],'list',$data['id'])?>"><?php echo $data['title']; ?></a>
            </span>
            <label><?php echo date('Y-m-d',strtotime($data['dtTime'])); ?></label>
</li>