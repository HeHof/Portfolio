<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="author" content="Hendrik Hofmann">
        <link type="text/css" rel="stylesheet" href="style.css"/>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

        <title>MyPoller</title>
    </head>
    <body>
        <h1>Erstelle deine Umfrage!<h1></h1>
        <form action="poller.php" method="POST">
                <label>
                    Deine Frage:<br><input type="text" name="frage" />
                </label>
                <label>
                    Deine Antworten:<br><textarea name="antworten" cols="50" rows="10"> </textarea>
                </label>
                <label>
                    <input type="submit" name="submit" id="submit" value="Umfrage erstellen" />
                </label>
        </form>
    </body>
</html>
