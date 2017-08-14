<div class="title-panel">

</div>
<p style="color: red; margin-left: 40px; font-weight: bold;">Click
any part of the robot to see what's inside!</p>
<div class="row lego-core" >
	<div class="col-md-7">
		<img src="images/makeblock/makeblockstarter.jpg"  style="height: 500px; width: 500px; position: relative" usemap="#mymap" hidefocus="true"> 
		<map name="mymap">
			<area shape="poly" class="area" id="sensor" coords="74,170, 75,135, 99,112, 130,127, 133,141, 143,143, 152,178" title="Me Ultrasonic Sensor" onclick="getParts('Me Ultrasonic Sensor')">
			<area shape="poly" class="area" id="controller" coords="143,271, 187,215, 206,195, 240,198, 273,193, 298,214, 314,250, 245,254" title="Me Orion" onclick="getParts('Makeblock Orion')">

			<area shape="poly" class="area servo" coords="239,241, 239,301, 266,316, 318,310,313,282, 266,241" title="Me Line Follower" onclick="getParts('Me Line Follower')">


		</map>
	</div>
	<div class="col-md-5" style="height: 700px;">	
			<h3 style="height: 30px; font-size: 1.5em; font-weight: bold; color: blue;" class="part-title"></h3> 
		<div style="margin-top: 10px;">
			<img id="image" style=" opacity: 0; height: 300px; width: 300px;">
		</div>
			<div id="explain" style="font-size: 1.3em; width: 100%"></div>
	</div>
</div>


<script>
	var part;
	function getParts(s){
		part = s;
	}			
	var sensor = 'Me Ultrasonic Sensor is an electronic module to measuring distance in the range of 3cm to 400cm. It can be used for the projects to help the handcart avoid obstacles or other relevant distance-measuring and obstacle avoidance projects. Its yellow ID means that it has a single-digital port and needs to be connected to the port with yellow ID on Makeblock Orion.';
	var controller = 'Makeblock Orion is an easy-to-use mainboard based on Arduino Uno. It provides eight RJ25 ports to connect to all the other Me series modules with color-labels. It supports most Arduino programming tools, and provides the GUI programming tool (mBlock).';
	var servo = 'Me Line Follower V2.2 module is designed for the line following robotics. It has two sensors on the module and each sensor contains two parts. It can output digital signal to Arduino so the robot can reliably follow a black line on a white background, or vice versa.';

	$(function(){
		$('.col-md-7').click(function(){
			$('.part-title').text(part);
		});
		$('#sensor').click(function(){
			$('#image').animate({"opacity": 0}, 500, function(){
				$('#image').attr('src', 'images/makeblock/mesensor.jpg');
			}).animate({"opacity": 1}, 'slow');
			$('#explain').animate({'opacity': 1},500, function(){
				$(this).text(sensor);
			});
		});
		$('#controller').click(function(){
			$('#image').animate({"opacity": 0}, 500, function(){
				$('#image').attr('src', 'images/makeblock/meorion.jpg').attr('height', '600px');
			}).animate({"opacity": 1}, 'slow');
			$('#explain').animate({'opacity': 1},500, function(){
				$(this).text(controller);
			});
		});
		$('.servo').click(function(){
			$('#image').animate({"opacity": 0}, 500, function(){
				$('#image').attr('src', 'images/makeblock/meline.jpg');
			}).animate({"opacity": 1}, 'slow');
			$('#explain').animate({'opacity': 1},500, function(){
				$(this).text(servo);
			});
		});

		
	});
</script>