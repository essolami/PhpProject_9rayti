<?php
//header('Content-type: text/html; charset=utf-8');
include 'config.php';
include "cnx.php";

//unset($_SESSION['uid']);
if (isset($_SESSION['uid'])) {
    if (isset($_SESSION['utype']) && !empty($_SESSION['utype'])) {
        $type=$_SESSION['utype'];
    }
}
if (isset($_POST['register'])) {
    
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password);
   $fullname=$fname.' '.$lname;
   $sql="insert into users (fullname,email,password,type) values ('$fullname','$email','$password','user')";
   //mysqli_query($con,'SET CHARACTER SET utf8');
   @mysqli_query($con,$sql) or die('error please try again later');

   $sql="select * from users where email='$email';";
   //mysqli_query($con,'SET CHARACTER SET utf8');
   $r=mysqli_query($con,$sql);
   if (mysqli_num_rows($r)>0) {
       while ($ligne=mysqli_fetch_array($r)) {
           $uid=$ligne['id'];
           $type=$ligne['type'];
       }

       $_SESSION['uid']=$uid;
       $_SESSION['utype']=$type;
       echo "<script type='text/javascript'>document.location.replace('./index.php');</script>";

   }

}
if (isset($_GET['logout']) && !empty($_GET['logout'])) {
    unset($_SESSION['uid']);
     echo "<script type='text/javascript'>document.location.replace('../index.php');</script>";
}
if (isset($_POST['login'])) {
    //die("dkhal");
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql="select * from users where email='$email'";
   //mysqli_query($con,'SET CHARACTER SET utf8');
    $r = mysqli_query($con,$sql);
    if (mysqli_num_rows($r)>0) {
        while ($ligne=mysqli_fetch_array($r)) {
            $uid=$ligne['id'];
            $p=$ligne['password'];
            $em=$ligne['email'];
            $type=$ligne['type'];
         }

         if ($password===$p) {
            $_SESSION['uid']=$uid;
            $_SESSION['utype']=$type;

            echo "<script type='text/javascript'>document.location.replace('./index.php');</script>";
        }else{
            die("email wla mdp ".$email." ".$em." ".$password." ".$p);
        }
         }else{
            die("chi haja ghalta ");
         }
    }
   

   if (isset($_GET['idArticle']) && !empty($_GET['idArticle'])) {
        $idArticle=$_GET['idArticle'];
       $sql="select * from article where id_article=$idArticle";
     // mysqli_query($con,'SET CHARACTER SET utf8');
       $r=mysqli_query($con,$sql);
       if ($r) {
           if (mysqli_num_rows($r)>0) {
               while ($ligne=mysqli_fetch_array($r)) {
                   $titre=$ligne['titre'];
                 //  echo "$titre";
                   $description=$ligne['description'];
                   $categorie=$ligne['categorie'];
                   $lang=$ligne['language'];
                   $date=$ligne['created_at'];
                   //$tags=$ligne['tags'];
               }
           }
       }

       $sql="select * from image where id_article=$idArticle";
    //   mysqli_query($con,'SET CHARACTER SET utf8');
       $r=mysqli_query($con,$sql);
       if ($r) {
           if (mysqli_num_rows($r)>0) {
               while ($ligne=mysqli_fetch_array($r)) {
                   $image=$ligne['image'];
               }
           }
       }
   }

  
?>


<!DOCTYPE html>
<html lang="ar">

<head>
    <link rel="stylesheet" type="text/css" href="css-js\badr_hamza.css">
    <meta http-equiv="Content-type" charset="UTF-8" />
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>9rayti - Article/Video &amp; Magazine</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js-bootstrap-css/1.2.1/typeaheadjs.css"  rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

 

</head>

<body>

    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="magNav">

                    <!-- Nav brand -->
                    <a href="index.php" class="nav-brand"><img src="img/core-img/<?php echo $langa['img1']?>" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Nav Content -->
                    <div class="nav-content d-flex align-items-center">
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>








                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="index.php"><?php echo $langa['Acceuil'];?></a></li>
                                    <li><a href="archive.php?page=1"><?php echo $langa['Articles'];?></a></li>
                                  <?php   $langa['Featured_Videos']; ?>


                                <?php
    
                                if (isset($_SESSION['langa']) && $_SESSION['langa']=="en") {
                                  $sql = "SELECT * FROM `categories` WHERE `lang`='en'";
                                    // mysqli_query($con,'SET CHARACTER SET utf8');
                                    $res = mysqli_query($con,$sql);
                                
                                    

                                 ?>
                                    <li><a href="#"><?php echo $langa['Categories'];?></a>
                                        <ul class="dropdown">
                                          <?php
                                              if ($res) {
                                                foreach ($res as $row) {
                                                   echo '<li><a href="#">'.$row["category"].'</a>';
                                                   echo '<ul class="dropdown" style="width:200px; PADDING-LEFT: 10px;">';
                                                   $requete = "select * from sous_categories where id_categ=".$row["id_categ"];
                                                 //  mysqli_query($con,'SET CHARACTER SET utf8');
                                                   $res1=mysqli_query($con,$requete);

                                                   if ($res1) {
                                                     foreach ($res1 as $ligne) {
                                                       echo '<li style="height:auto; padding:0px;"><div><a href="#" style="padding:0px">'.$ligne["sous_category"].'</a></div>';
                                                       echo '<ul class="dropdown" style="left: 190px;">';
                                                       $requete1 = "select * from sous_sous_categories where id_s_categ=".$ligne["id_s_categ"];
                                                      // mysqli_query($con,'SET CHARACTER SET utf8');
                                                       $res2=mysqli_query($con,$requete1);

                                                       if ($res2) {
                                                         foreach ($res2 as $col) {
                                                           echo '<li><a href="archive.php?categ='.$col['id_s_scateg'].'" style="padding-right: 0px;">'.$col["sous_sous_category"].'</a></li>';
                                                         }
                                                       }

                                                       echo "</ul></li>";
                                                      }
                                                   }

                                                   echo "</ul></li>";
                                                }
                                              }
                                            }
                                          ?>
