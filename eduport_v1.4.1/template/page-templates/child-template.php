<!-- Child Page Template.php -->
<?php
$page_title = "Child Page Template";
$page_heading = "Child Page Template";
// Set the image URL if it exists - $image_url = "../link to image url"; 
// Set the image alt text if it exists - $image_alt = "image alt";
$show_toc = false; // Set to true to show a Table of Contents

// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<p>This is some additional content that is specific to this child page. It might include introductory text, images, or other elements that don't fit into the structured sections.</p>
HTML;

// Define sections
$sections = [
    [
        'id' => 'section1',
        'title' => 'Section 1',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet repudiandae aliquam maxime aperiam sint facere animi facilis quibusdam illo ad.'
    ],
    [
        'id' => 'section2',
        'title' => 'Section 2',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!'
    ],
    [
        'id' => 'section3',
        'title' => 'Section 3',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?',
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
        'id' => 'section4',
        'title' => 'Section 4',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?',
        // YouTube clip 'youtube' => '<iframe></iframe>'
    ],
];
// Define the "see also" links
$see_also_links = [
    ['url' => 'page1.php', 'title' => 'Page 1'],
    ['url' => 'page2.php', 'title' => 'Page 2'],
    ['url' => 'page3.php', 'title' => 'Page 3'],
    ['url' => 'page4.php', 'title' => 'Page 4'],
    ['url' => 'page5.php', 'title' => 'Page 5']
];
// Include the master template
include '../master-template.php';
?>