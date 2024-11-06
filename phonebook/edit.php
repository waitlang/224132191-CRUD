<?php
    include "db.php";

    if (isset($_GET['id'])){ 
        $id =$_GET['id'];

        $sql= "SELECT * FROM contacts WHERE id=$id"; 
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
    
    header("Location: index.php");
?>