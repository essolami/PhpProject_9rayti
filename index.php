<?php include 'function\header.php' ;
?>

<!----------------------------- mn hna anjib les donnes diyal affiche lkbira f site ------------------>

    <div class="hero-area owl-carousel">

        <?php 
          execute($affiche_dernier_article);
          if(mysqli_num_rows($r)>0){
          while($row=mysqli_fetch_array($r)){
          recuperer();   
          getCategory($GLOBALS["id_SSCategorie"]);                      
         ?>

        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(<?php echo "img/".$image; ?>);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#" style="color:#e0b3c8"><?php setlocale(LC_TIME, "fr_FR");
                                                      echo date('l d M Y H:i', strtotime($date)); ?></a>
                                <a href="single-post.php?idArticle=<?php echo $idArticle;?>" style="color:#e0b3c8"><?php echo $GLOBALS["category"]; ?></a>
                            </div>
                            <a href="single-post.php?idArticle=<?php echo $idArticle;?>" class="post-title" data-animation="fadeInUp" data-delay="300ms"><?php echo $titre; ?></a>
                            <a href="single-post.php?idArticle=<?php echo $idArticle;?>" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }} ?>  </div>             
        

<!----------------------------- mn hna anjib les donnes diyal affiche lkbira f site ------------------>






    <!-- ##### Mag Posts Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap">

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Left Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5><?php echo $langa['Most_Popular'];?></h5>
                </div>

                <?php
                  execute($affiche_carousel1);
                  if(mysqli_num_rows($r)>0){
                      while($row=mysqli_fetch_array($r)){
                      recuperer();   
                ?>
                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/<?php echo $image; ?>" style="height: 70px;" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title"><?php echo substr($titre,0,28) ?>...</a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>
            <?php }} ?>
                
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
                <a href="#" class="add-img"><img src="img/bg-img/add.png" alt=""></a>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5><?php echo $langa['Latest_Videos'];?></h5>
                </div>
                <?php
                  execute($affiche_dernier_article);
                  if(mysqli_num_rows($r)>0){
                      while($row=mysqli_fetch_array($r)){
                      recuperer();   
                ?>
                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/<?php echo $image;?>" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.html" class="post-title"><?php echo substr($titre,0,28) ?>...</a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                </div>
            <?php }}?>
                
            </div>
        </div>

<!-- >>>>>>>>>>>>>>>>>>>> ------------- Dakshi li lwast -------------------- <<<<<<<<<<<<<<<<<<<<< -->

        <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">

<!------------------------------------------ Affichage Trading ---------------------------------------->

                <div class="trending-now-posts mb-30">
                <div class="section-heading">
                   
                <h5><?php echo $langa['Trending'];?></h5>
                </div>
                <div class="trending-post-slides owl-carousel">

                <?php  execute($affiche_par_views);
                        if(mysqli_num_rows($r)>0){
                        while($row=mysqli_fetch_array($r)){
                        recuperer(); ?>

                    <div class="single-trending-post">
                        <img id="badrrr" src="img/<?php echo $image ?>" alt="">
                        <div class="post-content">
                            <a href="single-post.php?idArticle=<?php echo $idArticle;?>" class="post-cata"><?php echo $category ?></a>
                            <a href="single-post.php?idArticle=<?php echo $idArticle;?>" class="post-title" style="font-size: 14px !important "><?php echo $titre ?>...</a>
                        </div> </div><?php }} ?></div>

<!------------------------------------ Hna Kaysali l'Affichage Trading --------------------------------->

