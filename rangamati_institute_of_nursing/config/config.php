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
$breadcrumb_bg=$base_url.'public/img/inner-banner-bg.jpg);';
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
	'about_us'=>array(
		$base_url=>'Home',
		''=>'About Us'
	),
	'vision&mission'=>array(
		$base_url=>'Home',
		''=>'Vision & Mission'
	),
	'brocher'=>array(
		$base_url=>'Home',
		''=>'Our Brocher'
	),
	'certificate'=>array(
		$base_url=>'Home',
		''=>'Certificate'
	),
	'facilities'=>array(
		$base_url=>'Home',
		''=>'Facilities'
	),
	
	'documents'=>array(
		$base_url=>'Home',
		''=>'INC Documents'
	),
	'non_teachingstaff'=>array(
		$base_url=>'Home',
		''=>'non teching staff'
	),
	'technical_support_staff'=>array(
		$base_url=>'Home',
		''=>'technical staff'
	),
	'gallery'=>array(
		$base_url=>'Home',
		''=>'College Gallery'
	),
	'infrastructure'=>array(
		$base_url=>'Home',
		''=>'College Infrastructure'
	),
	'library'=>array(
		$base_url=>'Home',
		''=>'Library Details'
	),
	'lab'=>array(
		$base_url=>'Home',
		''=>'Lab Details'
	),
	'course'=>array(
		$base_url=>'Home',
		''=>'Courses'
	),
	'fee_structure'=>array(
		$base_url=>'Home',
		''=>'fee_structure'
	),
		
	'student_list'=>array(
		$base_url=>'Home',
		''=>'Student_list'
	),
	'subject'=>array(
		$base_url=>'Home',
		''=>'Methos Subject'
	),
	'balance_sheet'=>array(
		$base_url=>'Home',
		''=>'Balance Sheet'
	),
	'income_expences'=>array(
		$base_url=>'Home',
		''=>'Income Expences'
	),

	'receipt_payment'=>array(
		$base_url=>'Home',
		''=>'Receipt Payment'
	),
	'contact'=>array(
		$base_url=>'Home',
		''=>'Contact Us'
	),


	'privacy_policy'=>array(
		$base_url=>'Home',
		''=>'Privacy Policy'
	),
	'gnm'=>array(
		$base_url=>'Home',
		''=>'GNM NURSING'
	),
	'notice'=>array(
		$base_url=>'Home',
		''=>'Notice Board'
	),
	'affiliation'=>array(
		$base_url=>'Home',
		''=>'Affiliation'
	),
	'wbbpe_certificate'=>array(
		$base_url=>'Home',
		''=>'certificate'
	),
	'disclosure'=>array(
		$base_url=>'Home',
		''=>'Mandotory discloser'
	),
	'S_attendence'=>array(
		$base_url=>'Home',
		''=>'Student Attendence'
	),
	'T_attendence'=>array(
		$base_url=>'Home',
		''=>'Teacher Atttendence'
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
	),
	'notification'=>array(
		$base_url=>'Home',
		''=>'Latest Notification'
	),
	'calender'=>array(
		$base_url=>'Home',
		''=>'Academic Calender'
	),
	'terms&condition'=>array(
		$base_url=>'Home',
		''=>'Privacy Policy'
	),
	'apply_now'=>array(
		$base_url=>'Home',
		''=>'APPLY NOW'
	),
	'prospectus'=>array(
		$base_url=>'Home',
		''=>'Prospectus'
	),



);
//header top nav section

$header_menus = array(
    "Home" => "$base_url",
    "About" => array(
        "About Us" => "about_us",
		"Vision & mission" => "vision&mission",
		"Affilaiation" => "affiliation",
        "Certificate" => "certificate",
        "Our Brocher" => "brocher",
        "Facilities" => "facilities",
        "INC Documents" => "documents",
      
    ),

	"Courses" =>array(
		"GNM Nursing"=>"gnm",
		
	),
    "Prospectus" => "prospectus",
 
    "Gallery" => "gallery",
    
    "Contact" => "contact",
	// "Notice Board"=>"notice",
);

$header_menu_special=array('text'=>'Apply Now',
                           'url'=>$base_url.'apply_now'
                          );
					

$pages_arr=[
	""=>"home",
	"about_us"=>"about",
	"vision&mission"=>"about",
	"affiliation"=>"about",
	"brocher"=>"about",
	"certificate"=>"about",
	"documents"=>"about",
	"facilities"=>"about",
	"gallery"=>"others",
	
	
	"contact"=>"others",
		
	"notice"=>"others",
	"gnm"=>"course",
	
	


	
	

	"wbush_affiliation"=>"about",
	"bsc_course"=>"course",
	"gnm_course"=>"course",
	"blog-details"=>"others",
	"mission-vision"=>"about",
	"school-activities"=>"about",
	"school-house"=>"about",
	"information"=>"about",
	

	"prospectus"=>"others"
];

$footer_menues=[

	'about-us'=>$base_url.'vision-mission',
	'courses'=>$base_url.'course',
	

	'T & C'=>$base_url.'terms & Condition',
	'privacy & Policy'=>$base_url.'Privacy_Policy'
];

// gallery section


//GALARY PAGE
$projects = [
    ['image' => 'public/img/gallery1.jpg'],
    ['image' => 'public/img/gallery2.jpg'],
    ['image' => 'public/img/gallery3.jpg'],
    ['image' => 'public/img/gallery4.jpg'],
    ['image' => 'public/img/gallery5.jpg'],
    ['image' => 'public/img/gallery6.jpg'],
    ['image' => 'public/img/gallery7.jpg'],
    ['image' => 'public/img/gallery8.jpg'],
    ['image' => 'public/img/gallery9.jpg'],
	['image' => 'public/img/gallery10.jpg'],
	['image' => 'public/img/gallery11.jpg'],
	['image' => 'public/img/gallery13.jpg'],
  
    // Add more projects as needed
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


$cwsn_lift_infos=[
	'3 year AMC Kingfisher Elevator'=>'',
	'Undertaking Kingfisher Elevator'=>'',
	'Invoice of Lift'=>'',
	'Undertaking Gyanjyoti Public School'=>'',
	'CWSN access Plan through Lift'=>''
];

$cwsn_toilet_infos=[
	'CWSN Toilet Gr. Fl. for Boys'=>'',
	'CWSN Toilet 1st Fl. for Boys'=>'',
	'CWSN Toilet 2nd Fl. for Boys'=>'',
	'CWSN Toilet Gr. Fl. for Girls'=>'',
	'CWSN Toilet 1st Fl. for Girls'=>'',
	'CWSN Toilet 2nd Fl. for Girls'=>''
];

$teaching_staff['one']=[
	'public/img/class/img-18.jpeg'=>array(
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
	"privacy_policy"=>array(
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
//about page//facilities





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