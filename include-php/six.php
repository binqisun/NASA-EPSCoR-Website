<div class="title-panel">
	<h1 class="title">SIX Core Components</h1>
</div>
<p style="color: red; margin-left: 40px; font-weight: bold;">Click
any part of the robot to see what's inside!</p>
<div class="row lego-core" >
	<div class="col-md-7">
		<img src="images/ezrobot/six.jpg"  style="height: 500px; width: 500px; position: relative" usemap="#mymap" hidefocus="true"> 
		<map name="mymap">
			<area shape="poly" class="area" id="head" coords="204,140, 205,105, 229,82, 260,97, 263,111, 273,113, 282,148" title="Head" onclick="getParts('Head')">
			<area shape="poly" class="area" id="controller" coords="177,221, 187,165, 206,145, 240,148, 273,143, 298,164, 314,210, 245,224" title="Controller" onclick="getParts('Programmable Controller')">
			<area shape="poly" class="area servo" coords="168,213, 157,231, 177,240, 175,293, 121,300, 108,224" title="Servo" onclick="getParts('Servo')">
			<area shape="poly" class="area servo" coords="239,241, 239,301, 266,316, 318,310,313,282, 266,241" title="Servo" onclick="getParts('Servo')">
			<area shape="poly" class="area servo" coords="327,280, 476,281, 473,251, 422,246, 424,231, 380,217, 324,221" title="Servo" onclick="getParts('Servo')">
		</map>
	</div>
	<div class="col-md-5" style="height: 700px;">	
			<h3 style="height: 30px; font-size: 1.5em; font-weight: bold; color: blue;" class="part-title"></h3> 
		<div style="margin-top: 10px;">
			<img id="image" style=" opacity: 0; height: 200px; width: 300px;">
		</div>
			<div id="explain" style="font-size: 1.3em; width: 100%"></div>
	</div>
</div>


<script>
	var part;
	function getParts(s){
		part = s;
	}			
	var head = 'The head includes a built in 640x480 resolution camera for vision tracking with ez-builder.';
	var controller = 'The EZ-B V4 WiFi Robot Controller is the brain of your EZ-Robot. With the electronics protected by a stylish plastic shell, the EZ-B v4 clips into your EZ-Robot Revolution chassis or custom robot';
	var servo = 'This is a digital heavy duty 15 kg/cm servo with a Clip Play lever that rotates 180 degrees. The metal internals can withstand a high load.';
	var gripper = 'The compact grippers are powered by strong metal geared servo motors, allowing your robot to interact with soft, light objects.';
	var foot = 'Simply attach this foot to any female clip play connector. It includes two Heavy Duty Servos which provide knee and ankle control';
	$(function(){
		$('.col-md-7').click(function(){
			$('.part-title').text(part);
		});
		$('#head').click(function(){
			$('#image').animate({"opacity": 0}, 500, function(){
				$('#image').attr('src', 'images/ezrobot/header.jpg');
			}).animate({"opacity": 1}, 'slow');
			$('#explain').animate({'opacity': 1},500, function(){
				$(this).text(head);
			});
		});
		$('#controller').click(function(){
			$('#image').animate({"opacity": 0}, 500, function(){
				$('#image').attr('src', 'images/ezrobot/controller.jpg').attr('height', '600px');
			}).animate({"opacity": 1}, 'slow');
			$('#explain').animate({'opacity': 1},500, function(){
				$(this).text(controller);
			});
		});
		$('.servo').click(function(){
			$('#image').animate({"opacity": 0}, 500, function(){
				$('#image').attr('src', 'images/ezrobot/servo.jpg');
			}).animate({"opacity": 1}, 'slow');
			$('#explain').animate({'opacity': 1},500, function(){
				$(this).text(servo);
			});
		});
		$('.gripper').click(function(){
			$('#image').animate({"opacity": 0}, 500, function(){
				$('#image').attr('src', 'images/ezrobot/gripper.jpg');
			}).animate({"opacity": 1}, 'slow');
			$('#explain').animate({'opacity': 1},500, function(){
				$(this).text(gripper);
			});
		});
		$('.foot').click(function(){
			$('#image').animate({"opacity": 0}, 500, function(){
				$('#image').attr('src', 'images/ezrobot/foot.jpg');
			}).animate({"opacity": 1}, 'slow');
			$('#explain').animate({'opacity': 1},500, function(){
				$(this).text(foot);
			});
		});
		
	});
</script>