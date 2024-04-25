<?php
$base_url	= '';
$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$base_url .= "://" . $_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);

$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$lastUriSegment = array_pop($uriSegments);

$site_name="Mother Mary Institute of Nursing";
$site_short_name="MMIN";



$favicon=$base_url.'public/images/favicon.ico';
$logo_top=$base_url.'public/img/logo/header-logo.png';
$logo_bottom=$base_url.'public/img/logo/footer-logo.png';


$breadcrumb_bg=$base_url.'public/img/pharma/breadcrum.webp';
$bg_404=$base_url.'public/img/bg/404-img.png';


$bg_comeingsoon=$base_url.'public/img/pharma/coming_soon.jpg';
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
	'our-gallery'=>array(
		$base_url=>'Home',
		''=>'Gallery'
	),
	'bscn'=>array(
		$base_url=>'Home',
		''=>'BSC COURSE DETAILS'
	),
	'pbins'=>array(
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
	'coming-soon'=>array(
		$base_url=>'Home',
		''=>'coming-soon'
	),
	'chairman_message'=>array(
		$base_url=>'Home',
		''=>'Chairman message'
	),
	'vision_mission'=>array(
		$base_url=>'Home',
		''=>'Vision & Mission'
	),
	'about_us'=>array(
		$base_url=>'Home',
		''=>'About Us'
	),
	'gallery'=>array(
		$base_url=>'Home',
		''=>'Gallery'
	),
	'secretory_message'=>array(
		$base_url=>'Home',
		''=>'secretory Message'
	),
	'chairman_message'=>array(
		$base_url=>'Home',
		''=>'Chairman Message'
	),
	'principle_message'=>array(
		$base_url=>'Home',
		''=>'Principle Message'
	),
	'infrastructure'=>array(
		$base_url=>'Home',
		''=>'Infrastructure'
	),
	'classroom'=>array(
		$base_url=>'Home',
		''=>'Classroom'
	),
	'accomodation'=>array(
		$base_url=>'Home',
		''=>'Accomodation'
	),
	'transport'=>array(
		$base_url=>'Home',
		''=>'Transportation'
	),
	'course'=>array(
		$base_url=>'Home',
		''=>'Course offered'
	),

	'affiliation'=>array(
		$base_url=>'Home',
		''=>'Affiliation'
	),
	'coming_soon'=>array(
		$base_url=>'Home',
		''=>'Coming-soon'
	),

	
	





);

$header_menus = array(
    "Home" => $base_url,
    "About" => array(
        'About Us' => $base_url ."about_us",
        "Chairman message" => "chairman_message",
        "Principle message" => "principle_message",
        "Secretory message" => "secretory_message",
        "vission & mission" => "vision_mission",
        "affiliation" => "coming_soon"
    ),
    "Courses" => array(
        "Course offered" => "course",
        "Admission Enquiry" => "coming_soon",
        "Fee Structure" => "coming_soon",
		"Online Fees payments" => "coming_soon",
    ),
    "Facilities" => array(
        "Infrastructure" => "infrastructure",
        "Classroom" => "classroom",
		"Accomodation" => "accomodation",
		"Transportation" => "transport",
    ),
  
    "Gallery" => $base_url ."gallery",
    "Contact" => "contact"
);

$header_menu_special=array('text'=>'Apply Now','url'=>$base_url.'apply_now');

