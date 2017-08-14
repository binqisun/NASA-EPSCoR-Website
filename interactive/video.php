<div class="title-panel">
	<h1 class="video-title"></h1>
</div>
	<p style="text-align: center;">
		<iframe id="video-content" allowfullscreen="" frameborder="0" height="472" width="840">
		</iframe>
	</p>
				
<script>
	$(function(){
		$('#left').click(function(){
			$('#video-content').attr('src', '');
		});

		
		$('.videos-list a, .features-link').click(function() {
			var text = $(event.target).text();
			$('.video-title').text(text).delay(2000);
			if(video=='bioloid1')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/yB-Nxj68XZA");
			else if(video=='bioloid2')
				$('#video-content').delay(2000).attr('src', "http://www.youtube.com/embed/W6CUzogyjUI");
			else if(video=='bioloid3')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/2Khk4oGbOvY");
			else if(video=='bioloid4')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/ODv-VUOFrtg?list=PL669E11FDEAA45E28");
			else if(video=='bioloid6')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/sk_U7kWiaNw?list=PL39C75C18961FDA85");
			else if(video=='bioloid5')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/hMmHY-xmBk8?list=PL168F489AAF7E7D86");
			
			
			else if(video=='ez-robot1')
				$('#video-content').delay(2000).attr('src', "http://www.youtube.com/embed/KU1jvmQowzs");
			else if(video=='ez-robot2')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/-9fmHgz3BPw");
			else if(video=='ez-robot3')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/dliFcwWrzBk");
			else if(video=='ez-robot4')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/6-bm6kByvO4");
			else if(video=='ez-robot5')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/rTmcc8EjnB4");
			else if(video=='ez-robot6')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/iiwKFL50WrM");			
			
			else if(video=='arduino2')
				$('#video-content').delay(2000).attr('src', "http://www.youtube.com/embed/videoseries?list=PLDeyHyJziBYEIa7GPxD6ZWgHI-lXPGXWC");
			else if(video=='arduino3')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/L5cmJo9BEnw");
			else if(video=='arduino4')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/MWWoEul9Qsk");
			else if(video=='arduino5')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/Tpe6ubhmzrI");
			else if(video=='arduino6')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/kLd_JyvKV4Y");
			else if(video=='arduino7')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/Ub_oYlCo3i0");
			else if(video=='arduino8')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/kV7FKL9FtwM");
			else if(video=='arduino9')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/X1BCvjxIDHM");
			else if(video=='arduino10')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/y-_Pkw_GQ-c");
			else if(video=='arduino1')
				$('#video-content').delay(2000).attr('src', "http://www.youtube.com/embed/videoseries?list=PLYutciIGBqC34bfijBdYch49oyU-B_ttH");
			
			
			
			else if(video=='lego1')
				$('#video-content').delay(2000).attr('src', "http://www.youtube.com/embed/videoseries?list=PLJ9p4vPU79w6yjG7ndyn2xp-UMkSGFx9A");
			else if(video=='lego2')
				$('#video-content').delay(2000).attr('src', "http://www.youtube.com/embed/9510SUU5cdU");
			else if(video=='lego3')
				$('#video-content').delay(2000).attr('src', "http://www.lego.com/en-US/mediaplayer/video/9a6cf21750154fbf9f11ef342aca1369?autoplay=false&instanceName=embeddedvideodf21101071404bfcb02b5ce82ecd4794&activateLargeScreen=false&showControls=true&forceNativeOnIPad=false");
			else if(video=='lego4')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/qzOza1fO9_8");
			else if(video=='lego5')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/NdON53fbd2U");
			else if(video=='lego6')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/cE9Nv7ZrlGg")			

			
			else if(video=='bebop1')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/2qdW7ramMr4");
			else if(video=='bebop2')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/ysM5B9cduJw");
			else if(video=='bebop3')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/-YEk540NI_g");
			else if(video=='bebop4')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/4Z6jmv4LH5Y");
			else if(video=='bebop5')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/vWnX-B2p_MU");

			else if(video=='mb1')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/fG__7Ltvyt4");
			else if(video=='mb2')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/7YFyreYWnTg");
			else if(video=='mb3')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/4WdDitRFxC0");
			else if(video=='mb4')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/yx6JtQVpcUw");
			else if(video=='mb5')
				$('#video-content').delay(2000).attr('src', "https://www.youtube.com/embed/2FbCy6JiELM");
		});
});

</script>