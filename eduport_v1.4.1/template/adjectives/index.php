<!-- Adjectives in English.php -->
<?php
$page_title = "Adjectives in English"; 
$page_heading = "Adjectives in English";
$image_url = "../assets/images/adjectives.png"; // Set the image URL
$image_alt = "adjectives"; // Set the image alt text
$show_toc = true; // Set to true to show the Table of Contents

// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<p class="lead mb-4">This is some additional content that is specific to this child page. It might include introductory text, images, or other elements that don't fit into the structured sections.</p>
HTML;

// Table of Contents sections
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
];

// Define sections
$sections = [
    [
        'id' => 'section1',
        'title' => 'Why do we need adjectives?',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet repudiandae aliquam maxime aperiam sint facere animi facilis quibusdam illo ad.'
    ],
    [
        'id' => 'section2',
        'title' => 'Adjectives in English with equalizers, comparatives, and superlatives',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
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
        'title' => 'Difference between -ed and -ing adjectives in English',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?'
    ],
    [
        'id' => 'section4',
        'title' => 'Adjectives ending in -ed suffix',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?',
        // YouTube clip 'youtube' => '<iframe></iframe>'
    ],
    [
        'id' => 'section5',
        'title' => 'Adjectives ending in -ing suffix',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?',
    ],
];

// Include the master template
include '../master-template.php';
?>