<?php require_once "header.php"; require_once "navbar.php";
require_once "../settings/code/adminSet.php";
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Admin Add</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Admin Add</h4>
                    <form  enctype="multipart/form-data" class="form pt-3" action="#" method="POST">
                        <div class="form-group">
                            <div class="card-body">
                                <h4 class="card-title">Admin Sekil</h4>
                                <input name="sekil" type="file" id="input-file-now-custom-3" class="dropify"
                                    data-height="500"
                                    data-default-file="../assets/node_modules/dropify/src/images/test-image-2.jpg" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Ad Soyad</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon11"><i class="ti-write"></i></span>
                                </div>
                                <input type="text" class="form-control" name="adsoyad" aria-label="Username"
                                    aria-describedby="basic-addon11">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon11"><i class="ti-write"></i></span>
                                </div>
                                <input type="email" class="form-control" name="email" aria-label="Username"
                                    aria-describedby="basic-addon11">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Sifre</label>
                            <input type="text" class="form-control" name="sifre" id="sifre">
                            <button type="button" onclick="SifreQur()" class="btn btn-outline-warning btn-sm m-1">Sifre
                                qur</button>
                        </div>
                        <div class="form-group">
                            <label>Selahiyyet</label>
                            <div class="form-group">
                                <div class="input-group">

                                    <ul class="icheck-list">
                                        <li>
                                            <input name="icaze" tabindex="7" value="1" type="radio" class="check"
                                                id="minimal-radio-1" name="minimal-radio">
                                            <label for="minimal-radio-1">Admin</label>
                                        </li>
                                        <li>
                                            <input name="icaze" tabindex="8" value="2" type="radio" class="check"
                                                id="minimal-radio-2" name="minimal-radio" checked>
                                            <label for="minimal-radio-2">Moderator</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <button name="admin_add" type="submit" class="btn btn-success mr-2">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "footer.php"?>