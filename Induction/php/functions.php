<?php


function getSalt($saltLength) {
	$randomString= bin2hex(mcrypt_create_iv($saltLength, MCRYPT_DEV_URANDOM));
return $randomString;
}

function makeHash($plainText,$salt,$n) {
	$hash=$plainText.$salt;
	for($i=0;$i<$n;$i++) {
		$hash=hash("sha256",$plainText.$hash.$salt);
	}
	return $hash;
}

// Get users IP Address
function getUserIP() {
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();
// Output IP address [Ex: 177.87.193.134]
?>
