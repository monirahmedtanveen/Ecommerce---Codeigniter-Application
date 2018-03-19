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
        <div class="breadcrumb"> <a href="index.html">Home</a> » Account Sign Up</div>
        <h2 class="heading-title"><span>Account Sign Up</span></h2>

        <!-- END OF RIGHT COLUMN -->

        <div id="content" class="content-column-right">
            <div class="content account-page">
                <div class="box-login">
                    <div class="box-content fixed">
                        <div class="stitched"></div>
                        <div class="left">
                            <h3>Login</h3>
                            <h5 style="color: red;">
                                <?php
                                $ex_message = $this->session->userdata('ex_message');
                                if ($ex_message) {
                                    echo $ex_message;
                                    $this->session->unset_userdata('ex_message');
                                }
                                ?>
                            </h5>
                            <form action="<?php echo base_url(); ?>checkout/login" method="post" onsubmit="return validateStandard(this)">
                                <span class="label">E-mail Address:</span>
                                <input type="text" value="" required regexp="JSVAL_RX_EMAIL" name="email_address"/>
                                <br/>
                                <br/>
                                <span class="label">Password:</span>
                                <input type="password" value="" name="password"/>
                                <a href="<?php echo base_url(); ?>checkout/forgot_password" class="forgotten">Forgotten Password?</a> 
                                <button type="submit" class="button" id="button-login"><span>Login</span></button> 
                            </form>
                        </div>

                        <form  action="<?php echo base_url(); ?>checkout/save_customer" method="post" onsubmit="return validateStandard(this)">
                            <div class="right" style="margin-top: -20px; height:350px">
                                <h3>Sign Up</h3>
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
                                                    <input type="text" class="large-field" value="" required regexp="JSVAL_RX_EMAIL" maxlength="256" name="email_address" onblur="makerequest(this.value,'res')" />
                                                    <span id="res"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Password:</td>
                                                <td><input type="password" class="large-field" value="" required name="password"/></td>
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
                                                <td><input type="submit" id="sbtn" name="submit" value="SIgn Up"/></td>
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