<!------------------------------------ les articles le plus visitée ------------------------------------>

            <div class="feature-video-posts mb-30">
            <div class="section-heading" id="mstafa">
            <h5><?php echo $langa['Featured_Videos'];?></h5>
            </div>
            <div class="featured-video-posts">
            <div class="row">
            <div class="col-12 col-lg-7"> 

          <?php  execute($le_plus_visite);
                        if(mysqli_num_rows($r)>0){
                        while($row=mysqli_fetch_array($r)){
                        recuperer(); ?>
                            <div class="single-featured-post">
                                <!-- Thumbnail -->
                                <div class="post-thumbnail mb-50">
                                    <img src="img/<?php echo $image ?>" alt="">
                                    <a href="single-post.php?idArticle=<?php echo $idArticle;?>" class="video-play"><i class="fa fa-play"></i></a>
                                </div>

                                <div class="post-content">
                                    <div class="post-meta" id="asmaa">
                                        <a href="#" ><?php setlocale(LC_TIME, "fr_FR");
                                                      echo date('l d M Y H:i', strtotime($date)); ?></a>
                                        <a href="single-post.php?idArticle=<?php echo $idArticle;?>"><?php echo $category ?></a>
                                    </div>
                                    <a  href="single-post.php?idArticle=<?php echo $idArticle;?>" class="post-title"><span style="font-size: 17px;"><?php echo $titre ?></span></a>
                                    <?php $pos = strpos($description,'<p>'); ?>
                                    <p> <?php echo substr($description, $pos,$pos+510) ?>...<a href="single-post.php?idArticle=<?php echo $idArticle?>"><span style="/* size: 27px; */color: red;font-size: 18px;font-weight: bold;"> المزيد  </span></a></p>
                                </div>
                                <!-- Post Share Area -->
                                <div class="post-share-area d-flex align-items-center justify-content-between" style="margin-bottom: 20px;">
                                    <!-- Post Meta -->
                                    <div class="post-meta pl-3">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                    </div>
                                    <!-- Share Info -->
                                    <div class="share-info">
                                        <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                        <!-- All Share Buttons -->
                                        <div class="all-share-btn d-flex">
                                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </div></div></div></div> <?php }} ?> </div>

 <!----------------------------   Hna kaysaliw les  articles les plus visitées ------------------------->


 <!-------------------------------------------------------------------------------------------------------------------------------------------- Hna katbda dik l carousel ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>

                            <div class="col-12 col-lg-5">
                            <div class="featured-video-posts-slide owl-carousel">
                            <div class="single--slide">

<!---------------------------------------- Hna katbda dik l carousel 1 ------------------------------->
                   
                   <div class="single--slide">
                         <?php  execute($affiche_carousel1);
                        if(mysqli_num_rows($r)>0){
                        while($row=mysqli_fetch_array($r)){
                        recuperer(); ?>
                                    <div class="single-blog-post d-flex style-3" >
                                        <div class="post-thumbnail">
                                            <img src="img/<?php echo $image; ?>" alt="" >
                                        </div>
                                        <div class="post-content">
                                            <a href="single-post.php?idArticle=<?php echo $idArticle;?>" class="post-title"><?php echo $titre ?></a>
                                            <div class="post-meta d-flex">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                            </div>
                                        </div>
                                    </div>
                       <?php }} ?>         
                   </div>
</div>
<!------------------------ Hna kaysali l'affichage diyal  dik l carousel 1 :) -------------------------->                                  
                            
<!---------------------------------------- Hna katbda dik l carousel 2 ----------------------------->
          <div class="single--slide">
        <?php   execute($affiche_carousel2);
                        if(mysqli_num_rows($r)>0){
                       while($row=mysqli_fetch_array($r)){
                        recuperer(); ?>
                                <div class="single--slide">
                                
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/<?php echo $image ?>"  alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="single-post.php?idArticle=<?php echo $idArticle;?>" class="post-title"> <?php echo $titre ?></a>
                                            <div class="post-meta d-flex">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                            </div>
                                        </div>
                                    </div>
                                       
                                </div> 
                                <?php   }} ?> 
 <!---------------------------------------- Hna katsali dik l carousel 2 ------------------------------->
                            </div>
                        </div>
                    </div>
 <!------------------------------------------------------------------------------------------------------------------------------------------ Hna katsali dik l carousel ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
            </div>
        </div>

            <!-- Most Viewed Videos -->
            <div class="most-viewed-videos mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5><?php echo $langa['Most_Popular'];?></h5>
                </div>

                <div class="most-viewed-videos-slide owl-carousel">
                    <?php 
                        execute($affiche_par_views);
                        if(mysqli_num_rows($r)>0){
                           while($row=mysqli_fetch_array($r)){
                            recuperer();
                    ?>
                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="img/<?php echo $image; ?>" style="height: 200px;" alt="">
                            <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                            <span class="video-duration"><?php setlocale(LC_TIME, "fr_FR");
                                                      echo date('M Y', strtotime($date));?></span>
                        </div>
                        <div class="post-content">
                            <a href="single-post.html" class="post-title"><?php echo $titre;?></a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>
                        </div>
                    </div>

                    <?php  }} ?>
                </div>
            </div>


        </div>
  </div>
</div>
        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
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
    </section>
    <!-- ##### Mag Posts Area End ##### -->

  <?php include 'function\footer.php'; ?>
</body>

</html>