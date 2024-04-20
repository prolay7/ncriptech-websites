<link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js">
</script>
 <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js">
   </script>

<div class="container affiliation">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div id="college-slider" class="owl-carousel owl-theme">
                <div class="item"><img src="public/img/pharma/link1.png" alt="" class="img-fluid"></div>
                <div class="item"><img src="public/img/pharma/link2.png" alt="" class="img-fluid"></div>
                <div class="item"><img src="public/img/pharma/link3.png" alt="" class="img-fluid"></div>
                <div class="item"><img src="public/img/pharma/link4.png" alt="" class="img-fluid"></div>
                <div class="item"><img src="public/img/pharma/link5.png" alt="" class="img-fluid"></div>
                <div class="item"><img src="public/img/pharma/link6.png" alt="" class="img-fluid"></div>
                <div class="item"><img src="public/img/pharma/link1.png" alt="" class="img-fluid"></div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 5,
         
            dots: true,
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 3
                },
                992: {
                    items: 5
                }
            }
        });
    });
</script>