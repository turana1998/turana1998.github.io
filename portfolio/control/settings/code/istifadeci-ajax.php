<?php

require_once 'C:\xampp\htdocs\PortflioAllProjects\portfolio\control\settings\db.php';

$db=new DBConnection;

require_once 'C:\xampp\htdocs\PortflioAllProjects\portfolio\control\settings\class\general.php';

$General=new General;

require_once 'C:\xampp\htdocs\PortflioAllProjects\portfolio\control\settings\class\crud.php';

$CRUD=new CRUD;


if(isset($_POST["ksifre"])){
        $email = $_POST["email"];
        $sifre=md5( $_POST["sifre"]);
        $where = "where email=:email";
        $arr = ["email"=>$email];
        $sfr = $CRUD->SELECT("admin",null,$where,$arr,"sifre")["sifre"];  
        
        if($sifre==$sfr){  
            echo 1;
        }
        else{
            echo 0;
        }
    
}
