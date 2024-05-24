<section class="syllabus pt-60 pb-60">
    <div class="container">
        <div class="about-title second-title pb-25">
            <h2>Syllabus of our School</h2>
        </div>
        <div class="row">
            <?php foreach ($syllabus_data as $syllabus): ?>
                <div class="col-lg-3">
                    <div class="syllabus-box">
                        <a href="public/img/pdf/<?php echo $syllabus['file']; ?>" target="_blank" rel="noopener">
                            <figure>
                                <img loading="lazy" decoding="async" src="public/img/pdf/pdf-icon.png" alt="pdf Icon" width="61" height="80">
                            </figure>
                            <strong><?php echo $syllabus['label']; ?></strong>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>