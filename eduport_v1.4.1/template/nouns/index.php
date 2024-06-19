<!-- Nouns in English.php -->
<?php
$page_title = "Nouns in English";
$page_heading = "Nouns in English";
$page_content = 
<<<HTML
<div class="container mt-4">
    <div class="row">
        <!-- Table of Contents -->
        <nav id="toc" class="col-md-12 rounded-3 bg-light p-4 mb-5 toc">
            <h2>Table of Contents</h2>
            <nav class="nav flex-column lead">
            <ul class="nav flex-column">
                <li class="nav-item">
        <div class="d-flex align-items-center">
            <i class="bi bi-arrow-right text-primary me-2"></i>
            <a class="nav-link" href="#section1">Section 1</a>
        </div>
    </li>
    <li class="nav-item">
      <div class="d-flex align-items-center">
        <i class="bi bi-arrow-right text-primary me-2"></i>
        <a class="nav-link" href="#section2">Section 2</a>
      </div>
    </li>
    <!-- Add more items as needed -->
  </ul>
            </nav>
        </nav>

        <!-- Content -->
        <div class="col-md-9">
            <h3 id="section1">Section 1</h3>
            <p>Content for section 1...</p>
            <h3 id="section2">Section 2</h3>
            <p>Content for section 2...</p>
            <h3 id="section3">Section 3</h3>
            <p>Content for section 3...</p>
        </div>
    </div>
</div>
HTML;

include '../master-template.php';
?>