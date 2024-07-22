<!-- Cambridge.php -->
<?php
$page_title = "Cambridge";
$page_heading = "Cambridge";
$image_url = "../assets/images/cambridge.png"; // Set the image URL
$image_alt = "cambridge"; // Set the image alt text
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
    // Internal links ['url' => '#', 'title' => 'Internal Link'],
    // Anchor links
    ['url' => '#section1', 'title' => 'What is the MCER and what does it have to do with B2, C1 and C2 accreditation?'],
    ['url' => '#section2', 'title' => 'Why use English Reservoir? '],
    ['url' => '#section3', 'title' => 'Our Cambridge Courses replicate Cambridge MCER Exams'],
    ['url' => '#section4', 'title' => 'Speak to the teachers!'],
    // External links ['url' => '#', 'title' => 'External Link']
];

// Define sections
$sections = [
    [
        'id' => 'section1',
        'title' => 'What is the MCER and what does it have to do with B2, C1 and C2 accreditation?',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet repudiandae aliquam maxime aperiam sint facere animi facilis quibusdam illo ad.'
    ],
    [
        'id' => 'section2',
        'title' => 'Why use English Reservoir?',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
        'image' => true // Course image 
    ],
    [
        'id' => 'section3',
        'title' => 'Our Cambridge Courses replicate Cambridge MCER Exams',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?'
    ],
    [
        'id' => 'section4',
        'title' => 'Speak to the teachers!',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?',
        // YouTube clip 'youtube' => '<iframe></iframe>'
    ],
];

// Define the "see also" links
$see_also_links = [
    ['url' => 'page1.php', 'title' => 'B2 Cambridge First'],
    ['url' => 'page2.php', 'title' => 'C1 Cambrdige Advanced'],
    ['url' => 'page3.php', 'title' => 'C2 Cambridge Proficiency']
];

// Include the master template
include '../master-template.php';
?>