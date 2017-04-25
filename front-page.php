<?php
/**
 * Template Name: Front Page
 */
?>
<?php while (have_posts()) : the_post(); ?>
<?php endwhile; ?>


<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">

  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png">
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png">
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png">
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-caption d-none d-md-block">
    <h3>Empowering Young Women for 20 Years</h3>
    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
  </div>
</div>



<div class="container">
    <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-12">
      <h2>Who We Are</h2>
      <p>The Women of Tomorrow mission is to inspire, motivate and empower young women to live up to their full potential through a unique mentoring program with highly accomplished professional women and scholarship opportunities.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <h2>What Makes us Unique</h2>
    </div>
    <div class="col-lg-4">
      <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
      <h3>Heading</h3>
      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
      <h3>Heading</h3>
      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
      <h3>Heading</h3>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
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
      <h2>Our Results</h2>
    </div>
    <div class="col-lg-6">
      <a id="videoLink" href="#0" class="video-hp" data-toggle="modal" data-target="#introVideo"><img src="img/someImage.jpg">toggle video</a>
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




<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="sponsors-slider">
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png"></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png"></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png"></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png"></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png"></div>
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png"></div>
      </div>
    </div>
  </div>
</div>
