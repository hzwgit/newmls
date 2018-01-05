<?php
/*
 * @description   文件上传方法
 * @author widuu  http://www.widuu.com
 * @mktime 09/10/2014
 */
header("Content-type:text/html;charset=utf-8");

$accessKey = "QnibGyBmj-dWhQN6k9E9GoNPOiVIn6yU6DeYFGCR";
$secretKey = "kpi1rFzf5TzPml8zVnZ6qrxZ22NweRbLKpXVixbF";

$bucket = "bgbl";

$host  = "7xkgwq.com1.z0.glb.clouddn.com";

$time = time()+3600;

if(empty($_GET["key"])){
	exit('param error');
}else{
	$data =  array(
			"scope"=>$bucket.":".$_GET['key'],
			"deadline"=>$time,
			"returnBody"=>"{\"url\":\"{$host}$(key)\", \"state\": \"SUCCESS\", \"name\": $(fname),\"size\": \"$(fsize)\",\"w\": \"$(imageInfo.width)\",\"h\": \"$(imageInfo.height)\"}"
	);
}

$data = json_encode($data);
$find = array('+', '/');
$replace = array('-', '_');
$data = str_replace($find, $replace, base64_encode($data));
$sign = hash_hmac('sha1', $data, $secretKey, true);
$result = $accessKey . ':' . str_replace($find, $replace, base64_encode($sign)).':'.$data ;
echo $result;