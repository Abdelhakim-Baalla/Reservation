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
      <td>Pour ce Jour la J'ai commence par la documentation sur le routing de laravel et comment se fonctionne et J'ai connu que le routing exists dans le dossier routes localiser dans le root directory et j'ai focuser sur le fichier web.php qui est responsable de rediricter l'utilisateur a les pages par l'utilisation de <mark>Uri</mark> et de <mark>L'action</mark> dans la method des request comme <b> get </b> ou <b> post </b> en utilise get dans le cas ou l'utilisateur doit aller a une autre page directement mais post il est obligatoire d'envoyer des donnée par l'utilisation d'un formulaire. <br> puis j'ai connu que lorsque nous vaz envoyer des parametre dans notre lien par dans laravel en le pose par cette form <mark style="background: lavender;">'app/{name}'</mark> dans cette exemple lorsque l'utilisateur aller vers la page app l'application va attendre aussi le paramètre name pour l'utiliser <br> Puis J'ai pass a la documentation sur blade et la premier chose qui je connu sur blade et que il avait l'extension .blade.php puis j'ai vu que il peux remplacer ce php code : <mark> <?php echo $var;?></mark> par <mark>{{ $var }}</mark>; dans ce code on peut afficher les variable en plus simple method. Puis pour les condition ou les loop il faut le commencez par le symbole <mark>@</mark> par exemple on a <br> <mark><?php <br> if(true){ <br> echo 'true';}<br> else{<br> 
      echo 'false';}<br> </mark> on peut le ecrire dans blade comme ca <br> <mark>@if(true)<br> 
      true <br> @else <br> false <br> @endif <mark> <br> </td>
    </tr>
    <tr>
      <td>Jour: 4 <br> 20/02/2025</td>
      <td>Pour ce jour la J'ai documenter plus sur blade et j'ai connu que il exists l'heritage dans blade et je le utiliser pour le navbar et le footer etant donnée que je les utiliser pleusieurs fois puis pour les declarer a titre d'exemple dans la page d'admin on ecrire <mark>@extends('nom-de-dossier.nom-de-fichier')</mark> ici pour le nom dossier on le ecrit lorsque les compenents mere ont localiser dans un dossier puis un point puis le nom de fichier sauf l'extension. et aussi j'ai connu que il ya des dirictives dans blade comme @yield et @section qui sont utiliser pour modifier le contenu dans la vue par une maniere dynamique a titre d'exemple le fichier principale navbar contient le code de syntaxe d'html donc lorsque a autre fichier heriter le navbar d'apres le fichier globale le tag titre dans le head il est pas changable par le titre de la page, sa et le role de @yield et @section en effet que dans le fichier navbar on pose ce code dans le tag title: <mark><\title>@yield('titre')<\title> </mark> pour ca on a crée un variable qui va attendre leur valeur pour la placer dans title tag puis on passe a quelqu'un fichier qui heriter depuis ce fichier et on ecrit <mark> @section('titre') <br> le titre de page <br>@endsection </mark> <br>. ensuit apres midi j'ai passe pour la documentation sur les controllers, J'ai connu que on peut accedez au controlleur depuis le route par exemple <mark> <br> Route::controller(SallesController::class)->group(function(){ <br>
          Route::get('salles', 'salles'); <br>
          Route::get('salles/creeSalle', 'creeSalle'); <br>
          Route::get('salles/modifierSalle/{id}', 'modifierSalle'); <br>
          Route::get('salles/supprimerSalle/{id}', 'supprimerSalle'); <br>
          }); <br> </mark> dans ce exemple J'ai crée un group de controlleur SallesController qui contient les cas primaire possible
          de route qui va redirecter l'utilisateur vers le controlleur SallesController mais dans chaque cas il va effuctuer un fonction selectioner dans le route <br> 
          puis je pass a les migration et je connu sur les migration que se sont une schema des tableaux existant dans notre base de donnée et aussi que lorsque on exécuter la commande <mark>php artisan migrate</mark> tout les tables existe dans le dossier migrations ont ajouter a notre base de donnée si ces table n'existe pas et la commande <mark> php artisan migrate:status</mark>il ne donne des information sur l'existance de la table crée dans le dossier migration dans la base de donnée </td>
    </tr>
    <tr>
      <td>Jour: 5 <br> 21/02/2025</td>
      <td>Pour ce jour la j'ai connu que lorsque on va crée un neauveaux tableux dans notre base de donnée on peut utiliser ce commande <mark>php artisan make:migration create_nomDuTable_table</mark> en utilisant ce commande laravel va cree une neauveaux shema d'une table juste dans le dossier migrations et on a nomer cette migration par <mark>create_nomDuTable_table</mark> pour que laravel va crée automatiquement le colonne id qui est auto incrementer et aussi les deux column created at et updated at a la fin on doit runner la commande <mark>php artisan migrate</mark>. puis j'ai vue la commande roolback qui va retourner une pas arrier depuis le dernier migration par le commande <mark>php artisan migrate:roolback</mark> ou <mark>php artisan migrate:roolback --step-5</mark> qui va retourner 5 pas arrier et aussi il ya la commande <mark>php artisan migrate:reset</mark> qui va initialisez tout les migration a zero puis la commande <mark>php artisan migrate:refresh</mark> va faire rollback tout les migration et les crée autrefois mais par ce commande tout notre data va etre supprimer et la commande <mark>php artisan migrate:fresh</mark> va supprimer tout les table et les crée. puis j'ai connu comment ajouter un neauveaux colonne a notre table par la creation d'un neauveaux migration de different nom se forme <mark>php artisan make:migration add_nomDuColonne_to_nomDuTable</mark> par ce commande on va cree un neaveaux fichier de migration dans laquelle on doit ajouter les information de neaveaux colonne dans up fonction et <mark>$table->dropColumn('nom du colonne')</mark> dans down pour nous aider de faire rollback</td>
    </tr>
</table>