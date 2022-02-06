<?php
 $siyahi=$CRUD->Select("blogkat",1);
 if(isset($_POST["kat-redakte"])){
    $col="
    name=:a
    ";
    $whr="where id=:id";
    $arr=[
    "a"=>$_POST["ad"],
    "id"=>$_POST["id"]

    ];
    $CRUD->UPDATE("blogkat",$col,$whr,$arr) ?
    header("Location:blog-kat-list.php?status=ok") :
    header("Location:blog-kat-list.php?status=no") ;
}
if(isset($_POST["blog_kat"])){
    $col="
    name=:a
    ";
    $arr=[
    "a"=>$_POST["ad"]
    ];
    $CRUD->INSERT("blogkat",$col,$arr) ?
    header("Location:blog-kat-add.php?status=ok") :
    header("Location:blog-kat-add.php?status=no") ;
}
    if(isset($_POST["ks"])){
        $id = $_POST["id"];
        $where = "where id=:id";
        $arr = ["id"=>$id];
        $st = $CRUD->Select("blogkat",null,$where,$arr,"status")["status"];
    
        $col = "status=:status";
        $array = [
            "status"=>$st==1 ? 0 : 1,
            "id"=>$id
        ];
    echo  $CRUD->UPDATE("blogkat",$col,$where,$array);
}
if($_GET["sil"]=="ok"){
    $CRUD->DELETE("blogkat",$_GET["id"]) ?
    header("Location:blog-kat-list.php?status=ok") :
    header("Location:blog-kat-list.php?status=no") ;
}
if(isset($_POST["blog_add"])){
 
    $olcu=$_FILES["sekil"]["size"];
    $tip=$_FILES["sekil"]["type"];
    $ad=$_FILES["sekil"]["name"];
    $tmp=$_FILES["sekil"]["tmp_name"];
    $tipler=["image/png","image/jpg","image/gif","image/jpeg","image/webp"];
    $yol="../../sekil/blog/".$ad;
    
    if($olcu>0 && !in_array($tip,$tipler) )
    {
       header("Location:blog-add.php?status=no");
       exit;
    }


    $column='
    Kat_id=:id,
    title=:ad,
    description=:description,
    slug=:slug,
    date=:date,
    sekil=:sekil
    ';
    $arr=[
        "id"=>$_POST["katid"],
        "ad"=>$_POST["ad"],
        "description"=>$_POST["description"],
        "slug"=>$_POST["slug"],
        "date"=>$_POST["date"],
        "sekil"=>substr($yol,6)
    ];

    if( $CRUD->INSERT("blog",$column,$arr)){
     
       move_uploaded_file($tmp,$yol);
       header("Location:blog-add.php?status=ok");
       exit;
    }

    else{
       header("Location:blog-add.php?status=no");
       exit;
    }

   
}

  if($_GET["rdk"]=="ok"){
      $rdk=$CRUD->Select("blog",0,"where id=".@$_GET["id"]);
      
  }
  if(isset($_POST["blog_redakte"])){
 
    $olcu=$_FILES["sekil"]["size"];
    $tip=$_FILES["sekil"]["type"];
    $ad=$_FILES["sekil"]["name"];
    $tmp=$_FILES["sekil"]["tmp_name"];
    $tipler=["image/png","image/jpg","image/gif","image/jpeg","image/webp"];
    $yol="../../sekil/blog/".$ad;
    $ksekil=$_POST["ksekil"];
    $id=$_POST["id"];
    if($olcu>0 && !in_array($tip,$tipler) )
    {
       header("Location:blog-list.php?status=no");
       exit;
    }


    $column="
    title=:ad,
    description=:description,
    slug=:slug,
    sekil=:sekil
    where id = {$id}
    ";
    $arr=[
        "ad"=>$_POST["ad"],
        "description"=>$_POST["description"],
        "slug"=>$_POST["slug"],
        "sekil"=>$olcu>0 ? substr($yol,6) :substr($ksekil,6)
    ];

    if( $CRUD->UPDATE("blog",$column,null,$arr)){
       if($olcu>0){
           unlink($ksekil);
           move_uploaded_file($tmp,$yol);
           print_r($ksekil);
       }
       
       header("Location:blog-list.php?status=ok");
       exit;
    }

    else{
       header("Location:blog-list.php?status=no");
       exit;
    }

   
  }
?>