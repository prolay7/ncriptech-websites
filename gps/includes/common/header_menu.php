<header class="header-area header">  
      
    <!-- Header Top Section -->
    <div class="header-top second-header1 d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-8 d-none d-lg-block">
                    <!-- Header Contact Info -->
                    <div class="header-cta">
                        <ul>

                        <li>
                         <!-- Phone Icon and Number -->
                                <div class="call-box">
                                <div class="text">
                                    <p>Gyanjyoti Public School</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <!-- Phone Icon and Number -->
                                <div class="call-box">
                               
                                    <div class="icon">
                                        <i class="fa-solid fa-phone" style="color: white;"></i>
                                    </div>
                                    <div class="text">
                                        <a href="tel:+9173840-52529">+91 73840-52529</a>
                                    </div>

                                  
                                </div>
                            </li>
                            <li>
                                <!-- Email Icon and Address -->
                                <div class="call-box">
                                    <div class="icon">
                                        <i class="fa-regular fa-envelope" style="color:white;"></i>
                                    </div>
                                    <div class="text">
                                        <a href="mailto:secretary.rangamaticp@gmail.com">secretary.rangamaticp@gmail.com</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
    <!-- End Header Top Section -->
<!-- 2 nd header section -->

<div class="header-top second-header  d-none d-md-block">
    <div class="container-fluid">
      <div class="row align-items-center">

      
        <div class="col-lg-2 col-md-4 d-none d-lg-block ">
          <div class="header-social">
            
          <div class="logo">
                            <a href="<?php echo $base_url ?>"><img src="public/img/gps/logo_short.webp" alt="logo"></a>
                        </div>
          


            <!--  /social media icon redux -->
          </div>
        </div>


        <div class="col-lg-3 col-md-4 d-none d-lg-block ">
          <div class="header-social">
            
            <span>
             <span>Vill - Chandua, P.O. - Kanchrapara, Beside Kalyani-Barrackpore Expressway, North 24 Parganas,PIN - 743145, West Bengal</span>

            </span>
          


            <!--  /social media icon redux -->
          </div>
        </div>
       

        <div class="col-lg-7 col-md-8 d-none d-lg-block text-right">
          <div class="header-cta">
            <ul>
            <li>
    <div class="second-header-btn">
        <a href="#" class="">About Admission And Online Payment</a>
    </div>
</li>
<li>
    <div class="second-header-btn3">
        <a href="<?php echo $base_url ?>about" class="">About</a>
    </div>
</li>
<li>
    <div class="second-header-btn3">
        <a href="<?php echo $base_url ?>gallery" class="">Gallery</a>
    </div>
</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- Header Bottom Section -->
    <div id="header-sticky" class="menu-area">
        <div class="container">
            <div class="second-menu">
                <div class="row align-items-center">
                    
                    <div class="col-xl-12 col-lg-12">
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
    <img src="public/img/gps/logo_original.webp" alt="logo" style="height: 60px; width: auto; margin-left:20px;">
 <button class="btn  ticon" type="button" data-bs-toggle="offcanvas" data-bs-target="#leftOffcanvas" aria-controls="leftOffcanvas">
 &#9776
</button>


<div class="offcanvas offcanvas-start " tabindex="-1" id="leftOffcanvas" aria-labelledby="leftOffcanvasLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="leftOffcanvasLabel"><img src="public/img/gps/logo_original.webp" alt="Logo" style="height: 65px; width: auto; margin-right: 15px;"></h5>
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
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>about">History of School</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>classinfrastructure">Infrastructure</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>comingsoon">Information</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $base_url; ?>gallery"><p>Gallery</p></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><p>Admission</p></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>admission">New admission Fee Structure</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>admission">Re-admission Fee Structure
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>admission">Admission Details</a></li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo $base_url; ?>syllabus"><p>Syllabus</p></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><p>Academics</p></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>comingsoon">School House</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>comingsoon">Curriculam</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>comingsoon">Examination</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>comingsoon">Result</a></li>
    

        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><p>Administration</p></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>comingsoon">Management</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>comingsoon">Faculty</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>comingsoon">School Rules and Regulation</a></li>

        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><p>Co Curriculam</p></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>comingsoon">House Events</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>comingsoon">Celebration</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>comingsoon">School Activities</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>comingsoon">Project Work</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>comingsoon">Excursion</a></li>

        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><p>Facilities</p></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>comingsoon">Laboratory</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>comingsoon">Digital Classroom</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>comingsoon">Library</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>comingsoon">Special Education</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>comingsoon">Games</a></li>

        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $base_url; ?>comingsoon"><p>Workshop</p></a>
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
    
    
      <a href="tel:91-9073112222" class="messenger-color "><i class="fas fa fa-phone"></i></a>
      <a href="mailto:gpskanchrapara@gmail.com" class="telegram-color "><i class="fas fa fa-envelope"></i></a>
      <a href="https://api.whatsapp.com/send?phone=91-9073112222" class="whatsapp-color"><i class="fab fa-whatsapp"></i></a>
    
    
    </div>
  </div>
