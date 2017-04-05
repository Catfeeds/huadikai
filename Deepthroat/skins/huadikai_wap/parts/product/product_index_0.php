<?php
    // 为方便并保证您以后的快速升级 请使用SHL提供的如下全局数组
	
	// 数组定义/config/dt-global.php
	
	// 如有需要， 请去掉注释，输出数据。
	/*
	echo '<pre>';
		print_r($tag);
	echo '</pre>';
	*/
?>

  <div class="con">
    <div class="tit">
      <div class="fl">公司产品</div>
      <div class="fr">
        <a href="javascript:showmenu()">产品分类</a>
      </div>
      <section id="wmmenu" class="z3g-showMoreContNews z3g-showMoreSection" style="left: 100%; top: 0px;">
        <table cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <td class="barWrap active js_hideNewsCategory" valign="top" onclick="hidemenu();">
                <span class="closeBar active">
                  <em></em>
                </span>
              </td>
              <td class="contWrap" style="min-height: 815px;">
                <!-- 分类内容 -->
                <div id="newsCategoryID" style="height: 345px; overflow: hidden;">
                  <ul id="thelist" style="-webkit-transition-property: -webkit-transform; transition-property: -webkit-transform; -webkit-transform-origin: 0px 0px 0px; -webkit-transform: translate3d(0px, 0px, 0px);">
                    <?php nav_sub(3); ?>
                  </ul>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </section>
    </div>
    <?php
				if( !empty( $tag['data.results'] ) )
				{?>
    <ul class="pic">
      <?php foreach($tag['data.results'] as $k =>$data)
					{?>
      <li>
        <a href="<?php echo sys_href($data['channelId'],'product',$data['id'])?>" title="<?php echo $data['title'];?>">
          <div class="li-thumb">
            <span>
              <img src="<?php echo $data['smallPic']; ?>"/>
              <i></i>
            </span>
          </div>
          <div class="li-title">
            <?php echo $data['title'];?>
          </div>
        </a>
      </li>
      <?php			
					}?>
      <div class="clear"></div>
    </ul>
    <?php	}
				else
				{
					echo '暂无数据';
				}
			?>
  </div>
  <div class="listpage" >
    <div class="xiaocms-page">
      <?php if($tag['pager.cn']) echo $tag['pager.cn']; ?>
    </div>
  </div>

