<div class="title-panel">
	<h1 class="title"></h1>
</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
		<h3 class="panel-title">Website</h3>
		</div>
		<ul class="ultool hide arduino">		
			<li class="well-sm">
			<a href="http://arduino.cc/en/main/software">Arduino IDE download page</a>
			</li>
			<li class="well-sm">
			<a href="http://arduino.cc/en/Reference/HomePage">Reference page for Arduino</a>
			</li>
			<li class="well-sm">
			<a href="http://arduino.cc/en/Reference/Libraries">List of libraries for Arduino</a>
			</li>
		</ul>
		<ul class="ultool hide bioloid">		
			<li class="well-sm">
			<a href="http://en.robotis.com/index/product.php?cate_code=121010"> Bioloid Premium Kit Official Website</a>
			</li>
			<li class="well-sm">
			<a href="http://en.robotis.com/BlueAD/board.php?bbs_id=downloads&mode=view&bbs_no=1132559&page=1&key=&keyword=&sort=&scate="> RoboPlus v1.1.3.0 (July 8, 2014)</a>
			</li>
			<li class="well-sm">
			<a href="http://en.robotis.com/BlueAD/board.php?bbs_id=tutorial&mode=view&bbs_no=1151881&page=1&key=&keyword=&sort=&scate=ROBOTIS+PREMIUM"> Bioloid Premium Kit Tutorials</a>
			</li>
		</ul>
		<ul class="ultool hide lego">		
			<li class="well-sm">
			<a href="http://www.lego.com/en-us/mindstorms/?domainredir=mindstorms.lego.com"> Lego Mindstorms EV3 Official Website</a>
			</li>
			<li class="well-sm">
			<a href="http://www.lego.com/en-us/mindstorms/videos"> Lego Mindstorms EV3 Fun Tutorials</a>
			</li>
			<li class="well-sm">
			<a href="https://education.lego.com/en-us/lesi/middle-school/mindstorms-education-ev3?domainredir=www.legoeducation.us"> LEGO® MINDSTORMS® Education EV3</a>
			</li>
		</ul>
		<ul class="ultool hide ezrobot">		
			<li class="well-sm">
			<a href="http://www.ez-robot.com/"> EZ-Robot Official Website</a>
			</li>

		</ul>
		
		<ul class="ultool hide bebop">		
			<li class="well-sm">
			<a href="https://www.parrot.com/us/drones/parrot-bebop-2#parrot-bebop-2"> Parrot BEBOP 2 Official Website</a>
			</li>
			<li class="well-sm">
			<a href="http://www.tomsguide.com/us/parrot-bebop-2-drone,review-3259.html"> Parrot Bebop 2 Drone Review</a>
			</li>
			<li class="well-sm">
			<a href="http://developer.parrot.com/"> Parrot for Developers</a>
			</li>
			
			<li class="well-sm">
			<a href="linkedWebsites/bebop/index.html"> Bebop Sports Drone Project</a>
			</li>
		</ul>
		
		<ul class="ultool hide makeblock">		
			<li class="well-sm">
			<a href="http://www.makeblock.com/starter-robot-kit/">MakeBlock Starter Robot Kit Official Website</a>
			</li>
			<li class="well-sm">
			<a href="http://letsmakerobots.com/node/40346"> Review: Makeblock Robot Starter Kit</a>
			</li>
			<li class="well-sm">
			<a href="http://www.instructables.com/id/How-to-make-a-Makeblock-Small-Tank-with-Ultrasonic/"> How to make a Makeblock Small Tank with Ultrasonic Sensor</a>
			</li>
			<li class="well-sm">
			<a href="http://downloads.monoprice.com/files/manuals/13959_Manual_150228.pdf"> Starter Robot Kit Guide</a>
			</li>

		</ul>
	</div>

<script>
	$('.title').append(robot + ' Resources');
	$(function(){
		if(robot == "Arduino Rover"){
			$('.arduino').addClass('show');
		}
		else if(robot=='Bioloid Premium Kit'){
			$('.bioloid').addClass('show');
		}
		else if(robot=='EZ-ROBOT')
			$('.ezrobot').addClass('show');
		else if(robot=='LEGO Mindstorms EV3')
			$('.lego').addClass('show');
		else if(robot=='Bebop Drone')
			$('.bebop').addClass('show');
		else if(robot=='MakeBlock')
			$('.makeblock').addClass('show');
		
	});

</script>