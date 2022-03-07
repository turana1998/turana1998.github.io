<?php require_once "header.php" ; require_once "navbar.php";  ;
require_once "../settings/code/blog.php";
require_once "tinymce.php"
?>
<div class="page-wrapper">
            <div class="container-fluid">
               <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Blog Add </h4>
                    </div>
                    
                </div>
          
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Blog  Add</h4>
                                <form class="form pt-3" enctype="multipart/form-data" action="#"  method="POST">
                                <div class="form-group">
                                        <label>Kategoriya</label>
                                        <select class="form-control" name="katid">
                                            <?php for($i=0;$i<count($siyahi);$i++) {?>
                                            <option value="<?=$siyahi[$i]["id"]?>"><?=$siyahi[$i]["name"]?></option>
                                            <?php }?>
                                        </select>
                                 </div>
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
                                        <label>About Description</label>
                                        <div class="input-group mb-3">
                                            <textarea name="description"  style="height:200px" class="form-control">
                                            
                                            </textarea>
                                          
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label>Slug</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon11"><i class="ti-write"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="slug" value=""
                                            aria-label="Username" aria-describedby="basic-addon11">
                                        </div>
                                 </div>
                                 <div class="form-group">
                                        <label>Date</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon11"><i class="ti-write"></i></span>
                                            </div>
                                            <input type="date" class="form-control" name="date" value=""
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
                                    
                               
                                 <button name="blog_add" type="submit" class="btn btn-success mr-2">Əlavə Et</button>

                                
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
               </div>
            
        </div>
<?php require_once "footer.php" ?>