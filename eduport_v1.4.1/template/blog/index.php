<!-- index.php -->
<?php
$page_title = "Blog";
$page_heading = "Blog";

// Include the blog posts array
include __DIR__ . '/../includes/blog-posts.php';

// Start capturing the content
ob_start();
?>
<div class="container">
    <?php foreach ($blog_posts as $post): ?>
        <?php include __DIR__ . '/../includes/blog-post-template.php'; ?>
    <?php endforeach; ?>
</div>
<?php
// Get the content and assign it to $page_content
$page_content = ob_get_clean();

// Include the master template
include __DIR__ . '/../master-template.php';
?>
