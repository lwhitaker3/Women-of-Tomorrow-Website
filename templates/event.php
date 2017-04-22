<section class="">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php echo $date ?>
    <?php echo $time ?>
    <?php the_field('event_description'); ?>

    <?php

    $images = get_field('event_images');
    $counter = 0;

    if( $images ): ?>
        <ul>
            <?php foreach( $images as $image ): ?>
                <li>
                    <a href="<?php echo $image['url']; ?>">
                         <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                    <p><?php echo $image['caption']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

</section>
