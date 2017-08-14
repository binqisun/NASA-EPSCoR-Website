<div class="main" id="test" style="border:1px solid red">

<div class="carousel slide" id="myCarousel">

	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li class="active" data-slide-to="0" data-target="#myCarousel"></li>
		<li data-slide-to="1" data-target="#myCarousel"></li>
		<li data-slide-to="2" data-target="#myCarousel"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active" id="slide1">
			<div class="carousel-caption">
				<h4>Bootstrap 3</h4>
				<p>Learn how to build your first responsive website with the brand new Twitter Bootstrap 3!</p>
			</div><!-- end carousel-caption-->
		</div><!-- end item -->
		
		<div class="item" id="slide2">
			<div class="carousel-caption">
				<h4>Learn to code a website in 4-hours!</h4>
				<p>PSD to HTML5 &amp; CSS3 is a popular Udemy course that has helped thousands of aspiring web designers launch their web design career.</p>
			</div><!-- end carousel-caption-->
		</div><!-- end item -->
		
		<div class="item" id="slide3">
			<div class="carousel-caption">
				<h4>Web Hosting 101</h4>
				<p>Learn how to buy a perfect domain name and hosting package, and get your website live on the web with ease.</p>
			</div><!-- end carousel-caption-->
		</div><!-- end item -->
	</div><!-- carousel-inner -->
	
	<!-- Controls -->
	<a class="left carousel-control" data-slide="prev" href="#myCarousel"><span class="icon-prev"></span></a>
	<a class="right carousel-control" data-slide="next" href="#myCarousel"><span class="icon-next"></span></a>

</div><!-- end myCarousel -->
<div id="div1">
  <div id="div2">HELLO1</div>
  <div id="div3">HELLo2</div>
  <div id="div4"></div>
</div>
	<div>
	
	</div>
	<img id="pic1" style="position: relative" src="images/nasa_logo.gif"/>
	<img id="pic2" style="position: relative; display: none" src="images/nasa_logo.gif"/>

	<p id="param">nice to meet you</p>
	<p id="param1"> nice toadsgfasdf</p> 
</div>

<style>
	
#div1 {
    position: relative;
    height: 200px;
    width: 200px;
	left: 200px;
    margin: 50px;
	-webkit-perspective: 150px; /* Chrome, Safari, Opera  */
    perspective: 300px;
}

#div2 {
    height: 200px;
	width: 200px;
    position: absolute;
	padding: 30px;
	left: -200px;
    background-color: red;
    -webkit-transform: rotateY(60deg); /* Chrome, Safari, Opera  */
    transform: rotateY(60deg);
}
#div3 {
	height: 200px;
	width: 200px;
    padding: 40px;
    position: absolute;
    background-color: yellow;
}
#div4 {
	height: 400px;
	width: 400px;
	padding: 30px;
    position: absolute;
	left: 200px;
    -webkit-transform: rotateY(-10deg); /* Chrome, Safari, Opera  */
    transform: rotateY(-10deg);
	background-image: url('../el.jpg');
	background-repeat: no-repeat;

}


.square {
	width: 300px;
	height: 300px;
	margin: 0 75px;
}

.cover {
	margin: 20px 0;
	position: absolute;
}


.color1 {
	background: #bf0000;
	color: #bf0000;
}
.color2 {
	background: #bf5600;
	color: #bf5600;
}
.color3 {
	background: #bfac00;
	color: #bfac00;
}
.color4 {
	background: #7cbf00;
	color: #7cbf00;
}
.color5 {
	background: #26bf00;
	color: #26bf00;
}
.color6 {
	background: #00bf2f;
	color: #00bf2f;
}
.color7 {
	background: #00bf85;
	color: #00bf85;
}
.color8 {
	background: #00a2bf;
	color: #00a2bf;
}
.color9 {
	background: #004cbf;
	color: #004cbf;
}
.color10 {
	background: #0900bf;
	color: #0900bf;
}
.color11 {
	background: #5f00bf;
	color: #5f00bf;
}
.color12 {
	background: #b500bf;
	color: #b500bf;
}

</style>


	<script>
	
	
	$(function() {
		
		$('#div1').animate({perspective: '500px'}, 3000);
		
		$("#pic1").click(function() {
				$("#pic1").animate({transform: "rotate(360deg)", left: '334px'},1000).animate({transform: "rotate(360deg)", left: '0px'});
		});
		
		$('#param1').click(function() {
			$('#param1').animate({"transform" : 'rotate(360deg)'}, 3000);
		});

		$('#param').click(function() {
			$('#param').slideUp(500).delay(500).fadein();
		});
	});

	</script>
	
			<div id="basic5678" style="margin: 0 auto;height: 150px; width: 400px; position: relative;">
			<div id="basic5" class="square cover color5"></div>
			<div id="basic6" class="square cover color6">div2</div>
			<div id="basic7" class="square cover color7" style="z-index: 2">div3</div>
			<div id="basic8" class="square cover color8">div4</div>
			</div>
			
		<script>

		$(function() {
			var transforms = [
					'scale(.66) skewY(-45deg)',
					'translate(20px) scale(.66) skewY(-45deg)',
					'translate(150px,50px) scale(1.5,1)',
					'translate(280px) scale(.66) skewY(45deg)',
					'translate(300px) scale(.66) skewY(45deg)'
				],
				$squares = $('#basic5678 .square').each(function(i) {
					$(this).css({ transform: transforms[i] });
				});
			$('#basic5678').click(function() {
				$squares.each(function(i) {
					$(this).animate({ transform: transforms[i+1] });
				});
			}).mouseleave(function() {
				$squares.each(function(i) {
					$(this).animate({ transform: transforms[i] });
				});
			});
			$.fn.rewind = function() {
				return this.each(function() {
					$(this).delay(
						2000
					).queue(function() {
						$(this).css('opacity', .5).dequeue();
					}).animate({
						transform: ''
					}).queue(function() {
						$(this).css('opacity', 1).dequeue();
					});
				})
			};
		});
	</script>
	
