<?php require_once "header.php" ; require_once "navbar.php";  ;
require_once "../settings/code/slider.php";
require_once "tinymce.php"
?>
<div class="page-wrapper">
            <div class="container-fluid">
               <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Slider Redakte </h4>
                    </div>
                    
                </div>
          
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Slider  Redakte</h4>
                                <form class="form pt-3" enctype="multipart/form-data" action="#"  method="POST">
                                <input type="hidden" name="ksekil" value="../../<?=$rdk["sekil"]?>">
                                <input type="hidden" name="id" value="<?=$rdk["id"]?>">
                                <div class="form-group">
                                        <label>Cari Şəkil</label>
                                        <div class="input-group mb-3">
                                           
                                            <img width="150px"  src="../../<?=$rdk["sekil"]?>">
                                        </div>
                                 </div>
                                <div class="form-group">
                                        <label>Ad</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon11"><i class="ti-write"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="ad" value="<?=$rdk["title"]?>"
                                            aria-label="Username" aria-describedby="basic-addon11">
                                        </div>
                                 </div>
                                 <div class="form-group">
                                        <label>About Description</label>
                                        <div class="input-group mb-3">
                                            <textarea name="description"  style="height:200px" class="form-control">
                                            <?=$rdk["description"]?>
                                            </textarea>
                                          
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label>Link</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon11"><i class="ti-write"></i></span>
                                            </div>
                                            <input type="link" class="form-control" name="link" value=" <?=$rdk["link"]?>"
                                            aria-label="Username" aria-describedby="basic-addon11">
                                        </div>
                                 </div>
                                
                                 <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                         <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                       </div>
                                       <div class="custom-file">
                                       <input name="sekil" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                       <label class="custom-file-label form-control" for="inputGroupFile01">png ,jpg,gif ,jfif</label>
                                      </div>
                                    </div>
                                    
                               
                                 <button name="slider_redakte" type="submit" class="btn btn-success mr-2">Redakte Et</button>

                                
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
               </div>
            
        </div>
<?php require_once "footer.php" ?>