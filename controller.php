<?php
    require_once "helper/helper.php";
    $list=["main","skill","about","portfolio","experience","refrences"];
    $wrapper=[];
    foreach($list as $l){
        require_once "controller/".$l.".php";
        $wrapper=array_merge($wrapper,$result);
    }
    // echo "<pre>";
    //     print_r($wrapper);
    // echo "</pre>";
?>