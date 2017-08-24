<?php include('header.php') ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">News</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <?php foreach ($news as $new): ?>
                    <div class="col-sm-6" style="margin-top: 5%;">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input class="form-control" type="text" name="title" value="<?= $new->title ?>">
                            </div>

                            <div class="form-group">
                                <label for="text">Content</label>
                                <textarea class="form-control" rows="5" cols="10" name="text">
                                <?= $new->text; ?>
                            </textarea>
                            </div>

                            <div class="form-group">
                                <label for="text">Image</label>
                                <img class="form-control" src="<?= base_url().'public/news/'.$new->image; ?>" style="height:200px;">
                                <input class="form-control" type="hidden" name="newId" value="<?= $new->id; ?>">
                                <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                            </div>
                            
                            <div class="form-group">
                                <input class="btn btn-primary" style="margin-top:5%;" type="submit" name="submit" value="Update">
                            </div>
                        </form>
                    </div>
                <?php endforeach ?>
                
            </div>

        </div>
        <!-- /#page-wrapper -->


<?php include('footer.php') ?>
    
