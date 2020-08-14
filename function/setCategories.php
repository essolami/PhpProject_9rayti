<?php
 include "cnx.php";


if (isset($_POST['categ']) && !empty($_POST['categ'])) {

	$categ = $_POST['categ'] ;
	$id_categ='';

	//echo "<option>$categ</option>";
	mysqli_query($con,'SET CHARACTER SET utf8');
	$sql = "SELECT * from categories WHERE category = '".$categ."'";

	$result = mysqli_query($con,$sql);

	if (mysqli_num_rows($result)>0) {

		while ($row = mysqli_fetch_array($result)) {
			$id_categ = $row['id_categ'];
		}
	}

	//echo $id_categ;

	if (!empty($id_categ)) {
		mysqli_query($con,'SET CHARACTER SET utf8');
		$sql = "SELECT * from sous_categories WHERE id_categ = ".$id_categ ;

		$result = mysqli_query($con,$sql);

		if (mysqli_num_rows($result)>0) {

			foreach ($result as $row) {
				echo "<option value='".$row['sous_category']."'>".$row['sous_category']."</option>";
			}
		}else{
			echo "<option disabled>aucune</option>";
		}

	}else{
		echo "<option disabled>error</option>";
	}

}

if (isset($_POST['sous_categ']) && !empty($_POST['sous_categ'])) {
	
	$sous_categ = $_POST['sous_categ'] ;
	$id_s_categ='';

	//echo "<option>$categ</option>";
		mysqli_query($con,'SET CHARACTER SET utf8');
	$sql = "SELECT * from sous_categories WHERE sous_category = '".$sous_categ."'";

	$result = mysqli_query($con,$sql);

	if (mysqli_num_rows($result)>0) {

		while ($row = mysqli_fetch_array($result)) {
			$id_s_categ = $row['id_s_categ'];
		}
	}else{
		echo "<option disabled>error</option>";
	}

	//echo $id_categ;

	if (!empty($id_s_categ)) {
			mysqli_query($con,'SET CHARACTER SET utf8');
		$sql = "SELECT * from sous_sous_categories WHERE id_s_categ = ".$id_s_categ ;

		$result = mysqli_query($con,$sql);

		if (mysqli_num_rows($result)>0) {

			foreach ($result as $row) {
				echo "<option value='".$row['sous_sous_category']."'>".$row['sous_sous_category']."</option>";
			}
		}else{
			echo "<option disabled>Aucune</option>";
		}

	}else{
		echo "<option disabled>error</option>";
	}
}

?>