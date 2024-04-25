<section class="bg-light pt-5 pb-5 shadow-sm">
    <div class="container course">
        <div class="row pt-5">
            <div class="about-title second-title pb-25">  
                <h2>WHAT WE OFFER</h2>                                   
            </div>
        </div>
        <div class="row">
            <?php
            // Loop through the courses array and generate HTML for each course
            foreach ($courses as $course) {
            ?>
            <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                <div class="card">
                    <img src="<?php echo $course['image']; ?>" class="card-img-top" alt="Card Image">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title"><?php echo $course['name']; ?></h3>
                        <p class="card-text mb-4"><?php echo $course['description']; ?></p>
                        <a href="#" class="btn btn-primary mt-auto align-self-start">Apply now</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

      <!-- about-area -->
      <section class="about-area course1 about-p pt-90 p-relative fix">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <?php foreach ($pharma_courses as $course) { ?>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="s-about-img3 p-relative wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                    <img src="<?php echo $course['image']; ?>" alt="img">
                </div>
                <div class="about-title second-title pb-25">
                    <h5><?php echo $course['name']; ?></h5>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="about-content s-about-content pl-15 wow fadeInRight animated" data-animation="fadeInRight" data-delay=".4s">
                    <div class="about-title second-title pb-25">
                        <h3>COURSE OVERVIEW</h3>
                    </div>
                    <p class="txt-clr"><?php echo $course['overview']; ?></p>
                    <div class="about-title second-title pb-25">
                        <h3>WHAT YOU WILL OFFER</h3>
                    </div>
                    <p class="txt-clr"><?php echo $course['offer']; ?></p>
                </div>
            </div>
            <hr>
            <?php } ?>
        </div>
    </div>
</section>
            <!-- about-area-end -->