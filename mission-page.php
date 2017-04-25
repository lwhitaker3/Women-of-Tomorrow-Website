<?php
/**
 * Template Name: Our Mission
 */
?>


<?php get_template_part('templates/page', 'intro'); ?>

<div class="container">
    <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-12">
      <p>The Women of Tomorrow mission is to inspire, motivate and empower young women to live up to their full potential through a unique mentoring program with highly accomplished professional women and scholarship opportunities.</p>
    </div>
  </div>


  <div class="row">
    <div class="col-lg-4">
      <p id="number1count">4</p>
      <p>Girls Mentored</p>
    </div>
    <div class="col-lg-4">
      <p id="number2count">4</p>
      <p>Girls Mentored</p>
    </div>
    <div class="col-lg-4">
      <p id="number3count">4</p>
      <p>Girls Mentored</p>
    </div>
  </div>
</div>

<div class="full-width-image" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png"></div>

<div id="instafeed"></div>


<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h2>Mentee Benefits</h2>
    </div>
    <div class="col-lg-6">
      <a id="videoLink" href="#0" class="video-hp" data-toggle="modal" data-target="#introVideo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png">toggle video</a>
      <div class="modal fade" id="introVideo" tabindex="-1" role="dialog" aria-labelledby="introductionVideo" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item allowfullscreen"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <ul>
        <li>Result 1</li>
        <li>Result 2</li>
      </ul>
    </div>
  </div>
</div>

<div class="container">
  <div class="col-lg-12">
    <h2>Testimonials</h2>
  </div>
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="slider-for">
        <div><p>1)Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula</p></div>
        <div><p>2)Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula</p></div>
        <div><p>3)Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula</p></div>
        <div><p>4)Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula</p></div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="slider slider-nav">
        <div>
          <div class="slider-image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png">
          </div>
        </div>
        <div>
          <div class="slider-image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png">
          </div>
        </div>
        <div>
          <div class="slider-image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png">
          </div>
        </div>
        <div>
          <div class="slider-image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png">
          </div>
        </div>

      </div>

    </div>
  </div>
</div>
