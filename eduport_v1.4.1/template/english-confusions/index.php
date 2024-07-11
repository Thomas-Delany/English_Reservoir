<!-- English Confusions.php -->
<?php
$page_title = "English Confusions";
$page_heading = "English Confusions";
$image_url = "../assets/images/english-confusions.png"; // Set the image URL
$image_alt = "english confusions"; // Set the image alt text
$show_toc = true; // Set to true to show the Table of Contents

// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<p class="lead mb-4">This is some additional content that is specific to this child page. It might include introductory text, images, or other elements that don't fit into the structured sections.</p>
HTML;

// Table of Contents sections
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
];

// Define sections
$sections = [
    [
        'id' => 'section1',
        'title' => 'Some common English confusions',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet repudiandae aliquam maxime aperiam sint facere animi facilis quibusdam illo ad.',
        // YouTube clip 'youtube' => '<iframe></iframe>'
    ],
    [
        'id' => 'section2',
        'title' => 'Other causes for confusion',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
        'image' => true // Course image 
    ],
];

// Include the master template
include '../master-template.php';
?>