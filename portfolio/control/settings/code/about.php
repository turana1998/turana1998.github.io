<?php

   $data=$CRUD->Select("settings");
   if (isset($_POST["about"])) {
      $olcu = $_FILES["sekil"]["size"];
      $tip = $_FILES["sekil"]["type"];
      $tmp = $_FILES["sekil"]["tmp_name"];
      $ad = $_FILES["sekil"]["name"];
      $ksekil = $_POST["ksekil"];
      $tipler = ["image/png","image/jpeg","image/gif"];
      $yol = "../../sekil/about/".$ad;
      if ($olcu > 0 && !in_array($tip,$tipler)) {
         header("Location:about-us.php?status=no");       
         exit;
      }
  
      $column = '
      about_title=:title,
      about_description=:descc,
      about_image=:sekil
      ';
      $arr = [
          "title" => $_POST["title"],
          "descc" => $_POST["description"],
          "sekil" => $olcu > 0 ? substr($yol,6) : $ksekil
      ];
  
      if ($CRUD->UPDATE("settings", $column, null, $arr)) {
        
          $olcu > 0 ? unlink("../../".$ksekil) : "";
          
          move_uploaded_file($tmp, $yol);
          header("Location:about-us.php?status=ok");    
          print_r($arr);
          exit;
      } else {
         header("Location:about-us.php?status=no");        
          exit;
      }
  }
?>