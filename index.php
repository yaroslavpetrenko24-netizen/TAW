<!DOCTYPE html>
<html lang="en">

<?php
$conn = mysqli_connect("localhost", "root", "", "warsztat");
$scrypt1 = mysqli_query($conn, "SELECT id, nazwa, cena FROM uslugi;");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header>
        <h1>AutoSerwis - Panel Obslugi Zgloszen</h1>
    </header>
    <main>
        <section id="left">
            <h2>Nowe Zgloszenie</h2>
            <form method="POST">
                <label for="name">Imie i nazwisko:</label>
                <input type="text" name="name">
                <label for="number">Numer rejestracyjny pojazdu: </label>
                <input type="text" name="number">
                <select name="usluga" id="list_rozwijana">
                    <?php
                    while ($row = mysqli_fetch_array($scrypt1)) {
                        echo '<option value="' . $row["id"] . ">" . $row["nazwa"] . "</option>";
                    }
                    ?>
                </select>
                <textarea></textarea>
                <Button type="submit">Dodaj Zgloszenie</Button>
            </form>
        </section>

        <section id="right">
            <h2>Ostatnie naprawy</h2>
            <table> </table>
        </section>
    </main>

    <footer> Autor: Yaroslav Petrenko </footer>
</body>

</html>
