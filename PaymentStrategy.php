<?php

interface PaymentStrategy {
    public function pay(float $amount);
}

/* Design pattern Strategy: 

un patron pour changer dynamiquement le comportement d'un objet en substituant 
l'algorithme qu'il utilise. Relation un-à-un, utilisé pour des choix d'algorithmes 
ou de comportements interchangeables. 

1/ Context: la classe qui utilise une stratégie spécifique. Il a une référence à une 
interface de stratégie.

2/ Strategy: une interface commune à toutes les stratégies possibles. 
Chaque stratégie implémente cette interface.

3/ Concrete Strategies: Ce sont les implémentations spécifiques de l'interface de stratégie. 
Chaque classe concrète implémente un algorithme spécifique.
*/

