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
file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=71086029&text=".urlencode("Hello, chat id is $chat_id"));