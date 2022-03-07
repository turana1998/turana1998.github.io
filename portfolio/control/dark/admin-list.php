<?php require_once "header.php" ; require_once "navbar.php";
require_once "../settings/code/adminSet.php";
?>
<div class="page-wrapper">
            <div class="container-fluid">
               <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Admin List</h4>
                    </div>
                    
                </div>
          
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="admin-add.php">
                                    <button style="float:right;" class="btn btn-outline-danger btn-sm m-2">Admin add</button>
                                </a>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Şəkil</th>
                                                <th>Ad Soyad</th>
                                                <th>Email</th>
                                                <th>Icaze</th>
                                                <th>Əməliyyatlar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php for($i=0;$i<count($adminSiyahi);$i++) {?>
                                            <tr class="Blog">
                                                <td><a href="javascript:void(0)"><?=$adminSiyahi[$i]["id"]?> </a></td>

                                                <td>
                                                    <img height="50px" src="<?=$adminSiyahi[$i]["sekil"]?>" alt="sekil"/>
                                                </td>
                                                <td><?=$adminSiyahi[$i]["AdSoyad"]?></td>
                                                <td><?=$adminSiyahi[$i]["email"]?></td>
                                                <td>
                                                
                                                <?=$adminSiyahi[$i]["icaze"]==1 ?
                                                '<button type="button" class="btn btn-outline-warning">Admin</button>' 
                                                : 
                                                '<button type="button" class="btn btn-outline-success">Moderator</button>'?>
                                            
                                               </td>
                                                <td>
                                                    <button onclick="AdminSil(<?=$adminSiyahi[$i]['id']?> )" type="button" class="btn btn-outline-danger">Sil</button>
                                                </td>
                                            </tr>
                                           <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
               </div>
            
        </div>


<?php require_once "footer.php" ?>