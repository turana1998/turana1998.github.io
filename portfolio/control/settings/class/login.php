<?php

class Login{
  
     public function AdminGiris($email,$pass)
   {
       global $CRUD;
       if(!$this->CheckEmail($email)){
           return 0;
       }
       $email=$this->Check(strtolower($email));
       $pass=md5($pass);
       $Login=$CRUD->Select("admin",0,"where email=:email and sifre=:pass",["email"=>$email,"pass"=>$pass]);
       if(!empty($Login)){
           $_SESSION["user_email"]=$email;
           $_SESSION["user_adsoyad"]=$Login["AdSoyad"];
           $_SESSION["user_sekil"]=$Login["sekil"];
           $_SESSION["user_icaze"]=$Login["icaze"];
           return 1;
       }
       else{
           return 0;
       }

   }
   public function CheckEmail($data){
    if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
         return 0;
      }

    return 1;
   }
   public function Check($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  public function CheckSession($data){
    global $CRUD;
    $x=$CRUD->Select("admin",0,"where email=:email",["email"=>$data]);
    if(empty($x)){
      return 1;
    }
  }
}
