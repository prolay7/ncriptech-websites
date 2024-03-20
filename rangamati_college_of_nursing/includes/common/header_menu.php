<!-- header -->
<section>

<div class="navbar-area">

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

<div class="others-option-for-responsive">
<div class="container">
<div class="dot-menu">
<div class="inner">
<div class="circle circle-one"></div>
<div class="circle circle-two"></div>
<div class="circle circle-three"></div>
</div>
</div>
<div class="container">
<div class="option-inner">
<div class="others-option justify-content-center d-flex align-items-center">
<div class="option-item">
<i class="search-btn bx bx-search"></i>
<i class="close-btn bx bx-x"></i>
<div class="search-overlay search-popup">
<div class="search-box">
<form class="search-form">
<input class="search-input" name="search" placeholder="Search" type="text">
<button class="search-button" type="submit"><i class="bx bx-search"></i></button>
</form>
</div>
</div>
</div>
<div class="cart-icon">
<a href="cart.html">
<i class="flaticon-shopping-cart"></i>
<span>0</span>
</a>
</div>
<div class="register">
<a href="" class="default-btn">
Login / Register
</a>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
<!-- another header -->


</section>