<div class="main interactive" style="height: 800px;">
	<link href="css/interactive.css" rel="stylesheet">
	
	<div class="carousel slide" id="interactive-tool">
		<!-- Wrapper for slides -->
		<div class="carousel-inner" id="interact">
			<div class="item active" id="div1">
				<div class="div-platfrom">
					<div>
						<a class="robot_1" data-slide="next" href="#interactive-tool" onclick="getRobot('Arduino Rover')"> <span class="tooltiptext">Arduino Rover</span></a>
					</div>
					<div>
						<a class="robot_2" data-slide="next" href="#interactive-tool" onclick="getRobot('Bioloid Premium Kit')"><span class="tooltiptext">Bioloid Premium Kit</span></a>
					</div>
					<div>
						<a class="robot_3" data-slide="next" href="#interactive-tool" onclick="getRobot('LEGO Mindstorms EV3')"  ><span class="tooltiptext">LEGO Mindstorms EV3</span></a>
					</div>
					<div>
						<a class="robot_4" data-slide="next" href="#interactive-tool" onclick="getRobot('EZ-ROBOT')" ><span class="tooltiptext">EZ-ROBOT</span></a>	
					</div>
					<div>
						<a class="robot_5" data-slide="next" href="#interactive-tool" onclick="getRobot('Bebop Drone')" ><span class="tooltiptext">Bebop Drone 2</span></a>	
					</div>
					<div>
						<a class="robot_6" data-slide="next" href="#interactive-tool" onclick="getRobot('MakeBlock')"  ><span class="tooltiptext">MakeBlock Starter kit</span></a>
					</div>
				</div>
			</div><!-- end item -->
			
			<div class="item" id="div2">
				<div style="margin-top: 25px; ">
					<div data-slide="next" href="#interactive-tool" name="key" value="videos" class="col-md-6 videos" style="border-top-left-radius: 100px; background-color: red;">
						<span>VIDEOS</span>
					</div>
					
					<div data-slide="next" href="#interactive-tool" name="key" value="files" class="col-md-6 files" style="border-top-right-radius: 100px; background-color: yellow;">
						<span>LEARNING MATERIALS</span>
					</div>

					<div data-slide="next" href="#interactive-tool" name="key" value="components" class="col-md-6 core_components" style="border-bottom-left-radius: 100px; background-color: yellow;">
						<span>CORE COMPONENTS</span>
					</div>
					
					<div data-slide="next" href="#interactive-tool" name="key" value="more" class="col-md-6 more" style="border-bottom-right-radius: 100px; background-color: red;">
						<span>Resources</span>
					</div>
					<div class="core img-circle" style="top: 0px;">
						<p style="color: white; position: absolute; top: 50px; font-size: 1.8em; text-align: center;">Choose a section to learn</p>
					</div>
					
				</div>
			</div><!-- end item -->

			<div class="item" id="div3">
			</div><!-- end item -->
			
			<div class="item" id="div4">
				<div class="ez">
				
				</div>
			</div><!-- end item -->
			<a style="height: 40px; width: 40px; color: black; border-radius: 20px;"class="hide left-control carousel-control btn btn-default"  data-slide="prev" href="#interactive-tool"><span class="glyphicon glyphicon-chevron-left"></span></a>
		</div><!-- carousel-inner -->
		<!-- Controls -->
	</div><!-- end myCarousel -->
</div>
<script type="text/javascript">
	
	var robot;
	var video;
	
	
	function getRobot(s) {
		robot = s;
	}
	
	$(function() {
		$('.left-control').click(function(){
			var currentIndex = $('div.active').index();
			$('#video-content').each(function(){
				var src= $(this).attr('src');
				$(this).attr('src',src);  
			});
			if(currentIndex==1)
				$(this).addClass('hide');
		});
		$('#interactive-tool').click(function(){
			setTimeout(function() {
				var currentIndex = $('div.active').index();
				if(currentIndex == 0){
					$('.left-control').addClass('hide');
				}
				else{
					$('.left-control').removeClass('hide');
				}
			}, 1000);
		});
		
		$('.robot_1, .robot_2, .robot_3, .robot_4, .robot_5, .robot_6').hover(function() {
			$('.robot_1, .robot_2, .robot_3, .robot_4, .robot_5, .robot_6').addClass('pause');
		}).mouseleave(function() {
			$('.robot_1, .robot_2, .robot_3, .robot_4, .robot_5, .robot_6').removeClass('pause');
		});

		$('.robot_1, .robot_2, .robot_3, .robot_4, .robot_5, .robot_6').click(function() {
			$('.core').animate({'transform': 'translateY(200px)'}, 1000, function(){
				$('.col-md-6').animate({'opacity': 0.5}).css('display', 'inline');
			});
		});
		
		$('.col-md-6').hover(function() {
			$(this).css('opacity', 1);
		}).mouseleave(function() {
			$(this).animate({'opacity': 0.5});
		});
		
		$('.videos').click(function() {
			$('#div3').load('interactive/videos.php');
		});
		
		$('.files').click(function() {
			$('#div3').load('interactive/files.php');
		});
		$('.core_components').click(function() { 
			$('#div3').load('interactive/core.php');
		});
		
		$('.more').click(function() {
			$('#div3').load('interactive/resources.php');
		});
		
		$('.carousel').carousel({
			interval: false
		});
	});
</script>
