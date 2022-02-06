<?php
      $siyahi=$CRUD->Select("portfolio_kat",1);
      $portsiyahi=$CRUD->Select("portfolio",1);
      if(isset($_POST["kat-redakte"])){
         $col="
         name=:a
         ";
         $whr="where id=:id";
         $arr=[
         "a"=>$_POST["ad"],
         "id"=>$_POST["id"]
     
         ];
         $CRUD->UPDATE("portfolio_kat",$col,$whr,$arr) ?
         header("Location:portfolio-kat-siyahi.php?status=ok") :
         header("Location:portfolio-kat-siyahi.php?status=no") ;
     }
     if(isset($_POST["port-redakte"])){
        $col="
        ad=:a,
        link=:link
        ";
        $whr="where id=:id";
        $arr=[
        "a"=>$_POST["ad"],
        "id"=>$_POST["id"],
        "link"=>$_POST["link"]
    
        ];
        $CRUD->UPDATE("portfolio",$col,$whr,$arr) ?
        header("Location:portfolio-siyahi.php?status=ok") :
        header("Location:portfolio-siyahi.php?status=no") ;
    }
      if(isset($_POST["port_kat"])){
         $col = "
             name=:x,
             sira=:sira
         ";
         $arr = [
             "x"=>$_POST["ad"],
             "sira"=>$_POST["sira"]
         ];
         $CRUD->INSERT("portfolio_kat",$col,$arr) ? 
          header("Location:portfolio-kat.php?status=ok") : 
          header("Location:portfolio-kat.php?status=no");
     }
     if(isset($_POST["port_add"])){
 
        $olcu=$_FILES["sekil"]["size"];
        $tip=$_FILES["sekil"]["type"];
        $ad=$_FILES["sekil"]["name"];
        $tmp=$_FILES["sekil"]["tmp_name"];
        $tipler=["image/png","image/jpg","image/gif","image/jpeg","image/webp"];
        $yol="../../sekil/portfolio/".$ad;
        
        if($olcu>0 && !in_array($tip,$tipler) )
        {
           header("Location:portfolio-add.php?status=no");
           exit;
        }
  
  
        $column='
        KatId=:id,
        ad=:ad,
        link=:link,
        sekil=:sekil
        ';
        $arr=[
            "id"=>$_POST["katid"],
            "ad"=>$_POST["ad"],
            "link"=>$_POST["link"],
            "sekil"=>substr($yol,6)
        ];
  
        if( $CRUD->INSERT("portfolio",$column,$arr)){
         
           move_uploaded_file($tmp,$yol);
           header("Location:portfolio-add.php?status=ok");
           exit;
        }
  
        else{
           header("Location:portfolio-add.php?status=no");
           exit;
        }
  
       
        }
     
    
    


?>