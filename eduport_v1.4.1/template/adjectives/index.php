<!-- Adjectives in English.php -->
<?php
$page_title = "Adjectives in English"; 
$page_heading = "Adjectives in English";
$image_url = "../assets/images/adjectives.png"; // Set the image URL
$image_alt = "adjectives"; // Set the image alt text
$show_toc = true; // Set to true to show the Table of Contents

// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<p class="lead my-2">This is some additional content that is specific to this child page. It might include introductory text, images, or other elements that don't fit into the structured sections.</p>
HTML;

// Sections
$sections = [
    ['id' => 'section1', 'title' => 'Section 1', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet repudiandae aliquam maxime aperiam sint facere animi facilis quibusdam illo ad.'],

    ['id' => 'section2', 'title' => 'Section 2', 'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!'],

    ['id' => 'section3', 'title' => 'Section 3', 'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?'],

    ['id' => 'section4', 'title' => 'Section 4', 'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?'],

    ['youtube' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/N4-r-GFi28g?si=Eu8wNNHtD2PTgLJa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>']
];

// Include the master template
include '../master-template.php';
?>