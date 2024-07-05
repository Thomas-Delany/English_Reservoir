<!-- Adverbs of Frecuency.php -->
<?php
$page_title = "Adverbs of Frecuency";
$page_heading = "Adverbs of Frecuency";
// Set the image URL if it exists - $image_url = "../link to image url"; 
// Set the image alt text if it exists - $image_alt = "image alt"; 
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
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
        // 'image' => true
    ],
    [
        'id' => 'section3',
        'title' => 'Section 3',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?'
    ],
    [
        'id' => 'section4',
        'title' => 'Section 4',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?',
        // 'youtube' => '<iframe></iframe>'
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