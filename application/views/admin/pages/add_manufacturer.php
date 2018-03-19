<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Manufacturer</h2>
            
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <h2 style="color: green">
                <?php
                    $message = $this->session->userdata('message');
                    if($message){
                        echo $message;
                        $this->session->unset_userdata('message');
                    }
                ?>
            </h2>
            <form class="form-horizontal" action="<?php echo base_url(); ?>super_admin/save_manufacturer" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Manufacturer Name </label>
                        <div class="controls">
                            <input type="text" name="manufacturer_name" class="span6 typeahead" id="typeahead"  >
                            <p class="help-block">Start typing to activate auto complete!</p>
                        </div>
                    </div>
                    
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Manufacturer Description</label>
                        <div class="controls">
                            <textarea name="manufacturer_description" class="cleditor" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="date01">Publication Status</label>
                        <div class="controls">
                            <select name="publication_status">
                                <option>Select Publication Status</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save Manufacturer</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->