<!-- Active Voice.php -->
<?php
$page_title = "Active Voice";
$page_heading = "Active Voice";
$image_url = "../../assets/images/active-voice.png"; // Set the image URL
$image_alt = "active voice"; // Set the image alt text
$show_toc = true; // Set to true to show the Table of Contents

// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<p class="lead mb-4">This is some additional content that is specific to this child page. It might include introductory text, images, or other elements that don't fit into the structured sections.</p>
HTML;

/* Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => BASE_URL . 'english-verbs/active-voice/present-simple', 'title' => 'Present Simple'],
    ['url' => BASE_URL . 'english-verbs/active-voice/present-continuous', 'title' => 'Present Continuous'],
    ['url' => BASE_URL . 'english-verbs/active-voice/present-perfect-continuous', 'title' => 'Present Perfect Continuous'],
    ['url' => BASE_URL . 'english-verbs/active-voice/present-perfect', 'title' => 'Present Perfect'],
    ['url' => BASE_URL . 'english-verbs/active-voice/past-continuous', 'title' => 'Past Continuous'],
    ['url' => BASE_URL . 'english-verbs/active-voice/past-perfect-continuous', 'title' => 'Past Perfect Continuous'],
    ['url' => BASE_URL . 'english-verbs/active-voice/past-simple', 'title' => 'Past Simple'],
    ['url' => BASE_URL . 'english-verbs/active-voice/past-perfect', 'title' => 'Past Perfect'],
    ['url' => BASE_URL . 'english-verbs/active-voice/future-simple', 'title' => 'Future Simple'],
    ['url' => BASE_URL . 'english-verbs/active-voice/future-continuous', 'title' => 'Future Continuous'],
    ['url' => BASE_URL . 'english-verbs/active-voice/future-perfect', 'title' => 'Future Perfect'],
    ['url' => BASE_URL . 'english-verbs/active-voice/future-perfect-continuous', 'title' => 'Future Perfect Continuous'],
    // Anchor links
    ['url' => '#section1', 'title' => 'What is the active voice?'],
    ['url' => '#section2', 'title' => 'In the passive, the above sentence would be as follows'],
    ['url' => '#section3', 'title' => 'Can I always use active verb forms'],
    ['url' => '#section4', 'title' => 'How do I learn active verb forms?'],
    // External links ['url' => '#', 'title' => 'External Link']
]; */

// Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => '#', 'title' => 'Present Simple'],
    ['url' => '#', 'title' => 'Present Continuous'],
    ['url' => '#', 'title' => 'Present Perfect Continuous'],
    ['url' => '#', 'title' => 'Present Perfect'],
    ['url' => '#', 'title' => 'Past Continuous'],
    ['url' => '#', 'title' => 'Past Perfect Continuous'],
    ['url' => '#', 'title' => 'Past Simple'],
    ['url' => '#', 'title' => 'Past Perfect'],
    ['url' => '#', 'title' => 'Future Simple'],
    ['url' => '#', 'title' => 'Future Continuous'],
    ['url' => '#', 'title' => 'Future Perfect'],
    ['url' => '#', 'title' => 'Future Perfect Continuous'],
    // Anchor links
    ['url' => '#section1', 'title' => 'What is the active voice?'],
    ['url' => '#section2', 'title' => 'In the passive, the above sentence would be as follows'],
    ['url' => '#section3', 'title' => 'Can I always use active verb forms'],
    ['url' => '#section4', 'title' => 'How do I learn active verb forms?'],
    // External links ['url' => '#', 'title' => 'External Link']
];

// Define sections
$sections = [
    [
        'id' => 'section1',
        'title' => 'What is the active voice?',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet repudiandae aliquam maxime aperiam sint facere animi facilis quibusdam illo ad.'
    ],
    [
        'id' => 'section2',
        'title' => 'In the passive, the above sentence would be as follows',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
        'image' => true // Course image 
    ],
    [
        'id' => 'section3',
        'title' => 'Can I always use active verb forms?',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?'
    ],
    [
        'id' => 'section4',
        'title' => 'How do I learn active verb forms?',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?',
        // YouTube clip 'youtube' => '<iframe></iframe>'
    ],
];

// Include the master template
include '../../master-template.php';
?>