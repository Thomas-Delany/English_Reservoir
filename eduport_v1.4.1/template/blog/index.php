<!-- Blog.php -->
<?php
$page_title = "Blog";
$page_heading = "Blog";
// Page specific content with HTML and Bootstrap elements ../assets/images/courses/b2_first.png
$page_content = <<<HTML
 <div class="container">
    <div class="row">
      <!--Blog Post 1-->
        <div class="blog-post my-5">
          <div class="row">
            <div class="col-md-8">
              <h2 class="blog-post-title">Blog Post Title</h2>
              <p class="blog-post-meta lead">January 1, 2024 by <a href="#">Author</a></p>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat iusto consectetur hic earum nostrum maiores soluta! Consectetur beatae totam officia praesentium, cumque alias nihil at voluptatem ut ipsa iure nesciunt?</p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center my-3">
              <img src="../assets/images/courses/b2_first.png" class="img-fluid rounded-3" alt="Blog Image">
            </div>
          </div>
        </div>

        <!--Blog Post 2-->
        <div class="blog-post my-5">
          <div class="row">
            <div class="col-md-8">
              <h2 class="blog-post-title">Blog Post Title</h2>
              <p class="blog-post-meta lead">January 1, 2024 by <a href="#">Author</a></p>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat iusto consectetur hic earum nostrum maiores soluta! Consectetur beatae totam officia praesentium, cumque alias nihil at voluptatem ut ipsa iure nesciunt?</p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center my-3">
              <img src="../assets/images/courses/b2_first.png" class="img-fluid rounded-3" alt="Blog Image">
            </div>
          </div>
        </div>

        <!--Blog Post 3-->
        <div class="blog-post my-5">
          <div class="row">
            <div class="col-md-8">
              <h2 class="blog-post-title">Blog Post Title</h2>
              <p class="blog-post-meta lead">January 1, 2024 by <a href="#">Author</a></p>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat iusto consectetur hic earum nostrum maiores soluta! Consectetur beatae totam officia praesentium, cumque alias nihil at voluptatem ut ipsa iure nesciunt?</p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center my-3">
              <img src="../assets/images/courses/b2_first.png" class="img-fluid rounded-3" alt="Blog Image">
            </div>
          </div>
        </div>



    </div>
  </div>
HTML;
// Include the master template
include '../master-template.php';
?>