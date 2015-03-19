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

    echo $a."<br />";
    echo $$a."<br />";
    echo $bonjour."<br />";


    //define("AIRPLANE", "D112");
    const AIRPLANE = "D112";
    echo AIRPLANE;
?>