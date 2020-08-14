<?php
 include 'function\header.php'; 
  admin_or_not(); // ila kan admin ayb9a fl page 
  execute($all_categories);  // $sql = "SELECT * from categories"
 
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">


<!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/40.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2><?php echo $langa['add_article']; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <!--div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Submit Article</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <-- ##### Breadcrumb Area End ##### -->


    <!-- ##### Video Submit Area Start ##### -->
    <div class="video-submit-area" style="padding-top: 50px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <!-- Video Submit Content -->
                    <div class="video-submit-content mb-50 p-30 bg-white box-shadow">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5><?php echo $langa['add_article']; ?></h5>
                        </div>




<?php 
if (isset($_GET['idArticle'])) {

                 $idArticle=$_GET['idArticle'];
                 $sql="SELECT * FROM article,image where article.id_article=image.id_article and article.id_article=$idArticle";
                  execute($sql);
                  if ($r) {
                         if (mysqli_num_rows($r)>0){
                           while ($li=mysqli_fetch_array($r)){

                                 $idArticle=$li['id_article'];
                                 $date=$li['created_at'];
                                 $titre=$li['titre'];
                                 $image=$li['image'];
                                 $description=$li['description'];
                                 $categorie=$li['categorie'];
                                 $lang=$li['language']; 

                                 ?>


                                 <div class="video-info mt-30">

                       <span id="success_message"></span>
                       <span id="success"></span>

                            <form method="post" id="programmer_form" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="upload-file"><?php echo $langa['Image Principale']; ?></label>
                                    <input type="file" class="form-control-file" id="upload-file" name='image' required="required" value="<?php echo $image ?>">
                                </div>
                                <div class="form-group">
                                    <label for="upload-file"><?php echo $langa['title']; ?></label>
                                    <input type="text" class="form-control" name="name" id="name" required="required" value="<?php echo $titre ?>">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="action" id="action" value="insert" />
                                    <label for="upload-file"><?php echo $langa['descrip']; ?></label>
                                    <textarea name="video-description" class="form-control" cols="30" rows="10" required="required" id="descr"><?php echo $description ?></textarea>
                                </div>
                                <div class="form-group" id="badr">
                                     <label><?php echo $langa['key']; ?></label>
                                     <input type="text" required="required" value="Amsterdam,Washington" data-role="tagsinput" class="form-control" name="skill" id="skill" />
                                </div>
                                <div class="form-group">
                                    <label for="upload-file"> <?php echo $langa['Categories']; ?> </label>
                                    
                                      <div class="row">
                                        <div class="col-sm">
                                          <select name="catagory" size="4"  class="form-control" required="required"  id="categ">
                                            <?php
                                              if ($r) {
                                                while ($ligne=mysqli_fetch_array($r)) {
                                            ?>
                                              <option value="<?php echo $ligne['category'] ;?>"><?php echo $ligne['category'] ;?></option>
                                            <?php
                                                }
                                              }else{
                                            ?>
                                            <option value="Error" disabled="disabled">Erreur</option>
                                            <?php
                                              }
                                            ?>
                                              
                                          </select>
                                        </div>

                                        <div class="col-sm">
                                          <select name="sous-catagory" size="4"  class="form-control" required="required"  id="sous-categ">
                                              
                                          </select>
                                        </div>
                                      
                                        <div class="col-sm">
                                          <select name="sous-sous-catagory" size="4"  class="form-control" required="required"  id="sous-sous-categ">
                                              
                                          </select>
                                        </div>
                                      </div>
                                    
                                  <span style="font-size: 14px; font-weight: bold;margin-bottom: 5px;"><?php echo $langa['select'];?></span>
                                    <div class="row">
                                      <div class="col-sm" id="c1">
                                        <span><?php echo $langa['aucune']; ?></span>
                                      </div>
                                      <div class="col-s">
                                        <span>---></span>
                                      </div>
                                      <div class="col-sm" id="c2">
                                        <span><?php echo $langa['aucune']; ?></span>
                                      </div>
                                      <div class="col-s">
                                        <span>---></span>
                                      </div>
                                      <div class="col-sm" id="c3">
                                        <span><?php echo $langa['aucune']; ?></span>
                                      </div>
                                    </div>
                                    
                                   
                                </div>
                                <div class="form-group">
                                    <label for="upload-file"><?php echo $langa['langage']; ?></label>
                                    <select name="video-language" class="form-control" required="required" id="lang" >
                                      <?php
                                        if ($lang==="fr") {
                                      ?>
                                        <option value="fr" selected="selected"><?php echo $langa['lang_fr']; ?></option>
                                        <option value="ar"><?php echo $langa['lang_ar']; ?></option>
                                        <option value="en"><?php echo $langa['lang_en']; ?></option>
                                        <option value="spa"><?php echo $langa['lang_sp']; ?></option>
                                      <?php
                                        }elseif($lang==="ar"){
                                          ?>
                                          <option value="ar" selected="selected"><?php echo $langa['lang_ar']; ?></option>
                                          <option value="fr"><?php echo $langa['lang_fr']; ?></option>
                                          <option value="en"><?php echo $langa['lang_en']; ?></option>
                                        <option value="spa"><?php echo $langa['lang_sp']; ?></option>
                                          <?php
                                        }
                                        elseif($lang==="en"){
                                          ?>
                                          <option value="en" selected="selected"><?php echo $langa['lang_en']; ?></option>
                                          <option value="fr"><?php echo $langa['lang_fr']; ?></option>
                                          <option value="ar"><?php echo $langa['lang_ar']; ?></option>
                                          <option value="spa"><?php echo $langa['lang_sp']; ?></option>
                                          <?php
                                        }else{ ?>

                                          <option value="spa" selected="selected"><?php echo $langa['lang_sp']; ?></option>
                                          <option value="fr"><?php echo $langa['lang_fr']; ?></option>
                                          <option value="ar"><?php echo $langa['lang_ar']; ?></option>
                                          <option value="en"><?php echo $langa['lang_en']; ?></option>
                                     <?php   }
                                      ?>
                                        
                                        
                                    </select>
                                </div>
                                
                                <button type="submit"  class="btn mag-btn mt-30" name="submit" id="submit"><i class="fa fa-cloud-upload"></i> <?php echo $langa['add_article']; ?></button>
                                
                            </form>
                        </div>



<?php
}}} }else{  ?>
<div class="video-info mt-30">

                       <span id="success_message"></span>
                       <span id="success"></span>

                            <form method="post" id="programmer_form" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="upload-file"><?php echo $langa['Image Principale']; ?></label>
                                    <input type="file" class="form-control-file" id="upload-file" name='image' required="required">
                                </div>
                                <div class="form-group">
                                    <label for="upload-file"><?php echo $langa['title']; ?></label>
                                    <input type="text" class="form-control" name="name" id="name" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="action" id="action" value="insert" />
                                    <label for="upload-file"><?php echo $langa['descrip']; ?></label>
                                    <textarea name="video-description" class="form-control" cols="30" rows="10" required="required" id="descr"></textarea>
                                </div>
                                <div class="form-group" id="badr">
                                     <label><?php echo $langa['key']; ?></label>
                                     <input type="text" required="required" value="Amsterdam,Washington" data-role="tagsinput" class="form-control" name="skill" id="skill" />
                                </div>
                                <div class="form-group">
                                    <label for="upload-file"> <?php echo $langa['Categories']; ?> </label>
                                    
                                      <div class="row">
                                        <div class="col-sm">
                                          <select name="catagory" size="4"  class="form-control" required="required"  id="categ">
                                            <?php
                                              if ($r) {
                                                while ($ligne=mysqli_fetch_array($r)) {
                                            ?>
                                              <option value="<?php echo $ligne['category'] ;?>"><?php echo $ligne['category'] ;?></option>
                                            <?php
                                                }
                                              }else{
                                            ?>
                                            <option value="Error" disabled="disabled">Erreur</option>
                                            <?php
                                              }
                                            ?>
                                              
                                          </select>
                                        </div>

                                        <div class="col-sm">
                                          <select name="sous-catagory" size="4"  class="form-control" required="required"  id="sous-categ">
                                              
                                          </select>
                                        </div>
                                      
                                        <div class="col-sm">
                                          <select name="sous-sous-catagory" size="4"  class="form-control" required="required"  id="sous-sous-categ">
                                              
                                          </select>
                                        </div>
                                      </div>
                                    
                                  <span style="font-size: 14px; font-weight: bold;margin-bottom: 5px;"><?php echo $langa['select'];?></span>
                                    <div class="row">
                                      <div class="col-sm" id="c1">
                                        <span><?php echo $langa['aucune']; ?></span>
                                      </div>
                                      <div class="col-s">
                                        <span>---></span>
                                      </div>
                                      <div class="col-sm" id="c2">
                                        <span><?php echo $langa['aucune']; ?></span>
                                      </div>
                                      <div class="col-s">
                                        <span>---></span>
                                      </div>
                                      <div class="col-sm" id="c3">
                                        <span><?php echo $langa['aucune']; ?></span>
                                      </div>
                                    </div>
                                    
                                   
                                </div>
                                <div class="form-group">
                                    <label for="upload-file"><?php echo $langa['langage']; ?></label>
                                    <select name="video-language" class="form-control" required="required" id="lang">
                                        <option value="fr"><?php echo $langa['lang_fr']; ?></option>
                                        <option value="ar"><?php echo $langa['lang_ar']; ?></option>
                                        <option value="en"><?php echo $langa['lang_en']; ?></option>
                                        <option value="spa"><?php echo $langa['lang_sp']; ?></option>
                                        
                                    </select>
                                </div>
                                
                                <button type="submit"  class="btn mag-btn mt-30" name="submit" id="submit"><i class="fa fa-cloud-upload"></i> <?php echo $langa['add_article']; ?></button>
                                
                            </form>
                        </div>

<?php
}
?>





















                        




                    </div>
                </div>
            </div>
        </div>
    </div>

  <!--  hadi diyal descrption -->
     <script  src="css-js/ckeditor/ckeditor.js"></script>
        <script type="text/javascript">
        CKEDITOR.replace('video-description');
       </script>
   <!--  katsali hna -->
    
    <!-- ##### Video Submit Area End ##### -->
    <script type="text/javascript">
      $(document).ready(function(){

        $("#sous-categ").css("display","none");
        $("#sous-sous-categ").css("display","none");

        $(window).keydown(function(event){
            if(event.keyCode == 13) {
              event.preventDefault();
              return false;
            }
         });

        $('#programmer_form').on('submit', function(event){
          for ( instance in CKEDITOR.instances ) {
            CKEDITOR.instances[instance].updateElement();
          }
          
          event.preventDefault();
            
          $('#action').val('insert');    

          $.ajax({
            url:'function/upload.php',
            method:"POST",
            data:new FormData(this),
            contentType:false,
            processData:false,                   
            success:function(response){
            $('#success').html(response);}
          }); 

        });

        $("#categ").change(function(){
        var selectedCategory = $(this).children("option:selected").val();
        var str = "<span>"+selectedCategory+"</span>";
        $("#c1").html(str);
        $.ajax({
            url:'function/setCategories.php',
            method:"POST",
            data:{categ:selectedCategory},
            dataType:'text',                  
            success:function(response){
            $("#sous-categ").css("display","");
            $('#sous-categ').html(response);}
          }); 
        //alert("You have selected the country - " + selectedCountry);
        });

        $("#sous-categ").change(function(){
        var selectedSCategory = $(this).children("option:selected").val();
        var str = "<span>"+selectedSCategory+"</span>";
        $("#c2").html(str);
        $.ajax({
            url:'function/setCategories.php',
            method:"POST",
            data:{sous_categ:selectedSCategory},
            dataType:'text',                  
            success:function(response){
            $("#sous-sous-categ").css("display","");
            $('#sous-sous-categ').html(response);}
          }); 
        //alert("You have selected the country - " + selectedCountry);
        });

        $("#sous-sous-categ").change(function(){
        var selectedSSCategory = $(this).children("option:selected").val();
        var str = "<span>"+selectedSSCategory+"</span>";
        $("#c3").html(str);
        });
    });
</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
    <script type="text/javascript" src="css-js/bootstrap-tagsinput.js"></script>

 <?php include 'function\footer.php'; ?>

</body>

</html>