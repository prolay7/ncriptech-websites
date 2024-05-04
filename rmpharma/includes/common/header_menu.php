<header class="header-area header">  
    <!-- Header Top Section -->
    <div class="header-top second-header d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8 d-none d-lg-block">
                    <!-- Header Contact Info -->
                    <div class="header-cta">
                        <ul>
                            <li>
                                <!-- Phone Icon and Number -->
                                <div class="call-box">
                                    <div class="icon">
                                        <i class="fa-solid fa-phone" style="color: #0cb399;"></i>
                                    </div>
                                    <div class="text">
                                        <strong><a href="tel:+9173840-52529">+91 73840-52529</a></strong>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <!-- Email Icon and Address -->
                                <div class="call-box">
                                    <div class="icon">
                                        <i class="fa-regular fa-envelope" style="color: #0cb399;"></i>
                                    </div>
                                    <div class="text">
                                        <strong><a href="mailto:secretary.rangamaticp@gmail.com">secretary.rangamaticp@gmail.com</a></strong>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 d-none d-lg-block ">
                    <!-- Social Media Icons -->
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
            </div>
        </div>
    </div>
    <!-- End Header Top Section -->

    <!-- Header Bottom Section -->
    <div id="header-sticky" class="menu-area">
        <div class="container">
            <div class="second-menu">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index-2.html"><img src="public/img/rmpharma/rangamati_logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <!-- Main Menu -->
                        <div class="main-menu text-right text-xl-right">
                            <nav id="mobile-menu">
                                <ul>
                                    <?php
                                   
                                    foreach ($header_menus as $menu_title => $menu_link) {
                                 
                                        $has_sub_menu = is_array($menu_link) && count($menu_link) > 0;
                                        ?>
                                        <li <?php echo $has_sub_menu ? 'class="has-sub"' : ''; ?>>
                                            <!-- Menu Title -->
                                            <a href="<?php echo is_array($menu_link) ? '#' : $menu_link; ?>">
                                                <?php echo $menu_title; ?>
                                            </a>
                                            <?php
                                        
                                            if ($has_sub_menu) {
                                                ?>
                                                <ul>
                                                    <?php
                                                    foreach ($menu_link as $sub_menu_title => $sub_menu_link) {
                                                        ?>
                                                        <li><a href="<?php echo $sub_menu_link; ?>"><?php echo $sub_menu_title; ?></a></li>
                                                        <?php
                                                    }
                                                    ?>
                                                </ul>
                                                <?php
                                            }
                                            ?>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 text-right d-none d-lg-block text-right text-xl-right">
                        <!-- Contact Us Button -->
                        <div class="login">
                            <ul>
                                <li>
                                    <div class="second-header-btn1">
                                        <a href="<?php $base_url?>contact" class="btn">Contact Us <i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <!-- Mobile Menu Icon -->
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Bottom Section -->
</header>

        <!-- header-end -->
        <!-- offcanvas-area -->
        <div class="mobile-menu sticky-top">
    <img src="public/img/rmpharma/rangamati_logo.png" alt="logo" style="height: 60px; width: auto; margin-left:20px;">
 <button class="btn  ticon" type="button" data-bs-toggle="offcanvas" data-bs-target="#leftOffcanvas" aria-controls="leftOffcanvas">
 &#9776
</button>


<div class="offcanvas offcanvas-start " tabindex="-1" id="leftOffcanvas" aria-labelledby="leftOffcanvasLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="leftOffcanvasLabel"><img src="public/img/rmpharma/rangamati_logo.png" alt="Logo" style="height: 65px; width: auto; margin-right: 15px;"></h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link" href="<?php echo $base_url; ?>"><p>Home</p></a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><p>About</p></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>about">About College</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>vission_mission">Vission & mission</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>chairman">Chairman message</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>principle">Principle message</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>govt">Govt Body</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>gallery">Gallery</a></li>
        
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><p>Academics</p></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>faculty">Faculty</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>non_teaching">Non teaching</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>calender">Academic Calender</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><p>Courses</p></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>d.pharma">D.Pharma</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>prospectus">Prospectus</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>coming_soon">Recognization</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>affiliation">Affiliation</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>coming_soon">Admission form</a></li>

        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><p>Student Corner</p></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>coming_soon">Online class</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>coming_soon">Alumuni</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>coming_soon">Activity Club</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>coming_soon">Anti Ragging</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>coming_soon">Anti Discrimination</a></li>

        </ul>
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
    
    
      <a href="tel:91-73840-52529" class="messenger-color "><i class="fas fa fa-phone"></i></a>
      <a href="mailto:secretary.rangamaticp@gmail.com" class="telegram-color "><i class="fas fa fa-envelope"></i></a>
      <a href="https://api.whatsapp.com/send?phone=91-73840-52529" class="whatsapp-color"><i class="fab fa-whatsapp"></i></a>
    
    
    </div>
  </div>
