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
    <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;

      font-family: 'Courier New', Courier, monospace;
      color: white;
    }
    body{
      height: 100vh;
      width: 100vw;

      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;

      background: darkslateblue;
    }
    table{
      width: 50%;
      border-collapse: collapse;
    }
    td, th{
      border: 1px solid #fff;
      text-align: left;
      padding: 8px;
    }

  </style>
</head>
<body>
    <h2>Your shopping today innit?</h2>

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