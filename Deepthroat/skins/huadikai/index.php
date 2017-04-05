<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
      <title><?php echo $tag['seo.title']; ?></title>
      <meta name="keywords" content="<?php echo $tag['seo.keywords']; ?>" />
      <meta name="description" content="<?php echo $tag['seo.description'];  ?>" />
      <link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/style.css" />
      <link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/css.css" />

      <!--JQ基础文件-->
      <script type="text/javascript" src="<?php echo $tag['path.skin']; ?>js/jquery-1.9.1.min.js"></script>

      <!--IE6 PNG透明-->
      <!--[if lte IE 6]>
<script src="js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a');
    </script>
<![endif]-->

      <!--banner js-->
      <script type="text/javascript">
        function banner(){
        var bn_id = 0;
        var bn_id2= 1;
        var speed33=5000;
        var qhjg = 1;
        var MyMar33;
        $("#banner .d1").hide();
        $("#banner .d1").eq(0).fadeIn("slow");
        if($("#banner .d1").length>1)
        {
        $("#banner_id li").eq(0).addClass("nuw");
        function Marquee33(){
        bn_id2 = bn_id+1;
        if(bn_id2>$("#banner .d1").length-1)
        {
        bn_id2 = 0;
        }
        $("#banner .d1").eq(bn_id).css("z-index","2");
        $("#banner .d1").eq(bn_id2).css("z-index","1");
        $("#banner .d1").eq(bn_id2).show();
        $("#banner .d1").eq(bn_id).fadeOut("slow");
        $("#banner_id li").removeClass("nuw");
        $("#banner_id li").eq(bn_id2).addClass("nuw");
        bn_id=bn_id2;
        };

        MyMar33=setInterval(Marquee33,speed33);

        $("#banner_id li").click(function(){
        var bn_id3 = $("#banner_id li").index(this);
        if(bn_id3!=bn_id&&qhjg==1)
        {
        qhjg = 0;
        $("#banner .d1").eq(bn_id).css("z-index","2");
        $("#banner .d1").eq(bn_id3).css("z-index","1");
        $("#banner .d1").eq(bn_id3).show();
        $("#banner .d1").eq(bn_id).fadeOut("slow",function(){qhjg = 1;});
        $("#banner_id li").removeClass("nuw");
        $("#banner_id li").eq(bn_id3).addClass("nuw");
        bn_id=bn_id3;
        }
        })
        $("#banner_id").hover(
        function(){
        clearInterval(MyMar33);
        }
        ,
        function(){
        MyMar33=setInterval(Marquee33,speed33);
        }
        )
        }
        else
        {
        $("#banner_id").hide();
        }
        }
      </script>

      <!--首页产品列表 js-->
      <script type="text/javascript">
        $(function(){
        $('.idx_pro_list_in ul li a').mouseover(function(){
        $(this).children('span').css('display','block');
        });
        $('.idx_pro_list_in ul li a').mouseleave(function(){
        $(this).children('span').css('display','none');
        });
        });
      </script>

	  <!--判断手机跳转 js-->
	  <script type="text/javascript">
