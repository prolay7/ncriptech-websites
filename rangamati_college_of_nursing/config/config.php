<?php
$base_url	= '';
$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$base_url .= "://" . $_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);

$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$lastUriSegment = array_pop($uriSegments);

$site_name="Mother Mary Institute of Nursing";
$site_short_name="MMIN";

$phone_nos='9073112222';
$email="gpskanchrapara@gmail.com";
$address=" 
Vill - Chandua, P.O. - Kanchrapara, Beside Kalyani-Barrackpore Expressway, North 24 Parganas,PIN - 743145, West Bengal";
$favicon=$base_url.'public/images/favicon.ico';
$logo_top=$base_url.'public/img/logo/header-logo.png';
$logo_bottom=$base_url.'public/img/logo/footer-logo.png';
$logo_alt='Gyanjyoti Public School';
$slogan="Affiliated to CBSE, New Delhi.Affiliation No. : 2430409.
<br>It is the mission of our educational institution to provide a nurturing environment for the students. We aim totransform the youngsters through sound academic education with a distinct worldview.";
$breadcrumb_bg=$base_url.'public/img/page-bg/page-bg-1.jpg);';
$bg_404=$base_url.'public/img/bg/404-img.png';
$bg_comeingsoon=$base_url.'public/img/class/comeing.jpg';
$features_img='public/img/features/img-07.jpeg';
$admission_home_img='public/img/features/img-14.jpeg';

$page_title=[
	'home'=>'Mother Mary Institute of Nursing College in Barasat, Kolkata | WBNC Affiliated',
	'about-us'=>'About Us',
	'vision-mission'=>'Vision & Mission',
	'director-message'=>'Director Message',
	'chairman-message'=>'Chairman Message',
	'principal-message'=>'Principal Message',
	'bsc-nursing-training-course'=>'B.Sc. Nursing Course in West Bengal | Top Nursing College in WB',
	'gnm-nursing-training-course'=>'GNM Nursing Course in West Bengal | General Nursing And Midwifery',
	'admission'=>'Admission',
	'placement'=>'Placement',
	'contact-us'=>'Contact Us'
];

$bread_cumbs=array(
	'about-us'=>array(
		$base_url=>'Home',
		''=>'About Us'
	),
	'noc'=>array(
		$base_url=>'Home',
		''=>'NOC govt of W.B'
	),
	'wbnc'=>array(
		$base_url=>'Home',
		''=>'WBNC'
	),
	'wbush_affiliation'=>array(
		$base_url=>'Home',
		''=>'WBUHS Affiliation 2023-2024'
	),
	'inc_bsc_nursing'=>array(
		$base_url=>'Home',
		''=>'INC BSC NURSING DOCUMENTS'
	),
	'inc_gnm_nursing'=>array(
		$base_url=>'Home',
		''=>'INC GNM NURSING DOCUMENTS'
	),
	'gallery'=>array(
		$base_url=>'Home',
		''=>'GPS Gallery'
	),
	'bsc_course'=>array(
		$base_url=>'Home',
		''=>'BSC COURSE DETAILS'
	),
	'gnm_course'=>array(
		$base_url=>'Home',
		''=>'GNM COURSE DETAILS'
	),
	'bsc_prospectus'=>array(
		$base_url=>'Home',
		''=>'BSC PROSPECTUS'
	),
	'gnm_prospectus'=>array(
		$base_url=>'Home',
		''=>'JNM PROSPECTUS'
	),
		
	'contact_us'=>array(
		$base_url=>'Home',
		''=>'Contact Us'
	),
	'terms-conditions'=>array(
		$base_url=>'Home',
		''=>'T & C'
	),
	'privacy-policy'=>array(
		$base_url=>'Home',
		''=>'Privacy Policy'
	),
	'apply_now'=>array(
		$base_url=>'Home',
		''=>'APPLY NOW'
	),
	'school-activities'=>array(
		$base_url=>'Home',
		''=>'school-activities'
	),
	'school-house'=>array(
		$base_url=>'Home',
		''=>'school-house'
	),
	'information'=>array(
		$base_url=>'Home',
		''=>'about-us'
	),
	'students-details'=>array(
		$base_url=>'Home',
		''=>'students-details'
	),
	'examination'=>array(
		$base_url=>'Home',
		''=>'examination'
	),
	'result'=>array(
		$base_url=>'Home',
		''=>'result'
	),
	'syllabus'=>array(
		$base_url=>'Home',
		''=>'syllabus'
	),
	'faculty'=>array(
		$base_url=>'Home',
		''=>'faculty'
	),
	'house-event'=>array(
		$base_url=>'Home',
		''=>'House-event'
	),
	'celebration'=>array(
		$base_url=>'Home',
		''=>'Celebration'
	),
	'project'=>array(
		$base_url=>'Home',
		''=>'project'
	),
	'excursion'=>array(
		$base_url=>'Home',
		''=>'excursion'
	),
	'laboratory'=>array(
		$base_url=>'Home',
		''=>'laboratory'
	),
	'digital-classroom'=>array(
		$base_url=>'Home',
		''=>'laboratory'
	),
	'coming-soon'=>array(
		$base_url=>'Home',
		''=>'coming-soon'
	)


);
//header top nav section

