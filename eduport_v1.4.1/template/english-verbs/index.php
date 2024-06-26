<!-- Verbs in English.php -->
<?php
$page_title = "English Verbs";
$page_heading = "English Verbs";
// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <img src="../assets/images/" class="img-fluid rounded-3 mb-5" alt="">
        </div>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet repudiandae aliquam maxime aperiam sint facere animi facilis quibusdam illo ad.</p>
            <h3 id="section2" class="mt-5">Section 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!</p>
            <!--<div class="ratio ratio-16x9 my-5"></div>-->
            <h3 id="section3" class="mt-5">Section 3</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?</p>
            <h3 id="section4" class="mt-5">Section 4</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, reiciendis? Ab dolore provident repellat, est sequi deserunt unde ex voluptatum?</p>
        </div>
    </div>
</div>
HTML;
// Include the master template
include '../master-template.php';
?>