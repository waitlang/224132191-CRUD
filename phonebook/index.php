<?php
    include "db.php";

    $sql = "Select * from contacts";
    $result=$conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping List</title>

</head>
<body>
    <h2>Phonebok</h2>

    <table border="1">
        <tr>
            <th>Title</th>
            <th>Description</th>
        </tr>
        <?php
        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['desc'] . "</td>";
                echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete<</a>/td>";
            }
        }

        else{
            echo "<tr><td colspan='3'>No list</td></tr>";
        }
        ?>
    </table>
    
</body>
</html>