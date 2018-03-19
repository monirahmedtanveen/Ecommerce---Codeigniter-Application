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
        <div class="breadcrumb"> <a href="index.html">Home</a> » Password Recovery</div>
        <h2 class="heading-title"><span>Password Recovery</span></h2>

        <!-- END OF RIGHT COLUMN -->

        <div id="content" class="content-column-right">
            <div class="content account-page">
                <div class="box-login">
                    <div class="box-content fixed">
                        <div class="stitched"></div>
                        

                        <form  action="<?php echo base_url(); ?>email/update_password" method="post" onsubmit="return validateStandard(this)">
                            <div class="right" style="margin-top: -20px; height:350px">
                                
                                <div>
                                    <table class="form">
                                        <tbody>
                                            <tr>
                                                <td><span class="required">*</span> Enter Your New Password:</td>
                                                <td><input type="password" class="large-field" name="new_password" value="" required regexp="JSVAL_RX_ALPHA_NUMERIC"/></td>
                                                <td><input type="hidden" class="large-field" name="email_address" value="<?php echo $email_address; ?>"/></td>
                                            </tr>
                                            <tr>
                                                <td><span class="required">*</span> Re-type Your New Password:</td>
                                                <td><input type="password" class="large-field" name="Confirm_password" equals="new_password" required err="New Password and Re-type Password Not Macthed !" value=""/></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><input type="submit" id="sbtn" name="submit" value="Update Password"/></td>
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
