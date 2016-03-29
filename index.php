<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Naslov</title>
</head>
<body>
<h1>Prvi</h1>

<p>
<form method="post" action="rezultat.php">
    Ime:<br>
    <input type="text" name="ime"><br>
    Prezime:<br>
    <input type="text" name="prezime"><br>
    Spol:<br>
    <input type="radio" name="spol" value="M" checked>Muško<br>
    <input type="radio" name="spol" value="Ž">Žensko<br>
    <input type="submit" value="Idu dani!"><br>

    <?php
    $result = $conn->query("SELECT * FROM students ORDER BY surname");
    if ($result)
    {
        while ($row = $result->fetch_object())
        {
        echo('Ime: ' . $row->name . ' ' . $row->surname . '<br>');
        }
        $result->close();
        $conn->next_result();
    }
    ?>
</form>
</p>

</body>
</html>
