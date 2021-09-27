<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Subscribe Email List </h3>
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="<?php echo base_url(); ?>evis_app/send_newsletter">Send Newsletter</a></li>
                <li class="active">Subscribe Email List</li>
            </ul>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordred table-striped">
                        <thead>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($all_subscribe as $v_subscribe) {
                                ?>
                                <tr>
                                    <td><?php echo $v_subscribe->subscription_email; ?></td>
                                    <td>
                                        <span style="color:green;">
                                            <?php
                                            if ($v_subscribe->subscription_status == '1') {
                                                echo '<i class="fa fa-check"></i>';
                                            }
                                            ?> 
                                        </span>
                                        <span style="color:red;">    
                                            <?php
                                            if ($v_subscribe->subscription_status == 0) {
                                                echo '<i class="fa fa-times"></i>';
                                            }
                                            ?>   
                                        </span>   
                                    </td>
                                    <td>
                                        <?php
                                        if ($v_subscribe->subscription_status == '1') {
                                            ?>
                                            <a href="<?php echo base_url(); ?>evis_app/deactive_subscription/<?php echo $v_subscribe->subscription_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Deactive Subscription"><i class="fa fa-times"></i></a>
                                            <?php
                                        } else {
                                            ?>
                                            <a href="<?php echo base_url(); ?>evis_app/active_subscription/<?php echo $v_subscribe->subscription_id; ?>" class="btn btn-success" data-toggle="tooltip" title="Active Subscription"><i class="fa fa-check"></i></a>
                                            <?php
                                        }
                                        ?>
                                        <a href="<?php echo base_url(); ?>evis_app/delete_subscription/<?php echo $v_subscribe->subscription_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Subscription" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
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