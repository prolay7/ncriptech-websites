<main>
           <!-- slider-area -->
            <section id="parallax" class="slider-area slider-two fix p-relative">
              
            <section class="desktop-banner">
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active img-thumbnail" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
  
  </div>
  <div class="carousel-inner">
    <?php if(!empty($slides)) :?>
      <?php foreach ($slides as $index => $slide) : ?>
        <div class="carousel-item <?php echo ($index === 0) ? 'active' : ''; ?> c-item">
          <img src="<?php echo $slide['image']; ?>" class="d-block w-100 c-img  
  .image-container" alt="Slide <?php echo $index + 1; ?>">
          <!-- <div class="overlay"></div> -->
          <div class="carousel-caption">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-8 col-md-7 ">
                  <div class="slider-content s-slider-content">
                  <p class="wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s" style="animation-delay: 0.4s;"><?php echo $slide['caption2']; ?></p>
                  <h1 data-animation="fadeInUp" data-delay=".6s" class="wow fadeInUp animated under" style="animation-delay: 0.6s;"><span><?php echo $slide['title']; ?></span></h1>
                  <h1 data-animation="fadeInUp" data-delay=".6s" class="wow fadeInUp animated" style="animation-delay: 0.6s;"><?php echo $slide['title1']; ?></h1>
                    <p class="wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s" style="animation-delay: 0.4s;"><?php echo $slide['caption']; ?></p>
                    <div class=menu>
                    <div class="second-header-btn4" data-animation="fadeInUp" data-delay=".4s" style="animation-delay: 0.4s;">
                                               <a href="<?php echo $base_url?>contact" class="">Admission</a>
                                            </div>
                                           
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-7 principle">

             
                      </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif;?>


    
    <div class="container">
                           <div class="row">
                              
                                <div class="col-lg-7 col-md-7">
                                  
                                </div>
                                <div class="col-lg-5 col-md-5 p-relative">

                                <div class="services-box07">
                                
                                <div class="sr-contner">
                                   <div class="icon">
                                   <img src="public/img/gps/Principal.webp" alt="icon01">

                                   
                                   </div>
                                   <div class="text">
                                       <h5><a href="">Principle Desk</a></h5>
                                   
                                   </div>

                                   
                                </div>

                                <div class="sr-contner">
                                   
                                   <div class="text">
                              <p>School education lays the foundation for the future of the student and ensures a stable, successful
and satisfied life.We believe Early Childhood Care and Education (ECCE) is truly inclusive that is much more than just preparation for primary school.<br><br>-Principle Name</p>
                              
                           
                                   </div>

                                   

                                   
                                </div>
                                   
                                   
                               </div>                              
                            </div>
                        </div>
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
  <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active img-thumbnail" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <?php if(!empty($slides_mobile)) :?>
      <?php foreach ($slides_mobile as $index => $slide) : ?>
        <div class="carousel-item <?php echo ($index === 0) ? 'active' : ''; ?> c-item">
          <img src="<?php echo $slide['image']; ?>" class="d-block w-100 c-img  image-container " alt="Slide <?php echo $index + 1; ?>">
<!-- 
          <div class="overlay"></div> -->
          <div class="carousel-caption">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-7 text-center">
                  <div class="slider-content s-slider-content">
                  <p class="wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s" style="animation-delay: 0.4s;"><?php echo $slide['caption2']; ?></p>
                  <h1 data-animation="fadeInUp" data-delay=".6s" class="wow fadeInUp animated under" style="animation-delay: 0.6s;"><?php echo $slide['title']; ?></h1>
                  <h1 data-animation="fadeInUp" data-delay=".6s" class="wow fadeInUp animated" style="animation-delay: 0.6s;"><?php echo $slide['title1']; ?></h1>
                    <h5 class="wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s" style="animation-delay: 0.4s;"><?php echo $slide['caption']; ?></h5>
                    <div class=menu>
                    <div class="second-header-btn4" data-animation="fadeInUp" data-delay=".4s" style="animation-delay: 0.4s;">
                                               <a href="<?php echo $base_url?>contact" class="">Admission</a>
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

  <div class="container">
                           <div class="row">
                             
                                <div class="col-lg-12 col-md-12 col-12 p-relative">

                                <div class="services-box07">
                                
                                <div class="sr-contner">
                                   <div class="icon">
                                   <img src="public/img/gps/Principal.webp" alt="icon01">

                                   
                                   </div>
                                   <div class="text">
                                       <h5><a href="">Principle Desk</a></h5>
                                   
                                   </div>

                                   
                                </div>

                                <div class="sr-contner">
                                   
                                   <div class="text">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet in augue eu placerat. Curabitur in viverra turpis, quis egestas justo. Donec eget tellus risus. Curabitur arcu purus, porttitor ac lorem nec, egestas interdum massa.<br><br>-Principle Name</p>
                              
                                   
                                   </div>

                                   
                                </div>
                                   
                                   
                               </div>                              
                            </div>
                        </div>
  </div>
</div>
      </section>
                    
               
            </section>