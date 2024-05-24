

        <!--<title>Responsive Card Slider</title>-->

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">

      
      
        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
        <div class="container">                            
    <div class="section-title wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s" style="visibility: visible; animation-name: fadeInDown;">
        <h2>What Our <span>Students Say</span></h2>
    </div>
</div>

<div class="slide-container swiper">
    <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
            <?php foreach ($testimonials as $testimonial) : ?>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <div class="qt-img">
                            <img src="public/img/gps/quote.png" alt="img">
                        </div>
                        <div class="row">
                            <div class="col-lg-6  col-12">
                                <img src="<?php echo $testimonial['image']; ?>" alt="" class="card-img">
                            </div>
                            <div class="col-lg-6  col-12">
                                <div class="name">
                                    <h2><?php echo $testimonial['name']; ?></h2>
                                    <p><?php echo $testimonial['class']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <p class="description"><?php echo $testimonial['description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>


    <!-- Swiper JS -->
   <script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
      <!--Uncomment this line-->
    <script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/script.js"></script>

