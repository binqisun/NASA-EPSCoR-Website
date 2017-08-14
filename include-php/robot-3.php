<p style="color: red; margin-left: 40px; font-weight: bold;">Click
any part of the robot to see what's inside!</p>
<div class="row lego-core" >
	<div class="col-md-7">
		<img src="images/robot3.jpg"  style="height: 600px; width: 600px; position: relative" usemap="#mymap" hidefocus="true"> 
		<map name="mymap">
			<area shape="poly" class="area" id="ir" coords="238,150, 316,147, 317,173, 238,183" title="IR Sensor" onclick="getParts('IR Sensor')">
			<area shape="poly" class="area" id="brick" coords="231,212, 324,210, 329,358, 236,364" title="Brick" onclick="getParts('Programmable Brick')">
			<area shape="poly" class="area" id="touch" coords="128,184, 163,194, 147,255, 118,243" title="touch" onclick="getParts('Touch Sensor')">
			<area shape="poly" class="area" id="color" coords="377,213, 410,194, 420,248, 383,252" title="Color" onclick="getParts('Color Sensor')">
			<area shape="poly" class="area lmotor" coords="213,420, 257,423, 264,562, 220,543" title="Large Motor" onclick="getParts('Large Motor')">
			<area shape="poly" class="area lmotor" coords="297,423, 366,417, 348,535, 295,548" title="Large Motor" onclick="getParts('Ledium Motor')">
			<area shape="poly" class="area mmotor" coords="105,353, 158,355, 173,403, 115,394" title="Medium Motor" onclick="getParts('Medium Motor')">
			<area shape="poly" class="area mmotor" coords="402,346, 388,317, 434,267, 458,310" title="Medium Motor" onclick="getParts('Medium Motor')">

		</map>
	</div>
	<div class="col-md-5" style="height: 700px;">	
			<h3 style="height: 30px; font-size: 1.5em; font-weight: bold; color: blue;" class="part-title"></h3> 
		<div style="margin-top: 10px;">
			<img id="image" style=" opacity: 0; height: 200px; width: 200px;">
		</div>
			<div id="explain" style="font-size: 1.3em; width: 100%"></div>
	</div>

</div>

<script>
	var part;
	function getParts(s){
		part = s;
	}			
	var ir = 'Detects objects and can track and find the Remote Infrared Beacon';
	var color = 'Recognizes seven different colors and measures light intensity.';
	var touch = 'Makes your robot respond to touch, recognizes three conditions: touched, bumped and released.';
	var lmotor = 'Makes your robot respond to touch, recognizes three conditions: touched, bumped and released.';
	var mmotor = 'Maintains precision, while trading some power for compact size and faster responses';
	var brick = 'Serves as the control center and power station for your robot';
	$(function(){
		$('.col-md-7').click(function(){
			$('.part-title').text(part);
		});
		$('#ir').click(function(){
			$('#image').animate({"opacity": 0}, 500, function(){
				$('#image').attr('src', 'images/lego/ir.png');
			}).animate({"opacity": 1}, 'slow');
			$('#explain').animate({'opacity': 1},500, function(){
				$(this).text(ir);
			});
		});
		$('#brick').click(function(){
			$('#image').animate({"opacity": 0}, 500, function(){
				$('#image').attr('src', 'images/lego/brick.png');
			}).animate({"opacity": 1}, 'slow');
			$('#explain').animate({'opacity': 1},500, function(){
				$(this).text(brick);
			});
		});
		$('#touch').click(function(){
			$('#image').animate({"opacity": 0}, 500, function(){
				$('#image').attr('src', 'images/lego/touchsensor.png');
			}).animate({"opacity": 1}, 'slow');
			$('#explain').animate({'opacity': 1},500, function(){
				$(this).text(touch);
			});
		});
		$('#color').click(function(){
			$('#image').animate({"opacity": 0}, 500, function(){
				$('#image').attr('src', 'images/lego/colorsensor.png');
			}).animate({"opacity": 1}, 'slow');
			$('#explain').animate({'opacity': 1},500, function(){
				$(this).text(color);
			});
		});
		$('.lmotor').click(function(){
			$('#image').animate({"opacity": 0}, 500, function(){
				$('#image').attr('src', 'images/lego/largemotor.png');
			}).animate({"opacity": 1}, 'slow');
			$('#explain').animate({'opacity': 1},500, function(){
				$(this).text(lmotor);
			});
		});
		$('.mmotor').click(function(){
			$('#image').animate({"opacity": 0}, 500, function(){
				$('#image').attr('src', 'images/lego/mediummotor.png');
			}).animate({"opacity": 1}, 'slow');
			$('#explain').animate({'opacity': 1},500, function(){
				$(this).text(mmotor);
			});
		});
		
	});
</script>