<!-- breadcrumb-area -->
<section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-image:url(<?php echo $breadcrumb_bg;?>)">
  
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
                <div class="breadcrumb-wrap text-left">
                    <!-- <div class="breadcrumb-title">
                        <h2><?php echo (isset($page_meta[$lastUriSegment]))?$page_meta[$lastUriSegment]['page_heading']:"Page Not Found";?></h2> 
                        
                    </div> -->
                </div>
            </div>
            <div class="breadcrumb-wrap2">
            <div class="about-title second-title pb-25">  
    <h2><?php echo isset($page_headings[$lastUriSegment]) ? $page_headings[$lastUriSegment] : "Default Heading"; ?></h2>
         </div>
      
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <?php
                            if(isset($bread_cumbs[$lastUriSegment])){
                                foreach ($bread_cumbs[$lastUriSegment] as $key => $value) {
                                    if(!empty($key)){
                                        ?>
                                        <li class="breadcrumb-item"><a href="<?php echo $key;?>"><?php echo $value;?></a></li>
                                        <?php
                                    }else{
                                        ?>
                                        <li class="breadcrumb-item active" aria-current="page"><?php echo $value;?></li>
                                        <?php
                                    }
                                }
                            }else{
                             ?>
                             <li class="breadcrumb-item"><a href="<?php echo $base_url;?>">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page">404</li>
                             <?php   
                            }
                            ?>
                            
                        </ol>
                    </nav>
                </div>
            
        </div>
    </div>
</section>
<!-- breadcrumb-area-end --> 

<!-- <section class="imp-notice">
  <div class="container">
    <div class="row">
      <div class="imp-notification">
        <marquee>
          <p> <?php echo $logo_alt;?></p>
        </marquee>
      </div>
    </div>
  </div>
</section> -->