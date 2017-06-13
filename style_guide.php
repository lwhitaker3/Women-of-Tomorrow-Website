<?php
/**
 * Template Name: Style Guide
 */
?>

<?php get_template_part('templates/page', 'intro'); ?>

<div class="background">
  <div class="container">
    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('templates/page', 'header'); ?>
    <?php endwhile; ?>
  </div>

  <div class="container container_spacing_bottom">
    <div class="row">
    		<section id="branding" class="cd-branding">
    			<h2>Branding</h2>

    			<ul>
            <?php
              $image = get_field('logo', 'option');
              if( !empty($image) ): ?>
    				    <li class="cd-box"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></li>
            <?php endif; ?>
    			</ul>
    		</section>
      </div>
      <div class="row">

    		<section id="colors" class="cd-colors">
    			<h2>Colors</h2>

    			<ul>
    				<li class="cd-box">
    					<div class="cd-color-swatch"></div>
              <p>#D00000<br />Primary Brand</p>
    				</li>

    				<li class="cd-box">
    					<div class="cd-color-swatch"></div>
              <p>#A60000<br />Headings</p>
    				</li>

    				<li class="cd-box">
    					<div class="cd-color-swatch"></div>
              <p>#D93333<br />Accent Red</p>
    				</li>

    				<li class="cd-box">
    					<div class="cd-color-swatch"></div>
              <p>#2b2b2b<br />Secondary Brand</p>
    				</li>

    				<li class="cd-box">
    					<div class="cd-color-swatch"></div>
              <p>#1e1e1e<br />Accent Grey</p>
    				</li>

            <li class="cd-box">
              <div class="cd-color-swatch"></div>
              <p>##191919<br />Body Text</p>
            </li>

            <li class="cd-box">
              <div class="cd-color-swatch"></div>
              <p>#000000<br />White</p>
            </li>

            <li class="cd-box">
              <div class="cd-color-swatch"></div>
              <p>#d5d5d5<br />Light-Grey</p>
            </li>
    			</ul>
    		</section>
      </div>
      <div class="row">
    		<section id="typography" class="cd-typography">
    			<h2>Typography</h2>

    			<div class="cd-box">
            <span><h1>H1. Heading</h1></span>
            <span><h2>H2. Heading</h2></span>
            <span><h3>H3. Heading</h3></span>
            <span><h4>H4. Heading</h4></span>
            <span><h5>H5. Heading</h5></span>
            <span><h6>H6. Heading</h6></span>
            <span><p>Paragraph Text - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis voluptate distinctio reprehenderit, autem deleniti ad voluptatum eaque.</p></span>
            <span><p class="lead-in">Lead-in Text - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis voluptate distinctio reprehenderit, autem deleniti ad voluptatum eaque.</p></span>
            <span><p class="caption">Caption - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis voluptate distinctio reprehenderit, autem deleniti ad voluptatum eaque.</p></span>
          </div>
    		</section>
      </div>
      <div class="row">
    		<section id="buttons" class="cd-buttons">
    			<h2>Buttons</h2>

    			<div class="cd-box">
    				<button class="btn btn-primary">Primary Button</button>
    				<button class="btn btn-secondary">Secondary Button</button>
    			</div>

    		</section>
      </div>
      <div class="row">
    		<section id="icons" class="cd-icons">
    			<h2>Icons</h2>

    			<ul class="cd-box">
    				<i class="icon-file-pdf" aria-hidden="true"></i>
    				<i class="fa fa-heart" aria-hidden="true"></i>
    				<i class="fa fa-linkedin" aria-hidden="true"></i>
    				<i class="fa fa-briefcase" aria-hidden="true"></i>
    				<i class="fa fa-link" aria-hidden="true"></i>
    				<i class="fa fa-map-marker"></i>
    				<i class="fa fa-phone"></i>
    				<i class="fa fa-envelope"></i>
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
            <i class="fa fa-youtube"></i>
            <i class="ti-check-box" aria-hidden="true"></i>
            <i class="icon-quotes-left" aria-hidden="true"></i>
            <i class="icon-quotes-right" aria-hidden="true"></i>
            <i class="fa fa-calendar-o" aria-hidden="true"></i>
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <i class="fa fa-map-marker" aria-hidden="true"></i>
    			</ul>
    		</section>
    </div>
  </div>
</div>
