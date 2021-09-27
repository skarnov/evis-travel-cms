<?php
foreach ($select_user_chat as $v_chat) {
    $user_message = $v_chat->user_message;
    if ($user_message == !NULL) {
        ?>
        <li class="left clearfix"><span class="chat-img pull-left">
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
        <li class="right clearfix"><span class="chat-img pull-right">
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