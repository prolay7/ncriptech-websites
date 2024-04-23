



<div class="container2">
    
<div class="about-content gallery s-about-content pl-15 wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                                <div class="about-title second-title pb-25">  
                                  
                                    <h2>Gallery</h2>                                   
                                </div>

  <div class="two-columns-container">
  <div class="thumbs">



<div class="row">
  <div class="column">
    <img class="demo cursor" src="https://iili.io/JGDL71V.jpg" onclick="currentSlide(1)" alt="">
  </div>
  <div class="column">
    <img class="demo cursor" src="https://iili.io/JGDLShG.jpg" onclick="currentSlide(2)" alt="">
  </div>
  <div class="column">
    <img class="demo cursor" src="https://iili.io/JGDLpCx.png" onclick="currentSlide(3)" alt="">
  </div>
  <div class="column">
    <img class="demo cursor" src="https://iili.io/JGDiiMl.jpg" onclick="currentSlide(4)" alt="">
  </div>
</div>

<!------------- END RIGHT SIDE THE THUMBNAILS --------------------->
</div>
  <div class="left-slide">



  <div class="mySlides">
    <!-- <div class="numbertext">1 / 4</div> -->
    <img src="https://iili.io/JGDL71V.jpg">
  </div>

  <div class="mySlides">
    <!-- <div class="numbertext">2 / 4</div> -->
    <img src="https://iili.io/JGDLShG.jpg">
  </div>

  <div class="mySlides">
    <!-- <div class="numbertext">3 / 4</div> -->
    <img src="https://iili.io/JGDLpCx.png">
  </div>
    
  <div class="mySlides">
    <!-- <div class="numbertext">4 / 4</div> -->
    <img src="https://iili.io/JGDiiMl.jpg">
  </div>

    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>


<!------------- END LEFT SIDE THE SLIDESHOW --------------------->
  </div>


  <!------------- END LEFT RIGHT SLIDE AND THUMBNAILS CONTAINER --------------------->
</div>



<!------------- END MAIN CONTAINER --------------------->
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

