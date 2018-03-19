<?php 
$total = 0;
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo base_url(); ?>admin_asset/css/custom.css">
    </head>
    <body>
        <div class="row">
            <img src="" alt="Company Logo">
        </div>

        <div class="row">
            <div class="col-md-6">
                <h3 align="center">Billing Info</h3>
                <table align="center">
                    <tr>
                        <td style="font-weight: bolder">Name </td>
                        <td>:&nbsp;&nbsp;<?php echo $customer_info->customer_name; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bolder">Email Address </td>
                        <td>:&nbsp;&nbsp;<?php echo $customer_info->email_address; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bolder">Address </td>
                        <td>:&nbsp;&nbsp;<?php echo $customer_info->address; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bolder">City </td>
                        <td>:&nbsp;&nbsp;<?php echo $customer_info->city; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bolder">Country </td>
                        <td>:&nbsp;&nbsp;<?php echo $customer_info->country; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bolder">Zip Code </td>
                        <td>:&nbsp;&nbsp;<?php echo $customer_info->zip_code; ?></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <h3 align="center">Shipping Info</h3>
                <table align="center">
                    <tr>
                        <td style="font-weight: bolder">Name </td>
                        <td>:&nbsp;&nbsp;<?php echo $shipping_info->customer_name; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bolder">Email Address </td>
                        <td>:&nbsp;&nbsp;<?php echo $shipping_info->email_address; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bolder">Address </td>
                        <td>:&nbsp;&nbsp;<?php echo $shipping_info->address; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bolder">City </td>
                        <td>:&nbsp;&nbsp;<?php echo $shipping_info->city; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bolder">Country </td>
                        <td>:&nbsp;&nbsp;<?php echo $shipping_info->country; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bolder">Zip Code </td>
                        <td>:&nbsp;&nbsp;<?php echo $shipping_info->zip_code; ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row">
            <h3 align="center">Order Info</h3>
            <table align="center" border="1">
                <tr>
                    <th>Order ID</th>
                    <th>Order Total(BDT)</th>
                    <th>Due Date</th>
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;<?php echo $all_order_info->order_id; ?></td>
                    <td>&nbsp;&nbsp;<?php echo $all_order_info->order_total; ?></td>
                    <td>&nbsp;&nbsp;<?php echo $all_order_info->order_date; ?></td>
                </tr>
            </table>
        </div>

        <div class="row">
            <h3 align="center">Order Details</h3>
            <table align="center" border="1">
                <tr>
                    <th>Product Name</th>
                    <th>Price(BDT)</th>
                    <th>Sales Quantity</th>
                    <th>Sub Total(BDT)</th>
                </tr>
                <?php
                foreach ($order_details_info as $v_order_details) {
                    $total+=($v_order_details->product_price * $v_order_details->product_sales_quantity);
                    ?>
                    <tr>
                        <td>&nbsp;&nbsp;<?php echo $v_order_details->product_name; ?></td>
                        <td>&nbsp;&nbsp;<?php echo $v_order_details->product_price; ?></td>
                        <td>&nbsp;&nbsp;<?php echo $v_order_details->product_sales_quantity; ?></td>
                        <td>&nbsp;&nbsp;<?php echo $v_order_details->product_price * $v_order_details->product_sales_quantity; ?></td>
                    </tr>
                <?php } ?>
            </table>

        </div>

        <div class="row">
            <table align="center">
                <tr>
                    <td style="font-weight: bolder">Total </td>
                    <td>:&nbsp;&nbsp;BDT <?php echo $total; ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bolder">VAT </td>
                    <td>:&nbsp;&nbsp;BDT <?php 
                    $vat = ($total*7.5)/100;
                    echo $vat;
                    ?>
                    </td>
                </tr>
                <tr>
                    <td style="font-weight: bolder">Grand Total </td>
                    <td>:&nbsp;&nbsp;BDT <?php echo $all_order_info->order_total; ?></td>
                </tr>
            </table>
        </div>

        <div class="row">
            <h2 align="center" style="text-decoration: overline">Company Signature</h2>
        </div>
    </body>
</html>


