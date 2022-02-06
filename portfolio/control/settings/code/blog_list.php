<?php
   $blogsiyahi=$CRUD->Select("blog",1);
   if($_GET["sil"]=="ok"){
    $CRUD->DELETE("blog",$_GET["id"]) ?
    header("Location:blog-list.php?status=ok") :
    header("Location:blog-list.php?status=no") ;
 }
 if(isset($_POST["blog-redakte"])){
    $col="
    title=:ad,
    description=:description,
    slug=:slug
    ";
    $whr="where id=:id";
    $arr=[
    "ad"=>$_POST["ad"],
    "id"=>$_POST["id"],
    "description"=>$_POST["description"],
    "slug"=>$_POST["slug"]

    ];
    $CRUD->UPDATE("blog",$col,$whr,$arr) ?
    header("Location:blog-list.php?status=ok") :
    header("Location:blog-list.php?status=no") ;
}
?>