<?php
/**
 * Created by PhpStorm.
 * User: ikazakov
 * Date: 17.05.17
 * Time: 13:31
 */

$msg=explode(":",$_GET['msg'],2);
$token = $_ENV["TOKEN"];

if($msg) {
    file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $msg[0] . "&text=" . urlencode($msg[1]));
}else {
    echo "Wrong parameter msg";
    http_response_code(500);
}
