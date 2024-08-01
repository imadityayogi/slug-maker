<!DOCTYPE html>
<html>
<body>

<?php
function createSlug($title) {
    $slug = strtolower(trim($title));
    $slug = trim(preg_replace('/[^a-z0-9]+/', '-', $slug));
    return $slug;
}

// Example usage
$title = "Cualidades de un hombre de alto valor (HVM)";
$slug = createSlug($title);
echo $slug; // Output: this-is-my-blog-page-to-create-blogs


?> 

</body>
</html>
