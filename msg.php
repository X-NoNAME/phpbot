<?php
/**
 * Created by PhpStorm.
 * User: ikazakov
 * Date: 17.05.17
 * Time: 13:31
 */

$chat_id=$_GET['chat_id'];
$msg=$_GET['msg'];
$token = $_ENV["TOKEN"];

if($msg && $chat_id) {
    file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chat_id . "&text=" . urlencode($msg));
}elseif($chat_id){
    file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chat_id . "&text=msg parameter not found.");
}
