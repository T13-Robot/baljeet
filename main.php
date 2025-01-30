<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bro AI</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="data-box">
        <?php
        include 'dbconfig.php';

        $sql = "SELECT column_name FROM table_name";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<p>" . $row["column_name"] . "</p>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>