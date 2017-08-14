<div class="title-panel">
	<div class="title">
	</div>
</div>
<div class="videos-list-panel" >
	<div class="panel panel-primary">
		<div class="panel-heading">
		<h3 class="panel-title">Learning Materials</h3>
		</div>
	<div class="videos-list">
		<ul class="ultool arduino hide">
			<li class="well-sm"><a target="_blank" href="interactive/learning materials/2014_scouts_canada_-_robotics_guide_using_dfrobotshop_rover.pdf"> 2014 Scouts Canada Robotics Guide Using Dfrobotshop Rover</a></li>
			<li class="well-sm"><a target="_blank" href="interactive/learning materials/cds-photocell-datasheet.pdf">CDS Photocell Datasheet</a></li>
			<li class="well-sm"><a target="_blank" href="interactive/learning materials/dfrobotshop_rover_schematic_v2.pdf">Dfrobotshop Rover Schematic v2</a></li>
			<li class="well-sm"><a target="_blank" href="interactive/learning materials/dfrobotshop-rover-bracket-v2.pdf">Dfrobotshop Rover Bracket v2</a></li>
			<li class="well-sm"><a target="_blank" href="interactive/learning materials/dfrobotshop-rover-schematic.pdf">Dfrobotshop Rover Schematic</a></li>
			<li class="well-sm"><a target="_blank" href="interactive/learning materials/dfrobotshop-rover-user-guide.pdf">Dfrobotshop Rover User Guide</a></li>
		</ul>
		<ul class="ultool bioloid hide">
			<li class="well-sm"><a target="_blank" href="http://support.robotis.com/en/techsupport_eng.htm#product/bioloid/premiumkit/bioloid_prem_start.htm/">Bioloid Premium Robot Kit Official Documentation</a></li>
			<li class="well-sm"><a target="_blank" href="interactive/learning materials/bioloid/BIO_PRM_Humanoid_ASM.pdf">Bioloid Assembly Manual</a></li>
			<li class="well-sm"><a target="_blank" href="interactive/learning materials/bioloid/Bioloid User's Guide.pdf">Bioloid User's Guide</a></li>

		</ul>
		<ul class="ultool lego hide">
			<li class="well-sm"><a target="_blank" href="interactive/learning materials/lego/EV3RSTORM.pdf"> EV3RSTORM Build Instruction</a></li>
			<li class="well-sm"><a target="_blank" href="interactive/learning materials/lego/LEGO EV3 MINDSTORMS USER MANUAL.pdf"> LEGO EV3 MINDSTORMS USER MANUAL</a></li>
			<li class="well-sm"><a target="_blank" href="interactive/learning materials/lego/EV3 teachers guideWEB.pdf"> Introduction to Programming EV3</a></li>

			</ul>
		<ul class="ultool ezrobot hide">
			<li class="well-sm"><a target="_blank" href="http://www.ez-robot.com/Tutorials/">EZ-ROBOT Learning Tutorials</a></li>
			<li class="well-sm"><a target="_blank" href="interactive/learning materials/ezrobot/EZ-Script-Help.pdf">EZ-ROBOT Script Help</a></li>
		</ul>
		
		<ul class="ultool bebop hide">
			<li class="well-sm"><a target="_blank" href="https://github.com/Parrot-Developers/Samples">Bebop 2 Parrot Drone Samples</a></li>
			<li class="well-sm"><a target="_blank" href="http://developer.parrot.com/"> Parrot Programming</a></li>
			<li class="well-sm"><a target="_blank" href="interactive/learning materials/bebop/Bebop-drone_User-guide_UK.pdf">Bebop Drone User Guide</a></li>
		</ul>
		
		
		<ul class="ultool makeblock hide">
			<li class="well-sm"><a target="_blank" href="http://learn.makeblock.com/en/getting-started-programming-with-mblock/">MakeBlock Programming Tutorial</a></li>
			<li class="well-sm"><a target="_blank" href="interactive/learning materials/makeblock/MakeblockRoverInstructionManual.docx">MakeBlock Starter Kit User Manual</a></li>
		</ul>
	</div>
	</div>
</div>


<script>
	$(function(){
		$('.title').append(robot + ' Learning Materials');

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