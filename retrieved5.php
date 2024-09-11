<!DOCTYPE html>
<html>
<head>
    <title>List Cookies</title>
</head>
<body>
    <h2>List Cookies</h2>
    <form method="POST" action="">
        <input type="submit" name="list_cookies" value="List Cookies">
    </form>

    <h3>Cookies:</h3>
    <ul>
        <?php
       
        if (isset($cookies) && count($cookies) > 0) {
            foreach ($cookies as $name => $value) {
                echo "<li><strong>$name:</strong> $value</li>";
            }
        } else {
            echo "<li>No cookies found.</li>";
        }
        ?>
    </ul>
</body>
</html>