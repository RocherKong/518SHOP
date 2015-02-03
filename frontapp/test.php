<?php 
/* if(!isset($_POST['content'])) { ?>
<form method="post" action="test.php">
	<input type="text" name="content" />
    <input type="submit" text="submit" />
</form>
<?php 
}else{
	$content = $_POST['content'];
	//echo $content;
	$bytes = base64_decode($content);
	file_put_contents("./test.jpg", $bytes);
	//header("Content-Type: image/jpg");
	//echo $bytes;
} */

function objectToArray($e){
	$e=(array)$e;
	foreach($e as $k=>$v){
		if( gettype($v)=='resource' ) return;
		if( gettype($v)=='object' || gettype($v)=='array' )
		$e[$k]=(array)objectToArray($v);
	}
	return $e;
}
function get_webservice_data($url) {
	$curlHandle = curl_init();
	curl_setopt( $curlHandle , CURLOPT_URL, $url );
	curl_setopt( $curlHandle , CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt( $curlHandle , CURLOPT_TIMEOUT, 30 );
	$data= curl_exec( $curlHandle );
	
	curl_close( $curlHandle );
    //$data = @file_get_contents($url);
	//str_replace("\r\n","",$data);
    return objectToArray(json_decode(trim($data)));
}
$data = get_webservice_data("http://member.cyty.cn/user.php/app/deliverylist?userId=52267");
//$data = '{"errorcode":"0","errormsg":"","data":{"amount":"1.000","coachid":"002500010170","count":0,"createtime":"2014-11-03 16:18:23.0","creatorid":52267,"fullname":"","isdeduct":"0","ispayment":"0","limit":0,"mobilenum":"13645194461","ordercode":"201411031618238175","servicename":"\u5546\u54c1\u9500\u552e","servicenote":"\u4e2d\u5348","servicetype":2,"stateid":10,"uid":52267,"username":"jqc22","createtime2":1415002703,"statename":"\u5f85\u786e\u8ba4"}}';
//$data = json_decode($data);
print_r($data);
?>