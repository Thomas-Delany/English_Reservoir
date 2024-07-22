<!-- Conjunctions.php -->
<?php
$page_title = "Conjunctions";
$page_heading = "Conjunctions";
$image_url = "../assets/images/conjunctions.png"; // Set the image URL
$image_alt = "conjunctions"; // Set the image alt text
$show_toc = true; // Set to true to show the Table of Contents

// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<p class="lead mb-4">This is some additional content that is specific to this child page. It might include introductory text, images, or other elements that don't fit into the structured sections.</p>
HTML;

/* Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => BASE_URL . 'x', 'title' => 'x'],
    ['url' => BASE_URL . 'x', 'title' => 'x'],
    ['url' => BASE_URL . 'x', 'title' => 'x'],
    ['url' => BASE_URL . 'x', 'title' => 'x'],
    ['url' => BASE_URL . 'x', 'title' => 'x'],
    ['url' => BASE_URL . 'x', 'title' => 'x'],
    ['url' => BASE_URL . 'x', 'title' => 'x'],
     // Anchor links
     ['url' => '#section1', 'title' => 'Anchor link'],
     ['url' => '#section2', 'title' => 'Anchor link'],
     ['url' => '#section3', 'title' => 'Anchor link'],
     ['url' => '#section4', 'title' => 'Anchor link'],
     ['url' => '#section5', 'title' => 'Anchor link']
     // External links
     // ['url' => '#', 'title' => '']
]; */

// Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => '#', 'title' => 'Coordinating Conjunctions'],
    ['url' => '#', 'title' => 'Subordinating Conjunctions'],
    ['url' => '#', 'title' => 'Correlative Conjunctions'],
    // Anchor links
    ['url' => '#section1', 'title' => 'Why do we need conjunctions in English?'],
    ['url' => '#section2', 'title' => 'The most common conjunctions in English'],
    ['url' => '#section3', 'title' => 'Examples of conjunctions connecting phrases'],
    ['url' => '#section4', 'title' => 'Sentences can start with conjunctions'],
    // External links ['url' => '#', 'title' => 'External Link']
];

// Define sections
$sections = [
    [
        'id' => 'section1',
        'title' => 'Why do we need conjunctions in English?',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet repudiandae aliquam maxime aperiam sint facere animi facilis quibusdam illo ad.'
    ],
    [
        'id' => 'section2',
        'title' => 'The most common conjunctions in English',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
        'image' => true // Course image 
    ],
    [
        'id' => 'section3',
        'title' => 'Examples of conjunctions connecting phrases',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?'
    ],
    [
        'id' => 'section4',
        'title' => 'Sentences can start with conjunctions',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?',
        // YouTube clip 'youtube' => '<iframe></iframe>'
    ],
];

// Include the master template
include '../master-template.php';
?>