<?php
    const FILE_PATH="template/";
    const FILE_EXT=".php";
    $list_of_file=[
        "header1",
        "about2",
        "skill3",
        "portfolio4",
        "experience5",
        "refrence6",
        "contact7",
        "footer8"
    ];
    foreach($list_of_file as $l){
        $full_path=FILE_PATH.$l.FILE_EXT;
        require_once $full_path;
    }
?>