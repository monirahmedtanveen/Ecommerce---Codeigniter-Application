<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Product</h2>

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
                if ($message) {
                    echo $message;
                    $this->session->unset_userdata('message');
                }
                ?>
            </h2>
            <form class="form-horizontal" action="<?php echo base_url(); ?>super_admin/save_product" method="post" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Name </label>
                        <div class="controls">
                            <input type="text" name="product_name" class="span6 typeahead" id="typeahead"  >
                            <p class="help-block">Start typing to activate auto complete!</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="date01">Category Name</label>
                        <div class="controls">
                            <select name="category_id">
                                <option>Select Category Name</option>
                                <?php foreach ($all_published_category as $v_category){ ?>
                                <option value="<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="date01">Manufacturer Name</label>
                        <div class="controls">
                            <select name="manufacturer_id">
                                <option>Select Manufacturer Name</option>
                                <?php foreach ($all_published_manufacturer as $v_manufacturer){ ?>
                                <option value="<?php echo $v_manufacturer->manufacturer_id; ?>"><?php echo $v_manufacturer->manufacturer_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Price </label>
                        <div class="controls">
                            <input type="text" name="product_price" class="span6 typeahead" id="typeahead"  >
                            <p class="help-block">Start typing to activate auto complete!</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Stock </label>
                        <div class="controls">
                            <input type="text" name="product_stock" class="span6 typeahead" id="typeahead"  >
                            <p class="help-block">Start typing to activate auto complete!</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Image </label>
                        <div class="controls">
                            <input type="file" name="product_image" class="span6 typeahead" id="typeahead"  >
                            <p class="help-block">
                                <?php
                                $exception = $this->session->userdata('exception');
                                if ($exception) {
                                    echo $exception;
                                    $this->session->unset_userdata('exception');
                                }
                                ?>
                            </p>
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Product Short Description</label>
                        <div class="controls">
                            <textarea name="product_short_description" class="cleditor" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Product Long Description</label>
                        <div class="controls">
                            <textarea name="product_long_description" class="cleditor" id="textarea2" rows="3"></textarea>
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

                    <div class="control-group">
                        <label class="control-label" for="date01">Product Status</label>
                        <div class="controls">
                            <select name="product_status">
                                <option>Select Product Status</option>
                                <option value="1">Featured</option>
                                <option value="0">Normal</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save Product</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->