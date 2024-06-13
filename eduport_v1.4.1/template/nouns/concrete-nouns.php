<?php
function generate_breadcrumbs() {
    $path = $_SERVER['REQUEST_URI'];
    $parts = explode('/', trim($path, '/'));
    $breadcrumbs = ['<nav aria-label="breadcrumb"><ol class="breadcrumb">'];
    $url = '/';

    foreach ($parts as $index => $part) {
        $url .= $part . '/';
        // Replace hyphens with spaces and capitalize words
        $displayPart = ucwords(str_replace('-', ' ', $part));

        if ($index == count($parts) - 1) {
            // Last part: no link, just the name
            $breadcrumbs[] = "<li class=\"breadcrumb-item active\" aria-current=\"page\">$displayPart</li>";
        } else {
            // Intermediate parts: links
            $breadcrumbs[] = "<li class=\"breadcrumb-item\"><a href=\"$url\">$displayPart</a></li>";
        }
    }

    $breadcrumbs[] = '</ol></nav>';
    return implode('', $breadcrumbs);
}
?>
