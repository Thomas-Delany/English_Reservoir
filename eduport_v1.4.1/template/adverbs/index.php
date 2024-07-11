<!-- Adverbs in English.php -->
<?php
$page_title = "Adverbs in English";
$page_heading = "Adverbs in English";
$image_url = "../assets/images/adverbs.png"; // Set the image URL
$image_alt = "adverbs"; // Set the image alt text
$show_toc = true; // Set to true to show the Table of Contents

// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<p class="lead mb-4">This is some additional content that is specific to this child page. It might include introductory text, images, or other elements that don't fit into the structured sections.</p>
HTML;

// Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => '#', 'title' => 'Adverbs of Frequency'],
    ['url' => '#', 'title' => 'Adverbs of Place'],
    ['url' => '#', 'title' => 'Adverbs of Time'],
    ['url' => '#', 'title' => 'Adverbs of Manner'],
    ['url' => '#', 'title' => 'Adverbs of Degree'],
    ['url' => '#', 'title' => 'Sentence Adverbs'],
    ['url' => '#', 'title' => 'Relative Adverbs'],
    ['url' => '#', 'title' => 'Interrgative Adverbs'],
    // Anchor links
    ['url' => '#section1', 'title' => 'How do we use adverbs in English?'],
    ['url' => '#section2', 'title' => 'How are adverbs made?'],
    // External links ['url' => '#', 'title' => 'External Link']
];

// Define sections
$sections = [
    [
        'id' => 'section1',
        'title' => 'How do we use adverbs in English?',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet repudiandae aliquam maxime aperiam sint facere animi facilis quibusdam illo ad.',
          // YouTube clip 'youtube' => '<iframe></iframe>'
    ],
    [
        'id' => 'section2',
        'title' => 'How are adverbs made?',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
        'image' => true // Course image 
    ],
];

// Include the master template
include '../master-template.php';
?>