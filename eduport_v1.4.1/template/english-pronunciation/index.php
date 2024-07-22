<!-- English Pronunciation.php -->
<?php
$page_title = "English Pronunciation";
$page_heading = "English Pronunciation";
$image_url = "../assets/images/english-pronunciation.png"; // Set the image URL
$image_alt = "english pronunciation"; // Set the image alt text
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
    ['url' => '#', 'title' => 'English Pronunciation - An Introduction'],
    ['url' => '#', 'title' => 'English Pronunciation - Our Course'],
    ['url' => '#', 'title' => 'Vowels'],
    ['url' => '#', 'title' => 'Consonants'],
    ['url' => '#', 'title' => 'Common Pronunciation Mistakes'],
    ['url' => '#', 'title' => 'Contractions in English - How to Pronounce them'],
    ['url' => '#', 'title' => 'Introduction to IPA'],
    ['url' => '#', 'title' => 'IPA Chart (Inernational Phonetic Alphabet)'],
    ['url' => '#', 'title' => 'The "ed" ending'],
    ['url' => '#', 'title' => 'Nasal sound in English'],
    ['url' => '#', 'title' => '3 Pronunciation Tips!'],
    ['url' => '#', 'title' => '3 Pronunciaton Must-Dos!'],
    // Anchor links
    ['url' => '#section1', 'title' => 'How to speak English with correct pronunciation'],
    ['url' => '#section2', 'title' => 'English pronunciation is irregular'],
    ['url' => '#section3', 'title' => 'So, how do you, the learner, get around this?'],
    ['url' => '#section4', 'title' => 'To learn or not to learn IPA?'],
    // External links ['url' => '#', 'title' => 'External Link']
];

// Define sections
$sections = [
    [
        'id' => 'section1',
        'title' => 'How to speak English with correct pronunciation',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet repudiandae aliquam maxime aperiam sint facere animi facilis quibusdam illo ad.'
    ],
    [
        'id' => 'section2',
        'title' => 'English pronunciation is irregular',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
        'image' => true // Course image 
    ],
    [
        'id' => 'section3',
        'title' => 'So, how do you, the learner, get around this?',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?'
    ],
    [
        'id' => 'section4',
        'title' => 'To learn or not to learn IPA?',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?',
        // YouTube clip 'youtube' => '<iframe></iframe>'
    ],
];

// Include the master template
include '../master-template.php';
?>