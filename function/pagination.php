<?
if (isset($_GET['page'])) {
  $page=$_GET['page'];
}
else {
  $page=1;
}

$per_page=2;
$start=$per_page * $page - $per_page;

   $select_all="SELECT * FROM article,image where article.id_article=image.id_article";
    $query_all=mysqli_query($con,$select_all);
    $rows=mysqli_num_rows($query_all);
    $pages=ceil($rows/$per_page);

    ?>