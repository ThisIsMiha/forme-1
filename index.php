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

<form method="post">
    Ime:<br>
    <input type="text" name="ime"><br>
    Prezime:<br>
    <input type="text" name="prezime"><br>
    Spol:<br>
    <input type="radio" name="spol" value="M" checked>Muško<br>
    <input type="radio" name="spol" value="Ž">Žensko<br>
    <input type="submit" value="Idu dani!">

</form>

<?php
if ($_POST['spol'] == 'M')
{
    $class = 'musko';
}
elseif ($_POST['spol'] == 'Ž')
{
    $class = 'zensko';
}

echo('<p class="' . $class .'">Vaše ime je: ' . htmlspecialchars($_POST['ime']) . '</p>');
echo('<p class="' . $class .'">Vaše prezime je: ' . htmlspecialchars($_POST['prezime']) . '</p>');

echo('<br>');

if ($_POST['spol'] == 'M')
{
    echo('Vi ste pravi muškarac!');
}
elseif ($_POST['spol'] == 'Ž')
{
    echo('Vi ste prava žena!');
}
else
{
    echo('A što ste onda?');
}
?>

</p>

</body>
</html>
