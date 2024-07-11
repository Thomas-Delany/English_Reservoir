<!-- Prepositions.php -->
<?php
$page_title = "Prepositions";
$page_heading = "Prepositions";
$image_url = "../assets/images/prepositions.png"; // Set the image URL
$image_alt = "prepositions"; // Set the image alt text
$show_toc = true; // Set to true to show the Table of Contents

// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<p class="lead mb-4">This is some additional content that is specific to this child page. It might include introductory text, images, or other elements that don't fit into the structured sections.</p>
HTML;

// Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => '#', 'title' => 'Simple Prepositions'],
    ['url' => '#', 'title' => 'Compound Prepositions'],
    ['url' => '#', 'title' => 'Double Prepositions'],
    ['url' => '#', 'title' => 'Participial Prepositions'],
    ['url' => '#', 'title' => 'Phrasal Prepositions'],
    // Anchor links
    ['url' => '#section1', 'title' => 'Which preposition do I need to use'],
    ['url' => '#section2', 'title' => 'The most common prepositions in English'],
    ['url' => '#section3', 'title' => 'The differences between “to” and “for”?'],
    // External links ['url' => '#', 'title' => 'External Link']
];

// Define sections
$sections = [
    [
        'id' => 'section1',
        'title' => 'Which preposition do I need to use?',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet repudiandae aliquam maxime aperiam sint facere animi facilis quibusdam illo ad.'
    ],
    [
        'id' => 'section2',
        'title' => 'The most common prepositions in English',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
       'image' => true  // Course image 
    ],
    [
        'id' => 'section3',
        'title' => 'The differences between “to” and “for”?',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?',
        // YouTube clip 'youtube' => '<iframe></iframe>'

    ],
];

// Include the master template
include '../master-template.php';
?>