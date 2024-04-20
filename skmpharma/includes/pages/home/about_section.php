<div class="edu-about-area about-style-3">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 sal-animate" data-sal-delay="50" data-sal="slide-up" data-sal-duration="800">
                        <div class="about-content">
                        <div class="section-title center-align mb-50 wow fadeInDown   animated" data-animation="fadeInDown" data-delay=".4s" style="visibility: visible; animation-name: fadeInDown;">
                               
                               <h2 class="title">
                                 About Us
                               </h2>                             
                           </div>
                           <ul class="nav nav-tabs" role="tablist">
    <?php foreach ($tab_panes as $index => $tab_pane): ?>
        <li class="nav-item" role="presentation">
            <button class="nav-link <?php echo ($index === 0) ? 'active' : ''; ?>" data-bs-toggle="tab" data-bs-target="#<?php echo $tab_pane['id']; ?>" type="button" role="tab" aria-selected="<?php echo ($index === 0) ? 'true' : 'false'; ?>"><?php echo $tab_pane['title']; ?></button>
        </li>
    <?php endforeach; ?>
</ul>
<div class="tab-content">
    <?php foreach ($tab_panes as $index => $tab_pane): ?>
        <div class="tab-pane fade <?php echo ($index === 0) ? 'show active' : ''; ?>" id="<?php echo $tab_pane['id']; ?>" role="tabpanel">
            <p><?php echo $tab_pane['content']; ?></p>
        </div>
    <?php endforeach; ?>
</div>
                        </div>
                    </div>
                    <div class="col-lg-6">
    <div class="about-image-gallery">
        <img class="main-img-1 sal-animate" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800" src="<?php echo $image_paths['main-img-1']; ?>" alt="About Image">
        <img class="main-img-2 sal-animate" data-sal-delay="100" data-sal="slide-left" data-sal-duration="800" src="<?php echo $image_paths['main-img-2']; ?>" alt="About Image">
        <ul class="shape-group">
            <li class="shape-3 scene sal-animate" data-sal-delay="500" data-sal="fade" data-sal-duration="200" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <img data-depth="2" src="<?php echo $image_paths['shape-3']; ?>" alt="Shape" style="transform: translate3d(23.6px, -17.7px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
            </li>
        </ul>
    </div>
</div>
                </div>
            </div>
            <ul class="shape-group">
                <li class="shape-5">
                    <img class="rotateit" src="https://skmpharma.in/assets/frontend/assets/images/about/shape-13.png" alt="Shape">
                </li>
                <li class="shape-6">
                    <span></span>
                </li>
            </ul>
        </div>