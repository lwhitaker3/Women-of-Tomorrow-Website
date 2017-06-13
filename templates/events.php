<?php
$date = get_field('event_date');
$date = new DateTime($date);
$time = get_field('event_time');
$location = get_field('event_location');
?>

<div class='event-excerpt'>
  <div class='date_wrap'>
    <p class='day'><?php echo $date->format('j'); ?></p>
    <p class='month'><?php echo $date->format('M'); ?></p>
  </div>
  <div class="event-info-wrap">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="time"><?php echo $date->format('M j, Y'); if (!empty($time)):?> at <?php echo $time; endif;?></p>
    <p class="location"><?php echo $location ?></p>
    <?php $address = get_field('event_address');
      if( !empty($address) ):
      ?>
      	<p class="address"> <?php echo $address['address']; ?> </p>
      <?php endif; ?>
    <?php

        $images = get_field('event_images');

        if( $images ): ?>
            <div class="event_images">
              <p class="location">Photos</p>
                <?php
                  $imageSize = count($images);
                  for( $i=0; $i<3 && $i<$imageSize; $i++ ):
                    $image = $images[$i];
                    ?>
                      <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endfor; ?>
            </div>
        <?php endif; ?>

      </div>
</div>
