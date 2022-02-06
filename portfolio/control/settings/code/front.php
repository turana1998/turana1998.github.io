<?php 
  ob_start();
  date_default_timezone_set('Asia/Baku');
  require_once 'control/settings/db.php';
  $db=new DBConnection;
  
  require_once 'control/settings/class/general.php';
  
  $General=new General;
   require_once 'control/settings/class/crud.php';
  
  $CRUD=new CRUD;
  $Index=$General->Title();
  $Title=$CRUD->Select("settings")["title"];
  $Desc=$CRUD->Select("settings")["description"];
  $Keywords=$CRUD->Select("settings")["keywords"];
  $Logo=$CRUD->Select("settings")["logo"];
  $Fb=$CRUD->Select("settings")["facebook"];
  $İns=$CRUD->Select("settings")["instagram"];
  $Github=$CRUD->Select("settings")["github"];
  $About_title=$CRUD->Select("settings")["about_title"];
  $About_desc=$CRUD->Select("settings")["about_description"];
  $About_img=$CRUD->Select("settings")["about_image"];
  $Email=$CRUD->Select("settings")["email"];
  $PortKat=$CRUD->Select("portfolio_kat",1,"where status=1");
  $BlogKat=$CRUD->Select("blogkat",1,"where status=1");
  $Blog=$CRUD->Select("blog","where status=1");
  $Slider=$CRUD->Select("slider",1);
  $Team=$CRUD->Select("teams",1);
  $BlogList=$CRUD->Select("blog","where status=1");
  $Portfolio=$CRUD->Select("portfolio",1,"where status=1");
  $PortfolioList=$CRUD->Select("portfolio",1,"where status=1");
  if(@$_GET["PKId"]!=null){
    $Portfolio=$CRUD->Select("portfolio",1,"where status=:st and KatId=:id",["st"=>1,"id"=>@$_GET["PKId"]]);
    if(empty($Portfolio)){
      header("Location:index.php?status=hmmmm");
    }
  }
  if(@$_GET["PId"]!=null){
    $Portfolio=$CRUD->Select("portfolio",0,"where  id=:id",["id"=>@$_GET["PId"]]);
    if(empty($Portfolio)){
      header("Location:index.php?status=hmmmm");
    }
  }
  if(@$_GET["BKId"]!=null){
    $Blog=$CRUD->Select("blog",1,"where status=:st and Kat_id=:id",["st"=>1,"id"=>@$_GET["BKId"]]);
    if(empty($Blog)){
      header("Location:index.php?status=hmmmm");
    }
  }
  if(@$_GET["BId"]!=null){
    $Blog=$CRUD->Select("blog",0,"where  id=:id",["id"=>@$_GET["BId"]]);
    if(empty($Blog)){
      header("Location:index.php?status=hmmmm");
    }
  }
?> 