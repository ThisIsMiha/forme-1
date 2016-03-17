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
    <?php
    //INSERT INTO students (name, surname) VALUES ('ime', 'prezime');
    $conn->query("INSERT INTO students (name, surname) VALUES ('" . $_POST['ime'] ."','" . $_POST['prezime'] . "');");

    $result = $conn->query("SELECT * FROM students ORDER BY surname");
    if ($result){
        while ($row = $result->fetch_object()){
            //print_r($row);
            echo('Ime: ' . $row->name . ' ' . $row->surname . '<br>');
        }
        $result->close();
        $conn->next_result();
    }
    /*if ($result = $conn->query("SELECT * FROM students")){
        printf("Select returned %d rows.\n", $result->num_rows);
        $result->close();
    }*/

    if ($_POST['spol'] == 'M') {
        $class = 'musko';
    } elseif ($_POST['spol'] == 'Ž') {
        $class = 'zensko';
    }

    echo('<p class="' . $class . '">Vaše ime je: ' . htmlspecialchars($_POST['ime']) . '</p>');
    echo('<p class="' . $class . '">Vaše prezime je: ' . htmlspecialchars($_POST['prezime']) . '</p>');

    echo('<br>');

    if ($_POST['spol'] == 'M') {
        echo('Vi ste pravi muškarac!');
    } elseif ($_POST['spol'] == 'Ž') {
        echo('Vi ste prava žena!');
    } else {
        echo('A što ste onda?');
    }
    ?>
    <br>
    <a href="index.php">Ponovni unos</a>
</p>

</body>
</html>
