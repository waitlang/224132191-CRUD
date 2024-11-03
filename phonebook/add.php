<?php
    include 'db.php';

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name =$_POST['name'];
        $phone =$_POST['phone'];

        if (!empty($name) && !empty($phone)){
            $sql = "INSERT INTO contacts (name, phone) VALUES ('$name', '$phone')";

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
    <title>Add contak</title>
</head>
<body>
    <h2>Add contak lmao</h2>

    <form method = "post" action="add.php">
        Name: <input type="text" name="name"><br><br>
        Phone: <input type="text" name="phone"><br><br>
        <input type="submit" value="Add Contact">
    </form>
    <a href="index.php">Back to phonebook</a>
</body>
</html>