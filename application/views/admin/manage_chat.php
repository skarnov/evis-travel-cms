<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Manage Chat </h3>
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="active">Manage Chat</li>
            </ul>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <div class="col-xs-8">
                    <div class="table-responsive">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                            <th>Username</th>
                            <th>Status</th>
                            <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($all_user as $v_user) {
                                    ?>
                                    <tr>
                                        <td><?php echo $v_user->username; ?></td>
                                        <td>
                                            <div class='activation_color'>
                                                <?php
                                                if ($v_user->user_status == '1') {
                                                    echo '<i class="fa fa-check"></i>';
                                                }
                                                ?> 
                                                <div id='color'>    
                                                    <?php
                                                    if ($v_user->user_status == 0) {
                                                        echo '<i class="fa fa-times"></i>';
                                                    }
                                                    ?>   
                                                </div>    
                                            </div>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>evis_app/start_chat/<?php echo $v_user->user_id; ?>" class="btn btn-primary" data-toggle="tooltip" title="Start Chat"><i class="fa fa-pencil-square-o"></i></a>
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
</div>