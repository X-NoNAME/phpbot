<?php
/**
 * Created by PhpStorm.
 * User: ikazakov
 * Date: 17.05.17
 * Time: 13:31
 */

$msg=explode(":",$_GET['msg'],2);
$chat_sig=explode("_",$msg[0],2);
$chat = $chat_sig[0];
$cursig = $chat_sig[1];
$token = $_ENV["TOKEN"];
$expsig = sizeof($chat)+explode("",$chat)[0]+sizeof($token);;
if($cursig!=$expsig){
    echo "Wrong parameter msg";
    http_response_code(500);
    exit(500);
}



if($msg) {
    file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $msg[0] . "&text=" . urlencode($msg[1]));
}else {
    echo "Wrong parameter msg";
    http_response_code(500);
}
