<!-- header -->
<section>

<div class="navbar-area deskto-menu">

<div class="mobile-nav">
<a href="index.html" class="logo">
<img src="public/img/rangamati/logo.png" class="main-logo" alt="Logo">
<img src="public/img/rangamati/logo.png" class="white-logo" alt="Logo">
</a>
</div>

<div class="main-nav">
<div class="container-fluid">
<nav class="navbar navbar-expand-md">
<a class="navbar-brand" href="index.html">
<img src="public/img/rangamati/logo.png" class="main-logo" alt="Logo">
<img src="public/img/rangamati/logo.png" class="white-logo" alt="Logo">
</a>
<div class="collapse navbar-collapse mean-menu">
<ul class="navbar-nav m-auto">
<?php foreach ($header_menus as $key => $value): ?>
    <?php if (is_array($value)): ?>
        <li class="nav-item">
            <a href="#" class="nav-link"><?php echo $key; ?><i class="bx bx-chevron-down"></i></a>
            <ul class="dropdown-menu">
                <?php foreach ($value as $k => $v): ?>
                    <li class="nav-item">
                        <a href="<?php echo $v; ?>" class="nav-link"><?php echo $k; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>
    <?php else: ?>
        <li class="nav-item">
            <a href="<?php echo $value; ?>" class="nav-link"><?php echo $key; ?></a>
        </li>
    <?php endif; ?>
<?php endforeach; ?>
</ul>
</div>
</nav>
</div>
</div>


<!-- another header -->
<div class="mobile-menu sticky-top">
    <img src="public/img/rangamati/logo.png" alt="logo" style="height:auto; width:300px;">
 <button class="ticon" type="button" data-bs-toggle="offcanvas" data-bs-target="#leftOffcanvas" aria-controls="leftOffcanvas">
 &#9776
</button>


<div class="offcanvas offcanvas-start " tabindex="-1" id="leftOffcanvas" aria-labelledby="leftOffcanvasLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="leftOffcanvasLabel"><img src="public/img/rangamati/logo.png" alt="Logo" style="height:auto; width:250px;"></h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close" style="
    background-color: white;
"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link" href="<?php echo $base_url; ?>" style="
    background-color: aliceblue;
">Home</a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="
    background-color: aliceblue;
"><p>About</p></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>about-us">About Us</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>principle_message">Message From Principle</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>chairman_message">Message From Chairman</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>director_message">Message From Director</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>management">Management</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>teaching_staff">Teaching Staff</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>non_teachingstaff">Non Teaching Staff</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>technical_support_staff">Technical Support Staff</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>gallery">GALLERY</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="
    background-color: aliceblue;
"><p>Facilities</p></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>infrastructure">Infrastructure</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>library">Library</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>lab">LAB</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="
    background-color: aliceblue;
"><p>Course Details</p></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>course">Courses</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>subject">Method Subject</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>fee_structure">Fee Structure</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>student_list">Student List</a></li>

        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="
    background-color: aliceblue;
"><p>Accounts</p></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>balance_sheet">Balance Sheet</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>income_expences">Income and Expense</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>receipt_payment">Receipt and Payment</a></li>

        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="
    background-color: aliceblue;
"><p>Documents</p></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>bed">B.Ed</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>deled">D.El.Ed</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>wbbpe_certificate">WBBPE Certificate</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>affidavit">Affidavit</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>disclosure">Mandatory Disclosure</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>T_attendence">Teacher Attendance</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>S_attendence">Student Attendance</a></li>

        </ul>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="
    background-color: aliceblue;
"><p>Notification</p></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>notification">Latest Notification</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url; ?>calender">Academic Calendar</a></li>
       

        </ul>
      </li>
     
   
   
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $base_url; ?>contact" style="
    background-color: aliceblue;
">Contact</a>
      </li>
    </ul>
   
  </div>

</div>

                                        </div>
                                        <!-- call to action button  -->
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
  <a class="btn book-now desktop open-datepicker-popup" href="#" title="Book Now">Apply Now</a>
  <div class="scroll"></div>

</section>