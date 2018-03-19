<script type="text/javascript">
    xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject('Msxml2.XMLHTTP');
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
        } catch (E) {
            xmlhttp = false;
        }
    }

    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }

    function makerequest(product_id) {
        remove = confirm('Are You Sure to Remove this Product from Your Wish List');
        if (remove) {
            serverpage = "<?php echo base_url(); ?>wish_list/delete_wish_list/"+product_id;
            xmlhttp.open('GET', serverpage);
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    alert(xmlhttp.responseText);
                }
            }
            xmlhttp.send(null);
        }

    }
</script>

<div id="content_holder">
    <div class="inner">
        <div class="breadcrumb"><a href="<?php echo base_url(); ?>">Home</a> » <a href="<?php echo base_url(); ?>Welcome/my_account">Account</a> » Wish List</div>
        <h2 class="heading-title"><span>My Wish List</span></h2>
        <h2 style="color: #cc00cc">
            <?php
                $exception = $this->session->userdata('exception');
                if($exception != NULL){
                    echo $exception;
                    $this->session->unset_userdata('exception');
                }
            ?>
        </h2>
        <!-- RIGHT COLUMN -->
        <div id="column-right">
            <div class="box">
                <h3 class="heading-title"><span>My Account</span></h3>
                <div class="box-content box-account">
                    <ul>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Forgotten Password</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a class="active" href="#">Wish List</a></li>
                        <li><a href="#">Order History</a></li>
                        <li><a href="#">Downloads</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Transactions</a></li>
                        <li><a href="#">Newsletter</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END OF RIGHT COLUMN -->

        <div id="content" class="content-column-right">
            <div class="wishlist-product">
                <table>
                    <thead>
                        <tr>
                            <td class="remove">Remove</td>
                            <td class="image">Image</td>
                            <td class="name">Product Name</td>
                            <td class="stock">Stock</td>
                            <td class="price">Unit Price</td>
                            <td class="cart">Buy Now</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_wish_list as $v_wish_list) {
                            $product_info = $this->super_admin_model->select_product_by_id($v_wish_list->product_id);
                            ?>
                            <tr>
                                <td class="remove"><a href="<?php echo base_url(); ?>wish_list/delete_wish_list/<?php echo $v_wish_list->wish_list_id; ?>">Remove</a></td>
    <!--                            <td class="remove"><input type="checkbox" value="remove_product" name="remove" onclick="func();"/></td>-->
                                <td class="image"><a href="<?php echo base_url(); ?>Welcome/product_details/<?php echo $product_info->product_id; ?>"><img alt="<?php echo $product_info->product_name; ?>" height="100" width="100" src="<?php echo base_url() . $product_info->product_image; ?>"/></a></td>
                                <td class="name"><a href="<?php echo base_url(); ?>Welcome/product_details/<?php echo $product_info->product_id; ?>"><?php echo $product_info->product_name; ?></a></td>
                                <td class="stock">In Stock</td>
                                <td class="price"><div class="price"> BDT <?php echo $product_info->product_price; ?></div></td>
                                <td class="cart"><a class="button" href="<?php echo base_url(); ?>cart/add_product_to_cart/<?php echo $product_info->product_id; ?>" onclick="addToCart('44');"><span>Add to Cart</span></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="buttons">
<!--                <div class="left"><a class="button" href="http://metagraphics.eu/cartmania1_5/index.php?route=account/account"><span>Back</span></a></div>
                <div class="right"><a class="button" onclick="$('#wishlist').submit();"><span>Update</span></a></div>-->
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>