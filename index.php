<!DOCTYPE html>
<html>
<head>
	<title>CSCI E-15 Project 01</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="js/jquery.fancybox.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script type="text/javascript">
				$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : true,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' / ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});
	</script>

</head>
<body>
	<h1>Just Pictures</h1>
	
<p>Of all of our inventions for mass communication, pictures still speak the most universally understood language. Just click on the thumbnails and navigate...
</p>

<div class="content">

<div class="img">
<a class="fancybox-buttons" data-fancybox-group="thumb" href="images/mypictures/avalanche_lake.jpg" title="Avalanche Lake"><img src="images/mypictures/avalanche_lake.jpg" alt=""  width="110"  height="90" /></a>
<div class="desc">Avalanche Lake</div>
</div>
<div class="img">
		<a class="fancybox-buttons" data-fancybox-group="thumb" href="images/mypictures/chief_mountain.jpg" title="Chief Mountain"><img src="images/mypictures/chief_mountain.jpg" alt=""  width="110"  height="90" /></a>
<div class="desc">Chief Mountain</div>
</div>
<div class="img">
		<a class="fancybox-buttons" data-fancybox-group="thumb" href="images/mypictures/clements_mountain.jpg" title="Clements mountain"><img src="images/mypictures/clements_mountain.jpg" alt=""  width="110"  height="90" /></a>
<div class="desc">Mount Clements </div>
</div>
<div class="img">
		<a class="fancybox-buttons" data-fancybox-group="thumb" href="images/mypictures/heavens_peak.jpg" title="Heavens Peak"><img src="images/mypictures/heavens_peak.jpg" alt=""  width="110"  height="90" /></a>
<div class="desc">Heavens Peak</div>
</div>
<div class="img">		
		<a class="fancybox-buttons" data-fancybox-group="thumb" href="images/mypictures/hidden_lake.jpg" title="Hidden Lake"><img src="images/mypictures/hidden_lake.jpg" alt=""  width="110"  height="90" /></a>
<div class="desc">Hidden Lake</div>
</div>
<div class="img">
		<a class="fancybox-buttons" data-fancybox-group="thumb" href="images/mypictures/iceberg_cirque.jpg" title="Iceberg Cirque"><img src="images/mypictures/iceberg_cirque.jpg" alt=""  width="110"  height="90" /></a>
<div class="desc">Iceberg Cirque</div>
</div>
<div class="img">
		<a class="fancybox-buttons" data-fancybox-group="thumb" href="images/mypictures/lake_mcdonald.jpg" title="Lake Mcdonald"><img src="images/mypictures/lake_mcdonald.jpg" alt=""  width="110"  height="90" /></a>
<div class="desc">Lake Mcdonald</div>
</div>
<div class="img">
		<a class="fancybox-buttons" data-fancybox-group="thumb" href="images/mypictures/mt_gould.jpg" title="Mt Gould"><img src="images/mypictures/mt_gould.jpg" alt=""  width="110"  height="90" /></a>
<div class="desc">Mt Gould</div>
</div>
<div class="img">
		<a class="fancybox-buttons" data-fancybox-group="thumb" href="images/mypictures/red_eagle_lake.jpg" title="Red Eagle Lake"><img src="images/mypictures/red_eagle_lake.jpg" alt=""  width="110"  height="90" /></a>
<div class="desc">Red Eagle Lake</div>
</div>
<div class="img">
		<a class="fancybox-buttons" data-fancybox-group="thumb" href="images/mypictures/red_eagle_mountain.jpg" title="Red Eagle Mountain"><img src="images/mypictures/red_eagle_mountain.jpg" alt=""  width="110"  height="90" /></a>
<div class="desc">Mount Red Eagle</div>
</div>
<div class="img">		
		<a class="fancybox-buttons" data-fancybox-group="thumb" href="images/mypictures/swiftcurrent_lake.jpg" title="Swift Current Lake"><img src="images/mypictures/swiftcurrent_lake.jpg" alt=""  width="110"  height="90" /></a>
<div class="desc">Swift Current Lk.</div>
</div>
<div class="img">
		<a class="fancybox-buttons" data-fancybox-group="thumb" href="images/mypictures/the_weeping_wall.jpg" title="The Weeping Wall"><img src="images/mypictures/the_weeping_wall.jpg" alt=""  width="110"  height="90" /></a>
<div class="desc">Weeping Wall</div>
</div>
<div>
<div class="img">
		<a class="fancybox-buttons" data-fancybox-group="thumb" href="images/mypictures/image1.jpg" title="That's me"><img src="images/mypictures/image1.jpg" alt=""  width="110"  height="90" /></a>
<div class="desc">That's me</div>

</div>
</div>
<div id="footer">

<p></p>

<p>
	<br/>You can contact and read about me at <a href="http://www.linkedin.com/in/chealphonsius">LinkedIn</a> 
	<br/>website at <a href="http://www.linkedin.com/in/chealphonsius">LinkedIn.com</a>. <br/>
	  <?php
		echo $_SERVER['SERVER_NAME'];
		echo $_SERVER['PHP_SELF'];
		$filename = 'index.php';
		if (file_exists($filename)) {
			echo " was last modified on: " . date ("F d Y H:i:s.", filemtime($filename));
		}
		?>
	  </p>
</div>
</body>
</html>