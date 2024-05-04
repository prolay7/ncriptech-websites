<section class="project-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="single-item-carousel owl-carousel owl-theme">
                    <figure class="image"><img src="public/img/rmpharma/course1.jpeg" alt=""></figure>
                </div>
                <br>
                <h4>Carrer Options</h4>
                <ul class="pr-ul">
                    <?php foreach ($carrerOptions as $option) { ?>
                        <li>
                            <div class="icon"><i class="fal fa-check"></i></div>
                            <div class="text"><?= $option ?></div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="inner-column">
                    <h3>Course Overview</h3>
                    <?php foreach ($courseOverview as $overview) { ?>
                        <p><?= $overview ?></p>
                    <?php } ?>
                    <br>
                    <h4>Pharma Eligibility criteria</h4>
                    <?php foreach ($pharmaEligibility as $criteria) { ?>
                        <p><?= $criteria ?></p>
                    <?php } ?>
                    <br>
                    <h4>ADMISSION PROCEDURE</h4>
                    <?php foreach ($admissionProcedure as $procedure) { ?>
                        <p><?= $procedure ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>