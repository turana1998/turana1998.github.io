<?php
$siyahi=$CRUD->Select("slider",1);
if(isset($_POST["slider_add"])){
 
    $olcu=$_FILES["sekil"]["size"];
    $tip=$_FILES["sekil"]["type"];
    $ad=$_FILES["sekil"]["name"];
    $tmp=$_FILES["sekil"]["tmp_name"];
    $tipler=["image/png","image/jpg","image/gif","image/jpeg","image/webp"];
    $yol="../../sekil/slider/".$ad;
    
    if($olcu>0 && !in_array($tip,$tipler) )
    {
       header("Location:slider-add.php?status=no");
       exit;
    }


    $column='
    title=:ad,
    description=:description,
    link=:link,
    sekil=:sekil
    ';
    $arr=[
        "ad"=>$_POST["ad"],
        "description"=>$_POST["description"],
        "link"=>$_POST["link"],
        "sekil"=>substr($yol,6)
    ];

    if( $CRUD->INSERT("slider",$column,$arr)){
     
       move_uploaded_file($tmp,$yol);
       header("Location:slider-add.php?status=ok");
       exit;
    }

    else{
       header("Location:slider-add.php?status=no");
       exit;
    }

   
}

if(isset($_POST["slider_redakte"])){
 
   $olcu=$_FILES["sekil"]["size"];
   $tip=$_FILES["sekil"]["type"];
   $ad=$_FILES["sekil"]["name"];
   $tmp=$_FILES["sekil"]["tmp_name"];
   $tipler=["image/png","image/jpg","image/gif","image/jpeg","image/webp"];
   $yol="../../sekil/slider/".$ad;
   $ksekil=$_POST["ksekil"];
   $id=$_POST["id"];
   if($olcu>0 && !in_array($tip,$tipler) )
   {
      header("Location:slider-list.php?status=no");
      exit;
   }


   $column="
   title=:ad,
   description=:description,
   link=:link,
   sekil=:sekil
   where id = {$id}
   ";
   $arr=[
       "ad"=>$_POST["ad"],
       "description"=>$_POST["description"],
       "link"=>$_POST["link"],
       "sekil"=>$olcu>0 ? substr($yol,6) :substr($ksekil,6)
   ];

   if( $CRUD->UPDATE("slider",$column,null,$arr)){
      if($olcu>0){
          unlink($ksekil);
          move_uploaded_file($tmp,$yol);
          print_r($ksekil);
      }
      
      header("Location:slider-list.php?status=ok");
      exit;
   }

   else{
      header("Location:slider-list.php?status=no");
      exit;
   }

  
 }
 if($_GET["sil"]=="ok"){
   $CRUD->DELETE("slider",$_GET["id"]) ?
   header("Location:slider-list.php?status=ok") :
   header("Location:slider-list.php?status=no") ;
}
if($_GET["rdkk"]=="ok"){
   $rdk=$CRUD->Select("slider",0,"where id=".@$_GET["id"]);
   
}
?>