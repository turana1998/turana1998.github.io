<?php

if($_GET["sil"]=="ok"){
    $CRUD->DELETE("portfolio_kat",$_GET["id"]) ?
    header("Location:portfolio-kat-siyahi.php?status=ok") :
    header("Location:portfolio-kat-siyahi.php?status=no") ;
}
?>