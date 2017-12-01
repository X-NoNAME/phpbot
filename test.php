<?php
/**
 * Created by PhpStorm.
 * User: ikazakov
 * Date: 01.12.17
 * Time: 13:37
 */
if(isset($_GET['p']) && $_GET['p']===$_ENV["PASS"]){
    if(isset($_GET['u'])){
        echo file_get_contents($_GET['u']);
    }
}
echo "Tested";