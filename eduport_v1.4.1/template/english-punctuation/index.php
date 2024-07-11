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
        'title' => 'Why is punctuation so important?',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet repudiandae aliquam maxime aperiam sint facere animi facilis quibusdam illo ad.'
    ],
    [
        'id' => 'section2',
        'title' => 'Mistakes to avoid in English punctuation',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
        'image' => true // Course image 
    ],
    [
        'id' => 'section3',
        'title' => 'Let us analyse the punctuation mistakes above',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?'
    ],
    [
        'id' => 'section4',
        'title' => 'How to improve your punctuation',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?',
        // YouTube clip 'youtube' => '<iframe></iframe>'
    ],
];

// Include the master template
include '../master-template.php';
?>