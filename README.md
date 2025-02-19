## Retro Spective
 <table>
    <tr>
      <th>Jour</th>
      <th>Resumé</th>
    </tr>
    <tr>
      <td>Jour: 1 <br> 17/02/2025</td>
      <td>Dans Cette Jour J'ai Documenter sur Comment Installez Laravel par l'utilisation du command composercreate-project laravel/laravel:^9.0 example-app et laravel new App</td>
    </tr>
    <tr>
      <td>Jour: 2 <br> 18/02/2025</td>
      <td>Dans Cette Jour J'ai changer la version de php qui je utiliser de php 8.4 vers 8.3 car j'ai avait un probleme au niveaux de la commande <mark>php artisan serve</mark> lorsque je les excuter j'ai recoit des erreur Warning. Puis j'ai configurer la base de donner par le changement des variables d'envirenement et difinir le type de système de gestion de base des donnée au pgsql (PostgreSQL). ensuite j'ai vue les models qui represent la laison entre notre application et la base de donnée pour la communication entre les tableaux et l'on crée par ce comande <mark>php artisan make:model Exemple </mark></td>
    </tr>
    <tr>
      <td>Jour: 3 <br> 19/02/2025</td>
      <td>Pour ce Jour la J'ai commence par la documentation sur le routing de laravel et comment se fonctionne et J'ai connu que le routing exists dans le dossier routes localiser dans le root directory et j'ai focuser sur le fichier web.php qui est responsable de rediricter l'utilisateur a les pages par l'utilisation de <mark>Uri</mark> et de <mark>L'action</mark> dans la method des request comme <b> get </b> ou <b> post </b> en utilise get dans le cas ou l'utilisateur doit aller a une autre page directement mais post il est obligatoire d'envoyer des donnée par l'utilisation d'un formulaire. <br> puis j'ai connu que lorsque nous vaz envoyer des parametre dans notre lien par dans laravel en le pose par cette form <mark style="background: lavender;">'app/{name}'</mark> dans cette exemple lorsque l'utilisateur aller vers la page app l'application va attendre aussi le paramètre name pour l'utiliser <br> Puis J'ai pass a la documentation sur blade et la premier chose qui je connu sur blade et que il avait l'extension .blade.php puis j'ai vu que il peux remplacer ce php code : <mark> <?php echo $var;?></mark> par <mark>{{ $var }}</mark>; dans ce code on peut afficher les variable en plus simple method. Puis pour les condition ou les loop il faut le commencez par le symbole <mark>@</mark> par exemple on a <br> <mark>if(true){ <br> echo 'true';}<br> else{<br> 
      echo 'false';}<br> </mark> on peut le ecrire dans blade comme ca <br> <mark>@if(true)<br> 
      true <br> @else <br> false <mark> <br> </td>
    </tr>
</table>