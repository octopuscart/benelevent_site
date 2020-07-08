<div class="">
    <div class="wpb_column col-md-12">

        <!-- #information-bar -->
        <section id="information-bar">
            <div class="container" style="width:100%;">
                <div class="row">

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <ul>
                            <li><span class="img-holder"><img src="<?php echo base_url(); ?>assets/theme/uploads/2016/01/1-5.png" alt="Image"></span></li>
                            <li><span><b>Locations</b> Within city of traveling</span></li>
                            <li class="filerblock">
                                <select name="" class="form-control" >
                                    <option value="all">All Locations</option>
                                    <?php
                                    foreach ($cities as $ckey => $cvalue) {
                                        ?>
                                        <option value="<?php echo $cvalue['city']; ?>"><?php echo $cvalue['city']; ?></option>

                                        <?php
                                    }
                                    ?>
                                </select>
                            </li>
                        </ul>
                    </div>


                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <ul>
                            <li><span class="img-holder"><img src="<?php echo base_url(); ?>assets/theme/uploads/2016/01/2-5.png" alt="Image"></span></li>
                            <li><span><b>Category</b> Industry Interest</span></li>
                            <li class="filerblock">
                                <select name="" class="form-control" >
                                    <option value="all">All Categories</option>
                                    <?php
                                    foreach ($category as $ckey => $cvalue) {
                                        ?>
                                        <option value="<?php echo $cvalue['id']; ?>"><?php echo $cvalue['category_name']; ?></option>

                                        <?php
                                    }
                                    ?>
                                </select>
                            </li>
                        </ul>
                    </div>


                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <ul>
                            <li><span class="img-holder"><img src="<?php echo base_url(); ?>assets/theme/uploads/2016/01/3-5.png" alt="Image"></span></li>
                            <li><span><b>Calender</b> Date that suits you</span></li>
                            <li class="filerblock">
                                <div id="reportrange" class="form-control" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                                    <i class="fa fa-calendar"></i>&nbsp;
                                    <span></span> <i class="fa fa-caret-down"></i>
                                </div>
                            </li>
                        </ul>
                    </div>


                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <ul>
                            <li><span class="img-holder"><img src="<?php echo base_url(); ?>assets/theme/uploads/2016/01/4-5.png" alt="Image"></span></li>
                            <li><span><b>Price</b> Free Or Paid</span></li>
                            <li class="filerblock">
                                <select class="form-control">
                                    <option class="All">Free And Paid</option>
                                    <option class="Free">Free</option>
                                    <option class="Paid">Paid</option>
                                </select>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>


    </div>
</div>
