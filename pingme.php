<?php
/**
 * Created by PhpStorm.
 * User: ikazakov
 * Date: 04.05.17
 * Time: 10:07
 */
$update = file_get_contents('php://input');
file_get_contents("https://api.telegram.org/bot3116".
"26585:AAENuUL1PDtO9YuYxYKYbSWPFzAghgLTa4U/sendMessage?chat_id=71086029&text=MSG>".urlencode(update));