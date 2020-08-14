<?php 

// ----------------------------------------- Tous les requetes ------------------------------------------
$affiche_dernier_article="SELECT * FROM article,image where article.id_article=image.id_article ORDER BY `created_at` DESC LIMIT 5";

//--------------------------------------------------------------------------------------------------------


function execute($sql){
  mysqli_query($con,$sql);
}

?>