$header_menus = array(
    "Home" => "$base_url",
    "About" => array(
        "About Us" => "about-us",
        "Message From Chairman" => "#",
        "Message From Director" => "#",
        "Management" => "#",
        "Teaching Staff" => "#",
        "Non Teaching Staff" => "#",
        "Technical Support Staff" => "#",
        "GALLERY" => "#"
    ),
    "Course Details" => array(
        "Courses" => "#",
        "Method Subject" => "#",
        "Fee Structure" => "#",
        "Student List" => "#"
    ),
    "Accounts" => array(
        "Balance Sheet" => "#",
        "Income and Expense" => "#",
        "Receipt and Payment" => "#"
    ),
    "Documents" => array(
        "B.Ed" => "#",
        "D.El.Ed" => "#",
        "WBBPE Certificate" => "#",
        "Affidavit" => "#",
        "Mandatory Disclosure" => "#",
        "Teacher Attendance" => "#",
        "Student Attendance" => "#"
    ),
    "Notification" => array(
        "Latest Notification" => "#",
        "Academic Calendar" => "#"
    ),
    "Contact" => "#"
);

$header_menu_special=array('text'=>'Apply Now','url'=>$base_url.'apply_now');

$pages_arr=[
	""=>"home",
	"about-us"=>"about",
	"courses"=>"courses",
	"noc"=>"about",
	"wbnc"=>"about",
	"inc_bsc_nursing"=>"about",
	"inc_gnm_nursing"=>"about",
	"gallery"=>"others",
	"bsc_prospectus"=>"others",
	"gnm_prospectus"=>"others",
	"contact_us"=>"others",
	"privacy-policy"=>"others",
	"terms-conditions"=>"others",
	"apply_now"=>"others",

	"wbush_affiliation"=>"about",
	"bsc_course"=>"course",
	"gnm_course"=>"course",
	"blog-details"=>"others",
	"mission-vision"=>"about",
	"school-activities"=>"about",
	"school-house"=>"about",
	"information"=>"about",
	"result"=>"others",
	"faculty"=>"others",
	'coming-soon'=>"others",
	"laboratory"=>"others",
	"digital-classroom"=>"others",
	"project"=>"others",
	"house-event"=>"others",
	"celebration"=>"others",
	"excursion"=>"others",
	"students-details"=>"others",
	"examination"=>"others",
	"admission"=>"others",
	"mandatory-disclosure"=>"others",
	"contact-us"=>"others",
	"privacy-policy"=>"others",
	"terms-conditions"=>"others",
	"rules-regulation"=>"others",
	"fee-structure"=>"others",
	"curriculum"=>"others",
	"admission"=>"others",
	"management"=>"others",
	"classinfrastructure"=>"others"
];

