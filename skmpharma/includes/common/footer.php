
        <!-- footer -->
        <footer class="footer-bg footer-p pt-40">
    <div class="footer-top">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-3 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="copy-text">
                            <a href="index-2.html"><img src="<?php echo $footerData['logoUrl']; ?>" alt="img"></a>
                        </div>
                        <div class="f-contact">
                            <p><?php echo $footerData['aboutText']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h2>Quick Links</h2>
                        </div>
                        <div class="footer-link">
                            <ul>
                                <?php foreach ($footerData['quickLinks'] as $link) { ?>
                                    <li><a href="<?php echo $link['url']; ?>"><?php echo $link['text']; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h2>Our Links</h2>
                        </div>
                        <div class="footer-link">
                            <ul>
                                <?php foreach ($footerData['footerLinks'] as $link) { ?>
                                    <li><a href="<?php echo $link['url']; ?>"><?php echo $link['text']; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="footer-widget mb-30">
                        <div class="f-widget-title">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="f-contact">
                        <ul>
                                    <li class="mt-2">
                                        <i class="icon fal fa-phone"></i>
                                        <span><a href="tel:+91 - 7076380855">Call:+91-8768000093/<br>9002659019</a></span>
                                    </li>
                                   <li>
                                    <i class="icon fal fa-envelope"></i>
                                        <span>
                                        <a href="mailto:gitanjali.nursing@gmail.com">director.skmipsr@gmail.com</a>
                                       
                                       
                                       </span>
                                    </li>
                                    <li>
                                        <i class="icon fal fa-map-marker-check"></i>
                                        <span>Add:Vill+P.O- Lohapur, P.S- Nalhati, Dist- Birbhum, Pin- 731237, W.B
<br></span>
                                    </li>
                                    
                                </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="footer-social ">
                        <?php foreach ($footerData['socialLinks'] as $social) { ?>
                            <a href="<?php echo $social['url']; ?>"><i class="<?php echo $social['icon']; ?>" ></i></a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-4 text-center"></div>
                <div class="col-lg-4 text-right text-xl-right">
                    <?php echo $footerData['developer']['text']; ?><a href="<?php echo $footerData['developer']['url']; ?>"  style="
    color: white;" target="_blank"><?php echo $footerData['developer']['name']; ?></a>
                </div>
            </div>
        </div>
    </div>
</footer>
        <!-- footer-end -->
         <!-- JS here -->
     <script src="<?php echo $base_url;?>public/js/vendor/modernizr-3.5.0.min.js"></script>
        <!-- <script src="<?php echo $base_url;?>public/js/vendor/jquery-3.6.0.min.js"></script> -->
        <script src="<?php echo $base_url;?>public/js/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!--   <script src="<?php echo $base_url;?>public/js/slick.min.js"></script> -->
        <script src="<?php echo $base_url;?>public/js/ajax-form.js"></script>
        <script src="<?php echo $base_url;?>public/js/paroller.js"></script>
        <script src="<?php echo $base_url;?>public/js/wow.min.js"></script>
        <script src="<?php echo $base_url;?>public/js/js_isotope.pkgd.min.js"></script>
        <script src="<?php echo $base_url;?>public/js/imagesloaded.min.js"></script>
        <script src="<?php echo $base_url;?>public/js/parallax.min.js"></script>
        <script src="<?php echo $base_url;?>public/js/jquery.waypoints.min.js"></script>
        <!-- <script src="<?php echo $base_url;?>public/js/jquery.counterup.min.js"></script> -->
        <script src="<?php echo $base_url;?>public/js/jquery.scrollUp.min.js"></script>
        <script src="<?php echo $base_url;?>public/js/jquery.meanmenu.min.js"></script>
        <script src="<?php echo $base_url;?>public/js/parallax-scroll.js"></script>
        <script src="<?php echo $base_url;?>public/js/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo $base_url;?>public/js/element-in-view.js"></script>
        <script src="<?php echo $base_url;?>public/dist/js/glightbox.min.js"></script>
        <script src="<?php echo $base_url;?>public/js/main.js"></script>
        <!-- <script src="public/js/owl.carousel.min.js"></script>
        <script src="public/js/owl.carousel.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.7/countUp.min.js"></script>
        <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js">
</script>
 <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js">
   </script>





