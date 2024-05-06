



<div class="container2">
    <div class="about-content gallery s-about-content pl-15 wow fadeInRight animated" data-animation="fadeInRight" data-delay=".4s">
        <div class="about-title second-title pb-25">
            <h2>Gallery</h2>
        </div>
        <div class="two-columns-container">
            <div class="thumbs">
                <div class="row">
                    <?php foreach ($galleryImages as $index => $imageUrl) { ?>
                        <div class="column">
                            <img class="demo cursor" src="<?php echo $imageUrl; ?>" onclick="currentSlide(<?php echo $index + 1; ?>)" alt="">
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="left-slide">
                <?php foreach ($galleryImages as $index => $imageUrl) { ?>
                    <div class="mySlides">
                        <img src="<?php echo $imageUrl; ?>">
                    </div>
                <?php } ?>
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
            </div>
        </div>
    </div>
</div>
<script>
    let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
    </script>

