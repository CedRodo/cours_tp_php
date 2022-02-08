
<h2>Questions générales du TP</h2>

<p>-  Qui est à l'origine de la première version de PHP?

<span class="tabulation">Rasmus Lerdorf.</span>


-  Expliquez en quoi PHP est un langage coté serveur ? Donnez un exemple concret expliquant où s’exécute le code en Front et en back ?

<span class="tabulation">Comme aucun navigateur seul ne peut interpréter directement du PHP, la page contenant du PHP va envoyer une requête HTTP au serveur Apache qui sollicitera lui-même un serveur PHP. Le serveur PHP interprètera la requête pour la renvoyer directement au navigateur.

En local, le navigateur peut suffire à interpréter du HTML, CSS et JavaScript.

En ligne, le navigateur devra au moins faire une requête à un serveur, Apache le plus souvent. 

Le Front peut correspondre à la partie vitrine d'un site, le Back lui concernera la partie invisible pour l'utilisateur, dans laquelle seront gérés différents aspects d'un site tel que l'administration du site, la gestion de la base de données, la partie paiement, etc.</span>


-  Quel est l'opérateur utilisé pour la concaténation ?

<span class="tabulation">L'opérateur utilisé pour la concaténation est le point. Ex. : echo "Je m'appelle".$nom;</span>


-  Que renvoie la fonction strlen() ?

<span class="tabulation">strlen() : renvoie le nombre de caractères entrés. Ex. : strlen('Cedric'); qui doit afficher 6</span>


</p>