<dl>
                  <dt><img src="<?php echo $data['originalPic']; ?>" width="203" height="151"></dt>
                  <dd class="ttmns1">
                        <label><?php echo $data['title']; ?></label>
                        <!--<span>&nbsp;<?php echo $data['tag']; ?></span>-->
                  </dd>
                  <!--<dd ttmns2><?php echo $data['title']; ?></dd>-->
                    <dd class="ttmns3"><?php echo sys_substr($data['description'],100,true); ?></dd>
                    <dd class="ttmns4"><input type="button" onclick="window.location.href='<?php echo sys_href($data['channelId'],'list',$data['id'])?>';" value="了解更多"></dd>
                    <div class="clear"></div>
                </dl>