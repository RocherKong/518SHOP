<link rel="stylesheet" type="text/css" href="/css/iindex.css"/>
<div id="container">
  <div class="layout">
    <div class="container_left">
    	<h3>所有商品分类</h3>
        <ul>
            <li><b><a href="#">潮流服饰</a></b> -潮流服饰</li>
            <li><b><a href="#">精品鞋包</a></b> -精品鞋包</li>
            <li><b><a href="#">美容护肤</a></b> -美容护肤</li>
            <li><b><a href="#">珠宝饰品</a></b> -珠宝饰品</li>
            <li><b><a href="#">运动户外</a></b> -运动户外</li>
            <li><b><a href="#">手机数码</a></b> -手机数码</li>
            <li><b><a href="#">居家生活</a></b> -居家生活</li>
            <li><b><a href="#">家电家装</a></b> -家电家装</li>
            <li><b><a href="#">母婴用品</a></b> -母婴用品</li>
       		<span><li><b><a href="#">食品保健</a></b> -食品保健</li></span>
        </ul>
    </div>
    <div class="container_mid">
    
       <div class="col_center left">
     
     <!--滚动焦点广告-->
     <div id="picBox_top">
	   <ul id="show_pic_top" style="top:0;">
    	 <li><img src="/images/slide_ad01.jpg" alt="" title="" /></li>
         <li><img src="/images/slide_ad02.jpg" alt="" title="" /></li>
         <li><img src="/images/slide_ad03.jpg" alt="" title="" /></li>
         <li><img src="/images/slide_ad04.jpg" alt="" title="" /></li>
       </ul>
       <ul id="icon_num_top">
    	 <li class="active">乐途新店开业4折起</li>
         <li>蓝弦J9蓝牙耳机</li>
         <li>Kenzo花样年华</li>
         <li>Levis polo女装</li>
       </ul>
     </div>
     <script type="text/javascript">
	 /**焦点广告js*/
		var glide =new function(){
			function $id(id){return document.getElementById(id);};
			this.layerGlide=function(auto,oEventCont,oSlider,sSingleSize,second,fSpeed,point){
				var oSubLi = $id(oEventCont).getElementsByTagName('li');
				var interval,timeout,oslideRange;
				var time=1; 
				var speed = fSpeed 
				var sum = oSubLi.length;
				var a=0;
				var delay=second * 1000; 
				var setValLeft=function(s){
					return function(){
						oslideRange = Math.abs(parseInt($id(oSlider).style[point]));	
						$id(oSlider).style[point] =-Math.floor(oslideRange+(parseInt(s*sSingleSize) - oslideRange)*speed) +'px';		
						if(oslideRange==[(sSingleSize * s)]){
							clearInterval(interval);
							a=s;
						}
					}
				};
				var setValRight=function(s){
					return function(){	 	
						oslideRange = Math.abs(parseInt($id(oSlider).style[point]));							
						$id(oSlider).style[point] =-Math.ceil(oslideRange+(parseInt(s*sSingleSize) - oslideRange)*speed) +'px';
						if(oslideRange==[(sSingleSize * s)]){
							clearInterval(interval);
							a=s;
						}
					}
				}
				
				function autoGlide(){
					for(var c=0;c<sum;c++){oSubLi[c].className='';};
					clearTimeout(interval);
					if(a==(parseInt(sum)-1)){
						for(var c=0;c<sum;c++){oSubLi[c].className='';};
						a=0;
						oSubLi[a].className="active";
						interval = setInterval(setValLeft(a),time);
						timeout = setTimeout(autoGlide,delay);
					}else{
						a++;
						oSubLi[a].className="active";
						interval = setInterval(setValRight(a),time);	
						timeout = setTimeout(autoGlide,delay);
					}
				}
			
				if(auto){timeout = setTimeout(autoGlide,delay);};
				for(var i=0;i<sum;i++){	
					oSubLi[i].onmouseover = (function(i){
						return function(){
							for(var c=0;c<sum;c++){oSubLi[c].className='';};
							clearTimeout(timeout);
							clearInterval(interval);
							oSubLi[i].className="active";
							if(Math.abs(parseInt($id(oSlider).style[point]))>[(sSingleSize * i)]){
								interval = setInterval(setValLeft(i),time);
								this.onmouseout=function(){if(auto){timeout = setTimeout(autoGlide,delay);};};
							}else if(Math.abs(parseInt($id(oSlider).style[point]))<[(sSingleSize * i)]){
									interval = setInterval(setValRight(i),time);
								this.onmouseout=function(){if(auto){timeout = setTimeout(autoGlide,delay);};};
							}
						}
					})(i)			
				}
			}
		}
		glide.layerGlide(true,'icon_num_top','show_pic_top',231,2,0.1,'top');
		/**参数设置
		 *glide.layerGlide((oEventCont,oSlider,sSingleSize,sec,fSpeed,point);
		 *@param auto type:bolean 是否自动滑动 当值是true的时候 为自动滑动
		 *@param oEventCont type:object 包含事件点击对象的容器
		 *@param oSlider type:object 滑动对象
		 *@param sSingleSize type:number 滑动对象里单个元素的尺寸（width或者height）
		 *@param second type:number 自动滑动的延迟时间  单位/秒
		 *@param fSpeed type:float   速率 取值在0.05--1之间 当取值是1时  没有滑动效果
		 *@param point type:string   向top滚动
		 */
		</script>
        <!--滚动广告结束-->
     
     <span class="blank6"></span>
     <!--滚动logo开始-->
     <div class="rollBox">
        <div class="LeftBotton" onmousedown="ISL_GoUp()" onmouseup="ISL_StopUp()" onmouseout="ISL_StopUp()"></div>
          <div class="Cont" id="ISL_Cont">
            <div class="ScrCont">
              <ul id="List1">
                <!-- 图片列表 begin -->
                <li><a href="#"><img src="images/logo01.png" />乐活堂</a></li>
                <li><a href="#"><img src="images/logo02.png" />乐活堂</a></li>
                <li><a href="#"><img src="images/logo03.png" />乐活堂</a></li>
                <li><a href="#"><img src="images/logo04.png" />乐活堂</a></li>
                <li><a href="#"><img src="images/logo05.png" />乐活堂</a></li>
                <li><a href="#"><img src="images/logo06.png" />乐活堂</a></li>
                <li><a href="#"><img src="images/logo07.png" />乐活堂</a></li>
                <li><a href="#"><img src="images/logo08.png" />乐活堂</a></li>
                <!-- 图片列表 end -->
              </ul>
              <ul id="List2"><!-- 这个必须要，才可以保持循环滚动--></ul>
            </div>
          </div>
          <div class="RightBotton" onmousedown="ISL_GoDown()" onmouseup="ISL_StopDown()" onmouseout="ISL_StopDown()"></div>
      </div>
     <script language="javascript" type="text/javascript">
	  <!--//--><![CDATA[//><!--
	  //图片滚动列表
	  var Speed = 5; //速度(毫秒)
	  var Space = 10; //每次移动(px)
	  var PageWidth = 98; //翻页宽度,如果要滚动范围更多，则可以乘以显示的图片数量，如遮罩区显示5张，可以乘以5
	  var fill = 0; //整体移位
	  var MoveLock = false;
	  var MoveTimeObj;
	  var Comp = 0;
	  var AutoPlayObj = null;
	  GetObj("List2").innerHTML = GetObj("List1").innerHTML;
	  GetObj('ISL_Cont').scrollLeft = fill;
	  GetObj("ISL_Cont").onmouseover = function(){clearInterval(AutoPlayObj);}
	  GetObj("ISL_Cont").onmouseout = function(){AutoPlay();}
	  AutoPlay();
	  function GetObj(objName){if(document.getElementById){return eval('document.getElementById("'+objName+'")')}else{return eval('document.all.'+objName)}}
	  function AutoPlay(){ //自动滚动
	   clearInterval(AutoPlayObj);
	   AutoPlayObj = setInterval('ISL_GoDown();ISL_StopDown();',5000); //间隔时间
	  }
	  function ISL_GoUp(){ //上翻开始
	   if(MoveLock) return;
	   clearInterval(AutoPlayObj);
	   MoveLock = true;
	   MoveTimeObj = setInterval('ISL_ScrUp();',Speed);
	  }
	  function ISL_StopUp(){ //上翻停止
	   clearInterval(MoveTimeObj);
	   if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0){
		Comp = fill - (GetObj('ISL_Cont').scrollLeft % PageWidth);
		CompScr();
	   }else{
		MoveLock = false;
	   }
	   AutoPlay();
	  }
	  function ISL_ScrUp(){ //上翻动作
	   if(GetObj('ISL_Cont').scrollLeft <= 0){GetObj('ISL_Cont').scrollLeft = GetObj('ISL_Cont').scrollLeft + GetObj('List1').offsetWidth}
	   GetObj('ISL_Cont').scrollLeft -= Space ;
	  }
	  function ISL_GoDown(){ //下翻
	   clearInterval(MoveTimeObj);
	   if(MoveLock) return;
	   clearInterval(AutoPlayObj);
	   MoveLock = true;
	   ISL_ScrDown();
	   MoveTimeObj = setInterval('ISL_ScrDown()',Speed);
	  }
	  function ISL_StopDown(){ //下翻停止
	   clearInterval(MoveTimeObj);
	   if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0 ){
		Comp = PageWidth - GetObj('ISL_Cont').scrollLeft % PageWidth + fill;
		CompScr();
	   }else{
		MoveLock = false;
	   }
	   AutoPlay();
	  }
	  function ISL_ScrDown(){ //下翻动作
	   if(GetObj('ISL_Cont').scrollLeft >= GetObj('List1').scrollWidth){GetObj('ISL_Cont').scrollLeft = GetObj('ISL_Cont').scrollLeft - GetObj('List1').scrollWidth;}
	   GetObj('ISL_Cont').scrollLeft += Space ;
	  }
	  function CompScr(){
	   var num;
	   if(Comp == 0){MoveLock = false;return;}
	   if(Comp < 0){ //上翻
		if(Comp < -Space){
		 Comp += Space;
		 num = Space;
		}else{
		 num = -Comp;
		 Comp = 0;
		}
		GetObj('ISL_Cont').scrollLeft -= num;
		setTimeout('CompScr()',Speed);
	   }else{ //下翻
		if(Comp > Space){
		 Comp -= Space;
		 num = Space;
		}else{
		 num = Comp;
		 Comp = 0;
		}
		GetObj('ISL_Cont').scrollLeft += num;
		setTimeout('CompScr()',Speed);
	   }
	  }
  //--><!]]>
  </script>
     <!--滚动logo结束-->
   </div>
    
    </div>
    <div class="container_right">
      <div class="right_1">
      	<h3>购物公告 </h3>
        	<dl>
            	<dt><img src="images/top_10.jpg" /></dt>
            	<dd><a href="#">【团购】HI-TEC户外排汗衬衫 </a></dd>
                <dd><a href="#">【活动】雅培特价一周</a></dd>
                <dd><a href="#">【团购】HI-TEC户外排汗衬衫</a></dd>
            </dl>
      </div>
      <DIV class="Promotions">
  <DIV class=slide_h3>促销活动
    <DIV class=parrow><A class=left href="#">向左</A><A class=right href="#">向右</A></DIV>
  </DIV>
  <DIV class="pbox">
    <UL class="prolist fl">
      <LI><A href="#"><SPAN class=hl2>[特卖] </SPAN>夏日低价风潮最IN搭配</A></LI>
      <LI><A href="#"><SPAN class=hl2>[特卖] </SPAN>96款夏季女装1.8价</A></LI>
      <LI><A href="#"><SPAN class=hl2>[新品] </SPAN>89元抢购韩版气衣裙</A></LI>
      <LI><A href="#"><SPAN class=hl2>[新品] </SPAN>2折抢LINCTEX夏装</A></LI>
    </UL>
    <UL class="prolist fl">
      <LI><A href="#"><SPAN class=hl2>[疯抢] </SPAN>开衫和背心裙超值组59元</A></LI>
      <LI><A href="#"><SPAN class=hl2>[疯抢] </SPAN>突破价格底限全场 新品1</A></LI>
      <LI><A href="#"><SPAN class=hl2>[特卖] </SPAN>休闲淑女装3折限抢购</A></LI>
      <LI><A href="#"><SPAN class=hl2>[疯抢] </SPAN>￥499卖99 连衣裙限 </A></LI>
    </UL>
  </DIV>
