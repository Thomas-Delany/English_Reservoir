<!-- Verbs in English.php -->
<?php
$page_title = "English Verbs";
$page_heading = "English Verbs";
$image_url = "../assets/images/english-verbs.png"; // Set the image URL
$image_alt = "english verbs"; // Set the image alt text
$show_toc = true; // Set to true to show the Table of Contents

// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<p class="lead mb-4">This is some additional content that is specific to this child page. It might include introductory text, images, or other elements that don't fit into the structured sections.</p>
HTML;

/* Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => BASE_URL . 'english-verbs/main-auxiliary-verbs', 'title' => 'Main Auxiliary Verbs'],
    ['url' => BASE_URL . 'english-verbs/modal-auxiliary-verbs', 'title' => 'Modal Auxiliary Verbs'],
    ['url' => BASE_URL . 'english-verbs/active-voice', 'title' => 'Active Voice'],
    ['url' => BASE_URL . 'english-verbs/passive-voice', 'title' => 'Passive Voice'],
    ['url' => BASE_URL . 'english-verbs/verbal-order', 'title' => 'English Verbal Order'],
    ['url' => BASE_URL . 'english-verbs/phrasal-verbs', 'title' => 'Phrasal Verbs'],
    ['url' => BASE_URL . 'english-verbs/copular-verbs', 'title' => 'Copular Verbs'],
    ['url' => BASE_URL . 'english-verbs/get', 'title' => 'Get'],
    ['url' => BASE_URL . 'english-verbs/got-and-gotten', 'title' => 'Got and Gotten + Get and Got'],
    ['url' => BASE_URL . 'english-verbs/ordinary-verbs', 'title' => 'Ordinary Verbs'],
    // Anchor links
    ['url' => '#section1', 'title' => 'The present simple in English with the verb see'],
    ['url' => '#section2', 'title' => 'Present simple in Spanish, with the same verb ver'],
    ['url' => '#section3', 'title' => 'Knowing how verbs work in English'],
    ['url' => '#section4', 'title' => 'Fewer inflections but lots of rules'],
    // External links ['url' => '#', 'title' => 'External Link']
]; */

// Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => '#', 'title' => 'Main Auxiliary Verbs'],
    ['url' => '#', 'title' => 'Modal Auxiliary Verbs'],
    ['url' => '#', 'title' => 'Active Voice'],
    ['url' => '#', 'title' => 'Passive Voice'],
    ['url' => '#', 'title' => 'English Verbal Order'],
    ['url' => '#', 'title' => 'Phrasal Verbs'],
    ['url' => '#', 'title' => 'Copular Verbs'],
    ['url' => '#', 'title' => 'Get'],
    ['url' => '#', 'title' => 'Got and Gotten + Get and Got'],
    ['url' => '#', 'title' => 'Ordinary Verbs'],
    // Anchor links
    ['url' => '#section1', 'title' => 'The present simple in English with the verb see'],
    ['url' => '#section2', 'title' => 'Present simple in Spanish, with the same verb ver'],
    ['url' => '#section3', 'title' => 'Knowing how verbs work in English'],
    ['url' => '#section4', 'title' => 'Fewer inflections but lots of rules'],
    // External links ['url' => '#', 'title' => 'External Link']
];

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

// Include the master template
include '../master-template.php';
?>