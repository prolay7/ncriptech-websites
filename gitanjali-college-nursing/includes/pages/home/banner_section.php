   <!-- slider-area -->
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
          
              <img src="<?php echo $slide['image']; ?>" class="d-block w-100 c-img" alt="Slide <?php echo $index + 1; ?>">
             
          </div>
          
      <?php endforeach; ?>
      <?php endif;?>

      <div class="container">
                           <div class="row">
                              
                                <div class="col-lg-7 col-md-7">
                                <div class="slider-content s-slider-content mt-70">
                                         <h5 data-animation="fadeInUp" data-delay=".4s" class="" style="animation-delay: 0.4s;">Welcome to Gitanjali Institute Of Nursing</h5>
                                         <h2 data-animation="fadeInUp" data-delay=".4s" class="" style="animation-delay: 0.4s;">Empowering Success through Education</h2>
                                        <p data-animation="fadeInUp" data-delay=".6s" class="" style="animation-delay: 0.6s;">
                                        At Gitanjali Institute of Nursing, we warmly welcome you to embark on a journey of empowerment through education. Our commitment is to nurture your potential and guide you towards success in the field of nursing..</p>
                                        
                                          <div class="slider-btn mt-30">     
                                            <!-- <a href="about.html" class="btn ss-btn mr-15" data-animation="fadeInLeft" data-delay=".4s">Discover More <i class="fal fa-long-arrow-right"></i></a> -->
                                            <a href=<?php echo $base_url; ?>contact class="btn ss-btn active" data-animation="fadeInLeft" data-delay=".4s" tabindex="0" style="animation-delay: 0.4s;">Contact Us <i class="fal fa-long-arrow-right"></i></a>
                                        </div>        
                                                              
                                    </div>                                
                            </div>
                        </div>
    </div>
   


<!-- Previous Button -->

  
</div>