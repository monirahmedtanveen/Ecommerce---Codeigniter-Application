<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Manage Product</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Order Date</th>
                        <th>Order Status</th>
                        <th>Order Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php foreach($all_order as $v_order){ ?>
                    <tr>
                        <td><?php echo $v_order->order_id; ?></td>
                        <td class="center"><?php echo $v_order->order_date; ?></td>
                        <td class="center"><?php echo $v_order->order_status; ?></td>
                        <td class="center"><?php echo $v_order->order_total; ?></td>
                        
                        <td class="center">
                            <a class="btn btn-success" title="View Invoice" href="<?php echo base_url(); ?>super_admin/view_invoice/<?php echo $v_order->order_id; ?>">
                                <i class="halflings-icon white thumbs-up"></i>
                            </a>
                            <a class="btn btn-info" title="Download Invoice" href="<?php echo base_url(); ?>super_admin/download_invoice/<?php echo $v_order->order_id; ?>">
                                <i class="halflings-icon white download-alt"></i>  
                            </a>
                            <a class="btn btn-danger" title="Delete Order" href="<?php echo base_url(); ?>super_admin/delete_order/<?php echo $v_order->order_id; ?>" onclick="return delete_category();">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->