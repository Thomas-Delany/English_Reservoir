<!-- Main Auxiliary Verbs.php -->
<?php
$page_title = "Main Auxiliary Verbs";
$page_heading = "Main Auxiliary Verbs";
$image_url = BASE_URL . "assets/images/main-auxiliary-verbs.png"; // Set the image URL
$image_alt = "main auxiliary verbs"; // Set the image alt text
$show_toc = true; // Set to true to show the Table of Contents

// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<p class="lead mb-4">This is some additional content that is specific to this child page. It might include introductory text, images, or other elements that don't fit into the structured sections.</p>
HTML;

// Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => BASE_URL . 'english-verbs/main-auxiliary-verbs/to-be.php', 'title' => 'To be'],
    ['url' => BASE_URL . 'english-verbs/main-auxiliary-verbs/to-have.php', 'title' => 'To have'],
    ['url' => BASE_URL . 'english-verbs/main-auxiliary-verbs/to-do.php', 'title' => 'To do'],
    // Anchor links
    ['url' => '#section1', 'title' => 'Why do we use auxiliary verbs?'],
    ['url' => '#section2', 'title' => 'The main auxiliary verbs'],
    ['url' => '#section3', 'title' => 'English is an analytic language'],
    ['url' => '#section4', 'title' => 'Learning how main auxiliaries work'],
    ['url' => '#section5', 'title' => 'To ask a question, emphasize, negate or use ellipsis - to do'],
    ['url' => '#section6', 'title' => 'To form all perfect forms, express obligation, and possession - to have'],
    ['url' => '#section7', 'title' => 'To form all passive forms, use continuous forms, and copulative structures - to be'],
    // External links ['url' => '#', 'title' => 'External Link']
]; 

/* Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => '#', 'title' => 'To be'],
    ['url' => '#', 'title' => 'To have'],
    ['url' => '#', 'title' => 'To do'],
    // Anchor links
    ['url' => '#section1', 'title' => 'Why do we use auxiliary verbs?'],
    ['url' => '#section2', 'title' => 'The main auxiliary verbs'],
    ['url' => '#section3', 'title' => 'English is an analytic language'],
    ['url' => '#section4', 'title' => 'Learning how main auxiliaries work'],
    ['url' => '#section5', 'title' => 'To ask a question, emphasize, negate or use ellipsis - to do'],
    ['url' => '#section6', 'title' => 'To form all perfect forms, express obligation, and possession - to have'],
    ['url' => '#section7', 'title' => 'To form all passive forms, use continuous forms, and copulative structures - to be'],
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