</DIV>
     <script type="text/javascript" src="js/hp1.js"></script>
    </div>
  </div>
</div>
<div id="contnt">
  <div class="contnt_left">
  	<h3><span>热门分类</span></h3>
    <div class="hot_sort">
   	    <dl>
           	  <dt class="main_sort">服饰牌品 </dt>
                <dd>
                <a href="#" class="cgray">DUDU</a> |
			    <a href="#" class="cgray">浪美</a> |
			    <a href="#" class="cgray">薇茉</a> |
			   <a href="#" class="cgray">飞扬空间</a> |
			   <a href="#" class="cgray">阿尔法.阿蒂斯特</a> |
			   <a href="#"  class="cgray">卡唐</a> |
			   <a href="#" class="cgray">希夏邦马</a> |
			   <a href="#" class="cgray">戈尔本</a> |
	      	   <a href="#" class="cgray">比比</a>
                </dd>
      </dl>
            <dl>
           	  <dt class="main_sort">服饰牌品</dt>
           	  <dd>
                <a href="#" class="cgray">DUDU</a> |
			    <a href="#" class="cgray">浪美</a> |
			    <a href="#" class="cgray">薇茉</a> |
			   <a href="#" class="cgray">飞扬空间</a> |
			   <a href="#" class="cgray">阿尔法.阿蒂斯特</a> |
			   <a href="#"  class="cgray">卡唐</a> |
			   <a href="#" class="cgray">希夏邦马</a> |
			   <a href="#" class="cgray">戈尔本</a> |
			   <a href="#" class="cgray">比比</a></dd>
          </dl>
            <dl>
           	  <dt class="main_sort">服饰牌品</dt>
           	  <dd>
                <a href="#" class="cgray">DUDU</a> |
			    <a href="#" class="cgray">浪美</a> |
			    <a href="#" class="cgray">薇茉</a> |
			   <a href="#" class="cgray">飞扬空间</a> |
			   <a href="#" class="cgray">阿尔法.阿蒂斯特</a> |
			   <a href="#"  class="cgray">卡唐</a> |
			   <a href="#" class="cgray">希夏邦马</a> |
			   <a href="#" class="cgray">戈尔本</a> |
			   <a href="#" class="cgray">比比</a></dd>
            </dl>
            <dl>
           	  <dt class="main_sort">服饰牌品</dt>
           	  <dd>
                <a href="#" class="cgray">DUDU</a> |
			    <a href="#" class="cgray">浪美</a> |
			    <a href="#" class="cgray">薇茉</a> |
			   <a href="#" class="cgray">飞扬空间</a> |
			   <a href="#" class="cgray">阿尔法.阿蒂斯特</a> |
			   <a href="#"  class="cgray">卡唐</a> |
			   <a href="#" class="cgray">希夏邦马</a> |
			   <a href="#" class="cgray">戈尔本</a> |
			   <a href="#" class="cgray">比比</a></dd>
            </dl>
            <dl>
           	  <dt class="main_sort">服饰牌品</dt>
           	  <dd>
                <a href="#" class="cgray">DUDU</a> |
			    <a href="#" class="cgray">浪美</a> |
			    <a href="#" class="cgray">薇茉</a> |
			   <a href="#" class="cgray">飞扬空间</a> |
			   <a href="#" class="cgray">阿尔法.阿蒂斯特</a> |
			   <a href="#"  class="cgray">卡唐</a> |
			   <a href="#" class="cgray">希夏邦马</a> |
			   <a href="#" class="cgray">戈尔本</a> |
			   <a href="#" class="cgray">比比</a></dd>
            </dl>
   	</div>
  </div>
  <div id="contnt_right">
  	<h3>性感塑性丝袜 全起</h3>
    <ul>
    	<li><img src="images/slide_ad01.jpg" /></li>
    </ul>
    <h3>性感塑性丝袜 全起</h3>
    <ul>
    	<li><img src="images/slide_ad02.jpg" /></li>
    </ul>
    <h3>性感塑性丝袜 全起</h3>
    <ul>
    	<li><img src="images/slide_ad03.jpg" /></li>
    </ul>
    <h3>性感塑性丝袜 全起</h3>
    <ul>
    	<li><img src="images/slide_ad04.jpg" /></li>
    </ul>
  </div>
