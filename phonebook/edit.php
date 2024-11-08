<?php
    include "db.php";

    if (isset($_GET['id'])){ 
        $id =$_GET['id'];

        $sql= "SELECT * FROM list WHERE id=$id"; 
        $result=$conn->query($sql);

        if ($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $name = $row['title'];
            $result = $row['desc'];
        }
        else{
            echo "No item found wiht that id";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit item</title>
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
        input{
            color: black;
        }
    </style>
</head>
<body>
    <h1>Edit an item</h1>
    <form action="edit.php" method="post">
        <input type="hidden" name="entry_id" value="<?php echo htmlspecialchars($id); ?>">
        Title: <input type="text" name="title" value="<?php echo htmlspecialchars($title); ?>"><br>
        Desc: <input type="text" name="body" value="<?php echo htmlspecialchars($body); ?>"><br><br>
        <input type="submit" value="Edit List Item">
    </form>
    <a href="index.php">Back to List</a>
</body>
</html>