<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Manage Gallery </h3>
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="<?php echo base_url(); ?>evis_app/add_gallery">Add Gallery</a></li>
                <li class="active">Manage Gallery</li>
            </ul>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordred table-striped">
                        <thead>
                            <th>Gallery Image</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($all_gallery as $v_gallery) {
                                ?>
                                <tr>
                                    <td><img src="<?php echo base_url().$v_gallery->gallery;?>" style="height:100px; width:100px;" /></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>evis_app/delete_gallery/<?php echo $v_gallery->gallery_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Gallery Picture" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="pull-right">
                        <?php echo $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>