<?php include 'function\header.php' ;?>




    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/41.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2><?php echo $langa['Tous Les Articles']; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> <?php echo $langa['Home']; ?></a></li>
                            <li class="breadcrumb-item"><a href="#"><?php echo $langa['Featured']; ?></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $langa['Archive by Category “TRAVEL”']; ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Archive Post Area Start ##### -->
    <div class="archive-post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
                    <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">


<?php 


if(isset($_POST['abc'])){
    $sqll="SELECT * FROM `article` WHERE 1";
    $r1=mysqli_query($con,$sqll);
    $a=$_POST['top-search'];
     
// ------------------------------------- PAGINATION -------------------------------------------

 if (isset($_GET['page'])) {
  $page=$_GET['page'];
  }else {
  $page=1; }
  $per_page=2;
  $start=$per_page * $page - $per_page;

  $select_all="SELECT * FROM `tags` WHERE `name_tag` LIKE '%".$a."%' GROUP BY `id_article`";
  $query_all=mysqli_query($con,$select_all);
  $rows=mysqli_num_rows($query_all);
  $pages=ceil($rows/$per_page);  

   

// ------------------------------------------------------------------------------------------------


$sql="SELECT * FROM `tags` WHERE `name_tag` LIKE '%".$a."%' GROUP BY `id_article` LIMIT $start,$pages";

$result1=mysqli_query($con,$sql);
    if (mysqli_num_rows($result1)!=0){
          
        while ($row=mysqli_fetch_array($result1)) {
            $sql2 = "select * from article where id_article = ".$row['id_article'];
            
                $r=mysqli_query($con,$sql2);
                
            while ($row1=mysqli_fetch_array($r)) {  

                          $idArticle=$row1['id_article'];
                           $date=$row1['created_at'];
                            $titre=$row1['titre'];
                            //  echo "$titre";
                            $description=$row1['description'];
                            $categorie=$row1['categorie'];
                            $lang=$row1['language'];

                            $sql3="select * from image where id_article=$idArticle";
                                $r2=mysqli_query($con,$sql3);
                                if ($r2) {
                                    if (mysqli_num_rows($r2)>0) {
                                        while ($l=mysqli_fetch_array($r2)) {
                                            $image=$l['image'];
                                        }
                                                             }
                                }

                ?>
<!-- Single Catagory Post -->

                        <div class="single-catagory-post d-flex flex-wrap">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail bg-img" style="background-image: url(<?php echo "img/".$image."" ?>);">
                                
                            </div>

                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">

                                    <a href="#"><?php setlocale(LC_ALL, 'ar_AR');;
                                                      echo date('l d M Y H:i', strtotime($date)); ?></a>
                                    <a href="archive.php"><?php echo $categorie ?></a>
                                </div>

   

                                <a href="single-post.php?idArticle=<?php echo $idArticle ?>" class="post-title"><?php echo $titre; ?></a>
                                <!-- Post Meta -->
                                <div class="post-meta-2">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                </div>
                            </div>
                        </div>

               <?php }

            }
        } else{ echo "<p>Aucun resultat";} ?>

        <!------------------------------------ Pagination ----------------------------------------------------->
                        <nav>
                            <ul class="pagination">
                                    <?php if($page==1){ ?>
                                    <li class="page-item"><a class="page-link" href="archive.php?page=<?=1?>"><i class="ti-angle-left"></i></a></li>
                                    <?php }else{ ?>
                                    <li class="page-item"><a class="page-link" href="archive.php?page=<?= $page-1 ?>"><i class="ti-angle-left"></i></a></li>     
                                     <?php } ?>

                                     <?php for($i = 1; $i <= $pages; $i++){  ?>
                                     <?php  if($i==$page){ ?>

                                        <li class="page-item active"><a class="page-link" href="archive.php?page=<?php echo $i ?>"><?= $i?></a></li>
                                        <?php   }else{ ?>
                                        <li class="page-item"><a class="page-link" href="archive.php?page=<?php echo $i ?>"><?= $i?></a></li>
                                        <?php }} ?>

                                        <?php if($page==$pages){ ?>
                                        <li class="page-item"><a class="page-link" href="archive.php?page=<?= $pages ?>"><i class="ti-angle-right"></i></a></li>
                                        <?php }else{ ?>
                                        <li class="page-item"><a class="page-link" href="archive.php?page=<?= $page+1 ?>"><i class="ti-angle-right"></i></a></li>
                                        <?php } ?>
                            </ul>
                        </nav>

 

<!------------------------------------ Pagination ----------------------------------------------------->
<?php 

}else{

  
// ------------------------------------- PAGINATION -------------------------------------------

 if (isset($_GET['page'])) {
  $page=$_GET['page'];
  }else {
  $page=1; }
  $per_page=6;
  $start=$per_page * $page - $per_page;

  $select_all="SELECT * FROM article,image where article.id_article=image.id_article";
  $query_all=mysqli_query($con,$select_all);
  $rows=mysqli_num_rows($query_all);
  $pages=ceil($rows/$per_page);  
  $select_par_page="SELECT * FROM article,image where article.id_article=image.id_article ORDER BY `views` DESC LIMIT $start,$per_page"; //archive.php
   execute($select_par_page);

// ------------------------------------------------------------------------------------------------
   

 if ($r) {
                         if (mysqli_num_rows($r)>0) {
                           while ($li=mysqli_fetch_array($r)){

                                 $idArticle=$li['id_article'];
                                 $date=$li['created_at'];
                                 $titre=$li['titre'];
                                 $image=$li['image'];
                                 $description=$li['description'];
                                 $categorie=$li['categorie'];
                                 $lang=$li['language'];

                                
                            
                            ?>                          
                         <!-- Single Catagory Post -->
                        <div class="single-catagory-post d-flex flex-wrap">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail bg-img" style="background-image: url(<?php echo "img/".$image."" ?>);">
                                
                            </div>

                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#"><?php setlocale(LC_TIME, "fr_FR");
                                                      echo date('l d M Y H:i', strtotime($date)); ?></a>
                                    <a href="archive.php"><?php echo $categorie ?></a>
                                </div>
                               <a href="single-post.php?idArticle=<?php echo $idArticle;?>" class="post-title"><?php echo $titre; ?></a>
                                <!-- Post Meta -->
                                <div class="post-meta-2">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                </div>
                            </div>
                        </div>

  <?php } } }?>
   <!------------------------------------ Pagination ----------------------------------------------------->
                        <nav>
                            <ul class="pagination">
                                    <?php if($page==1){ ?>
                                    <li class="page-item"><a class="page-link" href="archive.php?page=<?=1?>"><i class="ti-angle-left"></i></a></li>
                                    <?php }else{ ?>
                                    <li class="page-item"><a class="page-link" href="archive.php?page=<?= $page-1 ?>"><i class="ti-angle-left"></i></a></li>     
                                     <?php } ?>

                                     <?php for($i = 1; $i <= $pages; $i++){  ?>
                                     <?php  if($i==$page){ ?>

                                        <li class="page-item active"><a class="page-link" href="archive.php?page=<?php echo $i ?>"><?= $i?></a></li>
                                        <?php   }else{ ?>
                                        <li class="page-item"><a class="page-link" href="archive.php?page=<?php echo $i ?>"><?= $i?></a></li>
                                        <?php }} ?>

                                        <?php if($page==$pages){ ?>
                                        <li class="page-item"><a class="page-link" href="archive.php?page=<?= $pages ?>"><i class="ti-angle-right"></i></a></li>
                                        <?php }else{ ?>
                                        <li class="page-item"><a class="page-link" href="archive.php?page=<?= $page+1 ?>"><i class="ti-angle-right"></i></a></li>
                                        <?php } ?>
                            </ul>
                        </nav>



<!------------------------------------ Pagination ----------------------------------------------------->


                    <?php } ?>








                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xl-4">









 <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Social Followers Info -->
                <div class="social-followers-info">
                    <!-- Facebook -->
                    <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i> 4,360 <span> <?php echo $langa['Fans'] ?></span></a>
                    <!-- Twitter -->
                    <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i> 3,280 <span> <?php echo $langa['Followers'] ?></span></a>
                    <!-- YouTube -->
                    <a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i> 1250 <span> <?php echo $langa['Subscribers'] ?></span></a>
                    <!-- Google -->
                    <a href="#" class="google-followers"><i class="fa fa-google-plus"></i> 4,230 <span> <?php echo $langa['Followers'] ?></span></a>
                </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5><?php echo $langa['Categories'];?></h5>
                </div>

                <!-- Catagory Widget -->
                <ul class="catagory-widgets">
                     <?php
                   $sql="select * from categories";
                   $r=mysqli_query($GLOBALS["con"],$sql);

                   if ($r) {
                       foreach ($r as $row) {
                      ?>
                       <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true" style="margin-right: 20px;"> </i><?php echo $row["category"]?></span> <span><?php echo numArticle($row["id_categ"]);?></span></a></li>
                      <?php  
                           
                       }
                   }

                ?>
                    
                </ul>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
                <a href="#" class="add-img"><img src="img/bg-img/add2.png" alt=""></a>
            </div>

            <!-- Sidebar Widget -->


            <!-- Sidebar Widget -->
       
            </div>







                
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Archive Post Area End ##### -->

<?php include 'function\footer.php'; ?>
</body>

</html>