<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Manage User </h3>
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="active">Manage User</li>
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
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($all_user as $v_user) {
                                ?>
                                <tr>
                                    <td><?php echo $v_user->username; ?></td>
                                    <td><?php echo $v_user->password; ?></td>
                                    <td><?php echo $v_user->email; ?></td>
                                    <td>
                                        <div class='activation_color'>
                                            <?php
                                            if ($v_user->user_status == '1') {
                                                echo 'Active';
                                            }
                                            ?> 
                                            <div id='color'>    
                                                <?php
                                                if ($v_user->user_status == 0) {
                                                    echo 'Inactive';
                                                }
                                                ?>   
                                            </div>    
                                        </div>
                                    </td>
                                    <td>
                                        <?php
                                        if ($v_user->user_status == '1') {
                                            ?>
                                            <a href="<?php echo base_url(); ?>evis_app/deactive_user/<?php echo $v_user->user_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Deactive User"><i class="fa fa-times"></i></a>
                                            <?php
                                        } else {
                                            ?>
                                            <a href="<?php echo base_url(); ?>evis_app/active_user/<?php echo $v_user->user_id; ?>" class="btn btn-success" data-toggle="tooltip" title="Active User"><i class="fa fa-check"></i></a>
                                            <?php
                                        }
                                        ?>
                                        <a href="<?php echo base_url(); ?>evis_app/edit_user/<?php echo $v_user->user_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Edit User"><i class="fa fa-pencil-square-o"></i></a>
                                        <a href="<?php echo base_url(); ?>evis_app/delete_user/<?php echo $v_user->user_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete User" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
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