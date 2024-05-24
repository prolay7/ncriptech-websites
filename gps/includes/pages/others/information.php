<section class="fees mt-60 pb-60">
  <div class="container">

   

  <div class="row justify-content-center align-items-center">
    <div class="col-lg-12">
        <div class="preview-card">
            <div class="preview-card__wrp">
                <div class="preview-card__item">
                    <div class="preview-card__img">
                        <img src="public/img/class/img-18.jpeg" alt="">
                    </div>
                    <div class="preview-card__content">
                        <ol class="preview-card__ordered-list">
                            <li>
                                <div class="preview-card__title column">TOTAL CAMPUS AREA OF THE SCHOOL (IN SQ MTR)</div>
                                <div class="preview-card__title column" style="float: right; text-align: right;">8660 sq.mtr.</div>
                            </li>
                            <li>
                                <div class="preview-card__title column">NO. AND SIZE OF THE CLASS ROOMS</div>
                                <div class="preview-card__title column" style="float: right; text-align: right;">14 (48.03sq.mtr. / 517 sq.ft.)</div>
                            </li>
                            <li>
                                <div class="preview-card__title column">NO. AND SIZE OF LABORATORIES (INCLUDING COMPUTER LABS)</div>
                                <div class="preview-card__title column" style="float: right; text-align: right;">6 (97.08 sq.mtr. / 1045 sq.ft.)</div>
                            </li>
                            <li>
                                <div class="preview-card__title column">INTERNET FACILITY</div>
                                <div class="preview-card__title column" style="float: right; text-align: right;">YES</div>
                            </li>
                            <li>
                                <div class="preview-card__title column">NO. OF GIRLS TOILETS</div>
                                <div class="preview-card__title column" style="float: right; text-align: right;">Urinal 9, Toilet 9</div>
                            </li>
                            <li>
                                <div class="preview-card__title column">NO. OF BOYS TOILETS</div>
                                <div class="preview-card__title column" style="float: right; text-align: right;">Urinal 18, Toilet 9</div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="">
            <div class="preview-card__wrp">
                <div class="">
                
                    <div class="row">                                          
                        <div class="col-lg-12 ">
                            <iframe width="750" height="315" src="https://www.youtube.com/embed/LscU89wol0g?si=e4vK_7l5kDS5j_XA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-12 preview-card__title1" id="title1">SCHOOL INSPECTION (COVERING THE INFRASTRUCTURE)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


   <div class="row justify-content-center align-items-center">
      <div class="section-title wow fadeInLeft  animated" data-animation="fadeInDown animated" data-delay=".2s" style="visibility: visible; animation-name: fadeInLeft;">
         <h2>Documents & Results</h2>
         <p>A business or organization established to provide a particular service, typically one that involves a organizing transactions.</p>
       </div>
   </div>

   <div class="row justify-content-center  align-items-center">
     <div class="col-lg-12">       
       <div class="faq-wrap mt-30 pr-30 wow fadeInUp  animated" data-animation="fadeInUp" data-delay=".4s" style="visibility: visible; animation-name: fadeInUp;">
         <div class="accordion" id="accordionExample">
           <div class="card">
             <div class="card-header" id="headingThree">
               <h2 class="mb-0">
                 <button class="faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2"> DOCUMENTS & INFORMATION </button>
               </h2>
             </div>
             <div id="collapseThree2" class="collapse show" data-bs-parent="#accordionExample">
               <div class="card-body">
                  <ul class="list-group">
                    <?php
                     if(!empty($dcuments_info)){
                        foreach ($dcuments_info as $key => $value) {
                           ?>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              <div class="item">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f23f-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><polyline class="cls-637647fac3a86d32eae6f23f-1" points="7.23 16.77 11.04 12.96 12.96 14.86 16.77 11.04"></polyline><polygon class="cls-637647fac3a86d32eae6f23f-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f23f-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
                                  <div class="filename">
                                    <p><?php echo $key;?></p>
                                  </div>
                                  <a href="<?php echo $value;?>" download>Download</a>
                              </div>
                           </li>
                           <?php
                        }
                     }
                     ?>
                  </ul>
               </div>
             </div>
           </div>

           
           <div class="card">
             <div class="card-header" id="headingOne">
               <h2 class="mb-0">
                 <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"> RESULT AND ACADEMICS </button>
               </h2>
             </div>
             <div id="collapseOne" class="collapse" data-bs-parent="#accordionExample">
               <div class="card-body">
                  <ul class="list-group">
                    <?php
                     if(!empty($results_info)){
                        foreach ($results_info as $key => $value) {
                           ?>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              <div class="item">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f23f-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><polyline class="cls-637647fac3a86d32eae6f23f-1" points="7.23 16.77 11.04 12.96 12.96 14.86 16.77 11.04"></polyline><polygon class="cls-637647fac3a86d32eae6f23f-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f23f-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
                                  <div class="filename">
                                    <p><?php echo $key;?></p>
                                  </div>
                                  <a href="<?php echo $value;?>" download>Download</a>
                              </div>
                           </li>
                           <?php
                        }
                     }
                     ?>
                  </ul>
               </div>
             </div>
           </div>

         </div>
       </div>
     </div>
   </div>

   <div class="row justify-content-center align-items-center">
      <div class="section-title wow fadeInLeft  animated" data-animation="fadeInDown animated" data-delay=".2s" style="visibility: visible; animation-name: fadeInLeft;">
         <h2>Teaching Staff</h2>
         <p>A business or organization established to provide a particular service, typically one that involves a organizing transactions.</p>
       </div>
   </div>

 
   <div class="row justify-content-center  align-items-center">
     <?php
     if(!empty($teaching_staff)){

      foreach ($teaching_staff as $key => $value) {
         ?>
         <div class="col-lg-12">
            <div class="preview-card">
               <div class="preview-card__wrp">
                  <div class="preview-card__item">
                     <?php
                     foreach ($value as $k => $v) {
                        ?>
                        <div class="preview-card__img">
                           <img src="<?php echo $k;?>" alt="">
                        </div>
                        <div class="preview-card__content">
                           <ol class="preview-card__ordered-list">
                              <?php
                              $i=1;
                              foreach ($v as $_k => $_v) {
                                ?>
                                 <li>
                                    <?php
                                    if($_v['type']=='text'){
                                       ?>
                                       <div class="preview-card__title column"> <?php echo $_k;?></div>
                                       <div class="preview-card__title column"  style="float: right; text-align: right;"><?php echo $_v['text'];?></div>
                                       <?php
                                    }else if($_v['type']=='video'){
                                       ?>
                                       <div class="row">                                          
                                          <div class="col-md-12 vid-container">
                                             <?php echo $_v['text'];?>
                                          </div>
                                          <div class="col-md-12 preview-card__title"><?php echo $_k;?></div>
                                       </div>
                                       <?php
                                    }
                                    ?>
                                    
                                 </li>
                                <?php
                                $i++;
                              }
                              ?>
                           </ol>
                        </div>
                        <?php
                     }
                     ?>
                     
                  </div>
               </div>
            </div>
         </div>
         <?php 
      }
     }
     ?>
   </div>
   

   <div class="row justify-content-center align-items-center">
      <div class="section-title wow fadeInLeft  animated" data-animation="fadeInDown animated" data-delay=".2s" style="visibility: visible; animation-name: fadeInLeft;">
         <h2>CWSN FACILITIES</h2>
         <p>A business or organization established to provide a particular service, typically one that involves a organizing transactions.</p>
       </div>
   </div>

   <div class="row justify-content-center  align-items-center">
     <div class="col-lg-12">       
       <div class="faq-wrap mt-30 pr-30 wow fadeInUp  animated" data-animation="fadeInUp" data-delay=".4s" style="visibility: visible; animation-name: fadeInUp;">
         <div class="accordion" id="accordionExample">
           <div class="card">
             <div class="card-header" id="headingThree">
               <h2 class="mb-0">
                 <button class="faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_cwsn_one"> LIFT DETAILS </button>
               </h2>
             </div>
             <div id="collapse_cwsn_one" class="collapse show" data-bs-parent="#accordionExample">
               <div class="card-body">
                  <ul class="list-group">
                    <?php
                     if(!empty($cwsn_lift_infos)){
                        foreach ($cwsn_lift_infos as $key => $value) {
                           ?>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              <div class="item">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f23f-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><polyline class="cls-637647fac3a86d32eae6f23f-1" points="7.23 16.77 11.04 12.96 12.96 14.86 16.77 11.04"></polyline><polygon class="cls-637647fac3a86d32eae6f23f-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f23f-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
                                  <div class="filename">
                                    <p><?php echo $key;?></p>
                                  </div>
                                  <a href="<?php echo $value;?>" download>Download</a>
                              </div>
                           </li>
                           <?php
                        }
                     }
                     ?>
                  </ul>
               </div>
             </div>
           </div>
           <div class="card">
             <div class="card-header" id="headingOne">
               <h2 class="mb-0">
                 <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_cwsn_two"> TOILET DETAILS </button>
               </h2>
             </div>
             <div id="collapse_cwsn_two" class="collapse" data-bs-parent="#accordionExample">
               <div class="card-body">
                  <ul class="list-group">
                    <?php
                     if(!empty($cwsn_toilet_infos)){
                        foreach ($cwsn_toilet_infos as $key => $value) {
                           ?>
                           <li class="list-group-item d-flex justify-content-between align-items-center">
                              <div class="item">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.25" width="24" height="24"><defs><style>.cls-637647fac3a86d32eae6f23f-1{fill:none;stroke:currentColor;stroke-miterlimit:10;}</style></defs><polyline class="cls-637647fac3a86d32eae6f23f-1" points="7.23 16.77 11.04 12.96 12.96 14.86 16.77 11.04"></polyline><polygon class="cls-637647fac3a86d32eae6f23f-1" points="20.59 6.27 20.59 22.5 3.41 22.5 3.41 1.5 15.82 1.5 20.59 6.27"></polygon><polygon class="cls-637647fac3a86d32eae6f23f-1" points="20.59 6.27 20.59 7.23 14.86 7.23 14.86 1.5 15.82 1.5 20.59 6.27"></polygon></svg>
                                  <div class="filename">
                                    <p><?php echo $key;?></p>
                                  </div>
                                  <a href="<?php echo $value;?>" download>Download</a>
                              </div>
                           </li>
                           <?php
                        }
                     }
                     ?>
                  </ul>
               </div>
             </div>
           </div>

         </div>
       </div>
     </div>
   </div>


   
  </div>
