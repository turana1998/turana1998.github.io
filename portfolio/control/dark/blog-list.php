<?php require_once "header.php" ; require_once "navbar.php";
require_once "../settings/code/blog_list.php";
?>
<div class="page-wrapper">
            <div class="container-fluid">
               <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Blog List</h4>
                    </div>
                    
                </div>
          
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Blog  List</h4>
                                <div id="BlogStatusMessage"></div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Sira</th>
                                                <th>Şəkil</th>
                                                <th>Ad</th>
                                                <th>Kategoriya</th>
                                                <th>Description</th>
                                                <th>Slug</th>
                                                <th>Status</th>
                                                <th>Əməliyyatlar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for($i=0;$i<count($blogsiyahi);$i++) {?>
                                            <tr class="Blog">
                                                <td><a href="javascript:void(0)"><?=$blogsiyahi[$i]["id"]?> </a></td>

                                                <td>
                                                    <img width="50px" src="../../<?=$blogsiyahi[$i]["sekil"]?>" alt="sekil"/>
                                                </td>
                                                <td><?=$blogsiyahi[$i]["title"]?></td>
                                                <td><?=$CRUD->Select("blogkat",0,"where id=".$blogsiyahi[$i]['Kat_id'])['name']?></td>
                                                <td><?=$blogsiyahi[$i]["description"]?></td>
                                                <td><?=$blogsiyahi[$i]["slug"]?></td>
                                                <td>
                                                  <input type="checkbox" <?=$blogsiyahi[$i]["status"] ? 'checked="checked"' :"" ; ?> onchange="BlogStatus(<?=$blogsiyahi[$i]['id']?>)"   data-size="small"  class="js-switch" data-color="#009efb" />
                                                </td>
                                                <td>
                                                    <a href="blog-redakte.php?id=<?=$blogsiyahi[$i]["id"]?>&rdk=ok"><button class="btn btn-outline-success btn-sm">Redakte Et</button></a>
                                                    <button onclick="BlogSil(<?=$blogsiyahi[$i]['id']?> )" type="button" class="btn btn-outline-danger">Sil</button>
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
                    <h5 class="modal-title" id="exampleModalLabel">Blog Redact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                    <input  id="id" name="id" type="text" class="form-control">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Title:</label>
                        <input id="name" name="ad" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Description:</label>
                        <input id="desc" name="description" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Slug:</label>
                        <input id="slug" name="slug" type="text" class="form-control">
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button name="blog-redakte" type="submit" class="btn btn-primary">Edit</button>
                </div>
                    </form>
                </div>
                
                </div>
            </div>
</div>
<?php require_once "footer.php" ?>