<script type="text/javascript">
    xmlhttp = false;
    try{
        xmlhttp = new ActiveXObject('Msxml2.XMLHTTP');
    }catch(e){
        try{
            xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
        }catch(E){
            xmlhttp = false;
        }
    }
    if(!xmlhttp && typeof XMLHttpRequest != 'undefined'){
        xmlhttp = new XMLHttpRequest();
    }
    
    function makerequest(given_text,objid){
        serverpage = "<?php echo base_url(); ?>checkout/ajax_email_check/"+given_text;
        xmlhttp.open('GET',serverpage);
        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                document.getElementById(objid).innerHTML = xmlhttp.responseText;
                if(xmlhttp.responseText == 'Email Required!.'){
                    document.getElementById('sbtn').disabled = true;
                }else if(xmlhttp.responseText == 'Already Exits !.'){
                    document.getElementById('sbtn').disabled = true;
                }else{
                    document.getElementById('sbtn').disabled = false;
                }
            }
        }
        xmlhttp.send(null);
    }
</script>


<div id="content_holder">
    <div class="inner">
        <div class="breadcrumb"> <a href="index.html">Home</a> » Payment Information</div>
        <h2 class="heading-title"><span>Payment Information</span></h2>

        <!-- END OF RIGHT COLUMN -->

        <div id="content" class="content-column-right">
            <div class="content account-page">
                <div class="box-login">
                    <div class="box-content fixed">
                        <div class="stitched"></div>
                        

                        <form  action="<?php echo base_url(); ?>checkout/place_order" method="post" onsubmit="return validateStandard(this)">
                            <div class="right" style="margin-top: -20px; height:350px">
                                
                                <div>
                                    <table class="form" style="font-weight: bolder;">
                                        <tbody>
                                            
                                            <tr>
                                                <td><input type="radio" class="large-field" value="cash_on_delivery" name="payment_type"/></td>
                                                <td> Cash On Delivery</td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" class="large-field" value="paypal" name="payment_type"/></td>
                                                <td> Paypal</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>
                                                    <textarea rows="4" cols="30" placeholder="Comments...." name="order_comments"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><input type="submit" id="sbtn" name="submit" value="Place Order"/></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </form>
                        <div class="stitched"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
