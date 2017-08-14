
<div class="title-panel">
	<h1 class="title">JD Core Components</h1>
</div>
<p style="color: red; margin-left: 40px; font-weight: bold;">Click
any part of the robot to see what's inside!</p>
<div class="row lego-core" >
	<div class="col-md-7">
		<img src="images/jd.png"  style="height: 600px; width: 485px; position: relative" usemap="#mymap" hidefocus="true"> 
		<map name="mymap">
			<area shape="poly" class="area" id="head" coords="193,56, 229,56, 260,84, 273,125, 254,166, 209,184, 172,169, 149,127, 164,85" title="Head" onclick="getParts('Head')">
			<area shape="poly" class="area" id="controller" coords="127,225, 272,218, 280,321, 144,319, 137,226" title="Controller" onclick="getParts('Programmable Controller')">
			<area shape="poly" class="area servo" coords="98,232, 122,244, 80,325, 93,367, 63,374, 40,316" title="Servo" onclick="getParts('Servo')">
			<area shape="poly" class="area servo" coords="312,275, 290,247, 358,190, 370,147, 412,150, 400,220" title="Servo" onclick="getParts('Servo')">
			<area shape="poly" class="area servo" coords="140,334, 280,328, 276,381, 141,392" title="Servo" onclick="getParts('Servo')">
			<area shape="poly" class="area gripper" coords="53,386, 99,371, 118,423, 99,446, 69,441" title="Large Motor" onclick="getParts('Ledium Motor')">
			<area shape="poly" class="area gripper" coords="422,152, 376,148, 354,99, 364,73, 389,86, 388,122, 413,116, 425,82, 449,94, 452,117" title="Medium Motor" onclick="getParts('Medium Motor')">
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
				$('#image').attr('src', 'images/ezrobot/head.jpg');
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