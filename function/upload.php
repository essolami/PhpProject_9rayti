<?php 
session_start();
include('cnx.php'); 
$id_article='';
$id_sscateg='';
$success='';
$love=false;
if($_POST["action"] == "insert"){

  // ----------------------------------------------------------   recuperer les donnés de l'article

              $name=mysqli_real_escape_string($con,$_POST['name']);
              $descr=$_POST['video-description'];
              $skill=mysqli_real_escape_string($con,$_POST['skill']);
              $categ=mysqli_real_escape_string($con,$_POST['catagory']);
              $sous_categ=mysqli_real_escape_string($con,$_POST['sous-catagory']);
              $sous_sous_categ=mysqli_real_escape_string($con,$_POST['sous-sous-catagory']);
              $lang=mysqli_real_escape_string($con,$_POST['video-language']);

  // ----------------------------------------------------------   recuperer les donnés de l'image 

             $file=$_FILES['image'];
             $fileTmpName=$_FILES['image']['tmp_name'];
             $fileName=$_FILES['image']['name'];
             $fileSize=$_FILES['image']['size'];
             $fileError=$_FILES['image']['error'];
             $fileType=$_FILES['image']['type'];
             $fileExt=explode('.',$fileName);
             $fileActuelExt=strtolower(end($fileExt));
             $allowed=array('jpg','jpeg','png');



  // ------------------------------------------------------------- Teste d'image --------------------


            if(in_array($fileActuelExt,$allowed)){
               if($fileError===0){
                  if ($fileSize<5000000) {
                       $fileNameNew=uniqid('',true).'.'.$fileActuelExt; 
                       $fileDestination='../img/'.$fileNameNew;

 // ------------------------------------------------------------- deplacer  l'image --------------------

                       move_uploaded_file($fileTmpName, $fileDestination);

// ------------------------------------------------------------ bach njbd l id dyal sous sous category --------------------

                       $requete = "SELECT * from sous_sous_categories where sous_sous_category='".$sous_sous_categ."'";
                       $res = mysqli_query($con,$requete);

                       if ($res) {
                       		if (mysqli_num_rows($res)>0) {
                       			while ($ligne=mysqli_fetch_array($res)){
                       				$id_sscateg=$ligne['id_s_scateg'];
                       			}
                       		}
                       }else{
                       	$love = false ;
                       }

 // ------------------------------------------------------------- bash ndakhal article  --------------------


                    $sql="INSERT INTO `article` (`titre`, `categorie`, `language`) VALUES ('$name',$id_sscateg,'$lang')"; 

                    mysqli_query("SET NAMES utf8;");

                   mysqli_query("SET CHARACTER_SET utf8;");

                    if (mysqli_query($con,$sql)) {
                      
                      $sql1="SELECT `id_article` FROM `article` WHERE `titre`='$name' and `categorie`=$id_sscateg and `language`='$lang'";

                      //---------------------  Bash njib l id d l'article li yallah dakhalt 
                        $result= mysqli_query($con,$sql1);
                             if($result){
                             

 // ------------------------------------------------------------- tag badi mn hna   --------------------     
          
               while ($row=mysqli_fetch_array($result)){ 
                $id_article=$row['id_article'];  
                
                 }
                               $tags_id=array();
                               $tags=explode(",",$skill);
                             for ($i=0; $i < sizeof($tags) ; $i++) { 
                                      $sql="INSERT INTO tags (name_tag,id_article) VALUES ('".$tags[$i]."',".$id_article.")";
                                      $r=mysqli_query($con,$sql);
                                        if (!$r) {
                                          $success .= "Un probléme dans le tag";
                                          $love=false;
                                          break;
                                        }else{
                                          $love=true;
                                        }
                               }


                               // ------------------------------------------------------------- bash ndakhal tswira   -------------------- 

             $sql="UPDATE `article` SET `description`='$descr' WHERE id_article='$id_article'"; 

mysqli_query("SET NAMES utf8;");

mysqli_query("SET CHARACTER_SET utf8;");

             @mysqli_query($con,$sql);
                  $query = "INSERT INTO `image` (`image`,`id_article`) VALUES ('$fileNameNew',$id_article)";
                  
                  if(mysqli_query($con,$query)){ 

                    echo "<script type='text/javascript'>document.location.replace('.//single-post.php?idArticle=".$id_article."');</script>";
                    
                        
                    } else { $success .= "$id_article"; $love=false; }

                }else{ $success = " Probléme baach njibo id article </br> ";
                      $love=false; }


 

     // -------------------------------------------------------------  -------------------- 
                 
                   }else{ $success = " Probléme d'insertion L'article </br> ";
                   $love=false; }


 // -------------------------------------------------------------  -------------------- 

                 }else{ $success= "Taille D'image est grand </br>";
               $love=false;}
               }else{ $success= "Un erreur dans l'image";
             $love=false;}
              }else{ $success= "Le type d'image est incorrecte </br>";
            $love=false;}


  if ($love) {
            echo '<div class="alert alert-success" role="alert"> '.$success.' </div>';
        }else{
            echo '<div class="alert alert-danger" role="alert">   '.$success.'   </div>';
        }     
   
          }

 



?>