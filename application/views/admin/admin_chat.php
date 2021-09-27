<link href="<?php echo base_url(); ?>assets/private/css/chat.css" rel="stylesheet">
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">View Conversation </h3>
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="<?php echo base_url(); ?>evis_app/manage_chat">Manage Chat</a></li>
                <li class="active">View Conversation</li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        function myFunction()
        {
            var userId = document.myForm.userId.value;
            var adminMessage = document.myForm.adminMessage.value;
            var xmlhttp = false;
            try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
            }
            catch (e) {
                try {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (E) {
                    xmlhttp = false;
                }
            }
            if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
                xmlhttp = new XMLHttpRequest();
            }
            serverPage = '<?php echo base_url(); ?>evis_app/save_chat/' + userId + '/' + adminMessage;
            xmlhttp.open("GET", serverPage);
            xmlhttp.onreadystatechange = function ()
            {
                document.getElementById('chat_information').innerHTML = xmlhttp.responseText;
                $(".chatbox"). scrollTop(100000);
            }
            xmlhttp.send(null);
        }
        function chat()
        {
            var userId = document.myForm.userId.value;
            var xmlhttp = false;
            try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
            }
            catch (e) {
                try {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (E) {
                    xmlhttp = false;
                }
            }
            if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
                xmlhttp = new XMLHttpRequest();
            }
            serverPage = '<?php echo base_url(); ?>evis_app/show_chat/' + userId;
            xmlhttp.open("GET", serverPage);
            xmlhttp.onreadystatechange = function ()
            {
                document.getElementById('chat_information').innerHTML = xmlhttp.responseText;
                $(".chatbox"). scrollTop(100000);
            }
            xmlhttp.send(null);
        }
    </script>
    <div class="col-xs-8">
        <div class="panel panel-primary">
            <div class="panel-heading" id="accordion">
                <i class="fa fa-comments"></i> Chat
            </div>
            <div class="panel-collapse">
                <ul class="chatbox" id="chat_information" style="padding: 1%; list-style-type: none;">
                    <?php
                    foreach ($select_user_chat as $v_chat) {
                        $user_message = $v_chat->user_message;
                        if ($user_message == !NULL) {
                            ?>
                            <li class="left clearfix" style="padding: 1%; border-bottom: 1px solid wheat;"><span class="chat-img pull-left">
                                <p class="col-xs-2" style="color: purple; font-weight: bolder;"><?php echo $v_chat->username; ?></p>
                                </span>
                                <div class="chat-body clearfix">
                                    <p>
                                        <?php echo $v_chat->user_message; ?>
                                    </p>
                                </div>
                            </li>
                            <?php
                        }
                        $admin_message = $v_chat->admin_message;
                        if ($admin_message == !NULL) {
                            ?>
                            <li class="right clearfix" style="padding: 1%; border-bottom: 1px solid wheat;"><span class="chat-img pull-right">
                                <p class="col-xs-2" style="color: #f9676b; font-weight: bolder;">Admin</p>
                                </span>
                                <div class="chat-body clearfix">
                                    <p>
                                        <?php echo $v_chat->admin_message; ?>
                                    </p>
                                </div>
                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>
                <div class="panel-footer">
                    <form name="myForm">
                        <div class="input-group">
                            <input type="hidden" id="userId" value="<?php echo $user_id ?>">
                            <input id="adminMessage" class="form-control input-sm" placeholder="Type your message here..." />
                            <span class="input-group-btn">
                                <input id="submit" onclick="myFunction()" type="reset" value="Send" class="btn btn-warning btn-sm"/>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    if ($select_user_chat != NULL) {
        ?>
        <div class="col-xs-4">
            <h2>
                <a href="<?php echo base_url(); ?>evis_app/delete_chat/<?php echo $user_id ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Chat" onclick="return check_delete();"><i class="fa fa-trash"></i> Delete All <?php echo $v_chat->username; ?> Message</a>
            </h2>
        </div>
        <?php
    }
    ?>
</div>
<script>
    setInterval(function () {
        chat();
    }, 1000 * 60 * .1);
</script>