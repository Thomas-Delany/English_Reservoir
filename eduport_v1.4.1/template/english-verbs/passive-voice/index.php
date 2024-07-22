<!-- Passive Voice.php -->
<?php
$page_title = "Passive Voice";
$page_heading = "Passive Voice";
$image_url = "../../assets/images/passive-voice.png"; // Set the image URL
$image_alt = "passive voice"; // Set the image alt text
$show_toc = true; // Set to true to show the Table of Contents

// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<p class="lead mb-4">This is some additional content that is specific to this child page. It might include introductory text, images, or other elements that don't fit into the structured sections.</p>
HTML;

/* Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => BASE_URL . 'x', 'title' => 'x'],
    ['url' => BASE_URL . 'english-verbs/passive-voice/present-simple-passive', 'title' => 'Present Simple - Passive'],
    ['url' => BASE_URL . 'english-verbs/passive-voice/present-continuous-passive', 'title' => 'Present Continuous - Passive'],
    ['url' => BASE_URL . 'english-verbs/passive-voice/present-perfect-continuous-passive', 'title' => 'Present Perfect Continuous - Passive'],
    ['url' => BASE_URL . 'english-verbs/passive-voice/present-perfect-passive', 'title' => 'Present Perfect - Passive'],
    ['url' => BASE_URL . 'english-verbs/passive-voice/past-continuous-passive', 'title' => 'Past Continuous - Passive'],
    ['url' => BASE_URL . 'english-verbs/passive-voice/past-perfect-continuous-passive', 'title' => 'Past Perfect Continuous - Passive'],
    ['url' => BASE_URL . 'english-verbs/passive-voice/past-simple-passive', 'title' => 'Past Simple - Passive'],
    ['url' => BASE_URL . 'english-verbs/passive-voice/past-perfect-passive', 'title' => 'Past Perfect - Passive'],
    ['url' => BASE_URL . 'english-verbs/passive-voice/future-simple-passive', 'title' => 'Future Simple - Passive'],
    ['url' => BASE_URL . 'english-verbs/passive-voice/future-continuous-passive', 'title' => 'Future Continuous - Passive'],
    ['url' => BASE_URL . 'english-verbs/passive-voice/future-perfect-passive', 'title' => 'Future Perfect - Passive'],
    ['url' => BASE_URL . 'english-verbs/passive-voice/future-perfect-continuous-passive', 'title' => 'Future Perfect Continuous - Passive'],
    // Anchor links
    ['url' => '#section1', 'title' => 'Why is the passive voice used?'],
    ['url' => '#section2', 'title' => 'Indicating the agent in the passive'],
    // External links ['url' => '#', 'title' => 'External Link']
]; */

// Table of Contents sections
$toc_sections = [
    // Internal links
    ['url' => '#', 'title' => 'Present Simple - Passive'],
    ['url' => '#', 'title' => 'Present Continuous - Passive'],
    ['url' => '#', 'title' => 'Present Perfect Continuous - Passive'],
    ['url' => '#', 'title' => 'Present Perfect - Passive'],
    ['url' => '#', 'title' => 'Past Continuous - Passive'],
    ['url' => '#', 'title' => 'Past Perfect Continuous - Passive'],
    ['url' => '#', 'title' => 'Past Simple - Passive'],
    ['url' => '#', 'title' => 'Past Perfect - Passive'],
    ['url' => '#', 'title' => 'Future Simple - Passive'],
    ['url' => '#', 'title' => 'Future Continuous - Passive'],
    ['url' => '#', 'title' => 'Future Perfect - Passive'],
    ['url' => '#', 'title' => 'Future Perfect Continuous - Passive'],
    // Anchor links
    ['url' => '#section1', 'title' => 'Why is the passive voice used?'],
    ['url' => '#section2', 'title' => 'Indicating the agent in the passive'],
    // External links ['url' => '#', 'title' => 'External Link']
];

// Define sections
$sections = [
    [
        'id' => 'section1',
        'title' => 'Why is the passive voice used?',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet repudiandae aliquam maxime aperiam sint facere animi facilis quibusdam illo ad.'
    ],
    [
        'id' => 'section2',
        'title' => 'Indicating the agent in the passive',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
        'image' => true // Course image 
    ],
];

// Include the master template
include '../../master-template.php';
?>