<?php
$base_url	= '';
$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$base_url .= "://" . $_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);

$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$lastUriSegment = array_pop($uriSegments);

$site_name="Gyan Jyoti public school";
$site_short_name="gps";



$favicon=$base_url.'public/images/favicon.ico';


$phone_nos='9073112222';
$email="gpskanchrapara@gmail.com";

$breadcrumb_bg=$base_url.'public/img/gps/breadcram.webp';
$bg_404=$base_url.'public/img/bg/404-img.png';
$bg_comeingsoon=$base_url.'public/img/gps/Coming_soon.webp';
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

	'vission-mission'=>array(
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

	'nonteaching'=>array(
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

	'refund-policy'=>array(
		$base_url=>'Home',
		''=>'refund policy'
	),
	
	'privacy-policy'=>array(
		$base_url=>'Home',
		''=>'Privacy Policy'
	),
	'apply-now'=>array(
		$base_url=>'Home',
		''=>'APPLY NOW'
	),
	'comingsoon'=>array(
		$base_url=>'Home',
		''=>'coming-soon'
	),

	'infrastructure'=>array(
		$base_url=>'Home',
		''=>'Infrastructure'
	),

	'information'=>array(
		$base_url=>'Home',
		''=>'Information'
	),

	
	'new-fee-structure'=>array(
		$base_url=>'Home',
		''=>'Fee-Structure'
	),

	'readmission-fee-structure'=>array(
		$base_url=>'Home',
		''=>'Fee-Structure'
	),

		
	'admission'=>array(
		$base_url=>'Home',
		''=>'Admission-Details'
	),

	'syllabus'=>array(
		$base_url=>'Home',
		''=>'Syllabus'
	),

	'curriculum'=>array(
		$base_url=>'Home',
		''=>'Curriculam'
	),

	'management'=>array(
		$base_url=>'Home',
		''=>'Management'
	),

	'laboratory'=>array(
		$base_url=>'Home',
		''=>'Laboratory'
	),
	'digital-classroom'=>array(
		$base_url=>'Home',
		''=>'Digital-classroom'
	),
	'library'=>array(
		$base_url=>'Home',
		''=>'Library'
	),
	'game'=>array(
		$base_url=>'Home',
		''=>'Game'
	),

	'principle-desk'=>array(
		$base_url=>'Home',
		''=>'Principle Message'
	),




	


);

$page_headings = array(
    'about' => 'About Us',
	'infrastructure'=> 'Infrastructure',
	'information'=> 'Information',
	'faculty' => 'Teachers Details',
	'prospectus' => 'Prospectus',

	'nonteaching' => 'Non Teaching Staff',
	'calender' => 'Academic Calender',
	'gallery' => 'Our Gallery',
	'd.pharma'=>'Diploma in Pharmacy',
	'affiliation'=>'Affiliation',
	'contact'=>'Contact Us',
	'govt'=>'Governing body',
	'comingsoon'=>'coming-soon',
	'new-fee-structure'=>'New Admission Fee structure',
	'readmission-fee-structure'=>'Re Admission Fee structure',
	'admission'=>'Admission Details',
	'syllabus'=>'Syllabus',
	'curriculum'=>'Curriculam',
	'management'=>'Management',
	'laboratory'=>'Laboratory',
	'digital-classroom'=>'Digital Classroom',
	'library'=>'Library',
	'game'=>'Game',
	'principle-desk'=>'Principle-Message',
);

$header_menus = array(
    "Home" => $base_url,
    "About Us" => array(
        'History of school' => $base_url ."about",
        "Infrastructure" => "infrastructure",
        "Information" => "information",
       

    ),

	"Gallery" => $base_url ."gallery",
    "Admission" => array(
        "New Admission Fees Structure" => "new-fee-structure",
        "Re Admission Fees Structure" => "readmission-fee-structure",
        "Admission Details" => "admission"
    ),

	
	"Syllabus" => $base_url ."syllabus",
    "Academics" => array(
        "School House" => "comingsoon",
        "Curriculum" => "curriculum",
		"examiantion"=>"comingsoon",
		"Result"=>"comingsoon",
	
    ),
    "Administration" => array(
		"Principle Desk" => "principle-desk",
        "Management" => "management",
        "Faculty" => "comingsoon",
		"School Rules and Regulation" => "comingsoon",
	
		
    ),

	"Co Curriculam" => array(
        "House Events" => "comingsoon",
        "Celebrations" => "comingsoon",
		"School Activities" => "comingsoon",
		"Project Work" => "comingsoon",
		"Excursion" => "comingsoon",
    ),

	"Facilities" => array(
        "Laboratory" => "laboratory",
        "Digital Classrom" => "digital-classroom",
		"Library" => "library",
		"Special Education" => "comingsoon",
		"Game" => "game",
    ),



	"Workshop" => $base_url ."comingsoon",
    "Contact Us" => "contact"

   
);

$header_menu_special=array('text'=>'Mandatory Public Disclosure','url'=>$base_url.'classinfrastructure');

$pages_arr=[
	""=>"home",
	"about"=>"about",
	"infrastructure"=>"others",
	"information"=>"others",

	"new-fee-structure"=>"others",
	"readmission-fee-structure"=>"others",
	"admission"=>"others",
	"syllabus"=>"others",
	"curriculum"=>"others",


	"vission-mission"=>"about",
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
	"management"=>"others",
	"principle-desk"=>"others",
	"contact"=>"others",
	"privacy-policy"=>"others",
	"terms&condition"=>"others",
	"refund-policy"=>"others",
	"apply-now"=>"others",

	"wbush-affiliation"=>"about",

	"pbins"=>"course",
	"blog-details"=>"others",
	
	'comingsoon'=>"others",
	'mail'=>"others",
	'laboratory'=>"others",
	'digital-classroom'=>"others",
	'library'=>"others",
	'game'=>"others",


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

$schoolData = array(
    "about_title" => "About Our School",
    "school_name" => "Gyanjyoti Public School",
    "description_1" => "It is the mission of our educational institution to provide a nurturing environment for the students. We aim to transform the youngsters through sound academic education with a distinct worldview.",
    "description_2" => "We are committed to empower the students in overcoming current and future challenges as they develop personal growth, civic responsibility and social awareness.",
    "description_3" => "Our faculty and amenities would support the young minds as they develop into informed and productive individuals in the global community. We would provide transformative academic experience for our students focusing on intricate disciplinary knowledge, communication skills and leadership abilities."
);

// home choose us section

$about_title = "Why Choose";
$school_name = "US";
$description_1 = "We envision forging a positive and strong connection with our students. The students would gain confidence and become independent as they imbibe knowledge and critical skills through proper guidance and training. Our institution would provide the young minds with varied opportunities of growth and development as they ascend the ladder in academia.We have created a caring and trusting environment for our students so that they can feel nurtured.";

$description_3 = "We believe that individual development
occurs when the students feel respected and appreciated. Our institution thrives on a culture that is characterized by strengthening the potential of the students.
";


// home testimonial section

$testimonials = [
    [
        'name' => 'Antara Roy',
        'class' => 'class 2, green section',
        'image' => 'public/img/gps/testimonial2.webp',
        'description' => 'My daughter is studying in this school from Class I. All these years the teachers and other staff members are continuously guiding her to excellence in education.',
    ],
    [
        'name' => 'Diya paul',
        'class' => 'class 1, red
		 section',
        'image' => 'public/img/gps/testimonial1.webp',
        'description' => 'Our daughter has been attending this school since Class I. Throughout these years, the teachers and staff have consistently provided outstanding guidance and support, fostering her academic excellence and personal growth.',
    ],

	[
        'name' => 'Aishani kundu',
        'class' => 'class 1, green section',
        'image' => 'public/img/gps/testimonial3.webp',
        'description' => 'The teachers and staff have continually supported and guided her, fostering both her academic excellence and personal development. Their dedication has been invaluable to her growth.',
    ],
    // Add more testimonials as needed
];

// infrastructure


$dcuments_info=[
	'SCHOOL REGISTRATION CERTIFICATE'=>'public/docs/Society-Registration-Certificate.pdf',
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

// $infras_info['two']=[
// 	'public/img/class/img-08.jpeg'=>array(		
// 		'SCHOOL INSPECTION (COVERING THE INFRASTRUCTURE)'=>array(
// 			'type'=>'video',
// 			'text'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/LscU89wol0g?si=e4vK_7l5kDS5j_XA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
// 		)
// 	)
// ];


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

// home about section

// $about_content = array(
//     'title' => 'Notice Board',
//     'subtitle' => 'About Our College',
//     'description' => 'Ranagamati College of Pharmacy is dedicated to providing quality education in the field of pharmacy. Our mission is to produce highly skilled pharmacists who contribute to the healthcare sector. With state-of-the-art facilities and experienced faculty, we strive to foster innovation and excellence in pharmaceutical education.We are committed to continuous improvement, adapting to advancements in pharmaceutical science and technology to provide the best education possible. Join us at Ranagamati College of Pharmacy and embark on a journey towards a rewarding career in pharmacy.',
//     'button_text' => 'Read More',
// 	'button_link' => $base_url . '/about',
//     'image_src' => 'public/img/rmpharma/about_collage.webp',
//     'image_alt' => 'img'
// );


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
        'image' => 'public/img/gps/Banner.webp',
        'caption' => 'It is the mission of our educational institution to provide a nurturing environment for the students. We aim to transform the youngsters through sound academic education with a distinct worldview.',
   'caption2'=>'Education is the best key success in life',
        'title' => 'WELCOME TO',
		'title1' => 'GYANJYOTI PUBLIC SCHOOL',
  
    ],
    [
        'image' => 'public/img/gps/banner3.webp',
		'caption' => 'It is the mission of our educational institution to provide a nurturing environment for the students. We aim to transform the youngsters through sound academic education with a distinct worldview.',
		'caption2'=>'Education is the best key success in life',
        'title' => 'WELCOME TO',
		'title1' => 'GYANJYOTI PUBLIC SCHOOL',
  
    ],

	[
        'image' => 'public/img/gps/slider11.webp',
		'caption' => 'It is the mission of our educational institution to provide a nurturing environment for the students. We aim to transform the youngsters through sound academic education with a distinct worldview.',
		'caption2'=>'Education is the best key success in life',
        'title' => 'WELCOME TO',
		'title1' => 'GYANJYOTI PUBLIC SCHOOL',
  
    ],
  
];




$slides_mobile = [
    [
        'image' => 'public/img/gps/banner mobile 1.webp',
		'caption' => 'It is the mission of our educational institution to provide a nurturing environment for the students. We aim to transform the youngsters through sound academic education with a distinct worldview.',
		'caption2'=>'Education is the best key success in life',
			 'title' => 'WELCOME TO GYANJYOTI',
			 'title1' => 'PUBLIC SCHOOL',
  
    ],
    [
        'image' => 'public/img/gps/banner mobile 3.webp',
		'caption' => 'It is the mission of our educational institution to provide a nurturing environment for the students. We aim to transform the youngsters through sound academic education with a distinct worldview.',
		'caption2'=>'Education is the best key success in life',
			 'title' => 'WELCOME TO GYANJYOTI',
			 'title1' => 'PUBLIC SCHOOL',
  
    ],
    [
        'image' => 'public/img/gps/slider_mobile_1.webp',
		'caption' => 'It is the mission of our educational institution to provide a nurturing environment for the students. We aim to transform the youngsters through sound academic education with a distinct worldview.',
		'caption2'=>'Education is the best key success in life',
			 'title' => 'WELCOME TO GYANJYOTI',
			 'title1' => ' PUBLIC SCHOOL',
  
    ],


];

// syllabus
$syllabus_data = [
    ["file" => "SYLLABUS STD I.pdf", "label" => "Class 1"],
    ["file" => "SYLLABUS STD II.pdf", "label" => "Class 2"],
    ["file" => "SYLLABUS STD III.pdf", "label" => "Class 3"],
    ["file" => "SYLLABUS STD IV.pdf", "label" => "Class 4"],
    ["file" => "SYLLABUS STD V.pdf", "label" => "Class 5"],
    ["file" => "SYLLABUS STD VI.pdf", "label" => "Class 6"],
    ["file" => "SYLLABUS STD VII.pdf", "label" => "Class 7"],
    ["file" => "SYLLABUS STD VIII.pdf", "label" => "Class 8"],
    ["file" => "SYLLABUS STD IX.pdf", "label" => "Class 9"],
    ["file" => "SYLLABUS STD IX.pdf", "label" => "Class 10"],
    ["file" => "SYLLABUS XI BENGALI.pdf", "label" => "Class 11 Bengali"],
    ["file" => "SYLLABUS XI BIOLOGY.pdf", "label" => "Class 11 Biology"],
    ["file" => "SYLLABUS XI CHEMISTRY.pdf", "label" => "Class 11 Chemistry"],
    ["file" => "SYLLABUS XI COMPUTER SCIENCE.pdf", "label" => "Class 11 Computer Science"],
    ["file" => "SYLLABUS XI ECONOMICS.pdf", "label" => "Class 11 Economics"],
    ["file" => "SYLLABUS XI ENGLISH.pdf", "label" => "Class 11 English"],
    ["file" => "SYLLABUS XI GEOGRAPHY.pdf", "label" => "Class 11 Geography"],
    ["file" => "SYLLABUS XI HINDI.pdf", "label" => "Class 11 Hindi"],
    ["file" => "SYLLABUS XI MATHEMATICS.pdf", "label" => "Class 11 Mathematics"],
    ["file" => "SYLLABUS XI PHYSICAL EDUCATION.pdf", "label" => "Class 11 Physical Education"],
    ["file" => "SYLLABUS XI PHYSICS.pdf", "label" => "Class 11 Physics"],
    ["file" => "SYLLABUS XI POLITICAL SCIENCE.pdf", "label" => "Class 11 Political Science"],
    ["file" => "SYLLABUS XI PSYCHOLOGY.pdf", "label" => "Class 11 Psychology"],
    ["file" => "SYLLABUS XI PSYCHOLOGY.pdf", "label" => "Class 12"]
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






// gallery page
$image_urls = array(
    "public/img/class/img-04.webp",
    "public/img/class/img-10.webp",
    "public/img/class/img-16.webp",
    "public/img/class/img-18.webp",
    "public/img/class/img-19.webp",
    "public/img/class/img-20.webp",
    "public/img/class/img-15.webp",
    "public/img/class/img-02.webp",
    "public/img/gps/gal5.jpg",
	"public/img/gps/gal7.jpg",
	"public/img/gps/gal6.jpg",
	"public/img/gps/gal8.jpg",

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