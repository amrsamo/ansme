<?php include('header.php') ?>
        
        



        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Articles</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <?php foreach ($articles as $article): ?>
                    <div class="col-sm-3">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input class="form-control" type="text" name="title" value="<?= $article->title ?>">
                            </div>


                            <div class="form-group">
                                <label for="title">Content</label>
                                <textarea class="form-control" rows="10" cols="20" name="text">
                                    <?= $article->text; ?>
                                </textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="image">Image</label>
                                <img src="<?= base_url().'public/articles/'.$article->image; ?>" height="200px" width="300px">
                                <input type="hidden" name="articleId" value="<?= $article->id; ?>">
                                <input type="file" name="fileToUpload" id="fileToUpload">
                            </div>
                            
                            <div class="form-group">
                                <input class="form-control btn btn-primary" style="margin-top:5%;" type="submit" name="submit" value="Update Article">
                            </div>
                            
                            
                            
                        </form>
                    </div>
                <?php endforeach ?>
                
            </div>

        </div>
        <!-- /#page-wrapper -->


<?php include('footer.php') ?>
    
