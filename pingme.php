<?php
/**
 * Created by PhpStorm.
 * User: ikazakov
 * Date: 04.05.17
 * Time: 10:07
 */
$update = json_decode(file_get_contents('php://input'),true);
$token = $_ENV["TOKEN"];
$chat_id=$update['message']["chat"]["id"];

$ta = explode(":",$token)[0];
$ci = ''.$chat_id;
$sig=$ta[2]+$ci[3]*10+$ta[4]*100;

file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&text="
    .urlencode("Привет, ваша сылка для получения сообщений: http://tinyurl.com/l3y4x5t?msg=$chat_id"."_"."$sig:{ТУТ_ВАШЕ_СООБЩЕНИЕ}"));