function IsPC() {
    var userAgentInfo = navigator.userAgent;
    var Agents = ["Android", "iPhone",
                "SymbianOS", "Windows Phone",
                "iPad", "iPod"];
    var flag = true;
    for (var v = 0; v < Agents.length; v++) {
        if (userAgentInfo.indexOf(Agents[v]) > 0) {
            flag = false;
            break;
        }
    }
    return flag;
}
if(!IsPC())
{
	location.href='wap/';
}
	  </script>
    </head>

  <body>

    <!--头部-->
    <div class="top">
      <div class="top_in">
        <div class="logo">
          <?php doc_focus('2',1,1,0,0,true,'ordering',0)?>
        </div>
        <div class="search">
          <form action="<?php echo $tag['form.action.search']; ?>" method="post">
          <div class="search_btn">
            <input type="image" src="<?php echo $tag['path.skin']; ?>images/search_btn.png">
            </div>
          <div class="search_txb">
            <input name="keyword" id="txt_search" type="text" value="请输入搜索内容 ..."  onFocus="if(value==defaultValue){value='';this.style.color='#000'}" onBlur="if(!value){value=defaultValue;this.style.color='#999'}" style="color:#999999">
            </div>
          </form>
        </div>

        <div class="nav">
          <ul>
            <li class="now">
              <span>
                <a href="/">首页</a>
              </span>
              <label>
                <a href="/">HOME</a>
              </label>
            </li>
            <?php nav_main(); ?>
          </ul>
        </div>

      </div>
    </div>

    <!--banner-->
    <?php doc_focus(1,5,0,0,0,true,'ordering',0) ?>

    <!--关于我们-->
    <div class="idx_about">
      <div class="title_about">
        <img src="<?php echo $tag['path.skin']; ?>images/title_about.png">
    </div>
      <div class="title_about2">
        <img src="<?php echo $tag['path.skin']; ?>images/title_about2.png">
    </div>
      <div class="idx_about_in">
        <?php doc_article('27',0,0,0,0,0,true,true,'id',0)?><a href="?p=1">【了解更多】</a>
      </div>
      <div class="idx_about_list">
        <div class="idx_about_list_in">
          <ul>
            <?php doc_focus('3',0,4,0,0,true,'id',0)?>
            <div class="clear"></div>
          </ul>
        </div>
      </div>
    </div>

    <!--产品展示-->
    <div class="idx_pro">
      <div class="title_pro">
        <img src="<?php echo $tag['path.skin']; ?>images/title_pro.png">
      </div>
      <div class="title_pro2">
        <img src="<?php echo $tag['path.skin']; ?>images/title_pro2.png">
      </div>
      <div class="idx_pro_list">
        <div class="idx_pro_list_in">
          <ul>
            <?php doc_focus('4',8,3,0,0,true,'ordering',0)?>
            <div class="clear"></div>
          </ul>
        </div>
        <div class="more_idx_pro">
          <a href="?p=">
            <img src="<?php echo $tag['path.skin']; ?>images/more_idx_pro.png" />
          </a>
        </div>
      </div>
    </div>

    <!--新闻资讯-->
    <div class="idx_news">
      <div class="title_news">
        <img src="<?php echo $tag['path.skin']; ?>images/title_news.png" />
      </div>
      <div class="idx_news_pic fl">
          <?php doc_list('2',1,2,0,0,0,true,false,'id',0)?>
      </div>
    <div class="idx_news_pic fr">
      <?php doc_list('2',1,2,0,0,0,true,false,'id',2)?>
    </div>
      <div class="clear"></div>
      <div class="idx_news_list fl">
        <ul>
          <?php doc_list('2',6,3,0,0,0,true,false,'id',3)?>
          <div class="clear"></div>
        </ul>
      </div>
      <div class="idx_news_list fr">
        <ul>
          <?php doc_list('2',6,3,0,0,0,true,false,'id',9)?>
          <div class="clear"></div>
        </ul>
      </div>
      <div class="clear"></div>
      <div class="more_idx_news">
        <a href="<?php echo sys_href(2);?>">
          <img src="<?php echo $tag['path.skin']; ?>images/more_idx_news.png" />
        </a>
      </div>
    </div>

    <!--版权信息-->
    <div class="copyright">
      <div class="copyright_in">
        <div class="logo_b">
          <?php doc_focus('2',1,1,0,0,true,'ordering',2)?>
        </div>
        <div class="idx_qr">
          <div class="cpr_t">
            <label>
              <img src="<?php echo $tag['path.skin']; ?>images/dot_cpr_t1.png"  />
            </label>
            <span>关注华迪凯</span>
            <div class="clear"></div>
          </div>
          <?php doc_focus('5',1,6,0,0,true,'ordering',0)?>
        </div>
        <div class="idx_qr">
          <div class="cpr_t">
            <label>
              <img src="<?php echo $tag['path.skin']; ?>images/dot_cpr_t2.png"  />
            </label>
            <span>华迪凯手机网站</span>
            <div class="clear"></div>
          </div>
          <?php doc_focus('5',1,2,0,0,true,'ordering',2)?>
        </div>
        <div class="cpr_b">
          <div class="cpr_t">
            <label>
              <img src="<?php echo $tag['path.skin']; ?>images/dot_cpr_t3.png"  />
            </label>
            <span>联系我们</span>
            <div class="clear"></div>
          </div>
          Add：<?php echo SITEADDRESS; ?><br/>
          Tel ：   <?php echo SITETELEPHONE; ?><br/>
          网址：  <?php echo WEBURL; ?>   Q Q:  <?php echo SITEQQ; ?><br/>
          EML：<?php echo SITEEMAIL; ?><br/>
        </div>
        <div class="clear"></div>
      </div>
      <div class="copyright_b">
        <?php doc_article('26',0,0,0,0,0,true,true,'id',0)?>
    </div>
  </body>
</html>
