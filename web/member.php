<?php
//修改填充
if(!defined('IN_CRONLITE'))exit();

$my=isset($_GET['my'])?$_GET['my']:null;

$clientip=$_SERVER['REMOTE_ADDR'];

if(isset($_COOKIE["ol_token"]))
{
	$token=authcode(daddslashes($_COOKIE['ol_token']), 'DECODE', SYS_KEY);
	list($user, $sid) = explode("\t", $token);
	$session=md5($adminuser.$adminpass.$password_hash);
	if($session==$sid) {
		$islogin2=1;
	}
}