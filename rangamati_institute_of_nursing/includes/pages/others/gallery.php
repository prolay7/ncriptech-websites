<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper " style="padding: 80px 0px 10px 0px;">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-portfolio-item gdlr-core-item-pdb clearfix  gdlr-core-portfolio-item-style-metro" style="padding-bottom: 10px ;">
                            <div class="gdlr-core-portfolio-item-holder gdlr-core-js-2 clearfix" data-layout="masonry">

                                <?php foreach ($projects as $project): ?>
                                    <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-15">
                                        <div class="gdlr-core-portfolio-metro">
                                            <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-title-icon  gdlr-core-metro-rvpdlr">
                                                <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover">
                                                    <img src="<?php echo $project['image']; ?>" width="700" height="935" alt="" />
                                                    <span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js">
                                                        <span class="gdlr-core-image-overlay-content">
                                                            <span class="gdlr-core-portfolio-title gdlr-core-title-font" style="font-size: 22px; font-weight: 600; letter-spacing: 0px; text-transform: none;">
                                                               <!-- You can set the title dynamically if needed -->
                                                            </span>
                                                            <span class="gdlr-core-portfolio-icon-wrap">
                                                                <a class="gdlr-core-lightgallery gdlr-core-js" href="<?php echo $project['image']; ?>" data-lightbox-group="gdlr-core-img-group-1">
                                                                    <i class="gdlr-core-portfolio-icon arrow_expand"></i>
                                                                </a>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                            <div class="gdlr-core-load-more-wrap gdlr-core-js gdlr-core-center-align gdlr-core-item-pdlr" data-ajax="gdlr_core_portfolio_ajax">
                                <a href="#" class="gdlr-core-load-more gdlr-core-button-color" data-ajax-name="paged" data-ajax-value="2">Load More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
