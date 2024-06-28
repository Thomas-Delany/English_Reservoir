<!-- Blog.php -->
<?php
$page_title = "Blog";
$page_heading = "Blog";
// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<div class="container">
        <div class="row">
            <!--Blog Posts-->
            <div class="col-md-8">
                <div class="blog-post my-5">
                    <h2 class="blog-post-title">Blog Post Title</h2>
                        <p class="blog-post-meta lead">January 1, 2024 by <a href="#">Author</a></p>
                        <p class="lead">Blog post content</p>
                        <a href="#" class="btn btn-primary">Read more</a>
                </div>
                
                <div class="blog-post my-5">
                    <h2 class="blog-post-title">Blog Post Title</h2>
                        <p class="blog-post-meta lead">January 1, 2024 by <a href="#">Author</a></p>
                        <p class="lead">Blog post content</p>
                        <a href="#" class="btn btn-primary">Read more</a>
                </div>

                <div class="blog-post my-5">
                    <h2 class="blog-post-title">Blog Post Title</h2>
                        <p class="blog-post-meta lead">January 1, 2024 by <a href="#">Author</a></p>
                        <p class="lead">Blog post content</p>
                        <a href="#" class="btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
    </div>
HTML;
// Include the master template
include '../master-template.php';
?>