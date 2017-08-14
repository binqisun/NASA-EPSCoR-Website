<div class="title-panel">
	<h1 class="title"></h1>
</div>
<div >
	<div class="arduino-core hide">
		<div class="features">
			<h2>Features<h2>
			<ul style="list-style-type: disc; margin-left: 40px; padding-top: 20px;">
				<li>Arduino compatible and shield stackable</li>
				<li>Based on ATMEGA328 surface mount chip (Uno design) and L298P H Bridge</li>
				<li>Incorporates dual H-bridge for bi-directional motor control (digital pins 5, 6, 7 and 8)</li>
				<li>Voltage regulator included (connected to battery input and 3.5mm barrel connector)</li>
				<li>Two XBee slots with breakout pins (switch selects which is connected to Tx/Rx) - headers sold separately</li>
				<li>Solder prototyping area</li>
				<li>Easy connection to DFRobot Bluetooth and APC220 wireless modules</li>
				<li>&quot;Universal connection point&quot; at the front of the robot (see user guide for compatibility)</li>
				<li>6x Blue LEDs around the board for effect (selectable via jumper LED_SEL)</li>
				<li>In-system programming via ICSP</li>
				<li>4x LEDs to indicate motor direction</li>
			</ul>
		</div>
		<div class="arduino-core-image">
			<div class="moving-rover" style="position: absolute; bottom: -10px; right: -50px; opacity: 0">
				<img src="images/rover/rover_side.png" style="width: 200px; height:60px;">
				<h3 >Video: <a class="features-link" data-slide="next" href="#interactive-tool" onclick="getVideos('arduino3')">Arduino Rover PCB V2 Features</a></h3>
			</div>
		</div>
	</div>
	
	<div class="bioloid-core hide" style="height: 1000px;">
	</div>
	
	<div class="ezrobot-core hide">
	
	</div>
	
	<div class="lego-core hide" >
	
	</div>
	
	<div class="makeblock-core hide" >
	
	</div>
	
	<div class="bebop-core hide" >
	
	</div>
	
	
</div>


<script>
	$('.title').append(robot + ' Core Componets');
	function getVideos(s){
		 video = s;
	}
	
	$(function(){		
		if(robot=="Arduino Rover"){
			$('.arduino-core').addClass('show');
			$('#div4').load('interactive/video.php');
			$('.arduino-core-image').animate({'transform': 'translateX(500px) rotate(360deg) scale(1.3,1.3)'}, 3000, function(){
				$('.moving-rover').animate({'transform': 'translateX(-175px)', 'opacity': 1}, 3000);
			});
		}
		else if(robot=='Bioloid Premium Kit'){
			$('.bioloid-core').load('include-php/robot-2.php');
			$('.bioloid-core').addClass('show');
		}
		else if(robot=='LEGO Mindstorms EV3'){
			$('.lego-core').load('include-php/robot-3.php');
			$('.lego-core').addClass('show');
		}
		else if(robot=='EZ-ROBOT'){
			$('.ezrobot-core').load('include-php/ezrobots.php');
			$('.ezrobot-core').addClass('show');
		}
		else if(robot=='MakeBlock'){
			$('.makeblock-core').load('include-php/makeblockcore.php');
			$('.makeblock-core').addClass('show');
		}
		else if(robot=='Bebop Drone'){
			$('.bebop-core').load('include-php/bebopcore.php');
			$('.bebop-core').addClass('show');
		}
	});
	

</script>