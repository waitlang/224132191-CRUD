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
    <title>Phonebook</title>

</head>
<body>
    <h2>Phonebok</h2>

    <table></table>
</body>
</html>