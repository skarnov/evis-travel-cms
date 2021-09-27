<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Welcome To Evis Travel Website Administrator Panel </h3>
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>evis_travel" target="_blank">Home</a></li>
                <li><a href="<?php echo base_url(); ?>evis_app">Dashboard</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-exchange"></i> Awaiting Comments
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="span5">
                            <table class="table table-striped table-condensed">
                                <thead>
                                    <th>Comments</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($new_comment as $v_comment) {
                                        ?>
                                        <tr>
                                            <td><?php echo $v_comment->comment; ?></td>
                                            <td>
                                                <span style="color:green;">
                                                    <?php
                                                    if ($v_comment->comment_status == '1') {
                                                        echo '<i class="fa fa-check"></i>';
                                                    }
                                                    ?> 
                                                </span>
                                                <span style="color:red;">    
                                                    <?php
                                                    if ($v_comment->comment_status == 0) {
                                                        echo '<i class="fa fa-times"></i>';
                                                    }
                                                    ?>   
                                                </span>   
                                            </td>
                                            <td>
                                                <?php
                                                if ($v_comment->comment_status == '1') {
                                                    ?>
                                                    <a href="<?php echo base_url(); ?>evis_app/deactive_comment/<?php echo $v_comment->comment_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Unpublished Comment"><i class="fa fa-times"></i></a>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <a href="<?php echo base_url(); ?>evis_app/active_comment/<?php echo $v_comment->comment_id; ?>" class="btn btn-success" data-toggle="tooltip" title="Published Comment"><i class="fa fa-check"></i></a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-exchange"></i> Inactive Users
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="span5">
                            <table class="table table-striped table-condensed">
                                <thead>
                                    <th>Username</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($new_user as $v_user) {
                                        ?>
                                        <tr>
                                            <td><?php echo $v_user->username; ?></td>
                                            <td>
                                                <span style="color:green;">
                                                    <?php
                                                    if ($v_user->user_status == '1') {
                                                        echo '<i class="fa fa-check"></i>';
                                                    }
                                                    ?> 
                                                </span>
                                                <span style="color:red;">    
                                                    <?php
                                                    if ($v_user->user_status == 0) {
                                                        echo '<i class="fa fa-times"></i>';
                                                    }
                                                    ?>   
                                                </span>   
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
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>