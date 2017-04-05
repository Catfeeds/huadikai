<li>
                        <a href="<?php echo sys_href($data['channelId'],'product',$data['id'])?>"><img src="<?php echo $data['smallPic'];?>" width="156" height="138" /></a>
                        <span><a href="<?php echo sys_href($data['channelId'],'product',$data['id'])?>"><?php echo $data['title'];?></a></span>
                        <span><?php //echo $data['description'];?></span>
                    </li>