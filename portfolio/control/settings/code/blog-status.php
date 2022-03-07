<?php

require_once 'C:\xampp\htdocs\PortflioAllProjects\portfolio\control\settings\db.php';

$db=new DBConnection;

require_once 'C:\xampp\htdocs\PortflioAllProjects\portfolio\control\settings\class\general.php';

$General=new General;

require_once 'C:\xampp\htdocs\PortflioAllProjects\portfolio\control\settings\class\crud.php';

$CRUD=new CRUD;


if(isset($_POST["ks"])){
        $id = $_POST["id"];
        $where = "where id=:id";
        $arr = ["id"=>$id];
        $st = $CRUD->SELECT("blogkat",null,$where,$arr,"status")["status"];

        $col = "status=:status";
        $array = [
            "status"=>$st==1 ? 0 : 1,
            "id"=>$id
        ];
    echo  $CRUD->UPDATE("blogkat",$col,$where,$array);
    
}
if(isset($_POST["ks"])){
    $id = $_POST["id"];
    $where = "where id=:id";
    $arr = ["id"=>$id];
    $st = $CRUD->SELECT("blog",null,$where,$arr,"status")["status"];

    $col = "status=:status";
    $array = [
        "status"=>$st==1 ? 0 : 1,
        "id"=>$id
    ];
echo  $CRUD->UPDATE("blog",$col,$where,$array);

}
