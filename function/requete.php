<?php 
          $sql="SELECT * FROM article,image where article.id_article=image.id_article ORDER BY `created_at` DESC LIMIT 5
";
          $r=mysqli_query($con,$sql);
          if(mysqli_num_rows($r)>0){
            while($row=mysqli_fetch_array($r)){
                            $idArticle=$row['id_article'];
                            $date=$row['created_at'];
                            $titre=$row['titre'];
                            $description=$row['description'];
                            $categorie=$row['categorie'];
                            $lang=$row['language'];
                            $image=$l['image'];
                            $sql3="select * from image where id_article=$idArticle";
                            $r2=mysqli_query($con,$sql3);
                            if ($r2) {
                                if (mysqli_num_rows($r2)>0) {
                                   while ($l=mysqli_fetch_array($r2)) {
                                   
                                         ?>