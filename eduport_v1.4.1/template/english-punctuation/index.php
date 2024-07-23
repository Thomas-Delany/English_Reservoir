<!-- English Punctuation.php -->
<?php
$page_title = "English Punctuation";
$page_heading = "English Punctuation";
$image_url = "../assets/images/english-punctuation.png"; // Set the image URL
$image_alt = "english punctuation"; // Set the image alt text
$show_toc = true; // Set to true to show the Table of Contents

// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<p class="lead mb-4">This is some additional content that is specific to this child page. It might include introductory text, images, or other elements that don't fit into the structured sections.</p>
HTML;

/* Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => BASE_URL . 'english-punctuation/apostrophes', 'title' => 'Apostrophes'],
    ['url' => BASE_URL . 'english-punctuation/colons', 'title' => 'Colons'],
    ['url' => BASE_URL . 'english-punctuation/semi-colons', 'title' => 'Semi-colons'],
    ['url' => BASE_URL . 'english-punctuation/commas', 'title' => 'Commas'],
    ['url' => BASE_URL . 'english-punctuation/dashes', 'title' => 'Dashes/Hyphens'],
    ['url' => BASE_URL . 'english-punctuation/full-stops', 'title' => 'Full Stops'],
    ['url' => BASE_URL . 'english-punctuation/question-marks', 'title' => 'Question Marks'],
    ['url' => BASE_URL . 'english-punctuation/exclamation-marks', 'title' => 'Exclamation Marks'],
    ['url' => BASE_URL . 'english-punctuation/quotation-marks', 'title' => 'Quotation Marks'],
     // Anchor links
    ['url' => '#section1', 'title' => 'Why is punctuation so important?'],
    ['url' => '#section2', 'title' => 'Mistakes to avoid in English punctuation'],
    ['url' => '#section3', 'title' => 'Let us analyse the punctuation mistakes above'],
    ['url' => '#section4', 'title' => 'How to improve your punctuation'],
    // External links ['url' => '#', 'title' => 'External Link']
]; */

// Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => '#', 'title' => 'Apostrophes'],
    ['url' => '#', 'title' => 'Colons'],
    ['url' => '#', 'title' => 'Semi-colons'],
    ['url' => '#', 'title' => 'Commas'],
    ['url' => '#', 'title' => 'Dashes/Hyphens'],
    ['url' => '#', 'title' => 'Full Stops'],
    ['url' => '#', 'title' => 'Question Marks'],
    ['url' => '#', 'title' => 'Exclamation Marks'],
    ['url' => '#', 'title' => 'Quotation Marks'],
    // Anchor links
    ['url' => '#section1', 'title' => 'Why is punctuation so important?'],
    ['url' => '#section2', 'title' => 'Mistakes to avoid in English punctuation'],
    ['url' => '#section3', 'title' => 'Let us analyse the punctuation mistakes above'],
    ['url' => '#section4', 'title' => 'How to improve your punctuation'],
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
include '../master-template.php';
?>
