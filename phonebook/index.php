<?php
    include "db.php";

    $sql = "SELECT * FROM list";
    $result=$conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping List</title>
    <style>
    body{

      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    td, th{
      border: 1px solid;
    }

  </style>
</head>
<body>
    <h2>Your shopping today innit?</h2>

    <table>
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