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
        <div class="breadcrumb"> <a href="index.html">Home</a> » Forgot Password</div>
        <h2 class="heading-title"><span>Forgot Password</span></h2>

        <!-- END OF RIGHT COLUMN -->

        <div id="content" class="content-column-right">
            <div class="content account-page">
                <div class="box-login">
                    <div class="box-content fixed">
                        <div class="stitched"></div>
                        <div class="left">
                            <h3>Forgot Password</h3>
                            <h5 style="color: red;">
                                <?php
                                $ex_message = $this->session->userdata('ex_message');
                                if ($ex_message) {
                                    echo $ex_message;
                                    $this->session->unset_userdata('ex_message');
                                }
                                ?>
                            </h5>
                            <form action="<?php echo base_url(); ?>checkout/customer_email_check" method="post" onsubmit="return validateStandard(this)">
                                <span class="label">E-mail Address:</span>
                                <input type="text" value="" required regexp="JSVAL_RX_EMAIL" name="email_address"/>
                                
                                <button type="submit" class="button" id="button-login"><span>Click</span></button> 
                            </form>
                        </div>

                        
                        <div class="stitched"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
