<!-- Main Auxiliary Verbs.php -->
<?php
$page_title = "Main Auxiliary Verbs";
$page_heading = "Main Auxiliary Verbs";
$image_url = "../../assets/images/main-auxiliary-verbs.png"; // Set the image URL
$image_alt = "main auxiliary verbs"; // Set the image alt text
$show_toc = true; // Set to true to show the Table of Contents

// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<p class="lead mb-4">This is some additional content that is specific to this child page. It might include introductory text, images, or other elements that don't fit into the structured sections.</p>
HTML;

// Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => '#', 'title' => 'To be'],
    ['url' => '#', 'title' => 'To have'],
    ['url' => '#', 'title' => 'To do'],
    // Anchor links
    ['url' => '#section1', 'title' => 'Why do we use auxiliary verbs?'],
    ['url' => '#section2', 'title' => 'The main auxiliary verbs'],
    ['url' => '#section3', 'title' => 'English is an analytic language'],
    ['url' => '#section4', 'title' => 'Learning how main auxiliaries work'],
    ['url' => '#section5', 'title' => 'To ask a question, emphasize, negate or use ellipsis - to do'],
    ['url' => '#section6', 'title' => 'To form all perfect forms, express obligation, and possession - to have'],
    ['url' => '#section7', 'title' => 'To form all passive forms, use continuous forms, and copulative structures - to be'],
    // External links ['url' => '#', 'title' => 'External Link']
];

// Define sections
$sections = [
    [
        'id' => 'section1',
        'title' => 'Why do we use auxiliary verbs?',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet repudiandae aliquam maxime aperiam sint facere animi facilis quibusdam illo ad.'
    ],
    [
        'id' => 'section2',
        'title' => 'The main auxiliary verbs',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
        'image' => true // Course image 
    ],
    [
        'id' => 'section3',
        'title' => 'English is an analytic language',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?'
    ],
    [
        'id' => 'section4',
        'title' => 'Learning how main auxiliaries work',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?',
        // YouTube clip 'youtube' => '<iframe></iframe>'
    ],
    [
        'id' => 'section5',
        'title' => 'To ask a question, emphasize, negate or use ellipsis - to do',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?'
    ],
    [
        'id' => 'section6',
        'title' => 'To form all perfect forms, express obligation, and possession - to have',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?'
    ],
    [
        'id' => 'section7',
        'title' => 'To form all passive forms, use continuous forms, and copulative structures - to be',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?'
    ],
];

// Include the master template
include '../../master-template.php';
?>