<?php

                            if (isset($_SESSION['langa']) && $_SESSION['langa']=="ar") {
                                  $sql = "SELECT * FROM `categories` WHERE `lang`='ar'";
                                    // mysqli_query($con,'SET CHARACTER SET utf8');
                                    $res = mysqli_query($con,$sql);
                                
                                    

                                 ?>
                                    <li><a href="#"><?php echo $langa['Categories'];?></a>
                                        <ul class="dropdown">
                                          <?php
                                              if ($res) {
                                                foreach ($res as $row) {
                                                   echo '<li><a href="#">'.$row["category"].'</a>';
                                                   echo '<ul class="dropdown" style="width:200px; PADDING-LEFT: 10px;">';
                                                   $requete = "select * from sous_categories where id_categ=".$row["id_categ"];
                                                 //  mysqli_query($con,'SET CHARACTER SET utf8');
                                                   $res1=mysqli_query($con,$requete);

                                                   if ($res1) {
                                                     foreach ($res1 as $ligne) {
                                                       echo '<li style="height:auto; padding:0px;"><div><a href="#" style="padding:0px">'.$ligne["sous_category"].'</a></div>';
                                                       echo '<ul class="dropdown" style="left: 190px;">';
                                                       $requete1 = "select * from sous_sous_categories where id_s_categ=".$ligne["id_s_categ"];
                                                      // mysqli_query($con,'SET CHARACTER SET utf8');
                                                       $res2=mysqli_query($con,$requete1);

                                                       if ($res2) {
                                                         foreach ($res2 as $col) {
                                                           echo '<li><a href="archive.php?categ='.$col['id_s_scateg'].'" style="padding-right: 0px;">'.$col["sous_sous_category"].'</a></li>';
                                                         }
                                                       }

                                                       echo "</ul></li>";
                                                      }
                                                   }

                                                   echo "</ul></li>";
                                                }
                                              }
                                            }
                                          ?>







                                            <li><a href="index.php"><?php echo $langa['Home'];?> </a></li>
                                            <li><a href="archive.php"><?php echo $langa['Archive'];?></a></li>
                                            
                                            <li><a href="about.php"><?php echo $langa['About_Us'];?></a></li>
                                            <li><a href="contact.php"><?php echo $langa['Contact'];?></a></li>
                                            <li><a href="submit-video.php"><?php echo $langa['Submit_Post'];?></a></li>
                                            <li><a href="login.php"><?php echo $langa['Login'];?></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><?php echo $langa['Forum'];?></a></li>
                                    <li><a href="about.php"><?php echo $langa['About_Us'];?></a></li>
                                    <li><a href="contact.php"><?php echo $langa['Contact'];?></a></li>
                                    <li><a href="index.php?langa=ar"><?php echo $langa['lang_ar'];?></a></li>
                                    <li><a href="index.php?langa=en"><?php echo $langa['lang_en'];?></a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <div class="top-meta-data d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="archive.php" method="post">
                                    <input type="search" name="top-search" id="topSearch" placeholder="<?php echo $langa['search'];?>" autocomplete="off">
                                    <button name="abc" type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    <div id="show"></div>
                                </form>
                            </div>
                            <!-- Login -->
                            <?php
                                if (isset($_SESSION['uid']) && !empty($_SESSION['uid'])) {
                                    echo '<a href="./function/header.php?logout=1" class="nav-link logout" style="margin-right: auto;"> <span class="d-none d-sm-inline-block">'.$langa['Logout'].'</span><i style="margin-left: 5px;" class="fa fa-sign-out"></i></a>';
                                }else{
                                    echo '<a href="login.php" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>"';
                                    }
                            ?>
                            <?php  
                                if (isset($type) && !empty($type)) {
                                    if ($type==="admin") {
                                       echo "<a href=\"submit-video.php\" class=\"submit-video\"><span><i class=\"fa fa-cloud-upload\"></i></span> <span class=\"video-text\">".$langa['Submit Post']."</span></a>";
                                    }
                                }

                            ?>
                              

                            <!-- Submit Video -->
                            
                        </div>
                    </div>
                </nav>
            </div>
        </div>
               
    </header>
    <!-- ##### Header Area End ##### -->

      <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){

        $('#topSearch').keyup(function(){
          var txt = $('#topSearch').val();
          //alert(txt);
          if (txt != '') {
            $.ajax({
              url:'function/search.php',
              method:'POST',
              data:{txt:txt},
              dataType:'text',
              success:function(data){
                $('#show').css("display","block");
                $('#show').html(data);
              }
            });
          }else{
            $('#show').css("display","none");
          }
        });

      });
    </script>