<?php include('header.php') ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Website Content</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h4>Home Page Background Images</h4>
                    <a href="<?= base_url();?>admin/newcontent">
                        <button class="btn btn-success">Add New</button>
                    </a>
                </div>
            </div>
            <div class="row" style="margin-top: 5%;">
                <?php foreach ($images as $image): ?>
                    <div class="col-sm-3">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input class="form-control" type="text" name="title" value="<?= $image->title ?>">
                            </div>
                            <div class="form-group">
                                <label for="subtitle">Sub-Title</label>
                                <input class="form-control" type="text" name="subtitle" value="<?= $image->subtitle ?>">
                            </div>
                            <div class="form-group">
                                <label for="color">Text Color</label>
                                <input class="form-control" type="color" name="color" value="<?= $image->color ?>">
                            </div>

                            <img src="<?= base_url().'public/background/'.$image->path; ?>" height="200px" width="300px">
                            <div class="form-group">
                                <input type="hidden" name="uploadId" value="<?= $image->id; ?>">
                                <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                            </div>
                            <div class="form-group">
                                <input class=" form-control btn btn-primary" style="margin-top:5%;" type="submit" name="submit" value="Update">
                            </div>
                            <div class="form-group">
                                <input class=" form-control btn btn-danger" style="margin-top:5%;" type="submit" name="remove" value="Remove" formnovalidate>
                            </div>
                        </form>
                    </div>
                <?php endforeach ?>
                
            </div>

            <div class="row" style="margin-top: 5%;">
                <form action="#" method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label for="title">Email</label>
                        <input class="form-control" type="text" name="email" value="<?= $info->email ?>"required>
                    </div>


                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input class="form-control" type="text" name="facebook" value="<?= $info->facebook ?>" required>
                    </div>

                     <div class="form-group">
                        <label for="google">Google</label>
                        <input class="form-control" type="text" name="google" value="<?= $info->google ?>" required>
                    </div>

                     <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input class="form-control" type="text" name="instagram" value="<?= $info->instagram ?>" required>
                    </div>

                     <div class="form-group">
                        <label for="twitter">Twitter</label>
                        <input class="form-control" type="text" name="twitter" value="<?= $info->twitter ?>" required>
                    </div>

                     <div class="form-group">
                        <label for="address">Address</label>
                        <input class="form-control" type="text" name="address" value="<?= $info->address ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input class="form-control" type="text" name="phone" value="<?= $info->phone ?>"required>
                    </div>
                    
                    
                    
                    <div class="form-group">
                        <input class="form-control btn btn-primary" style="margin-top:5%;" type="submit" name="submit" value="Update Info">
                    </div>
                    
                    
                    
                </form>
            </div>

        </div>
        <!-- /#page-wrapper -->


<?php include('footer.php') ?>
    
