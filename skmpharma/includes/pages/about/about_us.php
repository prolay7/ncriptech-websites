        <!-- about-area -->
        <section class="about-area chairman about-p pt-120 pb-50 p-relative fix" style="background: #f7f9ff;">
    <div class="animations-06"><img src="img/bg/an-img-01.png" alt="an-img-01"></div>
    <div class="animations-09"><img src="img/bg/slider_shape03.png" alt="contact-bg-an-01"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="about-content s-about-content pl-15 wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                    <div class="about-title second-title pb-25">
                        <h2><?php echo $aboutData['title']; ?></h2>
                    </div>
                    <?php foreach ($aboutData['content'] as $paragraph) { ?>
                        <p class="txt-clr"><?php echo $paragraph; ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 chairman">
                <div class="s-about-img2 p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                    <img src="<?php echo $aboutData['imageSrc']; ?>" alt="img">
                </div>
            </div>
        </div>
    </div>
</section>
            <!-- about-area-end -->