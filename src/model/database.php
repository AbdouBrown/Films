<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=manage_movies', 'root', '', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    $pdo->exec('SET CHARACTER SET utf8'); 
} catch (Exception $e) {
    echo 'Erreur de connexion a la base de donnees';
}


function recherche($param){
    global $pdo;

}

function detail($id){
    // SELECT * FROM `movie` WHERE `mov_id`= 1
    
    // return un ligne; (fetch()));
}
function addFilm($title,$poster,$actors,$plot,$files,$device,$idCategory){
    global $pdo;
    $request = $pdo->prepare('INSERT INTO `movie` (`mov_id`, `mov_title`, `mov_poster`, `mov_actors`, `mov_plot`, `mov_file_path`, `mov_device`, `category_cat_id`) 
    VALUES (NULL, :title, :poster, :actors, :plot, :files, :device, :idcategory);');
    $request->execute([
        ':title'=> $title, 
        ':poster'=>$poster, 
        ':actors'=>$actors, 
        ':plot'=>$plot, 
        ':files'=>$files, 
        ':device'=>$device, 
        ':idcategory'=>$idCategory
    ]);
}
function category(){
    global $pdo;
    $request = $pdo->query('SELECT * FROM `category`');
    return $request->fetchAll();
}

function getCatalogueElements () 
{
    global $pdo;
    
    $request = $pdo->query('SELECT * FROM movie LIMIT 3');

    return $request->fetchAll(); // retourne tous les résultats
}
