<?php require_once "header.php" ; require_once "navbar.php"; 
require_once "../settings/code/settings.php"?>
<div class="page-wrapper">
            <div class="container-fluid">
               <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Settings</h4>
                    </div>
                    
                </div>
          
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Settings Melumatlar</h4>
                                <form class="form pt-3" action="#" enctype="multipart/form-data" method="POST">
                                <div class="form-group">
                                        <label>My Web Site Logo</label>
                                        <br>
                                        <img name="ksekil" height="75px" src="../../<?= $data["logo"]?>" >
                                        <input type="hidden" name="ksekil" value="<?= $data["logo"]?>">
                                    </div>  
                                <div class="form-group">
                                        <label>Title</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon11"><i class="ti-write"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="title" value="<?=$data["title"]?>"
                                            aria-label="Username" aria-describedby="basic-addon11">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon11"><i class="ti-write"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="description"  value="<?=$data["description"]?>"
                                            aria-label="Username" aria-describedby="basic-addon11">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon11"><i class="ti-write"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="keywords" value="<?=$data["keywords"]?>"
                                            aria-label="Username" aria-describedby="basic-addon11">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon11"><i class="ti-write"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="facebook" value="<?=$data["facebook"]?>"
                                            aria-label="Username" aria-describedby="basic-addon11">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon11"><i class="ti-write"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="instagram" value="<?=$data["instagram"]?>"
                                            aria-label="Username" aria-describedby="basic-addon11">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Github</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon11"><i class="ti-write"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="github" value="<?=$data["github"]?>"
                                            aria-label="Username" aria-describedby="basic-addon11">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon11"><i class="ti-write"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="email" value="<?=$data["email"]?>"
                                            aria-label="Username" aria-describedby="basic-addon11">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon11"><i class="ti-write"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="phone" value="<?=$data["phone"]?>"
                                            aria-label="Username" aria-describedby="basic-addon11">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Location</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon11"><i class="ti-write"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="location" value="<?=$data["location"]?>"
                                            aria-label="Username" aria-describedby="basic-addon11">
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                         <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                       </div>
                                       <div class="custom-file">
                                       <input name="sekil" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                       <label class="custom-file-label form-control" for="inputGroupFile01">Logo</label>
                                      </div>
                                    </div>
                               
                                 <button name="settings" type="submit" class="btn btn-success mr-2">Redakte Et</button>

                                
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
               </div>
            
        </div>
<?php require_once "footer.php" ?>