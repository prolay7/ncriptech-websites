<?php
$base_url	= '';
$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$base_url .= "://" . $_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);

$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$lastUriSegment = array_pop($uriSegments);

$site_name="Gitanjali Institute of Nursing";
$site_short_name="GIN";



$favicon=$base_url.'public/images/favicon.ico';
$logo_top=$base_url.'public/img/logo/header-logo.png';
$logo_bottom=$base_url.'public/img/logo/footer-logo.png';


$breadcrumb_bg=$base_url.'public/img/rmpharma/breadcram.webp';
$bg_404=$base_url.'public/img/bg/404-img.png';
$bg_comeingsoon=$base_url.'public/img/rmpharma/coming_soon.jpg';
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
	'about'=>array(
		$base_url=>'Home',
		''=>'About Us'
	),

	'vission_mission'=>array(
		$base_url=>'Home',
		''=>'Vission & Mission'

		
	),

	
	'chairman'=>array(
		$base_url=>'Home',
		''=>'Chairman Message'
	),

	'principle'=>array(
		$base_url=>'Home',
		''=>'Principle Message'
	),

	'faculty'=>array(
		$base_url=>'Home',
		''=>'Teacher Details'
	),

	'non_teaching'=>array(
		$base_url=>'Home',
		''=>'Non teaching Staff'
	),

	'calender'=>array(
		$base_url=>'Home',
		''=>'Academic Calender'
	),
	'gallery'=>array(
		$base_url=>'Home',
		''=>'Our gallery'
	),
	'govt'=>array(
		$base_url=>'Home',
		''=>'Governing body'
	),






	'd.pharma'=>array(
		$base_url=>'Home',
		''=>'D.Pharma'
	),
	
	'affiliation'=>array(
		$base_url=>'Home',
		''=>'Affiliation'
	),

	'prospectus'=>array(
		$base_url=>'Home',
		''=>'Prospectus'
	),
	'gnm_prospectus'=>array(
		$base_url=>'Home',
		''=>'JNM PROSPECTUS'
	),
		
	'contact'=>array(
		$base_url=>'Home',
		''=>'Contact Us'
	),

	'mail'=>array(
		$base_url=>'Home',
		''=>'Thank You for register'
	),
	'terms&condition'=>array(
		$base_url=>'Home',
		''=>'Terms & Condition'
	),

	'refund_policy'=>array(
		$base_url=>'Home',
		''=>'refund policy'
	),
	
	'privacy_policy'=>array(
		$base_url=>'Home',
		''=>'Privacy Policy'
	),
	'apply_now'=>array(
		$base_url=>'Home',
		''=>'APPLY NOW'
	),
	'coming_soon'=>array(
		$base_url=>'Home',
		''=>'coming-soon'
	)


);

$page_headings = array(
    'about' => 'About Us',
    'vission_mission' => 'Our Vision & Mission',
    'chairman' => 'Chairman Message',
	'principle' => 'Principle Message',
	'faculty' => 'Teachers Details',
	'prospectus' => 'Prospectus',

	'non_teaching' => 'Non Teaching Staff',
	'calender' => 'Academic Calender',
	'gallery' => 'Our Gallery',
	'd.pharma'=>'Diploma in Pharmacy',
	'affiliation'=>'Affiliation',
	'contact'=>'Contact Us',
	'govt'=>'Governing body',
	'coming_soon'=>'coming-soon',

);

$header_menus = array(
    "HOME" => $base_url,
    "ABOUT" => array(
        'About College' => $base_url ."about",
        "Vission & Mission" => "vission_mission",
        "Chairman Message" => "chairman",
        "Principle Message" => "principle",
        "Govt Body" => "govt",
		"Gallery"=>"gallery",

    ),
    "ACADEMICS" => array(
        "Faculty" => "faculty",
        "Non Teaching Staff" => "non_teaching",
        "Academic Calender" => "coming_soon"
    ),
    "COURSES" => array(
        "D.pharma" => "d.pharma",
        "Prospectus" => "prospectus",
		"Recognization"=>"coming_soon",
		"Affiliation"=>"affiliation",
		"Admission Form"=>"coming_soon",
    ),
    "STUDENT CORNER" => array(
        "Online Class" => "coming_soon",
        "Alumuni" => "coming_soon",
		"Activity  Club" => "coming_soon",
		"Anti Ragging" => "coming_soon",
		"Anti Discrimination" => "coming_soon",
    ),

   
);



$pages_arr=[
	""=>"home",
	"about"=>"about",
	"courses"=>"courses",

	"vission_mission"=>"about",
	"chairman"=>"about",
	"principle"=>"about",
	"govt"=>"about",

	"faculty"=>"Academic",
	"non_teaching"=>"Academic",
	"calender"=>"Academic",

	"d.pharma"=>"course",
	"affiliation"=>"course",
	"prospectus"=>"course",


	"gallery"=>"others",
	"bsc_prospectus"=>"others",
	"gnm_prospectus"=>"others",
	"contact"=>"others",
	"privacy_policy"=>"others",
	"terms&condition"=>"others",
	"refund_policy"=>"others",
	"apply_now"=>"others",

	"wbush_affiliation"=>"about",

	"pbins"=>"course",
	"blog-details"=>"others",
	
	'coming_soon'=>"others",
	'mail'=>"others",


];

