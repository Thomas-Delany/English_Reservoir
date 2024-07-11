<!-- English Grammar.php -->
<?php
$page_title = "English Grammar";
$page_heading = "English Grammar";
$image_url = "../assets/images/english-grammar.png"; // Set the image URL
$image_alt = "English Grammar"; // Set the image alt text
$show_toc = true; // Set to true to show the Table of Contents

// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<p class="lead mb-4">This is some additional content that is specific to this child page. It might include introductory text, images, or other elements that don't fit into the structured sections.</p>
HTML;

// Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => '#', 'title' => 'Internal Link'],
    ['url' => '#', 'title' => 'Internal Link'],
    ['url' => '#', 'title' => 'Internal Link'],
    // Anchor links
    ['url' => '#section1', 'title' => 'Example 1'],
    ['url' => '#section2', 'title' => 'Example 2'],
    ['url' => '#section3', 'title' => 'Example 3'],
    // External links
    ['url' => '#', 'title' => 'External Link']
];

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
        'image' => true
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
        'youtube' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/XwtznfOAwtU?si=QCnUDGQC61aev8mz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>'
    ],
];

// Include the master template
include '../master-template.php';
?>