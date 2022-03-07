<?php require_once "header.php" ; require_once "navbar.php";
require_once "../settings/code/slider.php";
?>
<div class="page-wrapper">
            <div class="container-fluid">
               <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Slider List</h4>
                    </div>
                    
                </div>
          
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Slider  List</h4>
                               
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Sira</th>
                                                <th>Şəkil</th>
                                                <th>Ad</th>
                                                <th>Description</th>
                                                <th>Link</th>
                                                <th>Əməliyyatlar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for($i=0;$i<count($siyahi);$i++) {?>
                                            <tr class="List">
                                                <td><a href="javascript:void(0)"><?=$siyahi[$i]["id"]?> </a></td>

                                                <td>
                                                    <img width="50px" src="../../<?=$siyahi[$i]["sekil"]?>" alt="sekil"/>
                                                </td>
                                                <td><?=$siyahi[$i]["title"]?></td>
                                                <td><?=$siyahi[$i]["description"]?></td>
                                                <td><?=$siyahi[$i]["link"]?></td>
                                                <td>
                                                    <a href="slider-redakte.php?id=<?=$siyahi[$i]["id"]?>&rdkk=ok"><button class="btn btn-outline-success btn-sm">Redakte Et</button></a>
                                                    <button onclick="SliderSil(<?=$siyahi[$i]['id']?> )" type="button" class="btn btn-outline-danger">Sil</button>
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