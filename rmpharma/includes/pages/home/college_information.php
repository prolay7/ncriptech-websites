<section class="team-area-content">
    <div class="container">
        <!-- Lower Content -->
        <div class="lower-content">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="team-img-box">
                        <a href=""><img src="<?= $college_information['image_src'] ?>" alt="img"></a>
                    </div>
                    <ul class="shape-group">
                        <li class="shape-3 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                            <img data-depth="2" src="public/img/rmpharma/Dots.png" alt="Shape" style="transform: translate3d(23.6px, -17.7px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                        </li>
                    </ul>
                </div>
                <div class="text-column col-lg-5 col-md-12 col-sm-12">
                    <div class="s-about-content f-widget-title pl-30 wow fadeInRight" data-animation="fadeInRight" data-delay=".2s">
                        <h2><?= $college_information['title'] ?></h2>
                        <ul class="list-group list-group-numbered">
                            <?php foreach ($college_information['items'] as $item) : ?>
                                <li class="list-group-item"><strong><?= $item ?></strong></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="slider-btn button_info">
                            <a href="<?= $college_information['button_link'] ?>" class="btn ss-btn smoth-scroll"><?= $college_information['button_text'] ?><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>