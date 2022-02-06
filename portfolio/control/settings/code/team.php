<?php
$siyahi=$CRUD->Select("teams",1);
if(isset($_POST["team_add"])){
 
   $olcu=$_FILES["sekil"]["size"];
   $tip=$_FILES["sekil"]["type"];
   $ad=$_FILES["sekil"]["name"];
   $tmp=$_FILES["sekil"]["tmp_name"];
   $tipler=["image/png","image/jpg","image/gif","image/jpeg","image/webp"];
   $yol="../../sekil/team/".$ad;
   
   if($olcu>0 && !in_array($tip,$tipler) )
   {
      header("Location:team-add.php?status=no");
      exit;
   }


   $column='
   fullname=:ad,
   description=:description,
   sekil=:sekil
   ';
   $arr=[
       "ad"=>$_POST["ad"],
       "description"=>$_POST["description"],
       "sekil"=>substr($yol,6)
   ];

   if( $CRUD->INSERT("teams",$column,$arr)){
    
      move_uploaded_file($tmp,$yol);
      header("Location:team-add.php?status=ok");
      exit;
   }

   else{
      header("Location:team-add.php?status=no");
      exit;
   }

  
}

?>