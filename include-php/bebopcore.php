<div class="title-panel">

</div>
<p style="color: red; margin-left: 40px; font-weight: bold;">Click
any part of the robot to see what's inside!</p>
<div class="row lego-core" >
	<div class="col-md-7">
		<img src="images/bebop/bebopdrone.jpg"  style="height: 500px; width: 600px; position: relative" usemap="#mymap" hidefocus="true"> 
		<map name="mymap">
			<area shape="poly" class="area" id="wing" coords="172,140, 175,105, 199,82, 230,97, 253,111, 263,113, 262,148" title="Wings" onclick="getParts('Wings')">
			<area shape="poly" class="area" id="battery" coords="254,221, 268,165, 286,145, 320,148, 353,143, 378,164, 394,210, 325,224" title="Battery" onclick="getParts('Battery')">
		
			<area shape="poly" class="area camera" coords="209,271, 209,331, 236,346, 288,340, 283,282, 236,241" title="Camera" onclick="getParts('Camera')">
			
		</map>
	</div>
	<div class="col-md-5" style="height: 700px;">	
			<h3 style="height: 30px; font-size: 1.5em; font-weight: bold; color: blue;" class="part-title"></h3> 
		<div style="margin-top: 10px;">
			<img id="image" style=" opacity: 0; height: 200px; width: 300px;">
		</div>
			<div id="explain" style="font-size: 1.3em; width: 100%; margin-top: 20px;"></div>
	</div>
</div>


<script>
	var part;
	function getParts(s){
		part = s;
	}			
	var wing = 'It reaches 37.28 mph horizontally and 13.05 mph vertically without affecting image quality. It gets up to top speed in 14 seconds and resists headwinds of up to 37.28 mph. It also boasts a record braking time, halting completely in just over four seconds.';
	var battery = 'Rechargeable 2,700 mAh high-density Lithium-ion polymer (11.1 V). Charging time: approximately 55 minutes. Allow the Bebop 2 will stay in the air for up to 25 minutes.';
	var camera = 'As a flying camera, the Parrot Bebop 2 films in 1080p full HD. Even in low light, pictures are incredibly sharp thanks to its wide-angle 14 megapixel lens. Offering horizontal and vertical 180° pictures, it is easy to take aerial photos without losing quality. For professional results, simply choose RAW or DNG from the three formats available.';

	$(function(){
		$('.col-md-7').click(function(){
			$('.part-title').text(part);
		});
		$('#wing').click(function(){
			$('#image').animate({"opacity": 0}, 500, function(){
				$('#image').attr('src', 'images/bebop/wings.png');
			}).animate({"opacity": 1}, 'slow');
			$('#explain').animate({'opacity': 1},500, function(){
				$(this).text(wing);
			});
		});
		$('#battery').click(function(){
			$('#image').animate({"opacity": 0}, 500, function(){
				$('#image').attr('src', 'images/bebop/battery.jpg').attr('height', '600px');
			}).animate({"opacity": 1}, 'slow');
			$('#explain').animate({'opacity': 1},500, function(){
				$(this).text(battery);
			});
		});
		$('.camera').click(function(){
			$('#image').animate({"opacity": 0}, 500, function(){
				$('#image').attr('src', 'images/bebop/lens.jpg');
			}).animate({"opacity": 1}, 'slow');
			$('#explain').animate({'opacity': 1},500, function(){
				$(this).text(camera);
			});
		});

		
	});
</script>