$footer_menues=[
	'About MMIN'=>$base_url.'about-us',
	'Vision & Mission'=>$base_url.'vision-mission',
	'B.Sc Nursing'=>$base_url.'bsc-nursing-training-course',
	'G.N.M Nursing'=>$base_url.'gnm-nursing-training-course',
	'Admission'=>$base_url.'admission',
	'Blog'=>$base_url.'blog',
	'T & C'=>$base_url.'terms & Condition',
	'Privacy & Policy'=>$base_url.'Privacy Policy'
];




$slides = [
    [
        'image' => 'public/img/rangamati/banner1.jpg',
		
    ],
    [
        'image' => 'public/img/rangamati/banner2.jpg',
		
    ],
	[
        'image' => 'public/img/rangamati/banner3.jpg',
		
    ],
	[
        'image' => 'public/img/rangamati/banner4.jpg',
		
    ],
	[
        'image' => 'public/img/rangamati/banner5.jpg',
		
    ],

];

$partners_logo=[
	"public/images/home1/logo1.webp"=>'',
	"public/images/home1/logo2.webp"=>'',
	"public/images/home1/logo3.webp"=>'',
	"public/images/home1/logo4.webp"=>''
];






//Meta data

$page_meta=[
	"contact-us"=>array(
		"title"=>"Contact Us",
		"page_heading"=>"Contact Us"
	),
	"rules-regulation"=>array(
		"title"=>"Rules-regulation",
		"page_heading"=>"Rules-regulation"
	),
	"fee-structure"=>array(
		"title"=>"Fee Structure",
		"page_heading"=>"Fee Structure"
	),
	"admission"=>array(
		"title"=>"Admission 2024",
		"page_heading"=>"Admission"
	),
	"curriculum"=>array(
		"title"=>"Curriculum",
		"page_heading"=>"Curriculum"
	),
	"mission-vision"=>array(
		"title"=>"Mission & Vision",
		"page_heading"=>"Mission & Vision"
	),
	"management"=>array(
		"title"=>"Managing Director Message",
		"page_heading"=>"Director Message"
	),
	"courses"=>array(
		"title"=>"Courses",
		"page_heading"=>"Courses"
	),
	"classinfrastructure"=>array(
		"title"=>"Infrastructure",
		"page_heading"=>"Infrastructure"
	),
	"gallery"=>array(
		"title"=>"GPS Gallery",
		"page_heading"=>"GPS Gallery"
	),
	"mandatory-disclosure"=>array(
		"title"=>"Mandatory Disclosure",
		"page_heading"=>"Mandatory Disclosure"
	),
	"terms-conditions"=>array(
		"title"=>"Terms & Conditions",
		"page_heading"=>"Terms & Conditions"
	),
	"privacy-policy"=>array(
		"title"=>"Privacy Policy",
		"page_heading"=>"Privacy Policy"
	),
	"school-activities"=>array(
		"title"=>"School Activities",
		"page_heading"=>"School Activities"
	),
	"school-house"=>array(
		"title"=>"School House",
		"page_heading"=>"School House"
	),
	"information"=>array(
		"title"=>"About-us",
		"page_heading"=>"Information"
	),
	"students-details"=>array(
		"title"=>"Student-details",
		"page_heading"=>"Student-details"
	),
	"examination"=>array(
		"title"=>"Examination",
		"page_heading"=>"Examination"
	),
	"syllabus"=>array(
		"title"=>"Syallabus",
		"page_heading"=>"Syallabus"
	),
	"result"=>array(
		"title"=>"Result",
		"page_heading"=>"Result"
	),
	"faculty"=>array(
		"title"=>"Faculty",
		"page_heading"=>"Faculty"
	),
	"house-event"=>array(
		"title"=>"House-event",
		"page_heading"=>"House-event"
	),
	"celebration"=>array(
		"title"=>"Celebration Blog",
		"page_heading"=>"Celebration"
	),
	"project"=>array(
		"title"=>"Project",
		"page_heading"=>"School Project"
	),

	"excursion"=>array(
		"title"=>"Excursion",
		"page_heading"=>"School Excursion"
	),

	"laboratory"=>array(
		"title"=>"Laboratory",
		"page_heading"=>"School Laboratory"
	),
	"digital-classroom"=>array(
		"title"=>"digital-classroom",
		"page_heading"=>"digital-classroom"
	),
	"about-us"=>array(
		"title"=>"About-us",
		"page_heading"=>"About-Us"
	)


];

