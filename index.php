<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="google" />
<meta name="year" content="2014" />
<meta name="author" content="Bawyka Taras" />
<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
$(function(){
	
	var flag = true, w_w = $(window).width(), wind_w = $('.wind').width();
	
	$('.wind').css('left',w_w/2 -wind_w/2 +'px' );
	
	$(document).keypress(function(e){ 
	
		if (e.which!=13) {
					
			val = $('#search').val();
				
			$('.wind').stop().animate({
				
				opacity: 1
			
			},1000,function(){
							
				$('#search').focus();
				
				flag=false;
			
			});
			
			if (flag==true) $('#search').val(val+String.fromCharCode(e.keyCode));
			
		} else {
		
			$('.wind').stop().animate({ opacity: 0 },1000,function(){ 
			
				flag=false; 
				
				$('#search').val('');
			
			});
		
		}
		
	});

});
</script>
<style>
* { margin: 0; padding: 0; }
html,body { width: 100%; height: 100%; background: #fff; }
.wind { position: absolute; top: 10%; width: 400px; height: 200px; border-radius: 8px; background: ghostwhite; opacity: 0; z-index: 99999; box-shadow: 0 0 10px ghostwhite; }
.wind input { margin: 90px 0 0 100px; width: 200px; }
</style>
</head>
<body>
<div class="wind"><input type="text" name="search" id="search" value="" /></div>
</body>
</html>