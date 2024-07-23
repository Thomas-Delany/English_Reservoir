<!-- Modal Auxiliary Verbs.php -->
<?php
$page_title = "Modal Auxiliary Verbs";
$page_heading = "Modal Auxiliary Verbs";
$image_url = "../../assets/images/modal-auxiliary-verbs.png"; // Set the image URL
$image_alt = "modal auxiliary verbs"; // Set the image alt text
$show_toc = true; // Set to true to show the Table of Contents

// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<p class="lead mb-4">This is some additional content that is specific to this child page. It might include introductory text, images, or other elements that don't fit into the structured sections.</p>
HTML;

/* Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => BASE_URL . 'x', 'title' => 'x'],
    ['url' => BASE_URL . 'english-verbs/modal-auxiliary-verbs/', 'title' => 'Can and Could'],
    ['url' => BASE_URL . 'english-verbs/modal-auxiliary-verbs/may-and-might', 'title' => 'May and Might'],
    ['url' => BASE_URL . 'english-verbs/modal-auxiliary-verbs/will-and-shall', 'title' => 'Will and Shall'],
    ['url' => BASE_URL . 'english-verbs/modal-auxiliary-verbs/ought-to-and-should', 'title' => 'Ought to and Should'],
    ['url' => BASE_URL . 'english-verbs/modal-auxiliary-verbs/must', 'title' => 'Must'],
    ['url' => BASE_URL . 'english-verbs/modal-auxiliary-verbs/would', 'title' => 'Would'],
    ['url' => BASE_URL . 'english-verbs/modal-auxiliary-verbs/need-to', 'title' => 'Need to'],
    ['url' => BASE_URL . 'english-verbs/modal-auxiliary-verbs/dare-to', 'title' => 'Dare to'],
    // Anchor links
    ['url' => '#section1', 'title' => 'Why are modal auxiliaries used?'],
    ['url' => '#section2', 'title' => 'Modal auxiliaries are followed by the bare infinitive'],
    ['url' => '#section3', 'title' => 'No inflections with modal auxiliary verbs'],
    ['url' => '#section4', 'title' => 'Modal auxiliaries are followed by normal verbs'],
    // External links ['url' => '#', 'title' => 'External Link']
]; */

// Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => '#', 'title' => 'Can and Could'],
    ['url' => '#', 'title' => 'May and Might'],
    ['url' => '#', 'title' => 'Will and Shall'],
    ['url' => '#', 'title' => 'Ought to and Should'],
    ['url' => '#', 'title' => 'Must'],
    ['url' => '#', 'title' => 'Would'],
    ['url' => '#', 'title' => 'Need to'],
    ['url' => '#', 'title' => 'Dare to'],
    // Anchor links
    ['url' => '#section1', 'title' => 'Why are modal auxiliaries used?'],
    ['url' => '#section2', 'title' => 'Modal auxiliaries are followed by the bare infinitive'],
    ['url' => '#section3', 'title' => 'No inflections with modal auxiliary verbs'],
    ['url' => '#section4', 'title' => 'Modal auxiliaries are followed by normal verbs'],
    // External links ['url' => '#', 'title' => 'External Link']
];

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
include '../../master-template.php';
?>