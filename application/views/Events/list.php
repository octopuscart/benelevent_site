<?php
$this->load->view('layout/header');
?>


<div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column col-md-12">



        <!-- #upcoming-event -->
        <section id="upcoming-event">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-7">
                        <div class="section-title">
                            <h1>Events</h1>
                            <p>Many events are going to orgnize around the world <br/> Just find your suitable event and join it from here.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <form action="" method="get" class="pull-right">
                            <input type="text" name="s" value="" placeholder="Search Event"> <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-title-wrap">
                            <ul class="clearfix">
                                <li class="filter active" data-filter="all"><span>All Event</span></li>
                                <li class="filter active" data-filter=".april-14"><span>April 14</span></li>
                                <li class="filter active" data-filter=".april-22"><span>April 22</span></li>
                                <li class="filter active" data-filter=".april-28"><span>April 28</span></li>
                                <li class="filter active" data-filter=".june-01"><span>June 01</span></li>
                                <li class="filter active" data-filter=".may-10"><span>May 10</span></li>
                                <li class="filter active" data-filter=".may-15"><span>May 15</span></li>
                                <li class="filter active" data-filter=".may-22"><span>May 22</span></li>
                                <li class="filter active" data-filter=".may-28"><span>May 28</span></li>
                            </ul>
                        </div>
                        <div class="tab-content-wrap row">


<?php
print_r($eventdata);

