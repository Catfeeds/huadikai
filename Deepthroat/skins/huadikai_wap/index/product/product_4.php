<?php if($i > 2){ $k = 3;}else{$k = $i+1;} ?>
<li>
                    <label class="circle rank_bg<?php echo $k;?>"><?php echo $i+2;?></label>
                    <span><a href="<?php echo sys_href($data['channelId'],'product',$data['id'])?>"><?php echo $data['title'];?></a></span>
                    <em><?php echo $data['counts'];?></em>
                </li>