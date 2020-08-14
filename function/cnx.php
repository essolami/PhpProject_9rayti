<?php

// ---------------------------------- tous les globals variable --------------------------- 

$db_host='localhost';
$db_user='root';
$db_pwd='';
$database='9rayti';
$con=new mysqli($db_host,$db_user,$db_pwd,$database) or die("unable to connect");
mysqli_set_charset($con,"utf8");
$r;
$row;
$idArticle;
$date;
$titre;
$image;
$description;
$id_SSCategorie;
$lang;
$category;

// ----------------------------------------- Tous les requetes ------------------------------------------


$affiche_dernier_article="SELECT * FROM article,image where article.id_article=image.id_article ORDER BY `created_at` DESC LIMIT 4";  // index.php

$affiche_par_views="SELECT * FROM article,image where article.id_article=image.id_article ORDER BY `views` DESC LIMIT 4";  // index.php

$le_plus_visite="SELECT * FROM article,image where article.id_article=image.id_article ORDER BY `views` DESC LIMIT 1"; //index.php

$all_categories = "SELECT * from categories";

$affiche_carousel1="SELECT * FROM article,image where article.id_article=image.id_article ORDER BY `views` DESC LIMIT 4 OFFSET 0"; //index.php

$affiche_carousel2="SELECT * FROM article,image where article.id_article=image.id_article ORDER BY `views` DESC LIMIT 4 OFFSET 4"; //index.php
 //header

$affiche_jeuness_article="SELECT * FROM article,image where article.id_article=image.id_article AND article.categorie IN ( SELECT id_s_scateg from sous_sous_categories WHERE id_s_categ IN ( select id_s_categ from sous_categories WHERE id_categ IN ( select id_categ from categories where category=\"Jeunesse\" ) ) ) ORDER By article.views DESC";


//-----------------------------------------------Les fontions--------------------------------------------


    function execute($sql){
       // mysqli_query($GLOBALS['con'],'SET CHARACTER SET utf8');
      $GLOBALS['r']=mysqli_query($GLOBALS['con'],$sql);
      return $GLOBALS['r']; 
    }


    function recuperer(){
     $GLOBALS['idArticle']=$GLOBALS['row']['id_article'];
     $GLOBALS['date']=$GLOBALS['row']['created_at'];
     $GLOBALS['titre']=$GLOBALS['row']['titre'];

     if (file_exists("img/".$GLOBALS['row']['image'])) {
         $GLOBALS['image']=$GLOBALS['row']['image'];
     }else{
        $GLOBALS['image']="bg-img/no-photo.png";
     }
     
     $GLOBALS['description']=$GLOBALS['row']['description'];
     $GLOBALS['id_SSCategorie']=$GLOBALS['row']['categorie'];
     $GLOBALS['lang']=$GLOBALS['row']['language'];
    }

    function getCategory($id_SSCategory){
        // get category
        $s="select * from sous_sous_categories where id_s_scateg=".$id_SSCategory;
        $res=mysqli_query($GLOBALS['con'],$s);

        if ($res) {
            while ($ligne=mysqli_fetch_array($res)) {
               $id_sous_categ=$ligne["id_s_categ"];

               $s1="select * from sous_categories where id_s_categ=".$id_sous_categ;
               $res1=mysqli_query($GLOBALS['con'],$s1);

               if ($res1) {
                   while ($ster=mysqli_fetch_array($res1)) {
                       $id_categ=$ster["id_categ"];
                       $s2="select * from categories where id_categ=".$id_categ;
                       $res2=mysqli_query($GLOBALS['con'],$s2);

                       if ($res2) {
                           while ($col=mysqli_fetch_array($res2)) {
                               $GLOBALS["category"]=$col["category"];
                           }
                       }

                   }
               }
            }
        }
    }


    function admin_or_not(){
         if (!isset($_SESSION['uid']) || $_SESSION['utype']!='admin') {
         echo "<script type='text/javascript'>document.location.replace('./login.php');</script>";
         }
    }


    function numArticle($id_categ){
        $s="select * from sous_categories where id_categ=".$id_categ;
        $compt=0;
        $success=true;
        $str="";
        $r=mysqli_query($GLOBALS["con"],$s);
        if ($r) {
            foreach ($r as $row) {
                $ss="select * from sous_sous_categories where id_s_categ=".$row["id_s_categ"];
                $sr=mysqli_query($GLOBALS["con"],$ss);
                if ($sr) {
                    foreach ($sr as $srow) {
                        $sss="select * from article where categorie=".$srow["id_s_scateg"];
                        $ssr=mysqli_query($GLOBALS["con"],$sss);
                        if ($ssr) {
                           $compt+=mysqli_num_rows($ssr);
                        }else{
                            $success=false;
                            $str="error 3";
                        }
                    
                    //echo $compt;
                    }
                }else{
                    $success=false;
                    $str="error 2";
                }
                
            }
        }else{
            $success=false;
            $str="error 1";
        }

        if (!$success) {
            return $str;
        }else{
            return $compt;
        }

        
    }


?>