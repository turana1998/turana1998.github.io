<?php

require_once 'C:\xampp\htdocs\PortflioAllProjects\portfolio\control\settings\db.php';

$db=new DBConnection;

require_once 'C:\xampp\htdocs\PortflioAllProjects\portfolio\control\settings\class\general.php';

$General=new General;

require_once 'C:\xampp\htdocs\PortflioAllProjects\portfolio\control\settings\class\crud.php';

$CRUD=new CRUD;

if(isset($_POST["pks"])){
    $arr=[];
    $data=$CRUD->Select("portfolio_kat",1,null,null,"sira");
    for($i=0;$i<count($data);$i++){
        array_push($arr,$data[$i]["sira"]);
    }
    $data=json_encode($arr);
    print_r($data);
}
if(isset($_POST["ks"])){
        $id = $_POST["id"];
        $where = "where id=:id";
        $arr = ["id"=>$id];
        $st = $CRUD->SELECT("portfolio_kat",null,$where,$arr,"status")["status"];

        $col = "status=:status";
        $array = [
            "status"=>$st==1 ? 0 : 1,
            "id"=>$id
        ];
    echo  $CRUD->UPDATE("portfolio_kat",$col,$where,$array);
    
}
if(isset($_POST["ks"])){
    $id = $_POST["id"];
    $where = "where id=:id";
    $arr = ["id"=>$id];
    $st = $CRUD->SELECT("portfolio",null,$where,$arr,"status")["status"];

    $col = "status=:status";
    $array = [
        "status"=>$st==1 ? 0 : 1,
        "id"=>$id
    ];
   echo  $CRUD->UPDATE("portfolio",$col,$where,$array);

}