?>


                            <div class="col-lg-3 col-md-4 col-sm-6 mix april-14  hvr-float-shadow wow fadeIn">
                                <div class="img-holder"><img width="272" height="170" src="<?php echo base_url(); ?>assets/theme/uploads/2016/01/1-3.jpg" class="img-responsive wp-post-image" alt="1" /></div>
                                <div class="content-wrap">
                                    <img src="<?php echo base_url(); ?>assets/theme/uploads/2016/01/author.png" alt="" class="author-img">
                                    <div class="meta">
                                        <ul>
                                            <li><span><i class="fa fa-clock-o"></i>Jan 20, 2016</span></li>
                                            <li><span><i class="fa fa-map-marker"></i>California</span></li>
                                        </ul>
                                    </div>
                                    <h3>Event Name</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing [&#8230;]</p>
                                    <a class="read-more" href="#">read more<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>





                            <div class="col-lg-3 col-md-4 col-sm-6 mix april-14  hvr-float-shadow wow fadeIn">
                                <div class="img-holder"><img width="272" height="170" src="<?php echo base_url(); ?>assets/theme/uploads/2016/01/2-2.jpg" class="img-responsive wp-post-image" alt="2" /></div>
                                <div class="content-wrap">
                                    <img src="<?php echo base_url(); ?>assets/theme/uploads/2016/01/author.png" alt="" class="author-img">
                                    <div class="meta">
                                        <ul>
                                            <li><span><i class="fa fa-clock-o"></i>Jan 20, 2016</span></li>
                                            <li><span><i class="fa fa-map-marker"></i>California</span></li>
                                        </ul>
                                    </div>
                                    <h3>Event Name</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing [&#8230;]</p>
                                    <a class="read-more" href="#">read more<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>





                            <div class="col-lg-3 col-md-4 col-sm-6 mix april-28  hvr-float-shadow wow fadeIn">
                                <div class="img-holder"><img width="272" height="170" src="<?php echo base_url(); ?>assets/theme/uploads/2016/01/3-2.jpg" class="img-responsive wp-post-image" alt="3" /></div>
                                <div class="content-wrap">
                                    <img src="<?php echo base_url(); ?>assets/theme/uploads/2016/01/author.png" alt="" class="author-img">
                                    <div class="meta">
                                        <ul>
                                            <li><span><i class="fa fa-clock-o"></i>Jan 20, 2016</span></li>
                                            <li><span><i class="fa fa-map-marker"></i>California</span></li>
                                        </ul>
                                    </div>
                                    <h3>Event Name</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing [&#8230;]</p>
                                    <a class="read-more" href="#">read more<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>





                            <div class="col-lg-3 col-md-4 col-sm-6 mix june-01  hvr-float-shadow wow fadeIn">
                                <div class="img-holder"><img width="272" height="170" src="<?php echo base_url(); ?>assets/theme/uploads/2016/01/1-3.jpg" class="img-responsive wp-post-image" alt="1" /></div>
                                <div class="content-wrap">
                                    <img src="<?php echo base_url(); ?>assets/theme/uploads/2016/01/author.png" alt="" class="author-img">
                                    <div class="meta">
                                        <ul>
                                            <li><span><i class="fa fa-clock-o"></i>Jan 20, 2016</span></li>
                                            <li><span><i class="fa fa-map-marker"></i>California</span></li>
                                        </ul>
                                    </div>
                                    <h3>Event Name</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing [&#8230;]</p>
                                    <a class="read-more" href="#">read more<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>





                            <div class="col-lg-3 col-md-4 col-sm-6 mix may-10  hvr-float-shadow wow fadeIn">
                                <div class="img-holder"><img width="272" height="170" src="<?php echo base_url(); ?>assets/theme/uploads/2016/01/2-2.jpg" class="img-responsive wp-post-image" alt="2" /></div>
                                <div class="content-wrap">
                                    <img src="<?php echo base_url(); ?>assets/theme/uploads/2016/01/author.png" alt="" class="author-img">
                                    <div class="meta">
                                        <ul>
                                            <li><span><i class="fa fa-clock-o"></i>Jan 20, 2016</span></li>
                                            <li><span><i class="fa fa-map-marker"></i>California</span></li>
                                        </ul>
                                    </div>
                                    <h3>Event Name</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing [&#8230;]</p>
                                    <a class="read-more" href="#">read more<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>





                            <div class="col-lg-3 col-md-4 col-sm-6 mix may-15  hvr-float-shadow wow fadeIn">
                                <div class="img-holder"><img width="272" height="170" src="<?php echo base_url(); ?>assets/theme/uploads/2016/01/3-2.jpg" class="img-responsive wp-post-image" alt="3" /></div>
                                <div class="content-wrap">
                                    <img src="<?php echo base_url(); ?>assets/theme/uploads/2016/01/author.png" alt="" class="author-img">
                                    <div class="meta">
                                        <ul>
                                            <li><span><i class="fa fa-clock-o"></i>Jan 20, 2016</span></li>
                                            <li><span><i class="fa fa-map-marker"></i>California</span></li>
                                        </ul>
                                    </div>
                                    <h3>Event Name</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing [&#8230;]</p>
                                    <a class="read-more" href="#">read more<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>





                            <div class="col-lg-3 col-md-4 col-sm-6 mix may-22  hvr-float-shadow wow fadeIn">
                                <div class="img-holder"><img width="272" height="170" src="<?php echo base_url(); ?>assets/theme/uploads/2016/01/1-3.jpg" class="img-responsive wp-post-image" alt="1" /></div>
                                <div class="content-wrap">
                                    <img src="<?php echo base_url(); ?>assets/theme/uploads/2016/01/author.png" alt="" class="author-img">
                                    <div class="meta">
                                        <ul>
                                            <li><span><i class="fa fa-clock-o"></i>Jan 20, 2016</span></li>
                                            <li><span><i class="fa fa-map-marker"></i>California</span></li>
                                        </ul>
                                    </div>
                                    <h3>Event Name</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing [&#8230;]</p>
                                    <a class="read-more" href="#">read more<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>





                            <div class="col-lg-3 col-md-4 col-sm-6 mix may-28  hvr-float-shadow wow fadeIn">
                                <div class="img-holder"><img width="272" height="170" src="<?php echo base_url(); ?>assets/theme/uploads/2016/01/1-3.jpg" class="img-responsive wp-post-image" alt="1" /></div>
                                <div class="content-wrap">
                                    <img src="<?php echo base_url(); ?>assets/theme/uploads/2016/01/author.png" alt="" class="author-img">
                                    <div class="meta">
                                        <ul>
                                            <li><span><i class="fa fa-clock-o"></i>Jan 20, 2016</span></li>
                                            <li><span><i class="fa fa-map-marker"></i>California</span></li>
                                        </ul>
                                    </div>
                                    <h3>Event Name</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing [&#8230;]</p>
                                    <a class="read-more" href="http://google.com/">read more<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
</div>

<?php
$this->load->view('layout/footer');
?>