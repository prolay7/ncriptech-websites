<section class="shop-area pt-30 pb-60 p-relative " data-animation="fadeInUp animated" data-delay=".2s">
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
        <div class="icon">
            <img src="public/img/icon/cou-icon.png" alt="img">
        </div>
    </div>
</div>
<?php
}
?>
                     
                                                      
                    </div>
					
                </div>
            </section>