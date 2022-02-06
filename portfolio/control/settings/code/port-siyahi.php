<?php

if($_GET["sil"]=="ok"){
    $CRUD->DELETE("portfolio",$_GET["id"]) ?
    header("Location:portfolio-siyahi.php?status=ok") :
    header("Location:portfolio-siyahi.php?status=no") ;
 }
 

?>