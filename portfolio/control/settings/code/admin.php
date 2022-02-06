<?php

session_start();
ob_start();
require_once '../settings/db.php';

$db=new DBConnection;

require_once '../settings/class/general.php';

$General=new General;

require_once '../settings/class/crud.php';

$CRUD=new CRUD;

require_once '../settings/class/login.php';

$Login=new Login;
if($Login->CheckSession( $_SESSION["user_email"])){
    header("Location:logout.php?status=lierrr");
}
?>