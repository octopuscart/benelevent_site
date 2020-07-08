<?php
$this->load->view('layout/header');
?>




<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column col-md-12">

        <?php
        $this->load->view('Events/eventFilter');
        ?>

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
                                <?php
                                foreach ($datearray as $key => $value) {
                                    ?>

                                    <li class="filter active" data-filter=".<?php echo $key; ?>"><span><?php echo $value; ?></span></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="tab-content-wrap row">
                            <?php
                            foreach ($eventdata as $ekey => $evalue) {
                                ?>


                                <div class="col-lg-3 col-md-4 col-sm-6 mix   <?php echo $evalue['dateclass']; ?>">
                                    <div class="img-holder">
                                        <img width="272" height="170" src="<?php echo base_url(); ?>assets/images/defaultevents.png" class="img-responsive wp-post-image backeventimages" style="background: url(<?php echo $evalue['image']; ?>)" alt="1" />
                                    </div>
                                    <div class="content-wrap">
                                        <img src="<?php echo base_url(); ?>assets/images/userdefault.png" alt="" class="author-img backeventimages" style="background: url(<?php echo $evalue['manager']['image']; ?>);height: 45px;">
                                        <div class="meta">
                                            <ul>
                                                <li><span><i class="fa fa-clock-o"></i><?php echo $evalue['days']; ?></span></li>
                                                <li><span><i class="fa fa-map-marker"></i><?php echo $evalue['city']; ?>, <?php echo $evalue['state']; ?></span></li>
                                            </ul>
                                        </div>
                                        <h3 title="<?php echo $evalue['title']; ?>" class="textoverflow"><?php echo $evalue['title']; ?></h3>
                                        <p class="textoverflow"><?php echo $evalue['description']; ?> [&#8230;]</p>
                                        <a class="read-more eventreadmore" href="<?php echo site_url("Events/details/" . $evalue['id']) ?>">read more<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>

                                <?php
                            }
                            ?>
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

<?php
$this->load->view('Events/eventFilterLib');
?>
