ETU003918

# Niveau 1
## Q1
Le code status est 200;
Le Content-Type est application/json; charset=utf-8.

## Q2
Pour post/9999 on a un code status 404, c'est le client qui doit corriger quelque chose.

## Q3
On a un code 201;
L'identifiant est 101;
Oui l'en-tête Location est présente : https://jsonplaceholder.typicode.com/posts/101.

## Q4
Elle renvoie un code 404;
Cela révèle que c'est une simulation.

## Q5
Elle renvoie un code 200;
On aurait pu avoir un code 4XX comme 404 ou un code 204.

# Niveau 2
## Q6
Apres le POST, l'article n'apparait pas parce qu'elle n'a jamais été ajouté dans leur base de donnée. Ce n'est qu'une simulation.

## Q7
L'en-tête en question est access-control-allow-origin qui est set sur : localhost:8080.

# Niveau 3
## Q8
oui `respondCreated()` renvoie un code 201, il envoie une en-tête Location: /api/livres/5.

## Q9
J'ai choisi 204 (No Content) car la ressource a été supprimée avec succès et il n'y a pas de contenu à renvoyer dans la réponse.

