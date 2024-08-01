<!-- English Confusions.php -->
<?php
$page_title = "English Confusions";
$page_heading = "English Confusions";
$image_url = BASE_URL . "assets/images/english-confusions.png"; // Set the image URL
$image_alt = "english confusions"; // Set the image alt text
$show_toc = true; // Set to true to show the Table of Contents

// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<p class="lead mb-4">This is some additional content that is specific to this child page. It might include introductory text, images, or other elements that don't fit into the structured sections.</p>
HTML;


// Table of Contents sections 
$toc_sections = [
    // Internal links
    ['url' => BASE_URL . 'english-confusions/been-and-gone.php', 'title' => 'Been and Gone'],
    ['url' => BASE_URL . 'english-confusions/among-and-amongst.php', 'title' => 'Among and Amongst'],
    ['url' => BASE_URL . 'english-confusions/bath-bathe.php', 'title' => 'Bath and Bathe'],
    ['url' => BASE_URL . 'english-confusions/already-all-ready.php', 'title' => 'Already and All ready'],
    ['url' => BASE_URL . 'english-confusions/into-in-to.php', 'title' => 'Into and In to'],
    ['url' => BASE_URL . 'english-confusions/although-though.php', 'title' => 'Although and Though'],
    ['url' => BASE_URL . 'english-confusions/on-upon.php', 'title' => 'On and Upon'],
    ['url' => BASE_URL . 'english-confusions/some-any.php', 'title' => 'Some and Any'],
    ['url' => BASE_URL . 'english-confusions/born-borne.php', 'title' => 'Born and Borne'],
    ['url' => BASE_URL . 'english-confusions/between-among.php', 'title' => 'Between and Among'],
    ['url' => BASE_URL . 'english-confusions/bring-take.php', 'title' => 'Bring and Take'],
    ['url' => BASE_URL . 'english-confusions/bring-up-educate.php', 'title' => 'Bring up and Educate'],
    ['url' => BASE_URL . 'english-confusions/so-such.php', 'title' => 'So and Such'],
    ['url' => BASE_URL . 'english-confusions/still-yet-already.php', 'title' => 'Still, Yet, and Already'],
    ['url' => BASE_URL . 'english-confusions/there-is-there-are.php', 'title' => 'There is and There are'],
    ['url' => BASE_URL . 'english-confusions/rather-quite-fairly-little.php', 'title' => 'Rather, Quite, Fairly, and Little'],
    ['url' => BASE_URL . 'english-confusions/to-for.php', 'title' => 'To and For'],
    ['url' => BASE_URL . 'english-confusions/do-make.php', 'title' => 'Do and Make'],
    // Anchor links
    ['url' => '#section1', 'title' => 'Some common English confusions'],
    ['url' => '#section2', 'title' => 'Other causes for confusion'],
    // External links ['url' => '#', 'title' => 'External Link']
]; 

/* Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => '#', 'title' => 'Been and Gone'],
    ['url' => '#', 'title' => 'Among and Amongst'],
    ['url' => '#', 'title' => 'Bath and Bathe'],
    ['url' => '#', 'title' => 'Already and All ready'],
    ['url' => '#', 'title' => 'Into and In to'],
    ['url' => '#', 'title' => 'Although and Though'],
    ['url' => '#', 'title' => 'On and Upon'],
    ['url' => '#', 'title' => 'Some and Any'],
    ['url' => '#', 'title' => 'Born and Borne'],
    ['url' => '#', 'title' => 'Between and Among'],
    ['url' => '#', 'title' => 'Bring and Take'],
    ['url' => '#', 'title' => 'Bring up and Educate'],
    ['url' => '#', 'title' => 'So and Such'],
    ['url' => '#', 'title' => 'Still, Yet, and Already'],
    ['url' => '#', 'title' => 'There is and There are'],
    ['url' => '#', 'title' => 'Rather, Quite, Fairly, and Little'],
    ['url' => '#', 'title' => 'To and For'],
    ['url' => '#', 'title' => 'Do and Make'],
    // Anchor links
    ['url' => '#section1', 'title' => 'Some common English confusions'],
    ['url' => '#section2', 'title' => 'Other causes for confusion'],
    // External links ['url' => '#', 'title' => 'External Link']
]; */

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
