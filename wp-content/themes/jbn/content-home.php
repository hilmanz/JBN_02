<div id="slider" >
  <div class="container">
    <div class="row">
    <div class="flexslider">
      <ul class="slides">

           <?php $queryObject = new WP_Query( 'post_type=slider&showposts=10' );
                // The Loop!
                if ($queryObject->have_posts()) { ?>
                    <?php while ($queryObject->have_posts()) { $queryObject->the_post(); ?>
                        <?php $text_banner = get_post_meta( $post->ID, '_cmb_text_banner', true );
                              $slide_img = get_post_meta( $post->ID, '_cmb_slide_img', true );
                         ?>
                          <li>
                              <div class="slider-wrapper ">
                                  <img alt="<?php the_title(); ?>" title="<?php the_title(); ?>" src="<?php echo $slide_img; ?>"/>
                              </div>
                          </li>

                    <?php } ?>
                <?php } else { ?>
                  <li>
                      <div class="slider-wrapper">
                        <img src="<?php bloginfo('template_directory'); ?>/content/slider/slider1.jpg"/>
                        <div class="slidecontent">
                          <h2>JBN</h2>
                          <div class="fl">
                            <p>  is a referrals club to develop every member’s business,
                              brand or portfolio through referrals, strategic information,
                              access to valuable contacts and best practices.</p>
                            <a href="<?php echo home_url( '/' ); ?>about" class="moredetail">MORE DETAILS</a>
                          </div>
                          <div class="invitation-wrapper">
                            <h3>GET YOUR INVITATION HERE!</h3>
                            <div class="invitation-form-wrapper">
                              <p>Are you ready to start exchanging referrals with others like-minded Jakarta professionals?</p>
                              <form action="" method="">
                                <div class="invitation-form">
                                  <div class="col-md-4">
                                    <input type="text" placeholder="Your Name">
                                  </div>
                                  <div class="col-md-6">
                                    <input type="email" placeholder="Your Email">
                                  </div>
                                </div>
                              </form>
                              <div class="invitation-receive">
                                <a href="http://jbn.instapage.com" target="_blank">RECEIVE INVITATION</a>
                              </div>
                            </div>
                          </div>
                        </div><!-- /.slidecontent -->
                      </div>
                  </li>
                <?php } ?>
      </ul>
    </div>
  </div>
  </div>
</div><!-- END #slider -->
<div id="body">
    <div id="content-home">
        <div id="sectionvideo" class="section sectionGrey">
             <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <div class="titlebox">
                      <h3>SEE FOOTAGE<br> FROM JBN<br> SESSIONS</h3>
                    </div>
                  </div>
                  <div class="col-md-8">
                      <div id="video">
                        <iframe width="100%" height="380" src="https://www.youtube.com/embed/sr6sI8hjQwc" frameborder="0" allowfullscreen></iframe>
                      </div>
                  </div>
                </div>
             </div>
        </div>
        <div id="sectionevent" class="section">
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-widget">
                            <?php include(TEMPLATEPATH."/widget/recentevent.php");?>
                        </div>
                    </div>
                </div>
             </div>
        </div>

        <!-- START STATIC RECENT EVENTS -->
        <div id="event-list" class="section">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-md-offset-8">
                <div class="titlebox">
                  <h3>UPCOMING<br>EVENTS</h3>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="events-wrapper">
                 <!-- EVENTS TYPE -->
                <div class="col-md-2">
                  <div class="event-type-title">
                    Major Events
                  </div>
                </div>
                <!-- EVENTS DATE & LIST -->
                <div class="col-md-10">

                  <div class="event-list-wrapper">
                    <div class="row">
                      <div class="date-event-list">
                        <span class="day">04</span>
                        <span class="month">AUGUST</span>
                      </div>
                      <div class="event-list">
                        <h3>JBN West Chapter premiere event</h3>
                        <span class="event-list-venue">Hotel Pullman, Central Park, Jakarta</span>
                        <span class="event-list-time">11:00-14:00</span>
                      </div>
                      <a href="http://jbn.instapage.com/" target="_blank" class="button2" style="float:right">REGISTER</a>
                    </div>

                    <div class="row">
                      <div class="date-event-list">
                        <span class="day">04</span>
                        <span class="month">AUGUST</span>
                      </div>
                      <div class="event-list">
                        <h3>JBN 3rd Anniversary</h3>
                        <span class="event-list-venue">Fairmont Hotel, Senayan, Jakarta</span>
                        <span class="event-list-time">18:30-21:00</span>
                      </div>
                      <a href="http://jbn.instapage.com/" target="_blank" class="button2" style="float:right">REGISTER</a>
                    </div>
                  </div>
                </div>
              </div><!-- /.events-wrapper -->
            </div>

            <div class="row">
              <div class="events-wrapper">
                <!-- EVENTS TYPE -->
                <div class="col-md-2">
                  <div class="event-type-title">
                    WEEKLY Events
                  </div>
                </div>

                <div class="col-md-10">
                  <div class="event-list-wrapper">
                    <div class="row">
                      <div class="date-event-list">
                        <span class="day">02</span>
                        <span class="month">AUGUST</span>
                      </div>
                      <div class="event-list">
                        <h3>JAKARTA BUSINESS NETWORKERS</h3>
                        <span class="event-list-venue">Fairmont Hotel, Senayan (Sapori Deli, 3rd floor)</span>
                        <span class="event-list-time">07:00-09:00</span>
                      </div>
                      <a href="http://jbn.instapage.com/" target="_blank" class="button2" style="float:right">REGISTER</a>
                    </div>
                    <div class="row" style="margin-top:20px;">
                      <div class="date-event-list">
                        <span class="day">04</span>
                        <span class="month">AUGUST</span>
                      </div>
                      <div class="event-list">
                        <h3>JAKARTA BUSINESS NETWORKERS</h3>
                        <span class="event-list-venue">MD Place, Setia Budi (Valentino, 11th floor)</span>
                        <span class="event-list-time">11:30-13:00</span>
                      </div>
                      <a href="http://jbn.instapage.com/" target="_blank" class="button2" style="float:right">REGISTER</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- /.container-->
        </div><!-- /#event-list -->
        <!-- END STATIC RECENT EVENTS -->

        <div id="sectionrecent" class="section sectionGrey">
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-widget">
                            <?php include(TEMPLATEPATH."/widget/recentblog.php");?>
                        </div>
                    </div>
                </div><!-- END .row -->
             </div> <!-- END .container -->
        </div>   <!-- END #sectionrecent -->

        <div id="event-list" class="section">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <img src="http://touchbaseconnect.com/kanadigital/jbn/wp-content/uploads/2016/10/sponsors_02.png">
              </div>
              <div class="col-md-4">
                <div class="titlebox">
                  <h3>SPONSORED BY</h3>
                </div>
              </div>
            </div>
        </div>
        </div>
    </div> <!-- END #content-home -->
</div>  <!-- END #body -->
