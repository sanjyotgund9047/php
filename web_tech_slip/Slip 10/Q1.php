<?php
// URL of the webpage whose source code you want to display
$url = "https://example.com";

// Retrieve the source code of the webpage
$sourceCode = file_get_contents($url);

// Check if the source code is successfully retrieved
if ($sourceCode !== false) {
    // Display the source code
    echo "<pre>" . htmlspecialchars($sourceCode) . "</pre>";
} else {
    // Display an error message if the source code retrieval fails
    echo "Failed to retrieve source code from $url";
}
?>
