<?php
    include 'db.php';

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $title =$_POST['title'];
        $desc =$_POST['desc'];

        if (!empty($title) && !empty($phone)){
            $sql = "INSERT INTO list (title, desc) VALUES ('$title', '$desc')";

            if ($conn->query($sql)=== TRUE){
                echo "New contact added success";
            }
            else{
                echo "Fail add new";
            }
        }
        else{
            echo "Please fill me";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <style>
    body{

      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    h1{
      text-align: center;
    
    }
  </style>
</head>
<body>
    <h2>Add to list</h2>

    <form method = "post" action="add.php">
        Title: <input type="text" name="title"><br><br>
        Desc: <input type="text" name="desc"><br><br>
        <input type="submit" value="Add item">
    </form>
    <a href="index.php">Back to list</a>
</body>
</html>