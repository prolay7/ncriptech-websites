<!-- header -->
<section class="desktop-menu">
    <header class="header-area header-three">  
        <div class="top-nav" id="home">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4">
                        <div class="m-btn">
                            <a href="" class="btn1">Breking News</a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="marquee1 ">
                            <div class="message">G.N.M. &amp; B.Sc. Nursing Admission 2023: Admissions Open G.N.M. &amp; B.Sc. Nursing 2023-2024,GITANJALI INSTITUTE OF NURSING, BIRBHUM.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-top second-header d-none d-md-block">
            <div class="container">
                <div class="row align-items-center">      
                    <div class="col-lg-4 col-md-4 d-none d-lg-block ">
                        <div class="header-social">
                            <span>
                                Follow us:-
                                <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" title="LinkedIn"><i class="fab fa-instagram"></i></a>               
                                <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" title="Twitter"><i class="fab fa-youtube"></i></a>
                            </span>                    
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 d-none d-lg-block text-right">
                        <div class="header-cta">
                            <ul>
                                <li>
                                    <div class="call-box">
                                        <div class="icon">
                                            <i class="icon fal fa-phone"></i>
                                        </div>
                                        <div class="text">
                                            <span>Call Now !</span>
                                            <p>
                                                <a href="tel:+917052101786">7076380855</a>
</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="call-box">
                                        <div class="icon">
                                            <i class="icon fal fa-envelope"></i>
                                        </div>
                                        <div class="text">
                                            <span>Email Now</span>
                                            <p>
                                                <a href="mailto:info@example.com">gitanjali.nursing@gmail.com</a>
</p>
                                        </div>
                                        <div class="second-header-btn">
                      <a href="<?php echo $header_menu_special['url'];?>" class="btn"><?php echo $header_menu_special["text"];?></a>
                    </div>
                                    </div>
                                </li>                                 
                            </ul>
                        </div>                        
                    </div>                        
                </div>
            </div>
        </div>		
        <div id="header-sticky" class="menu-area">
            <div class="container">
                <div class="second-menu">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="<?php echo $base_url; ?>"><img src="public/img/logo/logomain.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu text-right text-xl-right">
                                <nav id="mobile-menu">
                                    <ul>
                                        <?php foreach ($header_menus as $key => $value): ?>
                                            <?php if (is_array($value)): ?>
                                                <li class="has-sub"><a href=""><?php echo $key; ?></a>
                                                    <ul>
                                                        <?php foreach ($value as $k => $v): ?>
                                                            <li><a href="<?php echo $v; ?>"><?php echo $k; ?></a></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </li>
                                            <?php else: ?>
                                                <li><a href="<?php echo $value; ?>"><?php echo $key; ?></a></li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>                                                          
                    </div>
                    <div class="col-12">
                        <div class=""></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    </section>
    <!-- header-end -->
    <!-- offcanvas-area -->
    <!-- <div class="offcanvas-menu">
        <span class="menu-close"><i class="fas fa-times"></i></span>
        <form role="search" method="get" id="searchform" class="searchform" action="http://wordpress.zcube.in/xconsulta/">
            <input type="text" name="s" id="search" placeholder="Search"/>
            <button><i class="fa fa-search"></i></button>
        </form>
        <div id="cssmenu3" class="menu-one-page-menu-container">
            <ul class="menu">
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="index-2.html">Home</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="about.html">About Us</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="courses.html">Courses</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="pricing.html">Pricing </a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="team.html">Teacher</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="projects.html">Gallery</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="blog.html">Blog</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <div id="cssmenu2" class="menu-one-page-menu-container">
            <ul id="menu-one-page-menu-12" class="menu">
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#home"><span>+8 12 3456897</span></a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#howitwork"><span>info@example.com</span></a></li>
            </ul>
        </div>
    </div>
    <div class="offcanvas-overly"></div> -->
    <!-- offcanvas-end -->

    <div class="mobile-menu sticky-top">
    <img src="public/img/logo/logomain.png" alt="logo" style="height: 75px; width: auto; margin-left:20px;">
 <button class="btn  ticon" type="button" data-bs-toggle="offcanvas" data-bs-target="#leftOffcanvas" aria-controls="leftOffcanvas">
 &#9776
</button>


<div class="offcanvas offcanvas-start " tabindex="-1" id="leftOffcanvas" aria-labelledby="leftOffcanvasLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="leftOffcanvasLabel"><img src="public/img/logo/logomain.png" alt="Logo" style="height: 75px; width: auto; margin-right: 15px;"></h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link" href="<?php echo $base_url; ?>"><p>Home</p></a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><p>About Us</p></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>about">Overview</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>noc">NOC govt of WB</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>wbnc">WBNC</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>wbush_affiliation">WBUHS Affiliation 2023-2024</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>inc_bsc_nursing">INC BSC Nursing documents</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>inc_gnm_nursing">INC GNM Nursing documents</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><p>College</p></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href=" https://www.gitanjalicollegegroup.org/">Gitanjali College Of Pharmacy</a></li>
          <li><a class="dropdown-item" href="https://www.gitanjalicollegeedu.org/">Gitanjali College Of Education</a></li>
          <li><a class="dropdown-item" href="https://www.gitanjalicn.in/">Gitanjali Institute Of Nursing</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><p>Courses</p></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>bscn">BSC Nursing</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>pbins">GNM Nursing</a></li>

        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><p>Prospectus</p></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>bsc_prospectus">BSC Nursing</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>gnm_prospectus">GNM Nursing</a></li>

        </ul>
      </li>
     
   
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $base_url; ?>our-gallery"><p>Gallery</p></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $base_url; ?>contact"><p>Contact</p></a>
      </li>
    </ul>
   
  </div>

</div>

                                        </div>
                                        <!-- call to action button  -->
<div class="wrapper">
    <div id="main-div">
      <div id="main-button" class="wave open" >
       
      </div>
      <!-- <button><i class="fas fa-phone-alt"></i> Free Consultation</button> -->
    
      <a href="https://api.whatsapp.com/send?phone=917076380855" class="whatsapp-color"><i class="fab fa-whatsapp"></i></a>
      <a href="tel:917076380855" class="messenger-color "><i class="fab fa fa-phone"></i></a>
      <a href="mailto:gitanjali.nursing@gmail.com"  class="telegram-color "><i class="fab fa fa-envelope"></i></a>
    
    
    </div>
  </div>



