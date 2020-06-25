<?php
$this->load->view('layout/header');
?>
<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column col-md-12">

        <!-- #register-now -->
        <section id="register-now" class="gradient-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h1>REGISTER NOW AND JOIN WITH US!!</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <div class="clearfix register_ul col-md-5">
                            <div role="form" class="wpcf7" id="wpcf7-f50-p10-o2" lang="en-US" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <form action="#wpcf7-f50-p10-o2" method="post" class="wpcf7-form" novalidate="novalidate">

                                
                                    <div class="register_li">
                                        <div class="input-wrap">
                                            <label>
                                                <img src="<?php echo base_url(); ?>assets/theme/img/icons/email.png" alt="">EMAIL</label>
                                            <span class="wpcf7-form-control-wrap email-472">
                                                <input type="email" name="email-472" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Enter your email" />
                                            </span>
                                        </div>
                                    </div>
                                 
                                    <div class="register_li">
                                        <div class="input-wrap">
                                            <label><img src="<?php echo base_url(); ?>assets/theme/img/icons/password.png" alt="">PASSWORD</label><span class="wpcf7-form-control-wrap text-555"><input type="text" name="text-555" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="PASSWORD" /></span>
                                        </div>
                                    </div>
                                    <div class="register_li">
                                        <div class="input-wrap">
                                            <input type="submit" value="LOGIN" class="wpcf7-form-control wpcf7-submit" />
                                        </div>
                                    </div>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div></form></div>				</div>

                        <div class="col-md-2"></div>
                        <div class="clearfix register_ul col-md-5">
                            <div role="form" class="wpcf7" id="wpcf7-f50-p10-o2" lang="en-US" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <form action="#wpcf7-f50-p10-o2" method="post" class="wpcf7-form" novalidate="novalidate">

                                    <div class="register_li">
                                        <div class="input-wrap">
                                            <label>
                                                <img src="<?php echo base_url(); ?>assets/theme/img/icons/name.png" alt="">
                                                NAME
                                            </label>
                                            <span class="wpcf7-form-control-wrap text-553">
                                                <input type="text" name="first_name" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Name" />
                                            </span>
                                        </div>
                                    </div>
                                    <div class="register_li">
                                        <div class="input-wrap">
                                            <label>
                                                <img src="<?php echo base_url(); ?>assets/theme/img/icons/email.png" alt="">
                                                EMAIL
                                            </label>
                                            <span class="wpcf7-form-control-wrap email-472">
                                                <input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Enter your email" /></span>
                                        </div>
                                    </div>
                                    <div class="register_li">
                                        <div class="input-wrap">
                                            <label><img src="<?php echo base_url(); ?>assets/theme/img/icons/phone.png" alt="">CONTACT NO.</label><span class="wpcf7-form-control-wrap text-554"><input type="text" name="text-554" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="PHONE" /></span>
                                        </div>
                                    </div>
                                    <div class="register_li">
                                        <div class="input-wrap">
                                            <label><img src="<?php echo base_url(); ?>assets/theme/img/icons/password.png" alt="">PASSWORD</label><span class="wpcf7-form-control-wrap text-555"><input type="text" name="text-555" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="PASSWORD" /></span>
                                        </div>
                                    </div>
                                    <div class="register_li">
                                        <div class="input-wrap">
                                            <input type="submit" value="REGISTER" class="wpcf7-form-control wpcf7-submit" />
                                        </div>
                                    </div>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div></form></div>		
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /#register-now -->

    </div>
</div>

<?php
$this->load->view('layout/footer');
?>