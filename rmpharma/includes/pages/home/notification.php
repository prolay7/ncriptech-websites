<section class="team-area-content notification desktop-notification">
    <div class="container">
        <!-- Lower Content -->
        <div class="lower-content">
            <div class="row">
                <div class="text-column col-lg-5 col-md-12 col-sm-12">
                    <div class="s-about-content1 f-widget-title  wow fadeInLeft" data-animation="fadeInLeft" data-delay=".2s">
                        <h2><?= $notification_content['title'] ?></h2>
                        <ul class="list-group list-group-numbered">
                            <?php foreach ($notification_content['items'] as $item) : ?>
                                <li class="list-group-item"><strong><?= $item ?></strong></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="slider-btn button_info">
                            <a href="<?= $notification_content['button_link'] ?>" class="btn ss-btn smoth-scroll"><?= $notification_content['button_text'] ?><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="team-img-box">
                        <a href=""><img src="<?= $notification_content['image_src'] ?>" alt="img"></a>
                    </div>
                    <ul class="shape-group">
                        <li class="shape-4 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                            <img data-depth="2" src="public/img/rmpharma/Dots.png" alt="Shape" style="transform: translate3d(23.6px, -17.7px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team-area-content notification mobile-notification">
    <div class="container">
        <!-- Lower Content -->
        <div class="lower-content">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="team-img-box">
                        <a href=""><img src="<?= $notification_content['image_src'] ?>" alt="img"></a>
                    </div>
                </div>
                <div class="text-column col-lg-5 col-md-12 col-sm-12">
                    <div class="s-about-content1 f-widget-title  wow fadeInLeft" data-animation="fadeInLeft" data-delay=".2s">
                        <h2><?= $notification_content['title'] ?></h2>
                        <ul class="list-group list-group-numbered">
                            <?php foreach ($notification_content['items'] as $item) : ?>
                                <li class="list-group-item"><strong><?= $item ?></strong></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="slider-btn button_info">
                            <a href="<?= $notification_content['button_link'] ?>" class="btn ss-btn smoth-scroll"><?= $notification_content['button_text'] ?><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>