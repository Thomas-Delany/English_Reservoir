<!-- Adjectives in English.php -->
<?php
$page_title = "Adjectives in English";
$page_heading = "Adjectives in English";
$image_url = "../assets/images/adjectives.png"; // Set the image URL
$image_alt = "adjectives"; // Set the image alt text
// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
    <!-- Table of Contents -->
    <nav id="toc" class="col-md-12 rounded-3 p-4 mb-5 toc bg-primary bg-gradient bg-opacity-15">
        <h2>Table of Contents</h2>
        <nav class="nav flex-column">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-arrow-right text-primary me-2"></i>
                        <a class="nav-link fs-5 fw-semibold text-primary" href="#section1">Section 1</a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-arrow-right text-primary me-2"></i>
                        <a class="nav-link fs-5 fw-semibold text-primary" href="#section2">Section 2</a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-arrow-right text-primary me-2"></i>
                        <a class="nav-link fs-5 fw-semibold text-primary" href="#section3">Section 3</a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-arrow-right text-primary me-2"></i>
                        <a class="nav-link fs-5 fw-semibold text-primary" href="#section4">Section 4</a>
                    </div>
                </li>
            </ul>
        </nav>
    </nav>
    <!-- Content -->
    <div class="col-md-12">
        <h3 id="section1">Section 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet repudiandae aliquam maxime aperiam sint facere
            animi facilis quibusdam illo ad.</p>
        <h3 id="section2" class="mt-5">Section 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima
            ipsam in praesentium possimus autem!</p>

        <div class="ratio ratio-16x9 my-5">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/N4-r-GFi28g?si=Eu8wNNHtD2PTgLJa"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <h3 id="section3" class="mt-5">Section 3</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est
            sequi deserunt unde ex voluptatum?</p>
        <h3 id="section4" class="mt-5">Section 4</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est
            sequi deserunt unde ex voluptatum?</p>
    </div>
HTML;

// Include the master template
include '../master-template.php';
?>