<?php 
    //phpinfo();

    // $a = 1;

    // function test(){
    //     global $a;
    //     echo $a;
    // }

    // test();

    $a = "bonjour";
    $$a = "monde";

    echo $a;

    echo $$a;
?>