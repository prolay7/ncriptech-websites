<div class="kingster-mobile-header-wrap">
        <div class="kingster-mobile-header kingster-header-background kingster-style-slide kingster-sticky-mobile-navigation " id="kingster-mobile-header">
            <div class="kingster-mobile-header-container kingster-container clearfix">
                <div class="kingster-logo  kingster-item-pdlr">
                    <div class="kingster-logo-inner">
                        <a class="" href="index-2.html"><img src="public/img/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="kingster-mobile-menu-right">
                    
                    
                    <div class="kingster-mobile-menu"><a class="kingster-mm-menu-button kingster-mobile-menu-button kingster-mobile-button-hamburger" href="#kingster-mobile-menu"><span></span></a>
                        <div class="kingster-mm-menu-wrap kingster-navigation-font" id="kingster-mobile-menu" data-slide="right">
                            <ul id="menu-main-navigation" class="m-menu">
                                <li class="menu-item menu-item-home current-menu-item menu-item-has-children"><a href="<?php echo $base_url; ?>">Home</a>
                                   
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="<?php echo $base_url; ?>">About</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="<?php echo $base_url; ?>about_us">About Us</a></li>
                                        <li class="menu-item menu-item-has-children"><a href="<?php echo $base_url; ?>vision&mission">Vission & Mission</a>
                                        
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="<?php echo $base_url;?>affiliation">Affiliation</a>
                                          
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="<?php echo $base_url;?>certificate">Certificate</a>
                                           
                                        </li>
                                        <li class="menu-item"><a href="<?php echo $base_url;?>brocher">Our brocher</a></li>

                                        <li class="menu-item"><a href="<?php echo $base_url;?>facilities">Facilities</a></li>

                                        <li class="menu-item"><a href="<?php echo $base_url;?>documents">Inc Documents</a></li>
                                       
                                      
                                
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a >Courses</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-has-children"><a href="<?php echo $base_url;?>gnm">GNM nursing</a>
                                         
                                        </li>
                                       
                                      
                                   
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="<?php echo $base_url;?>prospectus">Prospectus</a>
                                  
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="<?php echo $base_url;?>gallery">Gallery</a>
                                
                                </li>
                                <li class="menu-item"><a href="<?php echo $base_url;?>contact">Contact</a></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="kingster-body-outer-wrapper ">
        <div class="kingster-body-wrapper clearfix  kingster-with-frame">
            <div class="kingster-top-bar">
                <div class="kingster-top-bar-background"></div>
                <div class="kingster-top-bar-container kingster-container ">
                    <div class="kingster-top-bar-container-inner clearfix">
                        <div class="kingster-top-bar-left kingster-item-pdlr"><i class="fa fa-envelope-open-o" id="i_fd84_0"></i>  office.rinnursing@gmail.com
 <i class="fa fa-phone" id="i_fd84_1"></i> +91-7407584637</div>
                        <div class="kingster-top-bar-right kingster-item-pdlr">
                            <ul id="kingster-top-bar-menu" class="sf-menu kingster-top-bar-menu kingster-top-bar-right-menu">
                                <li class="menu-item kingster-normal-menu"><a href="#">Affiliation By WBNC Govt. of W.B</a></li>
                           
                               
                            </ul>
                            <div class="kingster-top-bar-right-social">

                            </div><a class="kingster-top-bar-right-button" href="#" target="_blank">Apply NOW</a></div>
                         
                    </div>
                </div>
            </div>
            <header class="kingster-header-wrap kingster-header-style-plain  kingster-style-menu-right kingster-sticky-navigation kingster-style-fixed" data-navigation-offset="75px">
    <div class="kingster-header-background"></div>
    <div class="kingster-header-container  kingster-container">
        <div class="kingster-header-container-inner clearfix">
            <div class="kingster-logo  kingster-item-pdlr">
                <div class="kingster-logo-inner">
                    <a class="" href="<?php echo $base_url;?>"><img src="public/img/logo.png" alt="" /></a>
                </div>
            </div>
            <div class="kingster-navigation kingster-item-pdlr clearfix ">
                <div class="kingster-main-menu" id="kingster-main-menu">
                    <ul id="menu-main-navigation-1" class="sf-menu">
                        <?php foreach ($header_menus as $key => $value): ?>
                            <?php if (is_array($value)): ?>
                                <li class="menu-item menu-item-has-children kingster-normal-menu">
                                    <a href="#" class="sf-with-ul-pre"><?php echo $key; ?></a>
                                    <ul class="sub-menu">
                                        <?php foreach ($value as $k => $v): ?>
                                            <li class="menu-item">
                                                <a href="<?php echo $v; ?>"><?php echo $k; ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            <?php else: ?>
                                <li class="menu-item kingster-normal-menu">
                                    <a href="<?php echo $value; ?>"><?php echo $key; ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <div class="kingster-navigation-slide-bar" id="kingster-navigation-slide-bar"></div>
                </div>
             
            </div>
        </div>
    </div>
</header>
 <!-- call to action button  -->
 <div class="wrapper">
    <div id="main-div">
      <div id="main-button" class="wave open" >
       
      </div>
      <!-- <button><i class="fas fa-phone-alt"></i> Free Consultation</button> -->
    
      <a href="https://api.whatsapp.com/send?phone=+91 90915 26251" class="whatsapp-color"><i class="fab  fa fa-whatsapp"></i></a>
      <a href="tel:+91-9091526251" class="messenger-color "><i class="fab fa fa-phone"></i></a>
      <a href="mailto:secretary.rangamati@gmail.com"  class="telegram-color "><i class="fab fa fa-envelope"></i></a>
    
    
    </div>
  </div>
  <!-- back to top button -->

  <a href="<?php echo $header_menu_special['url'];?>" class="btn book-now desktop open-datepicker-popup"><?php echo $header_menu_special["text"];?></a>
  <div class="scroll"></div>
<div>

 
