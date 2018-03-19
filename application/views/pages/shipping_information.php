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
        <div class="breadcrumb"> <a href="index.html">Home</a> » Shipping Information</div>
        <h2 class="heading-title"><span>Shipping Information</span></h2>

        <!-- END OF RIGHT COLUMN -->

        <div id="content" class="content-column-right">
            <div class="content account-page">
                <div class="box-login">
                    <div class="box-content fixed">
                        <div class="stitched"></div>
                        

                        <form  action="<?php echo base_url(); ?>checkout/save_shipping" method="post" onsubmit="return validateStandard(this)">
                            <div class="right" style="margin-top: -20px; height:350px">
                                <h3><?php echo $this->session->userdata('customer_name') . "'s " ?>Shipping Info</h3>
                                <div>
                                    <table class="form">
                                        <tbody>
                                            <tr>
                                                <td><span class="required">*</span> Name:</td>
                                                <td><input type="text" class="large-field" required regexp="JSVAL_RX_ALPHA" value="" maxlength="100" name="customer_name"/></td>
                                            </tr>

                                            <tr>
                                                <td><span class="required">*</span>Email Address:</td>
                                                <td>
                                                    <input type="text" class="large-field" value="" required regexp="JSVAL_RX_EMAIL" maxlength="256" name="email_address" />
                                                    <span id="res" style="color: red"></span>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td><span class="required">*</span> Mobile Number:</td>
                                                <td><input type="text" class="large-field" required regexp="JSVAL_RX_TEL" value="" name="mobile_number"/></td>
                                            </tr>
                                            <tr>
                                                <td><span class="required">*</span> Address:</td>
                                                <td><input type="text" class="large-field" required regexp="JSVAL_RX_ALPHA" value="" name="address"/></td>
                                            </tr>
                                            <tr>
                                                <td><span class="required">*</span> City:</td>
                                                <td><input type="text" class="large-field" required regexp="JSVAL_RX_ALPHA" value="" name="city"/></td>
                                            </tr>

                                            <tr>
                                                <td><span class="required">*</span> Country:</td>
                                                <td>
                                                    <select class="large-field" required exclude=" " name="country">
                                                        <option value=" "> --- Please Select --- </option>
                                                        <script type="text/javascript">
                                                            printCountryOptions();
                                                        </script>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="required">*</span> Zip Code:</td>
                                                <td><input type="text" class="large-field" value="" required regexp="JSVAL_RX_ZIP" name="zip_code"/></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><input type="submit" id="sbtn" name="submit" value="Save Shipping"/></td>
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
