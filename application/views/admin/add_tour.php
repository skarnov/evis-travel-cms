<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Add Tour</h3>
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>evis_travel">Home</a></li>
                <li><a href="<?php echo base_url(); ?>evis_app/manage_tour">Manage Tour</a></li>
                <li class="active">Add Tour</li>
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
                <form action="<?php echo base_url(); ?>evis_app/save_tour" method="POST" enctype="multipart/form-data">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label>Tour Type</label>
                            <div class="radio">
                                <label><input type="radio" name="tour_type" value="1">Our Tours</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="tour_type" value="2">Day Trips</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tour Title</label>
                            <input type="text" name="tour_title" class="form-control" placeholder="Enter Tour Title">
                        </div>
                        <div class="form-group">
                            <label>Tour Summary</label>
                            <textarea name="tour_summary" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Tour Price</label>
                            <input type="text" name="tour_price" class="form-control" placeholder="Enter Tour Price">
                        </div>
                        <div class="form-group">
                            <label>Tour Subtitle</label>
                            <input type="text" name="tour_subtitle" class="form-control" placeholder="Enter Tour Subtitle">
                        </div>
                        <div class="form-group">
                            <label>Tour Description</label>
                            <?php echo $this->ckeditor->editor('tour_description',@$default_value);?>
                        </div>
                        <div class="form-group">
                            <label>Tour Itinerary</label>
                            <?php echo $this->ckeditor->editor('tour_itinerary',@$default_value);?>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label>Main Tour Image</label>
                            <input type="file" name="tour_additional_image_0" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tour Additional Image - 1</label>
                            <input type="file" name="tour_additional_image_1" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tour Additional Image - 2</label>
                            <input type="file" name="tour_additional_image_2" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tour Additional Image - 3</label>
                            <input type="file" name="tour_additional_image_3" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tour Additional Image - 4</label>
                            <input type="file" name="tour_additional_image_4" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tour Additional Image - 5</label>
                            <input type="file" name="tour_additional_image_5" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tour Additional Image - 6</label>
                            <input type="file" name="tour_additional_image_6" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tour Pricing</label>
                            <?php echo $this->ckeditor->editor('tour_pricing',@$default_value);?>
                        </div>
                        <div class="form-group">
                            <label>Tour Remarks</label>
                            <?php echo $this->ckeditor->editor('tour_remarks',@$default_value);?>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Activation Status</label>
                            <div class="controls">
                                <select name="tour_status" class="form-control" tabindex="1">
                                    <option value="">Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Add Tour</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>