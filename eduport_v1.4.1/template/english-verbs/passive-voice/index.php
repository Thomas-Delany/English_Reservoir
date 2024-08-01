<!-- Passive Voice.php -->
<?php
$page_title = "Passive Voice";
$page_heading = "Passive Voice";
$image_url = "../../assets/images/passive-voice.png"; // Set the image URL
$image_alt = "passive voice"; // Set the image alt text
$show_toc = true; // Set to true to show the Table of Contents

// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<p class="lead mb-4">This is some additional content that is specific to this child page. It might include introductory text, images, or other elements that don't fit into the structured sections.</p>
HTML;

// Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => BASE_URL . 'english-verbs/passive-voice/present-simple-passive.php', 'title' => 'Present Simple - Passive'],
    ['url' => BASE_URL . 'english-verbs/passive-voice/present-continuous-passive.php', 'title' => 'Present Continuous - Passive'],
    ['url' => BASE_URL . 'english-verbs/passive-voice/present-perfect-continuous-passive.php', 'title' => 'Present Perfect Continuous - Passive'],
    ['url' => BASE_URL . 'english-verbs/passive-voice/present-perfect-passive.php', 'title' => 'Present Perfect - Passive'],
    ['url' => BASE_URL . 'english-verbs/passive-voice/past-continuous-passive.php', 'title' => 'Past Continuous - Passive'],
    ['url' => BASE_URL . 'english-verbs/passive-voice/past-perfect-continuous-passive.php', 'title' => 'Past Perfect Continuous - Passive'],
    ['url' => BASE_URL . 'english-verbs/passive-voice/past-simple-passive.php', 'title' => 'Past Simple - Passive'],
    ['url' => BASE_URL . 'english-verbs/passive-voice/past-perfect-passive.php', 'title' => 'Past Perfect - Passive'],
    ['url' => BASE_URL . 'english-verbs/passive-voice/future-simple-passive.php', 'title' => 'Future Simple - Passive'],
    ['url' => BASE_URL . 'english-verbs/passive-voice/future-continuous-passive.php', 'title' => 'Future Continuous - Passive'],
    ['url' => BASE_URL . 'english-verbs/passive-voice/future-perfect-passive.php', 'title' => 'Future Perfect - Passive'],
    ['url' => BASE_URL . 'english-verbs/passive-voice/future-perfect-continuous-passive.php', 'title' => 'Future Perfect Continuous - Passive'],
    // Anchor links
    ['url' => '#section1', 'title' => 'Why is the passive voice used?'],
    ['url' => '#section2', 'title' => 'Indicating the agent in the passive'],
    // External links ['url' => '#', 'title' => 'External Link']
]; 

/* Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => '#', 'title' => 'Present Simple - Passive'],
    ['url' => '#', 'title' => 'Present Continuous - Passive'],
    ['url' => '#', 'title' => 'Present Perfect Continuous - Passive'],
    ['url' => '#', 'title' => 'Present Perfect - Passive'],
    ['url' => '#', 'title' => 'Past Continuous - Passive'],
    ['url' => '#', 'title' => 'Past Perfect Continuous - Passive'],
    ['url' => '#', 'title' => 'Past Simple - Passive'],
    ['url' => '#', 'title' => 'Past Perfect - Passive'],
    ['url' => '#', 'title' => 'Future Simple - Passive'],
    ['url' => '#', 'title' => 'Future Continuous - Passive'],
    ['url' => '#', 'title' => 'Future Perfect - Passive'],
    ['url' => '#', 'title' => 'Future Perfect Continuous - Passive'],
    // Anchor links
    ['url' => '#section1', 'title' => 'Why is the passive voice used?'],
    ['url' => '#section2', 'title' => 'Indicating the agent in the passive'],
    // External links ['url' => '#', 'title' => 'External Link']
];*/

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
include '../../master-template.php';
?>