$pages_arr=[
	""=>"home",
	"about"=>"about",
	"course"=>"course",

	
	"contact"=>"others",
	"privacy_policy"=>"others",
	"terms&condition"=>"others",
	"refund_policy"=>"others",
	"apply_now"=>"others",


	"gallery"=>"about",
	'coming_soon'=>"others",
	'mail'=>"others",
	'chairman_message'=>"about",
	'vision_mission'=>"about",
	'principle_message'=>"about",
	'secretory_message'=>"about",
	'about_us'=>"about",
	'infrastructure'=>"facilities",
	'classroom'=>"facilities",
	'accomodation'=>"facilities",
	'transport'=>"facilities",



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




// home page slider

$slides = [
    [
        'image' => 'public/img/pharma/banner1.jpg',
        'caption' => 'Welcome to SKM Institute of',
        'subtitle' => 'Pharmaceutical Science &amp; Research',
        'title' => 'World Best Diploma',
        'programme' => 'Programme',
    ],
    [
        'image' => 'public/img/pharma/banner2.jpg',
        'caption' => 'Explore Excellence at Skm',
        'subtitle' => 'Pharmaceutical Science &amp; Research',
        'title' => 'Best Bachelor',
        'programme' => ' Programme',
    ],
    [
        'image' => 'public/img/pharma/banner3.jpg',
        'caption' => 'Discover Innovation at Skm',
        'subtitle' => 'Pharmaceutical Science &amp; Research',
        'title' => 'Leading in Bachelor',
        'programme' => 'Programme',
    ],
];

// home page course

$courses_home = [
    [
        'image' => 'public/img/bg/couress-img-1.jpg',
        'category' => 'diploma',
        'title' => 'Diploma in Pharmacy',
        'description' => 'Typically, a Diploma in Pharmacy program lasts for two years.',
        'link' => '',

        'icon' => 'fal fa-graduation-cap',
    ],
    [
        'image' => 'public/img/bg/couress-img-2.jpg',
        'category' => 'Economics',
        'title' => 'Bachalor in Pharmacy',
        'description' => '
		Bachelor of Pharmacy (BPharm) programs typically have a duration of four years.',
        'link' => '',
      
        'icon' => 'fal fa-graduation-cap',
    ],
    [
        'image' => 'public/img/bg/couress-img-3.jpg',
        'category' => 'Media',
        'title' => 'Bachalor in Pharmacy(L)',
        'description' => 'Bachelor of Pharmacy (Lateral Entry) course duration is typically 3 years.',
        'link' => '',
       
        'icon' => 'fal fa-graduation-cap',
    ],
    // Add more courses as needed
];
// home page about 
$tab_panes = [
    [
        'id' => 'about-edu',
        'title' => 'About SKM',
        'content' => 'We are committed to impart quality “Education and Training” in Pharmacy course details that satisfy the requirements of our students in the fields of “Engineering, Pharmacy and Management” and our aim is to be an institute of excellence in global terms in the field of quality technical education through continual improvement.'
    ],
    [
        'id' => 'about-mission',
        'title' => 'Our Mission',
        'content' => 'Pharmaceutical colleges aim to train and educate students to become skilled professionals in the field of pharmacy. They provide comprehensive learning experiences to equip students with the knowledge, skills, and values necessary to excel in pharmaceutical sciences, patient care, research, and community service'
    ],
    [
        'id' => 'about-vision',
        'title' => 'Our Vision',
        'content' => 'Our Colleges aims to be a pioneer in pharmaceutical education and research. We envision a future where our graduates are at the forefront of healthcare innovation, making meaningful contributions to society through their expertise in pharmacy.'
    ]
];

$image_paths = [
    'main-img-1' => 'public/img/pharma/about_2.webp',
    'main-img-2' => 'public/img/pharma/about_1.webp',
    'shape-3' => 'public/img/pharma/White_Dot.png'
];


// campus section

$features = [
    [
        'icon' => 'public/img/pharma/time.png',
        'title' => 'Student Life',
        'description' => 'Experience a vibrant community dedicated to pharmaceutical education and professional development.'
    ],
    [
        'icon' => 'public/img/pharma/gym.png',
        'title' => 'Arts & Clubs',
        'description' => 'Engage in diverse activities and clubs tailored to the interests of aspiring pharmacists, fostering creativity and collaboration.'
    ],
    [
        'icon' => 'public/img/pharma/art_1.png',
        'title' => 'Sports & Fitness',
        'description' => 'Stay active and maintain well-being through opportunities for physical activity and fitness tailored to the needs of future healthcare professionals.'
    ]
];
$imagePaths = [
    'public/img/pharma/photo_collage.webp',
    
];
$partners_logo=[
	"public/images/home1/logo1.webp"=>'',
	"public/images/home1/logo2.webp"=>'',
	"public/images/home1/logo3.webp"=>'',
	"public/images/home1/logo4.webp"=>''
];
//course page course
$courses = array(
    array(
        "name" => "D.Pharm",
        "image" => "public/img/pharma/Courses1.webp",
        "description" => "Diploma in Pharmacy (D.Pharm) is a foundational academic program in the field of pharmacy. It is designed to impart knowledge and skills related to pharmaceutical sciences, drug manufacturing, dispensing, and healthcare.",
    ),
    array(
        "name" => "B.Pharm",
        "image" => "public/img/pharma/Course2.webp",
        "description" => "
		A Bachelor of Pharmacy (B.Pharm) is an undergraduate academic degree program in the field of pharmacy. It focuses on the study of pharmaceutical sciences, including drug composition, uses, therapeutic roles, side effects, and interactions",
    ),
    array(
        "name" => "B.Pharm(L)",
        "image" => "public/img/pharma/Course3.webp",
        "description" => "
		A Bachelor of Pharmacy (B.Pharm) lateral entry program is designed for students who have already completed a Diploma in Pharmacy (D.Pharm) or an equivalent qualification. This program offers a streamlined pathway for these students to enter directly into the third year of the B.Pharm course, skipping the initial two years.",
    )
);


$pharma_courses = array(
    array(
        "name" => "D.Pharm",
        "image" => "public/img/pharma/Courses1.webp",
        "overview" => "The duration of the D.Pharm course is typically 2 years, divided into multiple semesters or academic terms.",
        "offer" => "The curriculum of D.Pharm covers various subjects such as Pharmaceutics, Pharmaceutical Chemistry, Pharmacology, Pharmacognosy, and Hospital Pharmacy. Students also undergo practical training to gain hands-on experience in pharmacy practices."
    ),
    array(
        "name" => "B.Pharm",
        "image" => "public/img/pharma/Course2.webp",
        "overview" => "The Bachelor of Pharmacy lateral program typically lasts for Four years.",
        "offer" => "Students enrolled in a B.Pharm lateral entry program undergo advanced coursework and practical training focused on pharmaceutical sciences, pharmacology, medicinal chemistry, ."
    ),
    array(
        "name" => "B.Pharm(L)",
        "image" => "public/img/pharma/Course3.webp",
        "overview" => "The Bachelor of Pharmacy lateral program typically lasts for Three years.",
        "offer" => "Our B.Pharm (Lateral Entry) program is designed for students with prior education in pharmacy. Building on their existing knowledge, we offer advanced coursework and practical training to accelerate their path to a successful career in pharmacy."
    )
);





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