$footer_menues=[
	'Home'=>$base_url.'',
	'About'=>$base_url.'about',
	'courses'=>$base_url.'bscn',
	'Contact-us'=>$base_url.'contact_us',
	'Blog'=>$base_url.'',

	'Terms & Condition'=>$base_url.'terms&condition',
	'privacy & Policy'=>$base_url.'Privacy_Policy',
	'refund policy'=>$base_url.'refund_policy',
];


// home about section

$about_content = array(
    'title' => 'A Few Words About Our College',
    'subtitle' => 'About Our College',
    'description' => 'Ranagamati College of Pharmacy is dedicated to providing quality education in the field of pharmacy. Our mission is to produce highly skilled pharmacists who contribute to the healthcare sector. With state-of-the-art facilities and experienced faculty, we strive to foster innovation and excellence in pharmaceutical education.We are committed to continuous improvement, adapting to advancements in pharmaceutical science and technology to provide the best education possible. Join us at Ranagamati College of Pharmacy and embark on a journey towards a rewarding career in pharmacy.',
    'button_text' => 'Read More',
	'button_link' => $base_url . '/about',
    'image_src' => 'public/img/rmpharma/about_us.webp',
    'image_alt' => 'img'
);


// home notification content

$notification_content = array(
    'title' => 'Notification',
    'image_src' => 'public/img/rmpharma/notification.webp',
    'items' => array(
        'coming-soon',
        'coming-soon',
        'coming-soon',
        'coming-soon',
        'coming-soon',
        'coming-soon',
        'coming-soon'
    ),
    'button_text' => 'Read More',
    'button_link' =>  $base_url , // Adjust link as needed
);


$college_information = array(
    'title' => 'COLLEGE INFORMATION',
    'image_src' => 'public/img/rmpharma/News_updates.webp',
    'items' => array(
        'Estd. January, 2022',
        'Working Days - Monday to Friday',
        'Well maintained Medicinal Garden',
        'Separate in-campus hostel for boys and girls',
        'Central Instrument Laboratory',
        'Well designed internet-enabled Smart Classrooms with proper ventilation and lighting',
        'Central Library'
    ),
    'button_text' => 'Read More',
    'button_link' => $base_url // Adjust link as needed
);
$slides = [
    [
        'image' => 'public/img/rmpharma/Banner1.webp',
        'caption' => 'One of the best Pharmacy College In India',
   
        'title' => 'RANGAMATI COLLEGE OF',
		'title1' => ' PHARMACY',
  
    ],
    [
        'image' => 'public/img/rmpharma/Banner2.webp',
		'caption' => 'A Leading Institution in Pharmacy Education',
   
        'title' => 'RANGAMATI COLLEGE OF',
		'title1' => ' PHARMACY',
  
    ],
    [
        'image' => 'public/img/rmpharma/Banner3.webp',
        'caption' => 'Excellence in Pharmaceutical Education',
   
        'title' => 'RANGAMATI COLLEGE OF',
		'title1' => ' PHARMACY',
  
    ],

	[
        'image' => 'public/img/rmpharma/slider4.webp',
        'caption' => 'One of the best Pharmacy College In India',
   
        'title' => 'RANGAMATI COLLEGE OF',
		'title1' => ' PHARMACY',
  
    ],
];




$slides_mobile = [
    [
        'image' => 'public/img/rmpharma/mob_banner1.png',
        'caption' => 'One of the best Pharmacy College In India',
   
        'title' => 'RANGAMATI COLLEGE OF',
		'title1' => ' PHARMACY',
  
    ],
    [
        'image' => 'public/img/rmpharma/mob_banner2.png',
		'caption' => 'One of the best Pharmacy College In India',
   
        'title' => 'RANGAMATI COLLEGE OF',
		'title1' => ' PHARMACY',
  
    ],
    [
        'image' => 'public/img/rmpharma/mobile_banner3.png',
        'caption' => 'One of the best Pharmacy College In India',
   
        'title' => 'RANGAMATI COLLEGE OF',
		'title1' => ' PHARMACY',
  
    ],

	[
        'image' => 'public/img/rmpharma/mob_banner4.png',
        'caption' => 'One of the best Pharmacy College In India',
   
        'title' => 'RANGAMATI COLLEGE OF',
		'title1' => ' PHARMACY',
  
    ],
];

// d.pharma course

$carrerOptions = [
    "Pharmacy Technician",
    "Hospital Pharmacist Assistant:",
    "Retail Pharmacist",
    "Pharmaceutical Sales Representative",
    "Pharmaceutical Research Assistant",
    "Pharmacy Technician Trainer"
];

