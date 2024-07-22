<!-- Verbal Order.php -->
<?php
$page_title = "Verbal Order";
$page_heading = "Verbal Order";
$image_url = "../assets/images/verbal-order.png"; // Set the image URL
$image_alt = "verbal order"; // Set the image alt text
$show_toc = true; // Set to true to show the Table of Contents

// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<p class="lead mb-4">This is some additional content that is specific to this child page. It might include introductory text, images, or other elements that don't fit into the structured sections.</p>
HTML;

/* Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => BASE_URL . 'english-verbs/verbal-order/gerunds', 'title' => 'Gerunds (verb + ing)'],
    ['url' => BASE_URL . 'english-verbs/verbal-order/to-infinitive', 'title' => 'To + Infinitive'],
    ['url' => BASE_URL . 'english-verbs/verbal-order/bare-infinitive', 'title' => 'Bare Infinitive'],
    // Anchor links
    ['url' => '#section1', 'title' => 'Why can we not say the following?'],
    ['url' => '#section2', 'title' => 'Gerunds also function as subjects and objects'],
    ['url' => '#section3', 'title' => 'What about when to use “to” or “for”?'],
    // External links ['url' => '#', 'title' => 'External Link']
]; */

// Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => '#', 'title' => 'Gerunds (verb + ing)'],
    ['url' => '#', 'title' => 'To + Infinitive'],
    ['url' => '#', 'title' => 'Bare Infinitive'],
    // Anchor links
    ['url' => '#section1', 'title' => 'Why can we not say the following?'],
    ['url' => '#section2', 'title' => 'Gerunds also function as subjects and objects'],
    ['url' => '#section3', 'title' => 'What about when to use “to” or “for”?'],
    // External links ['url' => '#', 'title' => 'External Link']
];

// Define sections
$sections = [
    [
        'id' => 'section1',
        'title' => 'Why can we not say the following?',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet repudiandae aliquam maxime aperiam sint facere animi facilis quibusdam illo ad.'
    ],
    [
        'id' => 'section2',
        'title' => 'Gerunds also function as subjects and objects',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
        'image' => true // Course image 
    ],
    [
        'id' => 'section3',
        'title' => 'What about when to use “to” or “for”?',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?', 
        // YouTube clip 'youtube' => '<iframe></iframe>'
    ],
];

// Include the master template
include '../../master-template.php';
?>