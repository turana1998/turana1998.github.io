<?php require_once "header.php" ; require_once "navbar.php";  ;
require_once "../settings/code/portfolio.php"
?>
<div class="page-wrapper">
            <div class="container-fluid">
               <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Portfolio Category</h4>
                    </div>
                    
                </div>
          
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Portfolio Category Add</h4>
                                <form class="form pt-3" action="#"  method="POST">
                                <div class="form-group">
                                        <label>Ad</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon11"><i class="ti-write"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="ad" value=""
                                            aria-label="Username" aria-describedby="basic-addon11">
                                        </div>
                                 </div>
                                 <div class="form-group">
                                        <label>Sira</label>
                                        <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon11"><i class="ti-write"></i></span>
                                            </div>
                                          <select class="form-control"  name="sira" id="sira" require="require">
                                             
                                          </select>

                                        </div>
                                 </div>
                                    
                               
                                 <button name="port_kat" type="submit" class="btn btn-success mr-2">Əlavə Et</button>

                                
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
               </div>
            
        </div>
<?php require_once "footer.php" ?>