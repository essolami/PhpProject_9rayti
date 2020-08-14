<?php

include "cnx.php";
$a=1;
$success = true;

     // ---------------------------------  Bdaya d searche -------------- 

 if(isset($_POST['txt'])){
	$output='';
	// ------------------------------- requete bash t9alab ---------- 
/*
	$sql="SELECT * FROM `article` WHERE `titre` LIKE '%".$_POST['txt']."%'";
	$result=mysqli_query($con,$sql);
	if (mysqli_num_rows($result)>0){
		foreach($result as $row){
    // ---------------------------------- ila l9at ghadi tktab hadshy --------------- 

   $output .= '<div id="produit"><a href="./single-post.php?idArticle='.$row['id_article'].'"><span>'.$row['titre'].' ('.$row['categorie'].')</span></a></div>';
	
	}

    // ---------------------------------- la fin diyal foreach --------------- 
	
	// ---------------------------------- ila mal9a walo sucees false --------------- 
	}else{
	$success = false;
	}
    //----------------------------------------------------------------------------------
*/

	$sql1="SELECT * FROM `tags` WHERE `name_tag` LIKE '%".$_POST['txt']."%' GROUP BY `id_article` LIMIT 0,10";
	$result1=mysqli_query($con,$sql1);
	if (mysqli_num_rows($result1)!=0){
          
		while ($row=mysqli_fetch_array($result1)) {
			$sql = "select * from article where id_article = ".$row['id_article'];
			
				$r=mysqli_query($con,$sql);
				
			while ($row1=mysqli_fetch_array($r)) {
        
                    
                   
                    $output .= '<div><a href="./single-post.php?idArticle='.$row1['id_article'].'"><span id="produit">'.$a.'- '.$row1['titre'].'</span></a></div>';
                     $output .= '-------------------------------------';
                   $output .= '</br>';
                   $a=$a+1;
                   }
				
				 

			}


		}
	
			
		
		
	else{
	$success = false;
	}

	if ($success == true) {
		echo $output;
	}else{
		echo "aucune resultat trouve";
	}
	

}


?>