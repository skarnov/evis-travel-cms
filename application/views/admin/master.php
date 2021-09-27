<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo $title; ?></title>
        <link href="<?php echo base_url(); ?>assets/private/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/private/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <script>
            function check_delete()
            {
                var chk = confirm('Are You Want To Delete This');
                if (chk)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
        </script>         
    </head>

    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>evis_app">Evis Travel Website</a>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>evis_app">
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </a>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>evis_app/manage_chat">
                        <i><strong>Welcome!</strong></i> <?php echo $this->session->userdata('admin_name'); ?> 
                        You Are Now
                        <span style="color:limegreen; font-weight: bolder">
                            <?php 
                                $online_status=$online_status->online_status;
                                if($online_status==1)
                                {
                                    echo 'Online';
                                }
                            ?>
                        </span>    
                        <span style="color:red; font-weight: bolder"> 
                            <?php
                                if($online_status==0)
                                {
                                    echo 'Offline';
                                }
                            ?>
                        </span> 
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="badge badge-notify btn-danger"><?php echo $chat_notification->notification_number; ?></span>
                            <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <?php
                                foreach ($unread_chat as $v_chat) {
                                    ?>
                                <li style="padding:2px;">
                                    <a href="<?php echo base_url(); ?>evis_app/start_chat/<?php echo $v_chat->user_id; ?>">
                                        <p><?php echo $v_chat->username; ?> Sent You A Message</p>
                                    </a>
                                </li>
                                 <?php
                                }
                                ?>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url(); ?>evis_app/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                </ul>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="<?php echo base_url(); ?>evis_app"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> Admin Manager<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo base_url(); ?>evis_app/add_admin">Add Admin</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>evis_app/manage_admin">Manage Admin</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bus fa-fw"></i> Tour Manager<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo base_url(); ?>evis_app/add_tour">Add Tour</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>evis_app/manage_tour">Manage Tour</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-university fa-fw"></i> Blog Manager<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo base_url(); ?>evis_app/add_blog">Add Blog</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>evis_app/manage_blog">Manage Blog</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-picture-o fa-fw"></i> Gallery Manager<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo base_url(); ?>evis_app/add_gallery">Add Gallery</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>evis_app/manage_gallery">Manage Gallery</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>evis_app/manage_chat"><i class="fa fa-modx fa-fw"></i> Chat Manager</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>evis_app/manage_user"><i class="fa fa-male fa-fw"></i> User Manager</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>evis_app/manage_comment"><i class="fa fa-comment fa-fw"></i> Comment Manager</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-newspaper-o fa-fw"></i> Newsletter Subscription<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo base_url(); ?>evis_app/send_newsletter">Send Newsletter</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>evis_app/subscribe_email">Subscribe Email List</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>evis_app/about"><i class="fa fa-envelope fa-fw"></i> About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <?php echo $dashboard; ?>
        </div>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/private/js/bootstrap.min.js"></script>      <script src="<?php echo base_url(); ?>js/metisMenu.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/private/js/metisMenu.min.js"></script>      <script src="<?php echo base_url(); ?>js/metisMenu.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/private/js/sb-admin-2.js"></script>
        <script>
            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
            $(".chatbox"). scrollTop(100000);
        </script>
    </body>
</html>