# Javascript

* Google Map : 
  * Mettre des dimensions dans la DIV
  * Penser à mettre les variables au plus près de là où elles sont utilisées

* Incrémentation : a++ ne retourne pas le résultat de l'incrémentation. Il retourne la valeur de a initiale, puis il l'incrémente.

* Boucles
  * While : "tant que…"
Penser à incrémenter pour pas faire de boucle infinie.
Penser à mettre à jour les variables qui sont testées car le while garde la dernière valeur définie avant d'entrer dans la boucle (cf exo 04 - TP JS) 
  * For : je respecte le contrat de A à Z, je fais toutes les étapes (ex: de 1 à 10).

* Return : Aucun code n'est lu après l'appel d'un return (dans une fonction ou autre)

* Number() : ne prend pas la virgule, mais le point (codé par USA)

* POO JS
  * attributs : private = var monAttribut // public this.monAttrPublic
  * methods : public = this.maFunction // private = function maFunction(){ … }
  * En résumé : this. --> public alors que sans --> private



#PHP
* Global : va chercher une variable en dehors de la function. Définit une variable comme "globale".
* variable dynamique : variable d'une variable ($$variable);
* Types données
  * 4 scalaires : boolean, integer, float, string
  * 2 composés : array, object
  * 2 speciaux : resource, null
* Incrémentation : .=

#Tests unitaires
* Arguments dans methode equal dans un test unitaire : (valeur testée, valeur attendue, "message")


# Console
* Commandes sur la console du navigateur : 
    console.log
            .error
            .warn
            .info
            .debug


http://daringfireball.net/projects/markdown/syntax