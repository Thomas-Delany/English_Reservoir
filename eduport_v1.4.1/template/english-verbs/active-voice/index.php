<!-- Active Voice.php -->
<?php
$page_title = "Active Voice";
$page_heading = "Active Voice";
$image_url = BASE_URL . "assets/images/active-voice.png"; // Set the image URL
$image_alt = "active voice"; // Set the image alt text
$show_toc = true; // Set to true to show the Table of Contents

// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<p class="lead mb-4">This is some additional content that is specific to this child page. It might include introductory text, images, or other elements that don't fit into the structured sections.</p>
HTML;

// Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => BASE_URL . 'english-verbs/active-voice/present-simple.php', 'title' => 'Present Simple'],
    ['url' => BASE_URL . 'english-verbs/active-voice/present-continuous.php', 'title' => 'Present Continuous'],
    ['url' => BASE_URL . 'english-verbs/active-voice/present-perfect-continuous.php', 'title' => 'Present Perfect Continuous'],
    ['url' => BASE_URL . 'english-verbs/active-voice/present-perfect.php', 'title' => 'Present Perfect'],
    ['url' => BASE_URL . 'english-verbs/active-voice/past-continuous.php', 'title' => 'Past Continuous'],
    ['url' => BASE_URL . 'english-verbs/active-voice/past-perfect-continuous.php', 'title' => 'Past Perfect Continuous'],
    ['url' => BASE_URL . 'english-verbs/active-voice/past-simple.php', 'title' => 'Past Simple'],
    ['url' => BASE_URL . 'english-verbs/active-voice/past-perfect.php', 'title' => 'Past Perfect'],
    ['url' => BASE_URL . 'english-verbs/active-voice/future-simple.php', 'title' => 'Future Simple'],
    ['url' => BASE_URL . 'english-verbs/active-voice/future-continuous.php', 'title' => 'Future Continuous'],
    ['url' => BASE_URL . 'english-verbs/active-voice/future-perfect.php', 'title' => 'Future Perfect'],
    ['url' => BASE_URL . 'english-verbs/active-voice/future-perfect-continuous.php', 'title' => 'Future Perfect Continuous'],
    // Anchor links
    ['url' => '#section1', 'title' => 'What is the active voice?'],
    ['url' => '#section2', 'title' => 'In the passive, the above sentence would be as follows'],
    ['url' => '#section3', 'title' => 'Can I always use active verb forms'],
    ['url' => '#section4', 'title' => 'How do I learn active verb forms?'],
    // External links ['url' => '#', 'title' => 'External Link']
]; 

/* Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => '#', 'title' => 'Present Simple'],
    ['url' => '#', 'title' => 'Present Continuous'],
    ['url' => '#', 'title' => 'Present Perfect Continuous'],
    ['url' => '#', 'title' => 'Present Perfect'],
    ['url' => '#', 'title' => 'Past Continuous'],
    ['url' => '#', 'title' => 'Past Perfect Continuous'],
    ['url' => '#', 'title' => 'Past Simple'],
    ['url' => '#', 'title' => 'Past Perfect'],
    ['url' => '#', 'title' => 'Future Simple'],
    ['url' => '#', 'title' => 'Future Continuous'],
    ['url' => '#', 'title' => 'Future Perfect'],
    ['url' => '#', 'title' => 'Future Perfect Continuous'],
    // Anchor links
    ['url' => '#section1', 'title' => 'What is the active voice?'],
    ['url' => '#section2', 'title' => 'In the passive, the above sentence would be as follows'],
    ['url' => '#section3', 'title' => 'Can I always use active verb forms'],
    ['url' => '#section4', 'title' => 'How do I learn active verb forms?'],
    // External links ['url' => '#', 'title' => 'External Link']
];*/

// Define sections
$sections = [
    [
        'id' => 'section1',
        'title' => 'Section 1',
        'content' => [
            'Lorem ipsum dolor amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
            // Add more paragraphs as needed
        ],
        // Add a table if needed
        /*'table' => [
            'headers' => ['Column 1', 'Column 2'],
            'rows' => [
                ['Lorem ipsum dolor amet', 'Lorem ipsum dolor amet'],
                ['Lorem ipsum dolor amet', 'Lorem ipsum dolor amet'],
                ['Lorem ipsum dolor amet', 'Lorem ipsum dolor amet'],
            ]
        ],*/ 
    ],
    [
        'id' => 'section2',
        'title' => 'Section 2',
        'content' => [
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
            // Add more paragraphs as needed
        ],
          // Course images
          'cursos-de-ingles' => true, 
          'b2-cambridge-first' => false, 
          'c1-cambridge-advanced' => false, 
          'c2-cambridge-proficiency' => false, 
          'gramatica-esencial' => false, 
          'verbos-en-ingles' => false,
          'pronunciacion-en-ingles' => false,
    ],
    [
        'id' => 'section3',
        'title' => 'Section 3',
        'content' => [
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
            // Add more paragraphs as needed
        ],
        // YouTube clip 'youtube' => '<iframe></iframe>'
    ],
    [
        'id' => 'section4',
        'title' => 'Section 4',
        'content' => [
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
            // Add more paragraphs as needed
        ],
        // Add bullets if needed
        /*'bullets' => [
            [
                'First bullet point set',
                'Second bullet point set',
            ],
            [
                'First bullet point of second set',
                'Second bullet point of second set',
            ]
        ],*/
    ],
    [
        'id' => 'section5',
        'title' => 'Section 5',
        'content' => [
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
            // Add more paragraphs as needed
        ],
    ],
];

/*
$see_also_links = [
    ['url' => BASE_URL . 'page1.php', 'title' => 'Page 1'],
    ['url' => BASE_URL . 'page2.php', 'title' => 'Page 2'],
    ['url' => BASE_URL . 'page3.php', 'title' => 'Page 3'],
    ['url' => BASE_URL . 'page4.php', 'title' => 'Page 4'],
    ['url' => BASE_URL . 'page5.php', 'title' => 'Page 5']
];
*/

// Include the master template
include __DIR__ . '/../../master-template.php';
?>
