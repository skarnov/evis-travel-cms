<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Send Newsletter </h1>
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="<?php echo base_url(); ?>evis_app/subscribe_email">Subscribe Email List</a></li>
                <li class="active">Send Newsletter</li>
            </ul>
        </div>
    </div>
    <div class="col-sm-9 col-md-10">
        <form class="form-horizontal" action="<?php echo base_url() ?>evis_app/send_newsletter_mail" method="POST">
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-sm-2">Subject</label>
                    <div class="col-sm-6">
                        <input type="text" name="subject" required placeholder="Enter The Subject" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12">Message</label>
                    <div class="col-sm-12">
                        <textarea name="message" required class="form-control" rows="14"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-default pull-left">Reset</button> 
                <button type="submit" class="btn btn-primary ">Send <i class="fa fa-arrow-circle-right fa-lg"></i></button>
            </div>
        </form>
    </div>
</div>