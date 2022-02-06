<?php require_once "header.php" ; require_once "navbar.php"; 
require_once "tinymce.php";
require_once "../settings/code/slider.php";
?>
<div class="page-wrapper">
            <div class="container-fluid">
               <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Slider Add </h4>
                    </div>
                    
                </div>
          
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Slider  Add</h4>
                                <form class="form pt-3" enctype="multipart/form-data" action="#"  method="POST">
                                <div class="form-group">
                                        <label>Title</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon11"><i class="ti-write"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="ad" value=""
                                            aria-label="Username" aria-describedby="basic-addon11">
                                        </div>
                                 </div>
                                 <div class="form-group">
                                        <label>Slider Description</label>
                                        <div class="input-group mb-3">
                                            <textarea name="description"  style="height:200px" class="form-control">
                                            
                                            </textarea>
                                          
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label>Link</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon11"><i class="ti-write"></i></span>
                                            </div>
                                            <input type="link" class="form-control" name="link" value=""
                                            aria-label="Username" aria-describedby="basic-addon11">
                                        </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">File Upload4</h4>
                                                <label for="input-file-now-custom-3">You can combine options</label>
                                                <input name="sekil" type="file" id="input-file-now-custom-3" class="dropify" data-height="500" data-default-file="../assets/node_modules/dropify/src/images/test-image-2.jpg" />
                                            </div>
                                        </div>
                                    </div>
                                 <button name="slider_add" type="submit" class="btn btn-success mr-2">Əlavə Et</button>

                                
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
               </div>
            
        </div>


<?php require_once "footer.php" ?>