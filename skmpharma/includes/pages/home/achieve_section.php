<div class="features-area-3">
    <div class="container">
        <div class="features-grid-wrap">
            <?php foreach ($features1 as $feature) { ?>
                <div class="features-box features-style-3 color-primary-style edublink-svg-animate">
                    <div class="icon">
                        <img class="svgInject" src="<?php echo $feature['icon']; ?>" alt="animated icon">
                    </div>
                    <div class="content">
                        <h4 class="title"><?php echo $feature['title']; ?></h4>
                        <p><?php echo $feature['content']; ?></p>
                        <?php if (isset($feature['link'])) { ?>
                            <div class="second-header-btn2">
                                <a href="<?php echo $feature['link']; ?>">PROSPECTUS</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>