$courseOverview = [
    "D.Pharm, or Diploma in Pharmacy, is a two-year undergraduate program in the pharmaceutical sciences field. The curriculum covers subjects such as pharmaceutical chemistry, pharmacology, pharmaceutics, pharmacognosy, and pharmacy practice. Eligibility criteria for admission typically include completion of higher secondary education with a minimum of 50% marks in the science stream, with subjects like Chemistry, Biology, and Physics. Alternatively, students can apply after completing a Diploma in Pharmacy Technician course."
];

$pharmaEligibility = [
    "The eligibility criteria for the D.Pharm (Diploma in Pharmacy) course typically include completion of higher secondary education (10+2) with a minimum aggregate of 50% marks in the science stream. Candidates must have studied English, Chemistry, Biology, and Physics as core subjects in the qualifying examination"
];

$admissionProcedure = [
    "The admission process for D.Pharm programs usually involves fulfilling eligibility criteria, submitting application forms, and clearing entrance exams or merit-based selection processes. "
];

$partners_logo=[
	"public/images/home1/logo1.webp"=>'',
	"public/images/home1/logo2.webp"=>'',
	"public/images/home1/logo3.webp"=>'',
	"public/images/home1/logo4.webp"=>''
];


$dcuments_info=[
	'SOCIETIES/TRUST/COMPANY REGISTRATION CERTIFICATE'=>'public/docs/Society-Registration-Certificate.pdf',
	'NO OBJECTION CERTIFICATE (NOC)'=>'public/docs/No-Objection-Certificate.pdf',
	'VALID BUILDING SAFETY CERTIFICATE'=>'public/docs/Building-Safety-Certificate.pdf',
	'DEO CERTIFICATE'=>'public/docs/DEO-Certificate.pdf',
	'VALID WATER, HEALTH AND SANITATION CERTIFICATES'=>'public/docs/Safe-Drinking-Water-Sanitary-Condition-Certificate-June23.pdf',
	'RECOGNITION CERTIFICATE'=>'public/docs/Recognition-Certificate.pdf',
	'VALID FIRE SAFETY CERTIFICATE'=>'public/docs/Fire-Safety-Certificate.pdf',
	'Valid Land Certificate'=>'public/docs/Certificate-of-Land-Annexure-X.pdf',
	'Self Declaration'=>'public/docs/Self-Declaration.pdf'
];

$results_info=[
	'FEE STRUCTURE OF THE SCHOOL'=>'public/docs/Fee-Structure-23-24.pdf',
	'ANNUAL ACADEMIC CALANDER'=>'public/docs/Academic-Calender-23-24.pdf',
	'SCHOOL MANAGEMENT COMMITTEE (SMC)'=>'public/docs/School-Managing-Committee-23-24.pdf',
	'PARENTS TEACHERS ASSOCIATION (PTA) MEMBERS'=>'public/docs/Parent-Teacher-Association-23-24.pdf',
	'POSH Committee'=>'public/docs/POSH-Committee-23-24.pdf',
	'POSCO Committee'=>'public/docs/POSCO-Committee-23-24.pdf'
];


$infras_info['one']=[
	'public/img/class/img-18.jpeg'=>array(
		'TOTAL CAMPUS AREA OF THE SCHOOL (IN SQ MTR)'=>array(
			'type'=>'text',
			'text'=>'8660 sq.mtr.'
		),
	
		'NO. AND SIZE OF THE CLASS ROOMS'=>array(
			'type'=>'text',
			'text'=>'14 (48.03sq.mtr. / 517 sq.ft.)'
		),
	
		'NO. AND SIZE OF LABORATORIES (INCLUDING COMPUTER LABS)'=>array(
			'type'=>'text',
			'text'=>'6 (97.08 sq.mtr. / 1045 sq.ft.)'
		),
		'INTERNET FACILITY'=>array(
			'type'=>'text',
			'text'=>'YES'
		),
		'NO. OF GIRLS TOILETS'=>array(
			'type'=>'text',
			'text'=>'Urinal 9, Toilet 9'
		),
	
		'NO. OF BOYS TOILETS'=>array(
			'type'=>'text',
			'text'=>'Urinal 18, Toilet 9'
		)
	)
];

$infras_info['two']=[
	'public/img/class/img-08.jpeg'=>array(		
		'SCHOOL INSPECTION (COVERING THE INFRASTRUCTURE)'=>array(
			'type'=>'video',
			'text'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/LscU89wol0g?si=e4vK_7l5kDS5j_XA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
		)
	)
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


// gallery page
$image_urls = array(
    "https://picsum.photos/id/251/1200/800.webp",
    "https://picsum.photos/id/678/1200/800.webp",
    "https://picsum.photos/id/74/1200/800.webp",
    "https://picsum.photos/id/92/1200/800.webp",
    "https://picsum.photos/id/62/1200/800.webp",
    "https://picsum.photos/id/575/1200/800.webp",
    "https://picsum.photos/id/110/1200/800.webp",
    "https://picsum.photos/id/177/1200/800.webp",
    "https://picsum.photos/id/197/1200/800.webp"
);

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