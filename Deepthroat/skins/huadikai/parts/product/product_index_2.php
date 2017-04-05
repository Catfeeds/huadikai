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
.f1 {
	width: 50px;
	height: 80px;
	font-size: 80px;
	font-family: Arial, Helvetica, sans-serif;
	position: absolute;
	top: 20px;
	left: 30px;
	text-shadow: 0px 0px 10px #fff;
}
.f2 {
	width: 50px;
	height: 80px;
	font-size: 80px;
	font-family: Arial, Helvetica, sans-serif;
	position: absolute;
	top: 20px;
	left: 80px;
	text-shadow: 0px 0px 10px #fff;
}
.f3 {
	width: 50px;
	height: 80px;
	font-size: 80px;
	font-family: Arial, Helvetica, sans-serif;
	position: absolute;
	top: 20px;
	left: 135px;
	text-shadow: 0px 0px 10px #fff;
}
.f4 {
	width: 50px;
	height: 80px;
	font-size: 80px;
	font-family: Arial, Helvetica, sans-serif;
	position: absolute;
	top: 20px;
	left: 190px;
	text-shadow: 0px 0px 10px #fff;
}
.f5 {
	width: 50px;
	height: 80px;
	font-size: 80px;
	font-family: Arial, Helvetica, sans-serif;
	position: absolute;
	top: 20px;
	left: 245px;
	text-shadow: 0px 0px 10px #fff;
}
.f6 {
	width: 50px;
	height: 80px;
	font-size: 80px;
	font-family: Arial, Helvetica, sans-serif;
	position: absolute;
	top: 20px;
	left: 275px;
	text-shadow: 0px 0px 10px #fff;
}
.f7 {
	width: 50px;
	height: 80px;
	font-size: 80px;
	font-family: Arial, Helvetica, sans-serif;
	position: absolute;
	top: 20px;
	left: 335px;
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
    <div class="f1">F</div>
    <div class="f2">E</div>
    <div class="f3">S</div>
    <div class="f4">T</div>
    <div class="f5">I</div>
    <div class="f6">V</div>
    <div class="f7">E</div>
    <div class="cs">喜庆礼饼</div>
    <div class="cg1">新鲜++美味在心</div>
    <div class="cg2">新鲜烘培，精选优质食材，经过13道工序打造美味的面包精品心</div>
    <div class="b1"><img src="<?php echo $tag['path.skin']; ?>images/festive1.jpg" width="271" height="162" /></div>
  <div class="b2"><!--<img src="<?php echo $tag['path.skin']; ?>images/festive2.png" width="108" height="85" />--></div>
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