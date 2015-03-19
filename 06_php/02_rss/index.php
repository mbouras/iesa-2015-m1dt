<?php

$news1 = array(
    'title' => 'NEWS01--Que diriez-vous d’explorer le centre de la Terre depuis votre navigateur ?',
    'link' => 'http://www.presse-citron.net/que-diriez-vous-dexplorer-le-centre-de-la-terre-depuis-votre-navigateur/',
    'pubDate' => 'Thu, 19 Mar 2015 08:41:20 +0000',
    'description' => 'La BBC vous invite à prendre votre casque et votre marteau piqueur, pour vous lancer dans une belle épopée virtuelle et stylisée.'
);;
$news2['title'] = 'NEWS002--Microsoft annonce la mort d’Internet Explorer';
$news2['link'] = 'http://www.presse-citron.net/microsoft-annonce-la-mort-dinternet-explorer-son-celebre-navigateur/';
$news2['pubDate'] = 'Wed, 18 Mar 2015 22:30:30 +0000';
$news2['description'] = 'Internet Explorer, le navigateur qui fut roi pendant des années devrait disparaître à petit feu et être remplacé par un nouveau navigateur.';

$newss = array($news1, $news2);

//var_dump($news);;

function buildHtmlForNews($table){
    return
        '<ul>'.
            '<li>'.$table['title'].'</li>'.
            '<li>'.$table['link'].'</li>'.
            '<li>'.$table['pubDate'].'</li>'.
            '<li>'.$table['description'].'</li>'.
        '</ul>';
}
function buildTableForNews($table){
    return
        '<table>
            <tr>
                <td>TITLE</td>
                <td>LINK</td>
                <td>PUBDATE</td>
                <td>DESCRIPTION</td>
            </tr>
            <tr>
                <td>'.$table['title'].'</td>
                <td>'.$table['link'].'</td>
                <td>'.$table['pubDate'].'</td>
                <td>'.$table['description'].'</td>
            </tr>
        </table>';
}
function buildHtmlRowFor($news, $wantedProperties){
    $line = '<tr>';
    foreach ($wantedProperties as $value) {
        $line .= '<td>'.$news[$value].'</td>';
    }
    $line .= '</tr>';
    return $line;
}
function buildHtmlTableFor($newss, $wantedProperties){
    $table = '<table>';
    foreach ($newss as $value) {
        $table .= buildHtmlRowFor($value, $wantedProperties);
    }
    $table .= '</table>';
    return $table;
}


?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP PHP : Tableaux</title>
    </head>
    <body>
        <h2>News avec une liste</h2>
        <?php 
            echo buildHtmlForNews($news1);
        ?>
        <h2>News avec un tableau</h2>
        <?php 
            echo buildTableForNews($news2);
        ?>
        <h2>News avec un foreach</h2>
        <?php
            $wantedProperties = array('title', 'pubDate' );
            echo buildHtmlTableFor($newss, $wantedProperties);
        ?>
    </body>
</html>