$teaching_staff['one']=[
	'public/img/class/img-08.jpeg'=>array(
		'PRINCIPAL'=>array(
			'type'=>'text',
			'text'=>'Smt. Bidisha Chatterjee'
		),
	
		'Teacher-in-Charge'=>array(
			'type'=>'text',
			'text'=>'14 (48.03sq.mtr. / 517 sq.ft.)'
		),
	
		'Co-Ordinator'=>array(
			'type'=>'text',
			'text'=>'Smt Deepika Mustafi'
		),
		'PGT'=>array(
			'type'=>'text',
			'text'=>'0'
		),
		'TGT'=>array(
			'type'=>'text',
			'text'=>'13'
		),	
		'PRT'=>array(
			'type'=>'text',
			'text'=>'2'
		)
	)
];

$teaching_staff['two']=[
	'public/img/class/img-17.jpeg'=>array(
		'PET'=>array(
			'type'=>'text',
			'text'=>'Smt. Swarnali Chakraborty ( B.A., B.P.Ed., M.P.Ed.)'
		),
		'NTT'=>array(
			'type'=>'text',
			'text'=>'4'
		),
		'DETAILS OF SPECIAL EDUCATOR'=>array(
			'type'=>'text',
			'text'=>'Smt. Tulika Das ( B.A., Spl. B.Ed.)'
		),
		'Counselor & Wellness Teacher'=>array(
			'type'=>'text',
			'text'=>'Dr. Suparna Ray (Chatterjee), MBBS, M.D. (Neuro Psyciatrist)'
		),
		'Lab Attendent'=>array(
			'type'=>'text',
			'text'=>'1'
		)
	)
];

$page_keywords=[
	"home"=>"nurse training institute in kolkata,kolkata nursing training institute,nursing college with own hospital,nursing college at hooghly",
	"about-us"=>"",
	"vision-mission"=>"",
	"director-message"=>"",
	"chairman-message"=>"",
	"principal-message"=>"",
	"bsc-nursing-training-course"=>"b sc nursing course in west bengal,b sc nursing in west bengal,best bsc nursing college in west bengal",
	"gnm-nursing-training-course"=>"admission for gnm in kolkata,general education courses for nursing,general nursing and midwifery,gnm nursing college in kolkata",
	"admission"=>"",
	"placement"=>"",
	"contact-us"=>"",
	"privacy-policy"=>"",
	"terms-conditions"=>""
];

$page_description=[
	"home"=>"At MMIN discover the best nursing training institute in Kolkata and Hooghly with its own hospital. WBNC affiliated nursing college offers comprehensive nursing programs and hands-on clinical experience. Join us to pursue a rewarding career in nursing and healthcare.",
	"about-us"=>"At $site_short_name discover the best nursing training institute in Kolkata and Hooghly with its own hospital. WBNC affiliated nursing college offers comprehensive nursing programs and hands-on clinical experience. Join us to pursue a rewarding career in nursing and healthcare.",
	"vision-mission"=>"",
	"director-message"=>"",
	"chairman-message"=>"",
	"principal-message"=>"",
	"bsc-nursing-training-course"=>"Discover the best B.Sc nursing course in West Bengal at $site_short_name, a top nursing college known for its excellence in education and practical training. Prepare for a successful nursing career with our comprehensive curriculum and state-of-the-art facilities. Enroll now to shape your future in healthcare.",
	"gnm-nursing-training-course"=>"Discover the best GNB Nursing course in West Bengal at $site_short_name, a top nursing college known for its excellence in education and practical training. Prepare for a successful nursing career with our comprehensive curriculum and state-of-the-art facilities. Enroll now to shape your future in healthcare.",
	"admission"=>"",
	"placement"=>"",
	"contact-us"=>"",
	"privacy-policy"=>"",
	"terms-conditions"=>""
];


