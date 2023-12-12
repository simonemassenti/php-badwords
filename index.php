<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>CENSURA</h1>
    <form action="censorship.php" method="get">
        <label for="paragraph">Inserisci il tuo paragrafo</label>
        <textarea name="paragraph" id="paragraph" cols="30" rows="10"></textarea>

        <label for="badword">Inserisci la parola da censurare</label>
        <input type="text" name="badword" id="badword">

        <button type="submit">CENSURA!</button>
    </form>


</body>

</html>