
<?php
$this->load->view('layout/header');
?>


<!-- /#page-title -->
<!-- #single-blog-post -->
<section id="single-blog-post">
    <div class="container">

        <div class="row">
            <div>

                <div class="content-holder ">
                    <?php
                    $this->load->view('Account/sidebar');
                    ?>


                    <div class="col-md-9 checkout-form bigblock">
                        <?php
                        if ($msg) {
                            ?>
                            <div class="col-md-12">
                                <div class="alert alert-warning alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i> </span></button>
                                    <i class="fa fa-exclamation-triangle fa-2x"></i><?php echo $msg; ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                        <div class=" woocommerce-MyAccount-content">  
                            <h6><?php echo $user_details->email; ?> <small>Email (For Login)</small> </h6>
                            <div class="woocommerce-MyAccount-content "> 


                                <form class="create_account_form row form-group" method="post" action="#">
                                    <input type="hidden" name="user_id" value="45">
                                
                                        <div class="col-sm-6 col-lg-6 ">
                                            <label>

                                                Full Name</label>
                                            <input type="text" name="name" class="form-control required"  value="<?php echo $user_details->name; ?>">

                                        </div>


                                        <div class="col-sm-6 col-lg-6 ">

                                            <label>
                                                Contact No.</label>
                                            <input type="text" name="contact_no" class="form-control required"  value="<?php echo $user_details->contact_no; ?>">

                                        </div>



                                        <div class="col-sm-6 col-lg-6 ">

                                            <label>
                                                Gender</label> 
                                            <select name="gender" class="form-control" style=" ">
                                                <option  value="Male" <?php echo $user_details->gender == 'Male' ? "selected" : ""; ?>>Male</option>
                                                <option  value="Female" <?php echo $user_details->gender == 'Female' ? "selected" : ""; ?>>Female</option>
                                            </select>

                                        </div>

                                        <div class="col-sm-6 col-lg-6 ">

                                            <label>
                                                Date of Birth </label>
                                            <input type="date" class="form-control required" name="birth_date"  value="<?php echo $user_details->birth_date; ?>">

                                        </div>


                                        <div class="col-sm-6 col-lg-6" style="padding-top: 20px;">

                                            <button name="update_profile" type="submit" class="woocommerce-Button button btn-shop-now-fill">Update Profile</button>
                                        </div>


                                        <div style="clear: both"></div>

                                 
                                </form>
                            </div>


                            <hr/>

                            <h3 class="col-xs-12 metro-title">                                
                                <button  class="changepassword"  data-toggle="modal" data-target="#changePassword" style="    color: #000;
                                   font-size: 13px;
                                   "><i class="fa fa-refresh"></i> Change Password</button>
                            </h3>


                        </div>
                    </div>


                </div>


            </div>
        </div>


    </div>
</section>
<!-- /#single-blog-post -->
<!-- footer -->

<!-- Modal -->
<div class="modal fade" id="changePassword" tabindex="2" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm woocommerce" role="document" style="width: 300px">
        <form action="#" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel" style="font-size: 15px">Change Password</h4>
                </div>
                <div class="modal-body checkout-form ">

                    <label class="">
                        Old Password
                        <input type="text" name="old_password"  value="" class=" form-control required">
                    </label>

                    <label class="">
                        New Password
                        <input type="text" name="new_password"  value="" class=" form-control required">
                    </label>
                    <br/>
                    <label class="">
                        Confirm Password
                        <input type="text" name="re_password"  value="" class=" form-control required">
                    </label>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="change_password" class="btn btn-primary">Change Password</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
$this->load->view('layout/footer');
?>