</div>
<script type="text/javascript">
<!--
function Pid(id,tag){
	if(!tag){
		return document.getElementById(id);
		}
	else{
		return document.getElementById(id).getElementsByTagName(tag);
		}
}

function tab(id,hx,box,iClass,s,pr){
	var hxs=Pid(id,hx);
	var boxs=Pid(id,box);
	if(!iClass){ // 如果不指定class，则：
		boxsClass=boxs; // 直接使用box作为容器
	}
	else{ // 如果指定class，则：
		var boxsClass = [];
		for(i=0;i<boxs.length;i++){
			if(boxs[i].className.match(/\btab\b/)){// 判断容器的class匹配
				boxsClass.push(boxs[i]);
			}
		}
	}
	if(!pr){ // 如果不指定预展开容器，则：
		go_to(0); // 默认展开序列
		yy();
	}
	else {
		go_to(pr);
		yy();
	}
	function yy(){
		for(var i=0;i<hxs.length;i++){
			hxs[i].temp=i;
			if(!s){// 如果不指定事件，则：
				s="onmouseover"; // 使用默认事件
				hxs[i][s]=function(){
					go_to(this.temp);
				}
			}
			else{
				hxs[i][s]=function(){
					go_to(this.temp);
				}
			}
		}
	}
	function go_to(pr){
		for(var i=0;i<hxs.length;i++){
			if(!hxs[i].tmpClass){
				hxs[i].tmpClass=hxs[i].className+=" ";
				boxsClass[i].tmpClass=boxsClass[i].className+=" ";
			}
			if(pr==i){
				hxs[i].className+=" up"; // 展开状态：标题
				boxsClass[i].className+=" up"; // 展开状态：容器
			}
			else {
				hxs[i].className=hxs[i].tmpClass;
				boxsClass[i].className=boxsClass[i].tmpClass;
			}
		}
	}
}
tab("contnt_right","h3","ul");
//-->
</script>
<div id="banner"><img src="images/banner_03.png" /></div>
<div id="contnt_1">
  <div class="contnt_left_1">
  	<div class="contnt_left_1_top"><p><b>新品上市</b><span><a href="#">品牌男装</a> | <a href="#" >时尚女装</a> | <a href="#">皮具鞋包</a> | <a href="#">手表饰品</a> | <a href="#" >美容美妆</a> | <a href="#">数码家电</a> | <a href="#">家居食品</a></span></p></div>
    <div id="contnt_left_1_min">
   	  <div class="contnt_left_1_min_1">
      	<ul>
        	<li><a href="#"><img src="images/120x12002.jpg" /></a>
            <p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
            </li>
            <li><a href="#"><img src="images/120x12001.jpg" /></a>
            <p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
            </li>
            <li><a href="#"><img src="images/120x12005.jpg" /></a>
            <p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
            </li>
            <li><a href="#"><img src="images/120x12003.jpg" /></a>
            <p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
            </li>
            <li><a href="#"><img src="images/120x12004.jpg" /></a>
            <p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
            </li>
            <li><a href="#"><img src="images/120x120.jpg" /></a>
            <p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
            </li>
          	<li><a href="#"><img src="images/120x12003.jpg" /></a>
            <p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
            </li>
            <li><a href="#"><img src="images/120x12001.jpg" /></a>
            <p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
            </li>
            <li><a href="#"><img src="images/120x12002.jpg" /></a>
            <p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
            </li>
            <li><a href="#"><img src="images/120x12001.jpg" /></a>
            <p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
            </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="contnt_right_2"><img src="images/banner_07.png" /></div>
