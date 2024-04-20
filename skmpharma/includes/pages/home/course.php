
<section class="shop-area pt-30 pb-60 p-relative desktop-course " data-animation="fadeInUp animated" data-delay=".2s">
                <div class="container">
                <div class="section-title center-align mb-50 wow fadeInDown  animated" data-animation="fadeInDown" data-delay=".4s" style="visibility: visible; animation-name: fadeInDown;">
                               
                                <h2 class="title1">
                                  POPULAR COURSES
                                </h2>                             
                            </div>
                    <div class="row align-items-center">
                        <?php
                    foreach ($courses as $course) {
?>
<div class="col-lg-4 col-md-6 ">
    <div class="courses-item mb-30 hover-zoomin">
        <div class="thumb fix">
            <a href="<?php echo $course['link']; ?>"><img src="<?php echo $course['image']; ?>" alt="contact-bg-an-01"></a>
        </div>
        <div class="courses-content">                                    
            
            <h3><a href="<?php echo $course['link']; ?>"><?php echo $course['title']; ?></a></h3>
            <p><?php echo $course['description']; ?></p>
            <div class="second-header-btn">
                      <a href="" class="btn">View Course</a>
                    </div>
        </div>
        <!-- <div class="icon">
            <img src="public/img/icon/cou-icon.png" alt="img">
        </div> -->
    </div>
</div>
<?php
}
?>
                     
                                                      
                    </div>
					
                </div>
            </section>


            
<section class="shop-area pt-30 pb-60 p-relative mobile-course" data-animation="fadeInUp animated" data-delay=".2s">
    <div class="container">
        <div class="section-title center-align mb-50 wow fadeInDown  animated" data-animation="fadeInDown" data-delay=".4s" style="visibility: visible; animation-name: fadeInDown;">
            <h2 class="title1">POPULAR COURSES</h2>
        </div>

        <!-- Owl Carousel Container -->
        <div id="popular-courses-carousel" class="owl-carousel owl-theme">
            <?php foreach ($courses as $course): ?>
                <div class="item">
                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item mb-30 hover-zoomin">
                            <div class="thumb fix">
                                <a href="<?php echo $course['link']; ?>"><img src="<?php echo $course['image']; ?>" alt="contact-bg-an-01"></a>
                            </div>
                            <div class="courses-content">                                    
                                <h3><a href="<?php echo $course['link']; ?>"><?php echo $course['title']; ?></a></h3>
                                <p><?php echo $course['description']; ?></p>
                                <div class="second-header-btn">
                                    <a href="" class="btn">View Course</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    $(document).ready(function(){
        // Initialize Owl Carousel
        $('#popular-courses-carousel').owlCarousel({
            items: 1, // Show 1 item per slide
            loop: true, // Enable loop
            autoplay: true, // Autoplay the carousel
            autoplayTimeout: 3000, // Autoplay interval in milliseconds
            responsive:{
                // Responsive settings for different screen sizes
                0:{
                    items:1 // Show 1 item per slide on smaller screens
                },
                600:{
                    items:2 // Show 2 items per slide on screens wider than 600px
                },
                1000:{
                    items:3 // Show 3 items per slide on screens wider than 1000px
                }
            }
        });
    });
</script>