<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Strona Główna</title>
    <meta name="description" content="Strona kółka foto-video Reporter">
    <meta name="keywords" content="Reporter, foto-video, ZST Leżajsk">
    <meta name="author" content="Robin Verbist">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="naglowek">
        <a href="StronaGlowna.html"><img src="logo.png" alt="logo" height="100" class="logo"></a>
        <p class="tytul">Strona Główna</p>
    </div>

    <div style="overflow:auto">
        <section class="tall">
            <nav class="jmenu">
                <label for="menu-btn" class="jm-menu-btn jm-icon-menu"></label>
                <input type="checkbox" id="menu-btn" class="jm-menu-btn">
                <ul class="jm-collapse">
                    <li><a href="StronaGlowna.html">Strona Główna</a></li>

                    <li class="logowanie"><a href="Logowanie.php">Zaloguj</a></li>
                </ul>
            </nav>
        </section>
        <div class="zawartosc">
            <form class="formularz">
                <label for="email">Email:</label><br>
                <input type="email" name="email"><br>
                <label for="haslo">Hasło:</label><br>
                <input type="password" name="haslo"><br>
                <input type="submit">
            </form>
        </div>

        <div class="prawa">

        </div>
    </div>


    <div class="stopka">Stopka</div>


</body>

</html>