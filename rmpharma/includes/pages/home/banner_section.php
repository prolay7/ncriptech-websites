<main>
           <!-- slider-area -->
            <section id="parallax" class="slider-area slider-two fix p-relative">
              
            <section class="desktop-banner">
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active img-thumbnail" aria-current="true" aria-label="Slide 1"><img src="public/img/rmpharma/slider11.webp" class="d-block width-100"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"><img src="public/img/rmpharma/slider6.webp" class="d-block width-100"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"><img src="public/img/rmpharma/Banner3.webp" class="d-block width-100"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="Slide 4"><img src="public/img/rmpharma/slider10.webp" class="d-block width-100"></button>
  </div>
  <div class="carousel-inner">
    <?php if(!empty($slides)) :?>
      <?php foreach ($slides as $index => $slide) : ?>
        <div class="carousel-item <?php echo ($index === 0) ? 'active' : ''; ?> c-item">
          <img src="<?php echo $slide['image']; ?>" class="d-block w-100 c-img  
  .image-container" alt="Slide <?php echo $index + 1; ?>">
          <div class="overlay"></div>
          <div class="carousel-caption">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-7 text-center">
                  <div class="slider-content s-slider-content">
                  <h1 data-animation="fadeInUp" data-delay=".6s" class="wow fadeInUp animated under" style="animation-delay: 0.6s;"><?php echo $slide['title']; ?></h1>
                  <h1 data-animation="fadeInUp" data-delay=".6s" class="wow fadeInUp animated" style="animation-delay: 0.6s;"><?php echo $slide['title1']; ?></h1>
                    <h5 class="wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s" style="animation-delay: 0.4s;"><?php echo $slide['caption']; ?></h5>
                    <div class=menu>
                    <div class="second-header-btn" data-animation="fadeInUp" data-delay=".4s" style="animation-delay: 0.4s;">
                                               <a href="<?php echo $base_url?>contact" class="btn">Apply Now </a>
                                            </div>
                                            <div class="second-header-btn"data-animation="fadeInUp" data-delay=".4s" style="animation-delay: 0.4s;">
                                               <a href="<?php echo $base_url?>d.pharma" class="btn">Courses</a>
                                            </div>
      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif;?>
  </div>
</div>
      </section>
                    
               
            </section>
            <!-- slider-area-end -->



            <main>
           <!-- slider-area -->
            <section id="parallax" class="slider-area slider-two fix p-relative mobile-banner">
              
            <section class="mobile-banner">
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active img-thumbnail" aria-current="true" aria-label="Slide 1"><img src="public/img/rmpharma/slider11.webp" class="d-block width-100"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"><img src="public/img/rmpharma/slider6.webp" class="d-block width-100"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"><img src="public/img/rmpharma/Banner3.webp" class="d-block width-100"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="Slide 4"><img src="public/img/rmpharma/slider10.webp" class="d-block width-100"></button>
  </div>
  <div class="carousel-inner">
    <?php if(!empty($slides_mobile)) :?>
      <?php foreach ($slides_mobile as $index => $slide) : ?>
        <div class="carousel-item <?php echo ($index === 0) ? 'active' : ''; ?> c-item">
          <img src="<?php echo $slide['image']; ?>" class="d-block w-100 c-img  image-container " alt="Slide <?php echo $index + 1; ?>">

          <div class="overlay"></div>
          <div class="carousel-caption">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-7 text-center">
                  <div class="slider-content s-slider-content">
                  <h1 data-animation="fadeInUp" data-delay=".6s" class="wow fadeInUp animated under" style="animation-delay: 0.6s;"><?php echo $slide['title']; ?></h1>
                  <h1 data-animation="fadeInUp" data-delay=".6s" class="wow fadeInUp animated" style="animation-delay: 0.6s;"><?php echo $slide['title1']; ?></h1>
                    <h5 class="wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s" style="animation-delay: 0.4s;"><?php echo $slide['caption']; ?></h5>
                    <div class=menu>
                    <div class="second-header-btn" data-animation="fadeInUp" data-delay=".4s" style="animation-delay: 0.4s;">
                                               <a href="<?php echo $base_url?>contact" class="btn">Apply Now </a>
                                            </div>
                                            <div class="second-header-btn"data-animation="fadeInUp" data-delay=".4s" style="animation-delay: 0.4s;">
                                               <a href="<?php echo $base_url?>d.pharma" class="btn">Courses</a>
                                            </div>
      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif;?>
  </div>
</div>
      </section>
                    
               
            </section>