</div>
<script type=text/javascript src="/js/jd.lib.js"></script> 
<script type=text/javascript>
  $("#contnt_left_1_min ").eq(0).jdMarquee({width:750,height:176,stay:5000,auto:true});
  //定义滚动的宽度，高度，延时,是否自动
</script>
<div id="contnt_2">
  <div class="contnt_left_3">
    <div class="contnt_left_3_top">
   	  <h3><b>畅销商品</b></h3>
      <ul class="right">
        <li id="two1" onmouseover="setTab('two',1,3)" class="hover">时尚女装</li>
        <li id="two2" onmouseover="setTab('two',2,3)">品牌男装</li>
        <li id="two3" onmouseover="setTab('two',3,3)">运动户外</li>
      </ul>
    </div>
    <div class="contnt_left_3_min">
      <div class="contnt_left_3_1">
      	<div id="con_two_1" class="hover"><ul><li><a href="#"><img src="proimg/item106.jpg" /></a>
      		  <p class=p-name><a href="#">索泰GTX46011111</a></p>
        		<p class=p-price>市场价：<del>￥1699.00</del></p>
        		<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
       		</li>
        	<li><a href="#"><img src="proimg/item107.jpg" /></a>
       		  <p class=p-name><a href="#">索泰GTX46011111</a></p>
        		<p class=p-price>市场价：<del>￥1699.00</del></p>
        		<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
        	</li>
    		<li><a href="#"><img src="proimg/item03.jpg" /></a>
           	  <p class=p-name><a href="#">索泰GTX46011111</a></p>
        		<p class=p-price>市场价：<del>￥1699.00</del></p>
        		<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
        	</li>
            <li><a href="#"><img src="proimg/item04.jpg" /></a>
           	  <p class=p-name><a href="#">索泰GTX46011111</a></p>
        		<p class=p-price>市场价：<del>￥1699.00</del></p>
        		<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
        	</li>
            <li><a href="#"><img src="proimg/item05.jpg" /></a>
           	  <p class=p-name><a href="#">索泰GTX46011111</a></p>
        		<p class=p-price>市场价：<del>￥1699.00</del></p>
        		<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
        	</li>
            <li><a href="#"><img src="proimg/item109.jpg" /></a>
           	  <p class=p-name><a href="#">索泰GTX46011111</a></p>
        		<p class=p-price>市场价：<del>￥1699.00</del></p>
        		<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
       		</li>
        	<li><a href="#"><img src="proimg/item07.jpg" /></a>
       		  <p class=p-name><a href="#">索泰GTX46011111</a></p>
        		<p class=p-price>市场价：<del>￥1699.00</del></p>
        		<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
        	</li>
    		<li><a href="#"><img src="proimg/item102.jpg" /></a>
           	  <p class=p-name><a href="#">索泰GTX46011111</a></p>
        		<p class=p-price>市场价：<del>￥1699.00</del></p>
        		<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
        	</li>
            <li><a href="#"><img src="proimg/item104.jpg" /></a>
           	  <p class=p-name><a href="#">索泰GTX46011111</a></p>
        		<p class=p-price>市场价：<del>￥1699.00</del></p>
        		<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
        	</li>
            <li><a href="#"><img src="proimg/item103.jpg" /></a>
           	  <p class=p-name><a href="#">索泰GTX46011111</a></p>
        		<p class=p-price>市场价：<del>￥1699.00</del></p>
        		<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
        	</li>
         </ul>
         </div>
		<div id="con_two_2" style="display:none">
        <ul>
       		<li><a href="#"><img src="proimg/item109.jpg" /></a>
           	<p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
       		</li>
            <li><a href="#"><img src="proimg/item04.jpg" /></a>
           	  <p class=p-name><a href="#">索泰GTX46011111</a></p>
        		<p class=p-price>市场价：<del>￥1699.00</del></p>
        		<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
        	</li>
            <li><a href="#"><img src="proimg/item05.jpg" /></a>
           	<p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
        	</li>
        	<li><a href="#"><img src="proimg/item07.jpg" /></a>
       		<p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
        	</li>
    		<li><a href="#"><img src="proimg/item102.jpg" /></a>
           	<p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
        	</li>
            <li><a href="#"><img src="proimg/item09.jpg" /></a>
           	<p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
        	</li>
            <li><a href="#"><img src="proimg/item010.jpg" /></a>
           	<p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
        	</li>
            <li><a href="#"><img src="images/120x12001.jpg" /></a>
            <p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
            </li>
            <li><a href="#"><img src="images/120x12005.jpg" /></a>
            <p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
            </li>
            <li><a href="#"><img src="images/120x12003.jpg" /></a>
            <p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
            </li>
          </ul>
            </div>
		<div id="con_two_3" style="display:none">
        	<ul>
            <li><a href="#"><img src="proimg/item106.jpg" /></a>
      		<p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
       		</li>
        	<li><a href="#"><img src="proimg/item107.jpg" /></a>
       		<p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
        	</li>
            <li><a href="#"><img src="images/120x12001.jpg" /></a>
            <p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
            </li>
            <li><a href="#"><img src="images/120x12005.jpg" /></a>
            <p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
            </li>
            <li><a href="#"><img src="images/120x12003.jpg" /></a>
            <p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
            </li>
            <li><a href="#"><img src="images/120x12004.jpg" /></a>
            <p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
            </li>
            <li><a href="#"><img src="images/120x120.jpg" /></a>
            <p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
            </li>
    		<li><a href="#"><img src="proimg/item03.jpg" /></a>
           	<p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
        	</li>
            <li><a href="#"><img src="proimg/item04.jpg" /></a>
           	<p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
        	</li>
            <li><a href="#"><img src="proimg/item05.jpg" /></a>
           	<p class=p-name><a href="#">索泰GTX46011111</a></p>
        	<p class=p-price>市场价：<del>￥1699.00</del></p>
        	<p class=p-price1>商城价：<strong>￥1699.00</strong></p>
       	</li></ul></div>
      </div>
    </div>
  </div>
  <div class="mod" id="popular">
  	<h3>销售排行</h3>
  <div class="mod-content" id=myTab_Content0>
        <ul>
          <li class="first selected">
          <span class="num">1</span><a href="#"><img height="60" width="60" src="images/001.jpg"/>The north face 09永恒的经典</a></li>
          <li><span class="num">2</span><a href="#"><img height="60" width="60" src="images/120x12001.jpg" />永恒的经典短款雪地...</a></li>
          <li><span class="num">3</span><a href="#"><img height="60" width="60" src="images/120x12002.jpg" />诺基亚 5800XM 触屏...</a></li>
          <li><span class="num">4</span><a href="#"><img height="60" width="60" src="images/120x12003.jpg" />西雅图气质毛领冬装...</a></li>
          <li><span class="num">5</span><a href="#"><img height="60" width="60" src="images/120x12004.jpg" />日韩版时尚牛角扣戴...</a></li>
          <li><span class="num">6</span><a href="#"><img height="60" width="60" src="images/120x12005.jpg" />CASIO金属系列黑盘...</a></li>
          <li><span class="num">7</span><a href="#"><img height="60" width="60" src="images/120x12006.jpg" />新款春装修身长款毛...</a></li>
          <li><span class="num">8</span><a href="#"><img height="60" width="60" src="proimg/item104.jpg" />>高绒保暖女装小熊羽...</a></li>
          <li><span class="num">9</span><a href="#"><img height="60" width="60" src="proimg/item102.jpg" />诺基亚5530XM 3G手...</a></li>
          <li><span class="num">10</span><a href="#"><img height="60" width="60" src="proimg/item106.jpg" />JACK JONES 09新款...</a></li>
        </ul>
    </div>
</div>
<script type="text/javascript">
var popularImgs = ["001.jpg","002.jpg","","","","","","","",""];
function G(o){return document.getElementById(o);}
var tabviem=G("popular").getElementsByTagName("li");
for(var i=0;i<tabviem.length;i++){
	tabviem[i].i=i;
	tabviem[i].onmousemove=function(){
		for(var i=0;i<tabviem.length;i++){ tabviem[i].className = '';}
		this.className = 'selected';
		if(this.getElementsByTagName("img").length<1){
			var B = this.getElementsByTagName("a")[0];
			B.innerHTML='<img src="'+popularImgs[this.i]+'" width="60" height="60" />'+B.innerHTML;
		}
	}
}
</script>
</div>