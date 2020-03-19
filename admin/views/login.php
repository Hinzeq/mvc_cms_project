<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Logowanie</h1>
    <form action="login" method="post">
        <p>Podaj login:</p>
        <input type="text" name="login"><br/>
        <p>Podaj hasło:</p>
        <input type="text" name="pass"><br/><br/>
        <input type="submit" value="Zaloguj">
    </form>

    <?php
        if(isset($_SESSION['error'])) echo $_SESSION['error'];
    ?>
</body>
</html>