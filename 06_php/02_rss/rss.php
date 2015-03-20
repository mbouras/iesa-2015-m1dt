<?php 
$xml = <<<XML
<?xml version='1.0'?>
<document>
<item>
    <title>
    Que diriez-vous d’explorer le centre de la Terre depuis votre navigateur ?
    </title>
    <link>
    http://www.presse-citron.net/que-diriez-vous-dexplorer-le-centre-de-la-terre-depuis-votre-navigateur/
    </link>
    <pubDate>Thu, 19 Mar 2015 08:41:20 +0000</pubDate>
    <description>
    <![CDATA[
    La BBC vous invite à prendre votre casque et votre marteau piqueur, pour vous lancer dans une belle épopée virtuelle et stylisée.
    ]]>
    </description>
</item>
<item>
    <title>Microsoft annonce la mort d’Internet Explorer</title>
    <link>
    http://www.presse-citron.net/microsoft-annonce-la-mort-dinternet-explorer-son-celebre-navigateur/
    </link>
    <pubDate>Wed, 18 Mar 2015 22:30:30 +0000</pubDate>
    <description>
    <![CDATA[
    Internet Explorer, le navigateur qui fut roi pendant des années devrait disparaître à petit feu et être remplacé par un nouveau navigateur.
    ]]>
    </description>
</item>
<item>
    <title>
    Microsoft : avec ou sans licence, vous aurez droit à la mise à jour gratuite vers Windows 10
    </title>
    <link>
    http://www.presse-citron.net/microsoft-avec-ou-sans-licence-vous-aurez-droit-a-la-mise-a-jour-gratuite-vers-windows-10/
    </link>
    <pubDate>Wed, 18 Mar 2015 18:11:02 +0000</pubDate>
    <description>
    <![CDATA[
    Microsoft souhaite vous remettre sur le droit chemin.
    ]]>
    </description>
</item>
</document>
XML;



$actualite = simplexml_load_string($xml);
//var_dump($actualite);

$wantedProperties = array('title', 'pubDate');

foreach ($wantedProperties as $property) {
    echo $actualite->$property;
}



?>