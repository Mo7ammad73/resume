<?php
    const path_data="data/";
    const ext_data=".json";
    function read_data(string $filename):array{
        return json_decode(file_get_contents(path_data.$filename.ext_data),true);
    }
?>