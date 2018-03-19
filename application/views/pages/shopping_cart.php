<?php
$contents = $this->cart->contents();
?>

<div id="content_holder" class="fixed">
    <div class="inner">
        <div class="breadcrumb"> <a href="<?php echo base_url(); ?>">Home</a> » <a href="<?php echo base_url(); ?>Welcome/my_account">Account</a> » Shopping Cart</div>
        <h2 class="heading-title"><span>Shopping Cart</span></h2>
        <div id="content">
            <div class="cart-info">
                <table>
                    <thead>
                        <tr>
                            <td class="remove">Remove</td>
                            <td class="image">Image</td>
                            <td class="name">Product Name</td>
                            <td class="quantity">Quantity</td>
                            <td class="price">Unit Price</td>
                            <td class="total">Sub Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($contents as $v_contents) {
                            ?>
                            <tr class="odd">
                                <td class="remove"><a href="<?php echo base_url(); ?>cart/remove_cart/<?php echo $v_contents['rowid']; ?>">Remove</a></td>
                                <td class="image"><a href="<?php echo base_url(); ?>Welcome/product_details"><img src="<?php echo base_url() . $v_contents['image']; ?>" height="100" width="100" alt="<?php echo $v_contents['name']; ?>" /></a></td>
                                <td class="name"><a href="<?php echo base_url(); ?>Welcome/product_details"><?php echo $v_contents['name']; ?></a>
                                    <div> </div></td>
                                <td class="quantity">
                                    <form action="<?php echo base_url(); ?>cart/update_cart" method="post">
                                        <input type="text" size="3" value="<?php echo $v_contents['qty']; ?>" name="qty"/>
                                        <input type="hidden" size="3" value="<?php echo $v_contents['rowid']; ?>" name="rowid"/>
                                        <input type="submit" value="Update" size="3" name="btn" style="font-size: 12px; font-weight: bolder " />
                                    </form>

                                </td>
                                <td class="price">BDT <?php echo $v_contents['price']; ?></td>
                                <td class="total">BDT <?php echo $v_contents['subtotal'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="cart-total">
                <table>
                    <tbody>
                        <tr>
                            <td colspan="5"></td>
                            <td class="right"><b>Total:</b></td>
                            <td class="right numbers">BDT <?php echo $this->cart->total(); ?></td>
                        </tr>
                        <tr>
                            <td colspan="5"></td>
                            <td class="right"><b>VAT 7.5%:</b></td>
                            <td class="right numbers">
                                <?php 
                                    $vat = (7.5*$this->cart->total())/100;
                                    echo 'BDT ' . $vat;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5"></td>
                            <td class="right numbers_total"><b>Grand Total:</b></td>
                            <td class="right numbers_total">BDT&nbsp;
                                <?php 
                                $g_total = $this->cart->total() + $vat;
                                $sdata = array();
                                $sdata['g_total'] = $g_total;
                                $this->session->set_userdata($sdata);
                                echo $g_total;
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="buttons">
                <div class="left"><a class="button" onclick="#"><span>Update</span></a></div>
                <?php  
                    $custmer_id = $this->session->userdata('customer_id');
                    $shipping_id = $this->session->userdata('shipping_id');
                    if($custmer_id != NULL && $shipping_id !=NULL){
                ?>  
                <div class="right"><a class="button" href="<?php echo base_url(); ?>checkout/payment_order"><span>Checkout</span></a></div>
                <?php }else if($custmer_id != NULL){ ?>
                <div class="right"><a class="button" href="<?php echo base_url(); ?>checkout/shipping_information"><span>Checkout</span></a></div>
                <?php }else{ ?>
                <div class="right"><a class="button" href="<?php echo base_url(); ?>checkout/customer_registration"><span>Checkout</span></a></div>
                <?php } ?>
                <div class="center"><a class="button" href="#"><span>Continue Shopping</span></a></div>
            </div>
        </div>
    </div>
</div>