$galleries=[
	'public/img/nursing/gallery1.jpg',
	'public/img/nursing/gallery2.jpg',
	'public/img/nursing/gallery3.jpeg',
	'public/img/nursing/gallery4.jpg',
	'public/img/nursing/gallery5.jpg',
	'public/img/nursing/gallery6.jpg'
];


//Meta data


$styles=[
	"public/css/bootstrap.min.css"=>"prefetch",
	"public/css/animate.min.css"=>"prefetch",
	"public/css/magnific-popup.css"=>"prefetch",
	"public/fontawesome/css/all.min.css"=>"prefetch",
	"public/css/dripicons.css"=>"prefetch",
	"public/css/meanmenu.css"=>"prefetch",
	"public/css/default.css"=>"prefetch",
	"public/css/style.css"=>"prefetch",
	"public/css/custom.css"=>"prefetch",
	"public/css/responsive.css"=>"prefetch"
];

$scripts=[
	"public/vendors/bootstrap/js/bootstrap.min.js"
	
];

if(empty($lastUriSegment)){

	array_push($scripts, "public/vendors/rev-slider/js/jquery.themepunch.tools.min.js",
		"public/vendors/rev-slider/js/jquery.themepunch.revolution.min.js",
		"public/vendors/rev-slider/js/extensions/extensionsrevolution.extension.actions.min.js",
		"public/vendors/rev-slider/js/extensions/extensionsrevolution.extension.carousel.min.js",
		"public/vendors/rev-slider/js/extensions/extensionsrevolution.extension.kenburn.min.js",
		"public/vendors/rev-slider/js/extensions/extensionsrevolution.extension.layeranimation.min.js",
		"public/vendors/rev-slider/js/extensions/extensionsrevolution.extension.migration.min.js",
		"public/vendors/rev-slider/js/extensions/extensionsrevolution.extension.navigation.min.js",
		"public/vendors/rev-slider/js/extensions/extensionsrevolution.extension.parallax.min.js",
		"public/vendors/rev-slider/js/extensions/extensionsrevolution.extension.slideanims.min.js",
		"public/vendors/rev-slider/js/extensions/extensionsrevolution.extension.video.min.js",
		"public/js/rev-slider.js");
}

function getUrl () {
    if (!isset($_SERVER['REQUEST_URI'])) {
    $url = $_SERVER['REQUEST_URI'];
    } else {
    $url = $_SERVER['SCRIPT_NAME'];
    $url .= (!empty($_SERVER['QUERY_STRING']))? '?' . $_SERVER[ 'QUERY_STRING' ] : '';

    }
    return $url;
}


//getUrl gets the queried page with query string
function cache ($buffer) { //page's content is $buffer
    $url = getUrl();
    $filename = md5($url) . '.cache';
    $data = time() . '¦' . $buffer;
    $filew = fopen("cache/" . $filename, 'w');
    fwrite($filew, $data);
    fclose($filew);
    return $buffer;
}

function display () {
    $url = getUrl();
    $filename = md5($url) . '.cache';
    if (!file_exists("/cache/" . $filename)) {
    return false;
    }
    $filer = fopen("cache/" . $filename, 'r');
    $data = fread($filer, filesize("cache/" . $filename));
    fclose($filer);
    $content = explode('¦', $data, 2);
    if (count($content)!= 2 OR !is_numeric($content['0'])) {
        return false;
    }
    if (time()-(100) > $content['0']) { // 100 is the cache time here!!!
        return false;
    }
        echo $content['1'];
        die();
}