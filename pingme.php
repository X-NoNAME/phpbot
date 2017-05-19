<?php
/**
 * Created by PhpStorm.
 * User: ikazakov
 * Date: 04.05.17
 * Time: 10:07
 */
if($_GET['token']!==$_ENV["TOKEN"]){
    exit(500);
}
$update = json_decode(file_get_contents('php://input'),true);
$token = $_ENV["TOKEN"];
$chat_id=$update['message']["chat"]["id"];

$ta = explode(":",$token)[0];
$ci = ''.$chat_id;
$sig= array_product(str_split(str_replace('0','',''.$ta.$ci)));

$message = "If you want to receive a message from me in this chat, then make a request to the address:";
$url = "http://tinyurl.com/l3y4x5t?msg=$chat_id"."_"."$sig:{ANY_MESSAGE}";
$examples = "Send message from php code: file_get_contents(\"$url\")";
file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&text="
    .urlencode($message.$url."\n".$examples));
