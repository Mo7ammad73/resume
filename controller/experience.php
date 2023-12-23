<?php
    $path="../data/experience.json";
    $result=json_decode(file_get_contents($path),true);
    print_r($result);
?>
