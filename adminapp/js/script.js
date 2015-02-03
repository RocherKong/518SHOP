// JavaScript Document
$(function(){
	//loadpic();
	
	webcam.set_swf_url('js/webcam.swf');
	webcam.set_api_url('index.php?r=site/upload');	// The upload script
	webcam.set_quality(80);				// JPEG Photo Quality
	webcam.set_shutter_sound(true, 'js/shutter.mp3');

	// Generating the embed code and adding it to the page:	
	var cam = $("#webcam");
	cam.html(
		webcam.get_html(cam.width(), cam.height())
	);
	
	var camera = $("#camera");
	var shown = false;
	
	$("#btn_shoot").click(function(){
		webcam.freeze();
		$("#shoot").hide();
		$("#upload").show();
		return false;
	});
	
	$('#btn_cancel').click(function(){
		webcam.reset();
		$("#shoot").show();
		$("#upload").hide();
		return false;
	});
	
	$('#btn_upload').click(function(){
		webcam.upload();
		webcam.reset();
		$("#shoot").show();
		$("#upload").hide();
		return false;
	});
	
	
	webcam.set_hook('onComplete', function(msg){
		
		msg = $.parseJSON(msg);
		
		if(msg.error){
			alert(msg.message);
		}
		else {
			// Adding it to the page;
			var pic = '<a rel="group" href="uploads/'+msg.filename+'"><img src="uploads/small_'+msg.filename+'"></a>';
			$("#photos").prepend(pic);
			initFancyBox();
		}
	});
	
	webcam.set_hook('onError',function(e){
		cam.html(e);
	});
	
	
	function initFancyBox(){
		$("a[rel=group]").fancybox({
		    'transitionIn'	: 'elastic',
		    'transitionOut'	: 'elastic',
		    'cyclic'        : true
	    });
	}
});