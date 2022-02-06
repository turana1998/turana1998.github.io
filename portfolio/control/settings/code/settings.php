<?php

   $data=$CRUD->Select("settings");

   if(isset($_POST["settings"])){
      
      $olcu=$_FILES["sekil"]["size"];
      $tip=$_FILES["sekil"]["type"];
      $ad=$_FILES["sekil"]["name"];
      $tmp=$_FILES["sekil"]["tmp_name"];
      $tipler=["image/png","image/jpg","image/gif","image/jpeg","image/webp"];
      $ksekil=$_POST["ksekil"];
      $yol="../../sekil/logo/".$ad;
      
      if($olcu>0 && !in_array($tip,$tipler) )
      {
         header("Location:settings.php?status=no");
         exit;
      }
       $column="
       title=:title,
       description=:description,
       keywords=:keywords,
       facebook=:facebook,
       instagram=:instagram,
       github=:github,
       email=:email,
       location=:location,
       phone=:phone,
       logo=:logo
       ";

       $arr=[
           "title"=>$_POST["title"],
           "description"=>$_POST["description"],
           "keywords"=>$_POST["keywords"],
           "facebook"=>$_POST["facebook"],
           "instagram"=>$_POST["instagram"],
           "github"=>$_POST["github"],
           "email"=>$_POST["email"],
           "location"=>$_POST["location"],
           "phone"=>$_POST["phone"],
           "logo"=>$olcu>0 ? substr($yol,6) : $ksekil
       ];

 
      if( $CRUD->UPDATE("settings",$column,null,$arr)){
      
         $olcu>0 ? unlink("../../".$ksekil) : "";
         move_uploaded_file($tmp,$yol);
         header("Location:settings.php?status=ok");
         exit;
      }

      else{
         header("Location:settings.php?status=no");
         exit;
      }


     
     }

?>