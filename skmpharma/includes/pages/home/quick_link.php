<link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js">
</script>
 <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js">
   </script>

<div class="carousel-wrap">
  <div class="owl-carousel">
    <div class="item"><img src="public/img/pharma/link1.png"></div>
    <div class="item"><img src="public/img/pharma/link2.png"></div>
    <div class="item"><img src="public/img/pharma/link3.png"></div>
    <div class="item"><img src="public/img/pharma/link4.png"></div>
    <div class="item"><img src="public/img/pharma/link5.png"></div>
    <div class="item"><img src="public/img/pharma/link6.png"></div>
    <div class="item"><img src="public/img/pharma/link1.png"></div>
    <div class="item"><img src="public/img/pharma/link2.png"></div>
    <div class="item"><img src="public/img/pharma/link3.png"></div>
    <div class="item"><img src="public/img/pharma/link4.png"></div>
    <div class="item"><img src="public/img/pharma/link5.png"></div>
    <div class="item"><img src="public/img/pharma/link6.png"></div>
  </div>
</div>

<script>
    $('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  dots:true,

  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 3
    },
    1000: {
      items: 5
    }
  }
})
    </script>