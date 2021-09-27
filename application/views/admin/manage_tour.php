<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Manage Tour</h3>
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>evis_travel">Home</a></li>
                <li><a href="<?php echo base_url(); ?>evis_app/add_tour">Add Tour</a></li>
                <li class="active">Manage Tour</li>
            </ul>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <h3 style="color:green">
                    <?php
                    $msg = $this->session->userdata('message');
                    if (isset($msg)) {
                        echo $msg;
                        $this->session->unset_userdata('message');
                    }
                    ?>
                </h3>
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordred table-striped">
                        <thead>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($all_tour as $v_tour) {
                                ?>
                                <tr>
                                    <td><?php echo $v_tour->tour_title; ?></td>
                                    <td>
                                        <div class='activation_color'>
                                            <?php
                                            if ($v_tour->tour_status == '1') {
                                                echo 'Active';
                                            }
                                            ?> 
                                            <div id='color'>    
                                                <?php
                                                if ($v_tour->tour_status == 0) {
                                                    echo 'Inactive';
                                                }
                                                ?>   
                                            </div>    
                                        </div>
                                    </td>
                                    <td>
                                        <?php
                                        if ($v_tour->tour_status == '1') {
                                            ?>
                                            <a href="<?php echo base_url(); ?>evis_app/deactive_tour/<?php echo $v_tour->tour_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Deactive Tour"><i class="fa fa-times"></i></a>
                                            <?php
                                        } else {
                                            ?>
                                            <a href="<?php echo base_url(); ?>evis_app/active_tour/<?php echo $v_tour->tour_id; ?>" class="btn btn-success" data-toggle="tooltip" title="Active Tour"><i class="fa fa-check"></i></a>
                                            <?php
                                        }
                                        ?>
                                        <a href="<?php echo base_url(); ?>evis_app/edit_tour/<?php echo $v_tour->tour_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Edit Tour"><i class="fa fa-pencil-square-o"></i></a>
                                        <a href="<?php echo base_url(); ?>evis_app/delete_tour/<?php echo $v_tour->tour_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Tour" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
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