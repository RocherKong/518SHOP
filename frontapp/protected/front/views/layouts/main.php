<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="/images/glasses.ico" type="image/x-icon" />
<meta http-equiv="Content-Language" content="zh-cn" />
<meta name="robots" content="all" />
<meta name="Description" content="买卖网商城，正品，低价，贴心服务，购物无忧" />
<meta name="Keywords" content="购物商城,购物网站,购物" />
<title>眼镜商城</title>
<link href="/css/global.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery-1.2.6.pack.js"></script>
<script type="text/javascript" src="/js/tab.js"></script>
<!--[if lte IE 6]>
<style type="text/css">
body { behavior:url("js/csshover.htc"); }
</style>
<![endif]-->

<!--
-->
</head>

<body>
    <div id="header">
  <div class="top_nav">
    <div class="top_nav_1">欢迎来到买卖网商城！&nbsp;<span> <a href="#">登录</a>&nbsp; <b><a href="#">免费注册</a></b></span></div>
    <div class="top_nav_2">
       <a href="#">我的账户</a>
      <a href="#">积分回馈</a>
      <a href="#">网站联盟</a>
        <ul class="list2" onMouseOver="this.className='list1'" onMouseOut="this.className='list2'">
       	  <li><span>帮助中心</span></li>
            <li><a href="#">订单中心</a></li>
            <li><a href="#">返修中心</a></li>
            <li><a href="#">投诉中心</a></li>
            </ul>
    </div>
  </div>
  <div class="logoSide">
    <div class="logo"><img src="/images/logo_06.jpg" /></div>
    <div class="logoSide_right">
	  <div class="logo_r"><a href="#" class="gray">全场正品</a><a href="#" class="gray">官方认证</a><a href="#" class="gray">先行赔付</a><a href="#"class="gray"><strong>服务专线:</strong></a><span><strong>400-700-6781</strong></span></div>
		</div>
  	</div>
    <div class="site_nav">
   	<div class="nav_l">
   	  <ul>
       	    <li><samp><a href="index.html">首页</a></samp></li> 
            <li><a href="list.html">所有分类</a></li>
            <li><a href="show.html">手机数码</a></li>
            <li><a href="#">美食频道</a><p></li>  
          </ul>
        </div>
        <div class="nav_mid">
            <ul>
            	<li><a href="#">每日抢购</a></li>
           	<li><a href="#">新店促销</a></li>
            	<li><a href="#">当季新品</a></li>
            	<li><a href="#">特卖会</a></li>
          </ul>
        </div>
        <div class="nav_r">
            <ul>
                <li><a href="#">每日抢购新店促销当季新品特卖</a></li>
                <li><a href="#">【活动】 妈咪宝贝献大礼HOT</a></li>
                <li><a href="#">[特卖] 休闲淑女装3折限时抢购 </a></li>
                <li><a href="#">HI-TEC户外排汗衬衫</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="tSearch">
	<div class="tsearch-panel">
      <div class="tsearch-panel_r">
      	<ul>
        	<li><a href="#" class="tsearch-panel_2">购物车<strong>0</strong>件</a><span><a href="#">您的购物车中暂无商品，赶快选择心爱的商品吧！</a></span></li>
          <li><a href="#">去结算</a></li>
        </ul>
      </div>
  </div>
</div>
    <?php echo $content;?>
    <div class="bottom">
  <dl>
    	<dt></dt>
        <b><dd>新手上路</dd></b>
      <dd><a href="#">新手指南</a></dd>
  </dl>
    <dl>
    	<dt class="bottom2"></dt>
        <b><dd>购物保障</dd></b>
        <dd><a href="#" class="cblue">全场正品</a></dd>
        <dd><a href="#" class="cblue">官方认证专家</a></dd>
        <dd><a href="#" class="cblue">先行赔付</a></dd>
        <dd><a href="#" class="cblue">统一售后服务</a></dd>
    </dl>
    <dl>
    	<dt class="bottom3"></dt>
        <b><dd>售后服务</dd></b>
             	<dd><a href="#">服务专线</a>:<br />
   	  <a href="#" class="cblue">400-700-8080</a></dd>
  	</dl>
 	 <span><dl >
    	<dt class="bottom4"></dt>
    	<b><dd>加盟买卖商城</dd></b>
     	<dd><a href="#" class="cblue"> 如何加盟买卖商</a></dd>
        <dd><a href="#" class="cblue">加入买卖商城外部团队:</a></dd>
  </dl></span>
  </dl>
</div>
<div id="link">商品不满意，退换、赔付不用愁，拨打服务专线<b>400-700-8080</b><br />
买卖网商城 解决售后问题 真正快速简便！<p></p><br /><a href="#">关于买卖网</a>|<a href="#">About buynet</a>|<a href="#">服务条款</a>|<a href="#">广告服务</a>|<a href="#">企业招聘</a>|<a href="#">客服中心</a>|<a href="#">网站导航</a><br />
Copyright © 1998 - 2010 buynet. All Rights Reserved<br />
买卖网 版权所有
</div>
<script type="text/javascript">
// 单行滚动
function AutoScroll(obj){
  $(obj).find("ul:first").animate({
    marginTop:"-25px"
  },500,function(){
  $(this).css({marginTop:"0px"}).find("li:first").appendTo(this);
  });
}
  $(document).ready(function(){
  setInterval('AutoScroll(".nav_r")',3000)
  });
</script>
</body>
</html>