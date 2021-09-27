<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Manage Comment </h3>
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="active">Manage Comment</li>
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
                            <th>Blog Title</th>
                            <th>User Name</th>
                            <th>Comment</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($all_comment as $v_comment) {
                                ?>
                                <tr>
                                    <td><?php echo $v_comment->blog_title; ?></td>
                                    <td><?php echo $v_comment->username; ?></td>
                                    <td><?php echo $v_comment->comment; ?></td>
                                    <td>
                                        <div class='activation_color'>
                                            <?php
                                            if ($v_comment->comment_status == '1') {
                                                echo 'Published';
                                            }
                                            ?> 
                                            <div id='color'>    
                                                <?php
                                                if ($v_comment->comment_status == 0) {
                                                    echo 'Unpublished';
                                                }
                                                ?>   
                                            </div>    
                                        </div>
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
                                        <a href="<?php echo base_url(); ?>evis_app/delete_comment/<?php echo $v_comment->comment_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Comment" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
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