<div id="page-wrapper" >
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Add Gallery</h3>
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="<?php echo base_url(); ?>evis_app/manage_gallery">Manage Gallery</a></li>
                <li class="active">Add Gallery</li>
            </ul>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <h3 style="color:green">
                    <?php
                    $msg = $this->session->userdata('gallery');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('gallery');
                    }
                    ?>
                </h3>
                <form action="<?php echo base_url(); ?>evis_app/save_gallery" method="POST" enctype="multipart/form-data">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label>Gallery Image</label>
                            <input type="file" name="gallery" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Add Gallery</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>