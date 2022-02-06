<?php
 $adminSiyahi=$CRUD->Select("admin",1);
 if (isset($_POST["admin_add"])) {
    $olcu=$_FILES["sekil"]["size"];
    $tip=$_FILES["sekil"]["type"];
    $ad=$_FILES["sekil"]["name"];
    $tmp=$_FILES["sekil"]["tmp_name"];
    $tipler=["image/png","image/jpg","image/gif","image/jpeg","image/webp"];
    $yol="img/".$ad;
    if($olcu>0 && !in_array($tip,$tipler) )
    {
       header("Location:admin-add?status=no");
       exit;
    }

    $column = '
    AdSoyad=:x,
    email=:email,
    sifre=:sifre,
    sekil=:sekil,
    icaze=:icaze
    ';
    $arr = [
        "x" => $_POST["adsoyad"],
        "email" => $_POST["email"],
        "sifre" => md5($_POST["sifre"]),
        "sekil"=>$yol,       
        "icaze" => $_POST["icaze"]
    ];
    if( $CRUD->INSERT("admin",$column,$arr) ){
        if($olcu>0){
            move_uploaded_file($tmp,$yol);
            header("Location:admin-add?status=yes");
            exit;
         
        }
        else{
            header("Location:admin-add.php?status=no");
            exit;
         }
    }

}

if(isset($_POST["user"])){
    $olcu=$_FILES["sekil"]["size"];
    $tip=$_FILES["sekil"]["type"];
    $ad=$_FILES["sekil"]["name"];
    $tmp=$_FILES["sekil"]["tmp_name"];
    $tipler=["image/png","image/jpg","image/gif","image/jpeg","image/webp"];
    $yol="img/".$ad;
    $ksekil=$_POST["ksekil"];
    if($olcu>0 && !in_array($tip,$tipler) )
    {
       header("Location:profile?status=no");
       exit;
    }


    $column="
    sekil=:sekil,
    sifre=:sifre
    where email=:mail
    ";
    $arr=[
        "sekil"=>$olcu>0 ? $yol : $ksekil,
        "sifre"=>md5($_POST["sifre"]),
        "mail"=>$_POST["email"]
    ];

    if( $CRUD->UPDATE("admin",$column,null,$arr)){
       if($olcu>0){
           unlink($ksekil);
           move_uploaded_file($tmp,$yol);
           
        
       }
        header("Location:profile.php?status=ok");
        session_destroy();
        exit;
    }


    else{
       header("Location:profile.php?status=no");
       exit;
    }
    
   
  }
  if($_GET["sil"]=="ok"){
    $CRUD->DELETE("admin",$_GET["id"]) ?
    header("Location:admin-list.php?status=ok") :
    header("Location:admin-list.php?status=no") ;
 }
 
?>