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
    var_dump($a);

    echo("<br />");
    echo("<br />");
    //define("AIRPLANE", "D112");
    const AIRPLANE = "D112";
    echo AIRPLANE;

    echo("<br />");
    echo("<br />");
    $monTableau = array();
    var_dump($monTableau);
    echo("<br />");
    $course = array(
        "fruits" => "pomme",
        "magasin" => "Auchan",
        "prix" => "1€"
    );
    var_dump($course);
?>