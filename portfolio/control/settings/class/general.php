<?php

   class General {
      public function PageNameGet(){
         return basename($_SERVER['PHP_SELF'],".php"); 
      }
      public function Status($FileName, $sts)
      {
          header("Location:{$FileName}.php?status={$sts}");
      }
      public function Title(){
         global $CRUD;
      
         $arr=[];
          $page=$this->PageNameGet();
       switch($page){
          
          case "about":
            $Title=$CRUD->Select("settings")["about_title"];
            $Desc=strip_tags($CRUD->Select("settings")["about_description"]);
            $Image=$CRUD->Select("settings")["about_image"];
            
            array_push($arr,$Title,$Desc,$Image);
            return $arr;
         case "contact":
            $Location=$CRUD->Select("settings")["location"];
            $Phone=$CRUD->Select("settings")["phone"];
            $Email=$CRUD->Select("settings")["email"];
            array_push($arr,$Location,$Phone,$Email);
            return $arr;
       }
       
       
      }
   }
   
?>