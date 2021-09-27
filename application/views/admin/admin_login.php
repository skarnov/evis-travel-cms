<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Evis Secure Login</title>
        <link href="<?php echo base_url(); ?>assets/private/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/private/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>

    <body class="login-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Evis Office Management System</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="<?php echo base_url() ?>evis_login/check_admin_login" method="POST">
                                <h3 style="color:red">
                                    <?php
                                    $exc = $this->session->userdata('exception');
                                    if (isset($exc)) {
                                        echo $exc;
                                        $this->session->unset_userdata('exception');
                                    }
                                    ?>
                                </h3>
                                <div style="background-color:wheat;"><?php echo validation_errors(); ?></div><br/>
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="admin_email" type="email" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="admin_password" type="password">
                                    </div><br/>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                            </label>
                                            <label></label>
                                            <a href="" class="btn btn-link pull-right">Forgot Password?</a>
                                        </div>
                                        <button type="submit" class="btn btn-lg btn-danger btn-block">Login</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>