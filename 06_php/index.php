<?php 
    //--AFFICHER LES INFOS PHP DE LA PAGE
    //phpinfo();


    //--TESTER LES GLOBALES
    // $a = 1;
    // function test(){
    //     global $a;
    //     echo $a;
    // }
    // test();

        //--Code pas bon
        $a = 1;
        $b = 2;
        // function somme(){
        //     global $a, $b;
        //     $b = $a + $b;
        // }
        // somme();
        // echo $b;

        //--Code bon
        function somme($c, $d){
            return $c + $d;
        }
        echo somme($a, $b);


    //--VARIABLES DYNAMIQUES
    // $a = "bonjour";
    // $$a = "monde";
    // echo $a."<br />";
    // echo $$a."<br />";
    // echo $bonjour."<br />";
    // var_dump($a);
    echo("<br />");
    

    //--CONSTANTES
    //define("AIRPLANE", "D112");
    const AIRPLANE = "D112";
    echo AIRPLANE."<br />";


    //--TABLEAU
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