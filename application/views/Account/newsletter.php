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
                        
 <h4>Newsletter Preferences</h4>
                        <hr/>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name=""> Monthly Subscription


                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name=""> Weekly Subscription

                            </label>
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
<div class="modal  fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="    z-index: 20000000;">
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