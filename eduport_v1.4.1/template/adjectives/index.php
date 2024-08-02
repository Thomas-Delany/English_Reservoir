<!-- Adjectives in English.php -->
<?php
$page_title = "Adjectives in English"; 
$page_heading = "Adjectives in English";
$image_url = BASE_URL . "assets/images/adjectives.png"; // Set the image URL
$image_alt = "adjectives"; // Set the image alt text
$show_toc = true; // Set to true to show the Table of Contents

// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<p class="lead mb-4">This is some additional content that is specific to this child page. It might include introductory text, images, or other elements that don't fit into the structured sections.</p>
HTML;

// Define the $toc_sections array
$toc_sections = [
    ['url' => BASE_URL . 'adjectives/demonstrative-adjectives.php', 'title' => 'Demonstrative Adjectives'],
    ['url' => BASE_URL . 'adjectives/interrogative-adjectives.php', 'title' => 'Interrogative Adjectives'],
    ['url' => BASE_URL . 'adjectives/possessive-adjectives.php', 'title' => 'Possessive Adjectives'],
    ['url' => BASE_URL . 'adjectives/distributive-adjectives.php', 'title' => 'Distributive Adjectives'],
    ['url' => BASE_URL . 'adjectives/quantitative-adjectives.php', 'title' => 'Quantitative Adjectives'],
    ['url' => BASE_URL . 'adjectives/qualifying-adjectives.php', 'title' => 'Qualifying Adjectives'],
    ['url' => BASE_URL . 'adjectives/adjective-suffixes-ed-ing.php', 'title' => 'The Adjective Suffix -ed/-ing'],
    // Anchor links
    ['url' => '#section1', 'title' => 'Why do we need adjectives?'],
    ['url' => '#section2', 'title' => 'Adjectives in English with equalizers, comparatives, and superlatives'],
    ['url' => '#section3', 'title' => 'Difference between -ed and -ing adjectives in English?'],
    ['url' => '#section4', 'title' => 'Adjectives ending in -ed suffix'],
    ['url' => '#section5', 'title' => 'Adjectives ending in -ing suffix']
    // External links
    // ['url' => '#', 'title' => '']
];

/*Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => '#', 'title' => 'Demonstrative Adjectives'],
    ['url' => '#', 'title' => 'Interrogative Adjectives'],
    ['url' => '#', 'title' => 'Possessive Adjectives'],
    ['url' => '#', 'title' => 'Distributive Adjectives'],
    ['url' => '#', 'title' => 'Quantitative Adjectives'],
    ['url' => '#', 'title' => 'Qualifying Adjectives'],
    ['url' => '#', 'title' => 'The Adjective Suffix -ed/-ing'],
    // Anchor links
    ['url' => '#section1', 'title' => 'Why do we need adjectives?'],
    ['url' => '#section2', 'title' => 'Adjectives in English with equalizers, comparatives, and superlatives'],
    ['url' => '#section3', 'title' => 'Difference between -ed and -ing adjectives in English?'],
    ['url' => '#section4', 'title' => 'Adjectives ending in -ed suffix'],
    ['url' => '#section5', 'title' => 'Adjectives ending in -ing suffix'],
    // External links
    // ['url' => '#', 'title' => '']
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
include __DIR__ . '/../master-template.php';
?>
