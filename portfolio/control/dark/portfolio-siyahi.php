<?php require_once "header.php" ; require_once "navbar.php";
require_once "../settings/code/portfolio.php";
require_once "../settings/code/port-siyahi.php";
?>
<div class="page-wrapper">
            <div class="container-fluid">
               <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Portfolio List</h4>
                    </div>
                    
                </div>
          
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Portfolio  List</h4>
                                <div id="PortStatusMessage"></div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Sira</th>
                                                <th>Şəkil</th>
                                                <th>Ad</th>
                                                <th>Kategoriya</th>
                                                <th>Link</th>
                                                <th>Status</th>
                                                <th>Əməliyyatlar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for($i=0;$i<count($portsiyahi);$i++) {?>
                                            <tr class="PortfolioSiyahi">
                                            <td><a href="javascript:void(0)"><?=$portsiyahi[$i]["id"]?> </a></td>

                                                <td>
                                                    <img height="50px" src="../../<?=$portsiyahi[$i]["sekil"]?>" alt="sekil"/>
                                                </td>
                                                <td><?=$portsiyahi[$i]["ad"]?></td>
                                                <td><?=$CRUD->Select("portfolio_kat",0,"where id=".$portsiyahi[$i]['KatId'])['name']?></td>
                                                <td><?=$portsiyahi[$i]["link"]?></td>
                                                <td>
                                                  <input type="checkbox" <?=$portsiyahi[$i]["status"] ? 'checked="checked"' :"" ; ?> onchange="PortStatus(<?=$portsiyahi[$i]['id']?>)"   data-size="small"  class="js-switch" data-color="#009efb" />
                                                </td>
                                                <td>
                                                    <button onclick="Redakte_port(<?=$portsiyahi[$i]['id']?>,<?= $i?> )" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" class="btn btn-outline-success btn-sm">Redakte Et</button>
                                                    <button onclick="PortSil(<?=$portsiyahi[$i]['id']?> )"  type="button" class="btn btn-outline-danger">Sil</button>
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


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Category Redact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                    <input  id="id" name="id" type="text" class="form-control">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name:</label>
                        <input id="name" name="ad" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Link:</label>
                        <input id="link" name="link" type="text" class="form-control">
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button name="port-redakte" type="submit" class="btn btn-primary">Edit</button>
                </div>
                    </form>
                </div>
                
                </div>
            </div>
</div>
<?php require_once "footer.php" ?>