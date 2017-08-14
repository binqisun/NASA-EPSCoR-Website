<div>
<p style="color: red; margin-left: 40px; font-weight: bold;">Click
one type of EZ-ROBOT to learn</p>
	<div style="text-align: center;">

		<img data-slide="next" href="#interactive-tool" class="img-circle jd" src="images/jd.jpg">
		<br/>
		<img data-slide="next" href="#interactive-tool" class="img-circle roli" src="images/roli.jpg">

		<img data-slide="next" href="#interactive-tool" class="img-circle six" src="images/six.jpg">
	</div>
</div>

<script>
	var ez;
	$(function() {

		$('.jd').click(function(){
			ez = "jd";
			$('#div4').load('include-php/jd.php');
		});
		$('.roli').click(function(){
			ez = "roli";
			$('#div4').load('include-php/roli.php');
		});
		$('.six').click(function(){
			ez = "six";
			$('#div4').load('include-php/six.php');
			
		});
	});
</script>