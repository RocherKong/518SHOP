//������Զ��л�Ч��js
var slideTxt={
	thisBox:$('.Promotions .pbox'),//�������ʽ��Ҫ������������һ��
	btnLeft:$('.Promotions a.leftA'),
	btnRight:$('.Promotions a.rightA'),
	thisEle:$('.Promotions .pbox ul'),
	init:function(){
		slideTxt.thisBox.width(slideTxt.thisEle.length*203);//�����ȵ����������Ŀ�ȣ��������Ƴ�ȥ�Ŀ��
		slideTxt.slideAuto();
		slideTxt.btnLeft.click(slideTxt.slideLeft).hover(slideTxt.slideStop,slideTxt.slideAuto);
		slideTxt.btnRight.click(slideTxt.slideRight).hover(slideTxt.slideStop,slideTxt.slideAuto);
		slideTxt.thisBox.hover(slideTxt.slideStop,slideTxt.slideAuto);
		},
	slideLeft:function(){
		slideTxt.btnLeft.unbind('click',slideTxt.slideLeft);
		slideTxt.thisBox.find('ul:last').prependTo(slideTxt.thisBox);
		slideTxt.thisBox.css('marginLeft',-203);//�����ȵ����������Ŀ�ȣ��������Ƴ�ȥ�Ŀ��
		slideTxt.thisBox.animate({'marginLeft':0},203,function(){
			slideTxt.btnLeft.bind('click',slideTxt.slideLeft);
			});
		return false;
		},
	slideRight:function(){
		slideTxt.btnRight.unbind('click',slideTxt.slideRight);
		slideTxt.thisBox.animate({'marginLeft':-203},203,function(){
			slideTxt.thisBox.css('marginLeft','0');
			slideTxt.thisBox.find('ul:first').appendTo(slideTxt.thisBox);
			slideTxt.btnRight.bind('click',slideTxt.slideRight);
			});
		return false;
		},
	slideAuto:function(){
		slideTxt.intervalId=window.setInterval(slideTxt.slideRight,5000);
		},
	slideStop:function(){
		window.clearInterval(slideTxt.intervalId);
		}
	}
$(function(){
	slideTxt.init();

});
