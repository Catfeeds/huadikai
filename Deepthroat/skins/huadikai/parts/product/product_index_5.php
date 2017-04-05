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
<style>
.sp1 {
	width: 30px;
	height: 72px;
	font-size: 50px;
	font-family: Arial, Helvetica, sans-serif;
	position: absolute;
	top: 0;
	left: 30px;
	text-shadow: 0px 0px 10px #fff;
}
.sp2 {
	width: 30px;
	height: 72px;
	font-size: 50px;
	font-family: Arial, Helvetica, sans-serif;
	position: absolute;
	top: 0;
	left: 65px;
	text-shadow: 0px 0px 10px #fff;
}
.sp3 {
	width: 30px;
	height: 72px;
	font-size: 50px;
	font-family: Arial, Helvetica, sans-serif;
	position: absolute;
	top: 0;
	left: 100px;
	text-shadow: 0px 0px 10px #fff;
}
.sp4 {
	width: 30px;
	height: 72px;
	font-size: 50px;
	font-family: Arial, Helvetica, sans-serif;
	position: absolute;
	top: 0;
	left: 135px;
	text-shadow: 0px 0px 10px #fff;
}

.sp5 {
	width: 30px;
	height: 72px;
	font-size: 50px;
	font-family: Arial, Helvetica, sans-serif;
	position: absolute;
	top: 0;
	left: 170px;
	text-shadow: 0px 0px 10px #fff;
}

.sp6 {
	width: 30px;
	height: 72px;
	font-size: 50px;
	font-family: Arial, Helvetica, sans-serif;
	position: absolute;
	top: 0;
	left: 185px;
	text-shadow: 0px 0px 10px #fff;
}

.sp7 {
	width: 30px;
	height: 72px;
	font-size: 50px;
	font-family: Arial, Helvetica, sans-serif;
	position: absolute;
	top: 0;
	left: 220px;
	text-shadow: 0px 0px 10px #fff;
}

.sp8 {
	width: 30px;
	height: 72px;
	font-size: 50px;
	font-family: Arial, Helvetica, sans-serif;
	position: absolute;
	top: 50px;
	left: 65px;
	text-shadow: 0px 0px 10px #fff;
}
.sp9 {
	width: 30px;
	height: 72px;
	font-size: 50px;
	font-family: Arial, Helvetica, sans-serif;
	position: absolute;
	top: 50px;
	left: 100px;
	text-shadow: 0px 0px 10px #fff;
}
.sp10 {
	width: 30px;
	height: 72px;
	font-size: 50px;
	font-family: Arial, Helvetica, sans-serif;
	position: absolute;
	top: 50px;
	left: 135px;
	text-shadow: 0px 0px 10px #fff;
}
.sp11 {
	width: 30px;
	height: 72px;
	font-size: 50px;
	font-family: Arial, Helvetica, sans-serif;
	position: absolute;
	top: 50px;
	left: 170px;
	text-shadow: 0px 0px 10px #fff;
}
.sp12 {
	width: 30px;
	height: 72px;
	font-size: 50px;
	font-family: Arial, Helvetica, sans-serif;
	position: absolute;
	top: 50px;
	left: 205px;
	text-shadow: 0px 0px 10px #fff;
}
.sp13 {
	width: 30px;
	height: 72px;
	font-size: 50px;
	font-family: Arial, Helvetica, sans-serif;
	position: absolute;
	top: 50px;
	left: 240px;
	text-shadow: 0px 0px 10px #fff;
}
.sp14 {
	width: 30px;
	height: 72px;
	font-size: 50px;
	font-family: Arial, Helvetica, sans-serif;
	position: absolute;
	top: 50px;
	left: 275px;
	text-shadow: 0px 0px 10px #fff;
}
.sp15 {
	width: 30px;
	height: 72px;
	font-size: 50px;
	font-family: Arial, Helvetica, sans-serif;
	position: absolute;
	top: 50px;
	left: 310px;
	text-shadow: 0px 0px 10px #fff;
}
</style>
<script>
function products_view(id){
	$("#donghua").hide();
	$("#products_view").hide();
	$("#products_view").empty();
	var xpng='<img src="<?php echo $tag['path.skin']; ?>images/x.png" width="16" height="16" style="position:absolute; top:0; right:0; cursor:pointer;" onclick="closethis()"/>';
	$("#products_view").append(xpng+$("#content_img"+id).html());
	$("#products_view").fadeIn(1500);
}

function closethis(){
	$("#products_view").fadeOut();
	$("#donghua").fadeIn();
}
</script>
<div class="cake_r" style="position:relative;">
   <div id="products_view" style="position:absolute; top:10px;left:38px; width:617px; height:300px; overflow:hidden; z-index:1; display:none;">
   </div>
   <div id="donghua">
    <div class="sp1">S</div>
    <div class="sp2">P</div>
    <div class="sp3">E</div>
    <div class="sp4">C</div>
    <div class="sp5">I</div>
    <div class="sp6">A</div>
    <div class="sp7">L</div>
    <div class="sp8">P</div>
    <div class="sp9">U</div>
    <div class="sp10">R</div>
    <div class="sp11">C</div>
    <div class="sp12">H</div>
    <div class="sp13">A</div>
    <div class="sp14">S</div>
    <div class="sp15">E</div>
    <div class="cs">过年年货</div>
    <div class="cg1">新鲜++美味在心</div>
    <div class="cg2">新鲜烘培，精选优质食材，经过13道工序打造美味的面包精品心</div>
    <div class="b1"><img src="<?php echo $tag['path.skin']; ?>images/specialpurchase1.jpg" width="271" height="162" /></div>
  <div class="b2"><!--<img src="<?php echo $tag['path.skin']; ?>images/specialpurchase2.png" width="108" height="85" />--></div>
  </div>
    <div class="pro">
        <ul id="products_list">
        	<?php
				
				if( !empty( $tag['data.results'] ) )
				{	
					foreach($tag['data.results'] as $k =>$data)
					{
					  ?>
                      <li><img src="<?php echo $data['smallPic']; ?>" alt="123" width="86" height="74" onclick="products_view('<?php echo $data['id']; ?>')"/><div id="content_img<?php echo $data['id']; ?>" style="display:none;position:absolute; top:0; left:32px; width:626px; height:305px; z-index:1;"><?php echo $data['content']; ?></div></li>
					 <?php
					}
				}
				else
				{
					echo '';
				}
			?>
        </ul>
    </div>
</div>