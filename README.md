# MEMO POO
 [Principe de base de la POO](http://webforce3.altervista.org/wiki/index.php?title=Memo_POO)

## Avantages de la POO
- Réutilisation du code dans différents projets<br>
- Conception plus claire et organisée. Chaque partie du code devient un objet avec un contexte, des propriétés et des actions spécifiques (« Tout est objet » et « 1 classe = 1 rôle »)<br>
- La POO s'inspire du monde réel pour la description des objets (caractéristiques, fonctions, héritage), ce qui facilite l'apprentissage de la logique objet (Exemple des animaux, véhicules..etc)<br>
- Combinée avec les exceptions, elle améliore et centralise la gestion des erreurs et le debug<br>
- Elle permet de faire du code modulaire afin de travailler facilement en équipe<br>
- Elle permet de masquer la complexité, les objets créés sont généralement simples à utiliser. Sur des gros projets complexes, certains devs conçoivent les objets, d'autres devs les utilisent<br>
- Permet d'aller plus loin en utilisant les design patterns pour améliorer encore la qualité et la structuration du code<br>

### Classe
C'est un ensemble de variables et de fonctions (attributs et méthodes).
c'est en gros un plan pour créer un objet.

### Objet
C'est une <b>instance</b> de la classe à utiliser.
Pour créer un nouvel objet, il faut faire précéder le nom de la classe à <b>instancier</b> du mot-clé ``new``:

### Attributs
Il s'agit d'une variable dans une classe. C'est une caractéristique de l'objet qui sera créer à partir du plan(classe).

- #### Les attributs statiques

Un attribut statique appartient à une classe et non à un objet. Ainsi, tous les objets auront accès à cet attribut et cet attribut aura la même valeur pour tous les objets.

La déclaration d'un attribut statique se fait en faisant précéder son nom du mot-clé ``static``.

### Méthodes
Il s'agit de fonctions utilisées dans une classe.


- #### Les méthodes statiques

Les méthodes statiques sont des méthodes qui sont faites pour agir sur une classe et non sur un objet.

Pour déclarer une méthode statique, il faut faire précéder le mot-clé ``function`` du mot-clé ``static`` après le type de visibilité.

### Public / Private
Si un attribut ou une méthode est ``public``, alors on pourra y avoir accès depuis n'importe où, depuis l'intérieur de l'objet (dans les méthodes qu'on a créées), comme depuis l'extérieur.
 
S'il est `` private``, il y a quelques restrictions. On aura accès aux attributs et méthodes seulement depuis l'intérieur de la classe, c'est-à-dire que seul le code voulant accéder à un attribut privé ou une méthode privée écrit(e) à l'intérieur de la classe fonctionnera.

### Accesseurs (ou getters)

C'est une méthode dont le rôle est de renvoyer l'attribut qu'on lui demande. Par convention, ces méthodes portent le même nom que l'attribut dont elles renvoient la valeur.


### Mutateurs (ou setters)

Méthode permettant de modifier un attribut. Ces méthodes sont de la forme ``setNomDeLAttribut()``:


### Abstraction
Une classe abstraite est une classe non instantiable. Elle définie un concept général comme un Animal par exemple. 
Mais on instantiera pas directement un Animal mais un type d'animal comme un poisson qui sera défini dans une class enfant de Animal.
Les animaux vont partager quelques caractéristiques communes mais pas assez pour en créer une instance claire. Il faut redifinir plus de caractéristiques dans une classe enfant pour pouvoir ensuite instancier un objet de type poisson.

## Résumé "opérateurs"

L'opérateur « -> » permet d'accéder à un élément de tel objet

L'opérateur « :: » permet d'accéder à un élément de telle classe.