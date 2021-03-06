<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Manage Blog </h3>
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="<?php echo base_url(); ?>evis_app/add_blog">Add Blog</a></li>
                <li class="active">Manage Blog</li>
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
                        <th>Image</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($all_blog as $v_blog) {
                                ?>
                                <tr>
                                    <td><?php echo $v_blog->blog_title; ?></td>
                                    <td><img src="<?php echo base_url() . $v_blog->blog_image; ?>" style="height:100px; width:100px;" /></td>
                                    <td><?php echo $v_blog->blog_time; ?></td>
                                    <td>
                                        <div class='activation_color'>
                                            <?php
                                            if ($v_blog->blog_status == '1') {
                                                echo 'Published';
                                            }
                                            ?> 
                                            <div id='color'>    
                                                <?php
                                                if ($v_blog->blog_status == 0) {
                                                    echo 'Unpublished';
                                                }
                                                ?>   
                                            </div>    
                                        </div>
                                    </td>
                                    <td>
                                        <?php
                                        if ($v_blog->blog_status == '1') {
                                            ?>
                                            <a href="<?php echo base_url(); ?>evis_app/deactive_blog/<?php echo $v_blog->blog_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Unpublished Blog"><i class="fa fa-times"></i></a>
                                            <?php
                                        } else {
                                            ?>
                                            <a href="<?php echo base_url(); ?>evis_app/active_blog/<?php echo $v_blog->blog_id; ?>" class="btn btn-success" data-toggle="tooltip" title="Published Blog"><i class="fa fa-check"></i></a>
                                            <?php
                                        }
                                        ?>
                                        <a href="<?php echo base_url(); ?>evis_app/edit_blog/<?php echo $v_blog->blog_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Edit Blog"><i class="fa fa-pencil-square-o"></i></a>
                                        <a href="<?php echo base_url(); ?>evis_app/delete_blog/<?php echo $v_blog->blog_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Blog" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
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