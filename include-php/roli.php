<div class="title-panel">
	<h1 class="title">ROLI Core Components</h1>
</div>
<p style="color: red; margin-left: 40px; font-weight: bold;">Click
any part of the robot to see what's inside!</p>
<div class="row lego-core" >
	<div class="col-md-7">
		<img src="images/ezrobot/roli.png"  style="height: 480px; width: 480px; position: relative" usemap="#mymap" hidefocus="true"> 
		<map name="mymap">
			<area shape="poly" class="area" id="head" coords="191,95 190,58, 211,46, 231,59, 231,94" title="Head" onclick="getParts('Head')">
			<area shape="poly" class="area" id="controller" coords="231,275, 153,265, 185,214, 254,211, 258,196, 313,209, 324,245, " title="Controller" onclick="getParts('Programmable Controller')">
			<area shape="poly" class="area servo" coords="197,208, 202,106, 228,103, 240,206" title="Servo" onclick="getParts('Servo')">
			<area shape="poly" class="area servo" coords="140,247, 84,211, 86,189, 163,206" title="Servo" onclick="getParts('Servo')">
			<area shape="poly" class="area servo" coords="357,252, 361,273, 241,324, 205,315, 204,287, 331,252" title="Servo" onclick="getParts('Servo')">
			<area shape="poly" class="area gripper" coords="72,218, 19,217, 18,171, 70,173" title="Large Motor" onclick="getParts('Ledium Motor')">
			<area shape="poly" class="area gripper" coords="199,277, 195,331, 130,325, 136,272" title="Medium Motor" onclick="getParts('Medium Motor')">
			<area shape="poly" class="area foot" coords="145,411, 197,410, 204,540, 123,543, 96,508, 103,453, 144,450" title="Medium Motor" onclick="getParts('Medium Motor')">
			<area shape="poly" class="area foot" coords="217,397, 275,397, 270,414, 292,415, 318,489, 250,501, 206,454" title="Medium Motor" onclick="getParts('Medium Motor')">

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