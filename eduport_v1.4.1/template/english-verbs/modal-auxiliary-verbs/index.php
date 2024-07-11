<!-- Modal Auxiliary Verbs.php -->
<?php
$page_title = "Modal Auxiliary Verbs";
$page_heading = "Modal Auxiliary Verbs";
$image_url = "../../assets/images/modal-auxiliary-verbs.png"; // Set the image URL
$image_alt = "modal auxiliary verbs"; // Set the image alt text
$show_toc = true; // Set to true to show the Table of Contents

// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<p class="lead mb-4">This is some additional content that is specific to this child page. It might include introductory text, images, or other elements that don't fit into the structured sections.</p>
HTML;

// Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => '#', 'title' => 'Can and Could'],
    ['url' => '#', 'title' => 'May and Might'],
    ['url' => '#', 'title' => 'Will and Shall'],
    ['url' => '#', 'title' => 'Ought to and Should'],
    ['url' => '#', 'title' => 'Must'],
    ['url' => '#', 'title' => 'Would'],
    ['url' => '#', 'title' => 'Need to'],
    ['url' => '#', 'title' => 'Dare to'],
    // Anchor links
    ['url' => '#section1', 'title' => 'Why are modal auxiliaries used?'],
    ['url' => '#section2', 'title' => 'Modal auxiliaries are followed by the bare infinitive'],
    ['url' => '#section3', 'title' => 'No inflections with modal auxiliary verbs'],
    ['url' => '#section4', 'title' => 'Modal auxiliaries are followed by normal verbs'],
    // External links ['url' => '#', 'title' => 'External Link']
];

// Define sections
$sections = [
    [
        'id' => 'section1',
        'title' => 'Why are modal auxiliaries used?',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet repudiandae aliquam maxime aperiam sint facere animi facilis quibusdam illo ad.'
    ],
    [
        'id' => 'section2',
        'title' => 'Modal auxiliaries are followed by the bare infinitive',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
        'image' => true // Course image 
    ],
    [
        'id' => 'section3',
        'title' => 'No inflections with modal auxiliary verbs',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?'
    ],
    [
        'id' => 'section4',
        'title' => 'Modal auxiliaries are followed by normal verbs',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?',
        // YouTube clip 'youtube' => '<iframe></iframe>'
    ],
];

// Include the master template
include '../../master-template.php';
?>