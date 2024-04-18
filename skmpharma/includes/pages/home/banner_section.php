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
                                         <h5 data-animation="fadeInUp" data-delay=".4s" class="" style="animation-delay: 0.4s;">Welcome to SKM Institute of </h5>
                                        
                                         <h4 data-animation="fadeInUp" data-delay=".4s" class="" style="animation-delay: 0.4s;"> Pharmaceutical Science &amp; Research</h4>
                                        <h1 data-animation="fadeInUp" data-delay=".6s" class="" style="animation-delay: 0.6s;">
                                        World Best Diploma </h1>

                                        <h2 data-animation="fadeInUp" data-delay=".6s" class="" style="animation-delay: 0.6s;">
                                        Programme</h2>


                                               
                                                              
                                    </div>                                
                            </div>
                        </div>
    </div>
   


<!-- Previous Button -->

  
</div>