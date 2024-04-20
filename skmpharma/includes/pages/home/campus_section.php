<div class="edu-campus-area gap-lg-top-equal">
<ul class="shape-group">
                               
                                <li class="shape-3 scene" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg);transform-style: preserve-3d;backface-visibility: hidden;pointer-events: none;margin-left: 400px;margin-top: -200px;">
                                    <img data-depth="-1.5" src="public/img/pharma/Circle.png" alt="Shape" style="transform: translate3d(-15.7px, 13.7px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                </li>
                            </ul>
            <div class="container edublink-animated-shape">
                <div class="row g-5">
                <div class="col-xl-6 sal-animate" data-sal-delay="50" data-sal="slide-left" data-sal-duration="800">
    <div class="campus-content">
        <div class="inner">
            <div class="section-title section-left">
                <h2 class="title2 wow fadeInDown animated">CAMPUS LIFE</h2>
                <span class="shape-line"><i class="icon-19"></i></span>
            </div>
            <div class="features-list">
                <?php foreach ($features as $feature): ?>
                    <div class="features-box color-secondary-style">
                        <div class="icon">
                            <img src="<?php echo $feature['icon']; ?>">
                        </div>
                        <div class="content">
                            <h5 class="title"><?php echo $feature['title']; ?></h5>
                            <p><?php echo $feature['description']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div><div class="col-xl-6 sal-animate" data-sal-delay="50" data-sal="slide-right" data-sal-duration="800">
    <div class="campus-image-gallery">
        <div class="campus-thumbnail">
            <div class="thumbnail">
                <?php foreach ($imagePaths as $imagePath): ?>
                    <img src="<?php echo $imagePath; ?>" alt="Campus">
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>