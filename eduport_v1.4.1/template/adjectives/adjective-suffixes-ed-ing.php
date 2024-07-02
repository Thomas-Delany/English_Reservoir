<!-- Adjective Suffixes ed ing.php -->
<?php
$page_title = "Adjective Suffixes ed ing";
$page_heading = "Adjective Suffixes ed ing";
// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
        <!--
        <div class="col-12">
            <img src="#" class="img-fluid rounded-3 mb-5" alt="x">
        </div>-->

        <!-- Content -->
        <div class="col-md-12 my-5">
            <h3 id="section1">Section 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet repudiandae aliquam maxime aperiam sint
                facere animi facilis quibusdam illo ad.</p>
            <h3 id="section2" class="mt-5">Section 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus
                minima ipsam in praesentium possimus autem!</p>

            <!--<div class="ratio ratio-16x9 my-5">
            <iframe></iframe>
            </div>-->

            <h3 id="section3" class="mt-5">Section 3</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat,
                est sequi deserunt unde ex voluptatum?</p>
            <h3 id="section4" class="mt-5">Section 4</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat,
                est sequi deserunt unde ex voluptatum?</p>
        </div>
HTML;
// Define the "see also" links
$see_also_links = [
    ['url' => 'adjective-suffixes-ed-ing.php', 'title' => 'Adjective suffixes ed and ing'],
    ['url' => 'page2.php', 'title' => 'Page 2'],
    ['url' => 'page3.php', 'title' => 'Page 3'],
    ['url' => 'page4.php', 'title' => 'Page 4'],
    ['url' => 'page5.php', 'title' => 'Page 5']
];
// Include the master template
include '../master-template.php';
?>