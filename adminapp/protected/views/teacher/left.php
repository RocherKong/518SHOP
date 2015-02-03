<link rel="stylesheet" type="text/css" href="css/teacher_left.css"/>
<div class="content_left">
	<div class="content_left_head">
		<img class="teacher_left_img" src="images/imguser.jpg"/>
		<div class="div_teacher_left_img">修改头像</div>
	</div>
	<div>
		<ul class="expmenu">
		<li>
			<div class="header">
				<span class="label" >个人设置</span>
				<span class="arrow up"></span>
			</div>
			<span class="no">
			<ul class="menu" style="display:block;">
				<li><a href="index.php?r=teacher/information">资料完善</a></li>
				<li><a href="index.php?r=teacher/index">头像修改</a></li>
            	<li><a href="javascript:void(0)">信息修改</a></li>
            	<li><a href="javascript:void(0)">短信通知</a></li>
			</ul>
		</span>
		</li>
		<li>
			<div class="header">
				<span class="label">履历管理</span>
				<span class="arrow down"></span>
			</div>
			<ul class="menu">
				<li>履历管理</li>
			</ul>
		</li>
	</ul>
	</div>
</div>
<script type="text/javascript">
$(function(){
	$(".teacher_left_img").mouseover(function(){
		$(".div_teacher_left_img").css('display','block');
	});
	$(".teacher_left_img").mouseleave(function(){
		$(".div_teacher_left_img").css('display','none');
	});
	$("ul.expmenu li > div.header").click(function(){
												   
		var arrow = $(this).find("span.arrow");
	
		if(arrow.hasClass("up")){
			arrow.removeClass("up");
			arrow.addClass("down");
		}else if(arrow.hasClass("down")){
			arrow.removeClass("down");
			arrow.addClass("up");
		}
	
		$(this).parent().find("ul.menu").slideToggle();
		
	});
});
</script>