
<section class="desktop-banner">
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <?php if(!empty($slides)) :?>
      <?php foreach ($slides as $index => $slide) : ?>
        <div class="carousel-item <?php echo ($index === 0) ? 'active' : ''; ?> c-item">
          <img src="<?php echo $slide['image']; ?>" class="d-block w-100 c-img " alt="Slide <?php echo $index + 1; ?>">
          <div class="carousel-caption">
            <div class="container">
              <div class="row">
                <div class="col-lg-7 col-md-7">
                  <div class="slider-content s-slider-content">
                    <h5 class="wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s" style="animation-delay: 0.4s;"><?php echo $slide['caption']; ?></h5>
                    <h4 data-animation="fadeInUp" data-delay=".4s" class="wow fadeInUp animated" style="animation-delay: 0.4s;"><?php echo $slide['subtitle']; ?></h4>
                    <h1 data-animation="fadeInUp" data-delay=".6s" class="wow fadeInUp animated" style="animation-delay: 0.6s;"><?php echo $slide['title']; ?></h1>
                    <h2 data-animation="fadeInUp" data-delay=".6s" class="wow fadeInUp animated" style="animation-delay: 0.6s;"><?php echo $slide['programme']; ?></h2>
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


<section class="mobile-banner">
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active c-item">
      <img src="public/img/pharma/mobile1.webp" class="d-block w-100 c-img" alt="Slide 1">
      <div class="carousel-caption">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-7">
              <div class="slider-content s-slider-content">
                <h5 class="wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s" style="animation-delay: 0.4s;">Welcome to SKM Institute of</h5>
                <h4 data-animation="fadeInUp" data-delay=".4s" class="wow fadeInUp animated" style="animation-delay: 0.4s;">Pharmaceutical Science &amp; Research</h4>
                <h1 data-animation="fadeInUp" data-delay=".6s" class="wow fadeInUp animated" style="animation-delay: 0.6s;">World Best Diploma</h1>
                <h2 data-animation="fadeInUp" data-delay=".6s" class="wow fadeInUp animated" style="animation-delay: 0.6s;">Programme</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="public/img/pharma/banner_mobile2.webp" class="d-block w-100 c-img" alt="Slide 2">
      <div class="carousel-caption">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-7">
              <div class="slider-content s-slider-content">
                <h5 class="wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s" style="animation-delay: 0.4s;">Explore Excellence at Skm</h5>
                <h4 data-animation="fadeInUp" data-delay=".4s" class="wow fadeInUp animated" style="animation-delay: 0.4s;">Pharmaceutical Science &amp; Research</h4>
                <h1 data-animation="fadeInUp" data-delay=".6s" class="wow fadeInUp animated" style="animation-delay: 0.6s;">Best Bachalor</h1>
                <h2 data-animation="fadeInUp" data-delay=".6s" class="wow fadeInUp animated" style="animation-delay: 0.6s;">Programme</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="public/img/pharma/banner_mobile3.webp" class="d-block w-100 c-img" alt="Slide 3">
      <div class="carousel-caption">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-7">
              <div class="slider-content s-slider-content">
                <h5 class="wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s" style="animation-delay: 0.4s;">Discover Innovation at Skm</h5>
                <h4 data-animation="fadeInUp" data-delay=".4s" class="wow fadeInUp animated" style="animation-delay: 0.4s;">Pharmaceutical Science &amp; Research</h4>
                <h1 data-animation="fadeInUp" data-delay=".6s" class="wow fadeInUp animated" style="animation-delay: 0.6s;">Leading in Bachalor</h1>
                <h2 data-animation="fadeInUp" data-delay=".6s" class="wow fadeInUp animated" style="animation-delay: 0.6s;">Programme</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
      </section>