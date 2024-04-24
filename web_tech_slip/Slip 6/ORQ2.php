<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Search</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#search").on("keyup", function() {
                var searchValue = $(this).val();
                $.ajax({
                    url: "search.php",
                    type: "POST",
                    data: {search: searchValue},
                    success: function(data) {
                        $("#result").html(data);
                    }
                });
            });
        });
    </script>
</head>
<body>
    <h2>Student Search</h2>
    <input type="text" id="search" placeholder="Type here to search...">
    <div id="result"></div>
    <?php
    // Sample array of student names
    $studentNames = array(
        "John",
        "Alice",
        "Bob",
        "Charlie",
        "David",
        "Emily",
        "Frank",
        "Grace",
        "Henry",
        "Ivy"
    );

    // Get the search term from POST data
    $searchTerm = isset($_POST['search']) ? $_POST['search'] : '';

    // Filter student names based on the search term
    $filteredNames = array_filter($studentNames, function($name) use ($searchTerm) {
        return strpos(strtolower($name), strtolower($searchTerm)) !== false;
    });

    // Display the filtered names
    if (!empty($filteredNames)) {
        echo "<ul>";
        foreach ($filteredNames as $name) {
            echo "<li>$name</li>";
        }
        echo "</ul>";
    } else {
        echo "No results found";
    }
    ?>
</body>
</html>
