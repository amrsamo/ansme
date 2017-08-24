<?php include('header.php') ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Team Members</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <?php foreach ($team as $member): ?>
                    <div class="col-sm-3">
                        <form action="#" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control"  type="text" name="name" value="<?= $member->name ?>">
                        </div>
                        <div class="form-group">
                                <label for="title">Title</label>
                                <input class="form-control"  type="text" name="title" value="<?= $member->title ?>">
                        </div>
                        <div class="form-group">
                                <label for="image">Image</label>
                                <img src="<?= base_url().'public/team/'.$member->image; ?>" height="200px" width="300px">
                                <input type="hidden" name="memberId" value="<?= $member->id; ?>">
                                <input class="form-control"  type="file" name="fileToUpload" id="fileToUpload">
                        </div>
                        
                         <div class="form-group">
                                <input class="form-control btn btn-primary" style="margin-top:5%;" type="submit" name="submit" value="Update User">
                        </div>
                            
                            
                        </form>
                    </div>
                <?php endforeach ?>
                
            </div>

        </div>
        <!-- /#page-wrapper -->


<?php include('footer.php') ?>
    
