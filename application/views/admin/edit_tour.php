<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Edit Tour</h3>
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>evis_travel">Home</a></li>
                <li><a href="<?php echo base_url(); ?>evis_app/manage_tour">Manage Tour</a></li>
                <li class="active">Edit Tour</li>
            </ul>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <form action="<?php echo base_url(); ?>evis_app/update_tour" method="POST" name="myForm">
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
                            <input type="text" name="tour_title" value="<?php echo $tour_info->tour_title; ?>" required class="form-control">
                            <input type="hidden" name="tour_id" value="<?php echo $tour_info->tour_id; ?>">
                        </div>
                        <div class="form-group">
                            <label>Tour Summary</label>
                            <textarea name="tour_summary" required class="form-control"><?php echo $tour_info->tour_summary; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Tour Price</label>
                            <input type="text" name="tour_price" value="<?php echo $tour_info->tour_price; ?>" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tour Subtitle</label>
                            <input type="text" name="tour_subtitle" value="<?php echo $tour_info->tour_subtitle; ?>" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tour Description</label>
                            <?php echo $this->ckeditor->editor('tour_description', $tour_info->tour_description); ?>
                        </div>
                        <div class="form-group">
                            <label>Tour Itinerary</label>
                            <?php echo $this->ckeditor->editor('tour_itinerary', $tour_info->tour_itinerary); ?>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label>Tour Pricing</label>
                            <?php echo $this->ckeditor->editor('tour_pricing', $tour_info->tour_pricing); ?>
                        </div>
                        <div class="form-group">
                            <label>Tour Remarks</label>
                            <?php echo $this->ckeditor->editor('tour_remarks', $tour_info->tour_remarks); ?>
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
                        <button type="submit" class="btn btn-success">Edit Tour</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.forms['myForm'].elements['tour_type'].value = '<?php echo $tour_info->tour_type; ?>';
    document.forms['myForm'].elements['tour_status'].value = '<?php echo $tour_info->tour_status; ?>';
</script>