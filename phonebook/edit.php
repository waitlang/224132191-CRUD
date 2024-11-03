<?php
    include "db.php";

    if (isset($_GET['id'])){ 
        $id =$_GET['id'];

        $sql= "SELECT * FROM contacts WHERE id=$id"; 
        $result=$conn->query($sql);

        if ($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $name = $row['name'];
            $result = $row['phone'];
        }
        else{
            echo "No contact found wiht that id";
            
        }
    }
    
    header("Location: index.php");
?>