</section>


<style type="text/css">
   /* Youtube Reflexive */
.vid-container {
    position: relative;
    padding-bottom: 35%;
    padding-top: 35px; 
    height: 0; 
    overflow: hidden;   /* optional */
    background-color:green; /* optional */
}

.vid-container iframe,
.vid-container object,
.vid-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
/*    height: 100%;*/
}
   .item {
      width:100%;
  border: 2px solid #222222;
  padding: 16px;
  border-radius: 8px;
  display: flex;
  gap: 16px;
  align-items: center;
  will-change: transform;
  background-color: #ffffff;
  transition: all 0.3s ease-in-out;
}

.item:hover {
  border-color: #7e3af2;
  transform: scale(1.025);
}

.item svg {
  width: 36px;
  height: 36px;
  transition: all 0.3s ease-in-out;
}

.item:hover svg {
  color: #7e3af2;
  fill: red;
}

.item a {
  all: unset;
  margin-left: auto;
  background-color: #7e3af2;
  padding: 12px 16px;
  border-radius: 6px;
  color: #ffffff;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

.item a:hover {
  background-color: #7126f1;
}

.item .filename p{
   margin-bottom: 0px;
}



/**Preview Cards**/

.preview-card {
  position: relative;
  margin: 15px;
  background: #fff;
  box-shadow: 0px 3px 10px rgba(34, 35, 58, 0.2);
  padding: 30px 25px 30px;
  border-radius: 25px;
  transition: all 0.3s;
  background: linear-gradient(to left,var(--secondary-color),var(--primary-color));
}
/*.preview-card__ordered-list {
    columns: 2;
    list-style-position: inside;
    margin-top: 10px; /* Adjust as needed */


/*.preview-card__ordered-list li {
    margin-bottom: 5px; 
}*/

.preview-card__ordered-list {
   list-style-type: decimal;
    padding: 0;
}

.preview-card__ordered-list li {
    display: grid;
    grid-template-columns: auto auto;
    gap: 10px; /* Adjust as needed */
    margin-bottom: 10px; /* Adjust as needed */
}

.column {
    /* Optional: Add styling for each column */
}

@media screen and (max-width: 992px) {
  .preview-card {
    height: auto;
  }
}
@media screen and (max-width: 768px) {
  .preview-card {
    min-height: 500px;
    height: auto;
    margin: 100px auto;
    padding:auto!important;
  }
}
@media screen and (max-height: 500px) and (min-width: 992px) {
  .preview-card {
    height: auto;
  }
}
.preview-card__item {
  display: flex;
  align-items: center;
}
@media screen and (max-width: 768px) {
  .preview-card__item {
    flex-direction: column;
  }
}
.preview-card__item.swiper-slide-active .blog-slider__img img {
  opacity: 1;
  transition-delay: 0.3s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > * {
  opacity: 1;
  transform: none;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(1) {
  transition-delay: 0.3s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(2) {
  transition-delay: 0.4s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(3) {
  transition-delay: 0.5s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(4) {
  transition-delay: 0.6s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(5) {
  transition-delay: 0.7s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(6) {
  transition-delay: 0.8s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(7) {
  transition-delay: 0.9s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(8) {
  transition-delay: 1s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(9) {
  transition-delay: 1.1s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(10) {
  transition-delay: 1.2s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(11) {
  transition-delay: 1.3s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(12) {
  transition-delay: 1.4s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(13) {
  transition-delay: 1.5s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(14) {
  transition-delay: 1.6s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(15) {
  transition-delay: 1.7s;
}
.preview-card__img {
  width: 300px;
  flex-shrink: 0;
  height: 300px;
  background-image: linear-gradient(147deg, #000 0%, #000 74%);
  box-shadow: 0px 3px 10px 1px rgba(252, 56, 56, 0.2);
  border-radius: 20px;
  transform: translateX(-80px);
  overflow: hidden;
}
.preview-card__img:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: linear-gradient(147deg, #000 0%, #000 74%);
  border-radius: 20px;
  opacity: 0.4;
}
.preview-card__img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  opacity: 1;
  border-radius: 20px;
  transition: all 0.3s;
}
@media screen and (max-width: 768px) {
  .preview-card__img {
    transform: translateY(-50%);
    width: 90%;
  }
}
@media screen and (max-width: 576px) {
  .preview-card__img {
    width: 95%;
  }
}
@media screen and (max-height: 500px) and (min-width: 992px) {
  .preview-card__img {
    height: 270px;
  }
}
.preview-card__content {
  width:100%;
/*  padding-right: 25px;*/
  margin-left:-55px;
}


.preview-card__content > * {
  transform: translateY(25px);
  transition: all 0.4s;
}
.preview-card__code {
  color: #7b7992;
  margin-bottom: 15px;
  display: block;
  font-weight: 500;
}
.preview-card__title {
  font-size: 15px;
  font-weight: 600;
  color:black;
  margin-bottom: 20px;
}
.preview-card__text {
  color: #4e4a67;
  margin-bottom: 30px;
  line-height: 1.5em;
}
.preview-card__button {
  display: inline-flex;
  background-image: linear-gradient(147deg, #000 0%, #000 74%);
  padding: 15px 35px;
  margin-bottom: 30px;
  border-radius: 50px;
  color: #fff;
  box-shadow: 0px 3px 10px rgba(252, 56, 56, 0.4);
  text-decoration: none;
  font-weight: 500;
  justify-content: center;
  text-align: center;
  letter-spacing: 1px;
}
.preview-card__button:hover {
  color: #989898;
  text-decoration: none;
}
@media screen and (max-width: 576px) {
  .preview-card__button {
    width: 100%;
  }
}

</style>


<style type="text/css">
   /* Youtube Reflexive */
.vid-container {
    position: relative;
    padding-bottom: 35%;
    padding-top: 35px; 
    height: 0; 
    overflow: hidden;   /* optional */
    background-color:green; /* optional */
}

.vid-container iframe,
.vid-container object,
.vid-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
/*    height: 100%;*/
}
   .item {
      width:100%;
  border: 2px solid #222222;
  padding: 16px;
  border-radius: 8px;
  display: flex;
  gap: 16px;
  align-items: center;
  will-change: transform;
  background-color: #ffffff;
  transition: all 0.3s ease-in-out;
}

.item:hover {
  border-color: #7e3af2;
  transform: scale(1.025);
}

.item svg {
  width: 36px;
  height: 36px;
  transition: all 0.3s ease-in-out;
}

.item:hover svg {
  color: #7e3af2;
  fill: red;
}

.item a {
  all: unset;
  margin-left: auto;
  background-color: #7e3af2;
  padding: 12px 16px;
  border-radius: 6px;
  color: #ffffff;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

.item a:hover {
  background-color: #7126f1;
}

.item .filename p{
   margin-bottom: 0px;
}



/**Preview Cards**/

.preview-card {
  position: relative;
  margin: 15px;
  background: #fff;
  box-shadow: 0px 3px 10px rgba(34, 35, 58, 0.2);
  padding: 30px 25px 30px;
  border-radius: 25px;
  transition: all 0.3s;
  background: linear-gradient(to left,var(--secondary-color),var(--primary-color));
}
/*.preview-card__ordered-list {
    columns: 2;
    list-style-position: inside;
    margin-top: 10px; /* Adjust as needed */


/*.preview-card__ordered-list li {
    margin-bottom: 5px; 
}*/

.preview-card__ordered-list {
   list-style-type: decimal;
    padding: 0;
}

.preview-card__ordered-list li {
    display: grid;
    grid-template-columns: auto auto;
    gap: 10px; /* Adjust as needed */
    margin-bottom: 10px; /* Adjust as needed */
}

.column {
    /* Optional: Add styling for each column */
}

@media screen and (max-width: 992px) {
  .preview-card {
    height: auto;
  }
}
@media screen and (max-width: 768px) {
  .preview-card {
    min-height: 500px;
    height: auto;
    margin: 100px auto;
  }
}
@media screen and (max-height: 500px) and (min-width: 992px) {
  .preview-card {
    height: auto;
  }
}
.preview-card__item {
  display: flex;
  align-items: center;
}
@media screen and (max-width: 768px) {
  .preview-card__item {
    flex-direction: column;
  }
}
.preview-card__item.swiper-slide-active .blog-slider__img img {
  opacity: 1;
  transition-delay: 0.3s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > * {
  opacity: 1;
  transform: none;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(1) {
  transition-delay: 0.3s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(2) {
  transition-delay: 0.4s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(3) {
  transition-delay: 0.5s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(4) {
  transition-delay: 0.6s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(5) {
  transition-delay: 0.7s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(6) {
  transition-delay: 0.8s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(7) {
  transition-delay: 0.9s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(8) {
  transition-delay: 1s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(9) {
  transition-delay: 1.1s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(10) {
  transition-delay: 1.2s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(11) {
  transition-delay: 1.3s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(12) {
  transition-delay: 1.4s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(13) {
  transition-delay: 1.5s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(14) {
  transition-delay: 1.6s;
}
.preview-card__item.swiper-slide-active .blog-slider__content > *:nth-child(15) {
  transition-delay: 1.7s;
}
.preview-card__img {
  width: 300px;
  flex-shrink: 0;
  height: 300px;
  background-image: linear-gradient(147deg, #000 0%, #000 74%);
  box-shadow: 0px 3px 10px 1px rgba(252, 56, 56, 0.2);
  border-radius: 20px;
  transform: translateX(-80px);
  overflow: hidden;
}
.preview-card__img:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: linear-gradient(147deg, #000 0%, #000 74%);
  border-radius: 20px;
  opacity: 0.4;
}
.preview-card__img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  opacity: 1;
  border-radius: 20px;
  transition: all 0.3s;
}
@media screen and (max-width: 768px) {
  .preview-card__img {
    transform: translateY(-50%);
    width: 90%;
  }
}
@media screen and (max-width: 576px) {
  .preview-card__img {
    width: 95%;
  }
}
@media screen and (max-height: 500px) and (min-width: 992px) {
  .preview-card__img {
    height: 270px;
  }
}
.preview-card__content {
  width:100%;
/*  padding-right: 25px;*/
  margin-left:-55px;
}

@media screen and (max-width: 576px) {
  .preview-card__content {
    padding: 0;
  }
}
.preview-card__content > * {
  transform: translateY(25px);
  transition: all 0.4s;
}
.preview-card__code {
  color: #7b7992;
  margin-bottom: 15px;
  display: block;
  font-weight: 500;
}
.preview-card__title {
  font-size: 15px;
  font-weight: 600;
  color:white;
  margin-bottom: 20px;
}
.preview-card__text {
  color: #4e4a67;
  margin-bottom: 30px;
  line-height: 1.5em;
}
.preview-card__button {
  display: inline-flex;
  background-image: linear-gradient(147deg, #000 0%, #000 74%);
  padding: 15px 35px;
  margin-bottom: 30px;
  border-radius: 50px;
  color: #fff;
  box-shadow: 0px 3px 10px rgba(252, 56, 56, 0.4);
  text-decoration: none;
  font-weight: 500;
  justify-content: center;
  text-align: center;
  letter-spacing: 1px;
}
.preview-card__button:hover {
  color: #989898;
  text-decoration: none;
}
@media screen and (max-width: 576px) {
  .preview-card__button {
    width: 100%;
  }
}

</style>