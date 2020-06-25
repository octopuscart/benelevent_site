<?php
$this->load->view('layout/header');
?>


<div class="vc_row wpb_row vc_row-fluid eventdetails">
    <div class="wpb_column col-md-12">
        <!-- #upcoming-event -->
        <section id="upcoming-event">
            <div class="container">

                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-8">
                                <div class="img-holder">
                                    <img width="100%" src="<?php echo base_url(); ?>assets/images/defaultevents.png" class="img-responsive wp-post-image backeventimages" style="background: url(<?php echo $eventdata['event']['image']; ?>);" alt="1" />
                                </div>
                                <div class="content-wrap">
                                    <br/>
                                    <h3 title="<?php echo $eventdata['event']['title']; ?>" class="textoverflow"><?php echo $eventdata['event']['title']; ?></h3>
                                    <p class=""><?php echo $eventdata['event']['description']; ?></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="section-title">
                                    <h1><?php echo $eventdata['event']['title']; ?></h1>
                                </div>
                                <hr/>
                                <small>Event organizing By</small>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#" style="    height: 50px;
                                           width: 50px;
                                           float: left;">

                                            <img src="<?php echo base_url(); ?>assets/images/userdefault.png" alt="" class="author-img backeventimages media-object" style="background: url(<?php echo $eventdata['manager']['image']; ?>);height: 45px;width:45px">

                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php echo $eventdata['manager']['first_name'] . ' ' . $eventdata['manager']['last_name']; ?></h4>
                                        <?php echo $eventdata['manager']['email']; ?>
                                    </div>
                                </div>
                                <hr/>



                                <ul class="list-group">
                                    <li class=""><i class="fa fa-calendar"></i> &nbsp;<?php echo $eventdata['event']['days']; ?></li>
                                    <hr/>
                                    <li class=""><i class="fa fa-clock-o"></i>  &nbsp;<?php echo $eventdata['event']['from_time']; ?> - <?php echo $eventdata['event']['to_time']; ?></li>
                                    <hr/>
                                    <li class="">
                                        <i class="fa fa-map-marker" style="float: left;height: 60px; width: 18px;    padding-top: 18px;"></i> 
                                        <div class="addressblockevent">
                                            <?php echo $eventdata['event']['address']; ?>, <br/>
                                            <?php echo $eventdata['event']['city']; ?>,  <?php echo $eventdata['event']['state']; ?>,  <?php echo $eventdata['event']['country']; ?>
                                        </div>
                                    </li>
                                      <hr/>
                                    <li class=""><i class="fa fa-phone"></i> &nbsp;<?php echo $eventdata['event']['contact_no']; ?></li>
                                   <hr/>
                                   <a href="<?php echo site_url('Account/login');?>" class="colored hvr-bounce-to-right join-event-button">JOIN EVENT NOW</a>
                                   <span>
                                       Get notified when the event happens next time.
                                   </span>
                                </ul>
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