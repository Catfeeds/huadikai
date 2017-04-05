<dl>
                        	<dt>
                            	<span><a href="<?php echo sys_href($data['channelId'],'product',$data['id'])?>"><?php echo $data['title'];?></a></span>
                            	<a href="<?php echo sys_href($data['channelId'],'product',$data['id'])?>"><img src="<?php echo $data['smallPic'];?>" width="144" height="133"/></a>
                            </dt>
                          <dd>
                          		产品数量:<label><?php echo sys_push_one($data['spec'],'产品数量',$data['channelId']) ?></label><br/>
                                已申请数:<label><?php echo sys_push_one($data['spec'],'已申请数',$data['channelId']) ?></label><br/>
                                截止日期:<em><?php echo sys_push_one($data['spec'],'截止日期',$data['channelId']) ?></em><br/>
                          </dd>
                            <dd><input type="button" onclick="window.location.href='<?php echo sys_href($data['channelId'],'product',$data['id'])?>';" value="我要申请"></dd>
                        </dl>