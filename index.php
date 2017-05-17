<?php
require 'toj.php';

$query = false;

if(isset($_GET['uid'])){
    $user = new toj($_GET['uid']);
    $query = true;
    $ac_times = 0;
    if(!$ac_times = $user->ac_times()){
        exit('system error!!!');
    }
}

require 'index-template.php';