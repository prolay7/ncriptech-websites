<section class="about-area about-p pt-50 pb-50 p-relative fix" style="background: #f7f9ff;">
    <div class="animations-06"><img src="img/bg/an-img-01.png" alt="an-img-01"></div>
    <div class="animations-09"><img src="img/bg/slider_shape03.png" alt="contact-bg-an-01"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="about-content pl-15 wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                    <div class="about-title second-title pb-25">
                        <h5><i class="fal fa-graduation-cap"></i> <?= $about_content['subtitle'] ?></h5>
                        <h2><?= $about_content['title'] ?></h2>
                    </div>
                    <p class="txt-clr"><?= $about_content['description'] ?></p>
                    <div class="slider-btn mt-20">
                        <a href="<?= $about_content['button_link'] ?>" class="btn ss-btn smoth-scroll"><?= $about_content['button_text'] ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="s-about-img2 p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                    <img src="<?= $about_content['image_src'] ?>" alt="<?= $about_content['image_alt'] ?>">
                </div>
            </div>
        </div>
    </div>
</section>
            <!-- about-area-end -->