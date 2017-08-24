<?php include('header.php') ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Testimonials</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row" style="margin-top: 5%;">
                <?php foreach ($testimonials as $x): ?>
                    <div class="col-sm-3">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" name="name" value="<?= $x->name ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input class="form-control" type="text" name="title" value="<?= $x->title ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="color">Text</label>
                                <textarea class="form-control"  name="text" required>
                                    <?= $x->text ?>
                                </textarea>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="uploadId" value="<?= $x->id; ?>">
                                
                            </div>
                            <div class="form-group">
                                <input class=" form-control btn btn-primary" style="margin-top:5%;" type="submit" name="submit" value="Update">
                            </div>
                        </form>
                    </div>
                <?php endforeach ?>
                
            </div>


        </div>
        <!-- /#page-wrapper -->


<?php include('footer.php') ?>
    
