<?php require_once "header.php" ; require_once "navbar.php";
require_once "../settings/code/team.php";
?>
<div class="page-wrapper">
            <div class="container-fluid">
               <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Team List</h4>
                    </div>
                    
                </div>
           <!-- Row -->
           <div class="row">
                         <?php for($i=0;$i<count($siyahi);$i++) {?>
                            <div class="col-md-4 col-12">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-responsive" src="../../<?=$siyahi[$i]["sekil"]?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title"><?=$siyahi[$i]["fullname"]?></h4>
                                        <p class="card-text"><?=$siyahi[$i]["description"]?></p>
                                        <a href="javascript:void(0)" class="btn btn-success">Redakte</a>
                                        <a href="javascript:void(0)" class="btn btn-danger">Sil</a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                         <?php }?>
                        </div>
                       
                    </div>
                </div>
               </div>
            
        </div>


        
<?php require_once "footer.php" ?>