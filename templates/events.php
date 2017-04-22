<?php
$date = get_field('event_date');
$time = get_field('event_time');
?>

<div class='event-excerpt'>
    <section class="">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php echo $date ?>
        <?php echo $time ?>
        <?php the_field('event_description'); ?>

        <?php

        $images = get_field('event_images');

        if( $images ): ?>
            <ul>
                <?php
                  $imageSize = count($images);
                  for( $i=0; $i<3 && $i<$imageSize; $i++ ):
                    $image = $images[$i];
                    ?>

                    <li>
                        <a href="<?php echo $image['url']; ?>">
                             <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </a>
                        <p><?php echo $image['caption']; ?></p>
                    </li>
                <?php endfor; ?>
            </ul>
        <?php endif; ?>



    </section>
</div>
