<div class="row">
<div class="col-md-4">
    <div class="latestevent">
      <?php $queryObject = new WP_Query( 'post_type=event&showposts=2' );
        if ($queryObject->have_posts()) { ?>
          <?php while ($queryObject->have_posts()) { $queryObject->the_post(); ?>
              <?php $event_subtitle   = get_post_meta( $post->ID, '_cmb_event_subtitle', true );
                    $event_desc       = get_post_meta( $post->ID, '_cmb_event_desc', true );
                    $event_venue      = get_post_meta( $post->ID, '_cmb_event_venue', true );
                    $event_date       = get_post_meta( $post->ID, '_cmb_event_date', true );
                    $event_time       = get_post_meta( $post->ID, '_cmb_event_time', true );
                    $eventtype        = get_post_meta( $post->ID, '_cmb_eventtype', true );
                    $eventthumb       = get_post_meta( $post->ID, '_cmb_eventthumb', true );
                    $eventbanner      = get_post_meta( $post->ID, '_cmb_eventbanner', true );
               ?>
                <p><?php echo $event_date; ?></p>
          <?php } ?>
          <?php } else { ?>

      <?php } ?>
    </div>
  </div>
  <div class="col-md-8">
      <div class="titlebox">
        <h3>UPCOMING <br>EVENTS</h3>
      </div>
      <div class="catevent">
        <a>MAJOR EVENT</a>
      <?php $queryObject = new WP_Query( 'post_type=event&showposts=2' );
        if ($queryObject->have_posts()) { ?>
          <?php while ($queryObject->have_posts()) { $queryObject->the_post(); ?>
              <?php $event_subtitle   = get_post_meta( $post->ID, '_cmb_event_subtitle', true );
                    $event_desc       = get_post_meta( $post->ID, '_cmb_event_desc', true );
                    $event_venue      = get_post_meta( $post->ID, '_cmb_event_venue', true );
                    $event_date       = get_post_meta( $post->ID, '_cmb_event_date', true );
                    $event_time       = get_post_meta( $post->ID, '_cmb_event_time', true );
                    $eventtype        = get_post_meta( $post->ID, '_cmb_eventtype', true );
                    $eventthumb       = get_post_meta( $post->ID, '_cmb_eventthumb', true );
                    $eventbanner      = get_post_meta( $post->ID, '_cmb_eventbanner', true );
               ?>
                 
                     <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?>"</a><h3>
                    
                    <p><?php echo $event_venue; ?>&nbsp;<?php echo $event_time; ?></p>
          <?php } ?>
          <?php } else { ?>

      <?php } ?>
        <a href="<?php echo home_url( '/' ); ?>weekly-events" class="current">WEEKLY EVENT</a>
      </div>
      <a href="<?php echo home_url( '/' ); ?>upcoming-events" class="moredetail">MORE EVENTS</a>
  </div>
</div><!-- /.row -->


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
                </div><!-- /.col -->
                <!-- EVENTS DATE & LIST -->
                <div class="col-md-10">
                <?php $queryObject = new WP_Query( 'post_type=event&showposts=2' );
                  if ($queryObject->have_posts()) { ?>
                    <?php while ($queryObject->have_posts()) { $queryObject->the_post(); ?>
                        <?php $event_subtitle   = get_post_meta( $post->ID, '_cmb_event_subtitle', true );
                              $event_desc       = get_post_meta( $post->ID, '_cmb_event_desc', true );
                              $event_venue      = get_post_meta( $post->ID, '_cmb_event_venue', true );
                              $event_date       = get_post_meta( $post->ID, '_cmb_event_date', true );
                              $event_time       = get_post_meta( $post->ID, '_cmb_event_time', true );
                              $eventtype        = get_post_meta( $post->ID, '_cmb_eventtype', true );
                              $eventthumb       = get_post_meta( $post->ID, '_cmb_eventthumb', true );
                              $eventbanner      = get_post_meta( $post->ID, '_cmb_eventbanner', true );
                         ?>
                            <div class="event-list-wrapper">
                              <div class="row">
                                <div class="date-event-list">
                                  <?php echo $event_date; ?>
                                  <!-- <span class="day">04</span>
                                  <span class="month">AUGUST</span> -->
                                </div>
                                <div class="event-list">
                                  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                  <span class="event-list-venue"><?php echo $event_venue; ?></span>
                                  <span class="event-list-time"><?php echo $event_time; ?></span>
                                </div>
                                <a href="http://jbn.instapage.com/" target="_blank" class="button2" style="float:right">REGISTER</a>
                              </div>
                            </div>
                    <?php } ?>
                    <?php } else { ?>
                <?php } ?>
                </div><!-- /.col -->
              </div><!-- /.events-wrapper -->
            </div><!-- /.row -->

          </div><!-- /.container-->
        </div><!-- /#event-list -->
