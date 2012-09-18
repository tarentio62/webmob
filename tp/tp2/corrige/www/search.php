<!doctype html>
<html lang="fr">
    <head>
        <title>Recherche de BD</title>
        <meta charset="utf-8"/>
        <meta name="description" content="Base de donn&eacute;e sur les Bandes dessin&eacute;es"/>
        <meta name="author" content="Christophe"/>
        <meta name="HandheldFriendly" content="True"/>
        <meta name="MobileOptimized" content="320"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <link rel="stylesheet" href="jss/style.css"/>
        <link rel="shortcut icon" href="img/favicon.ico"/>
        <link rel="apple-touch-icon" href="img/logo-57.png"/>
        <link rel="apple-touch-icon" sizes="72x72" href="img/logo-72.png"/>
        <link rel="apple-touch-icon" sizes="114x114" href="img/logo-114.png"/>
        <link rel="apple-touch-startup-image" href="img/splash-touch.png"/>
    </head>

    <body>
        <header class="wrapper">
            <a href="index.php">
                <img src="img/logo-72.png" class="logo" alt="logo myBd" title="Moteur de recherche de Bd"/>
                <hgroup>
                    <h1>MyBd.fr</h1>
                    <h2>plein d'infos sur les BD</h2>
                </hgroup>
            </a>
        </header>
        <br class="clear"/>
        
        <div class="wrapper">
            <nav id="menu">
                <ul>
                    <li><a href="search.php">Recherche de BD</a></li>
                    <li><a href="last.php">Les derni&egrave;res BD</a></li>
                    <li><a href="random.php">Au hasard</a></li>
                    <li><a href="legal.php">Info l&eacute;gales</a></li>
                </ul>
            </nav>
        </div>
        <br class="clear"/>

        <section class="wrapper">
            <article>
                <h1>Recherchez une Bande dessin&eacute;e ?</h1>
                <form action="search.php" method="GET">
                    <fieldset>
                        <legend>Crit&egrave;re de recherche</legend>
                        <div class="column">
                            <div>
                                <label for="auteur">Auteur</label>
                                <input id="auteur" name="auteur">
                            </div>
                            <div>
                                <label for="nationalite">Nationalit&eacute;</label>
                                <input id="nationalite" name="nationalite">
                            </div>
                        </div>
                        <div class="column">
                            <div>
                                <label for="titre">Titre</label>
                                <input id="titre" name="titre">
                            </div>
                            <div>
                                <label for="annee">Ann&eacute;e</label>
                                <input id="annee" type="range" name="annee" min="1900" max="2013" />
                            </div>
                        </div>
                        <div class="column">
                            <div>
                                <label for="prix">Prix</label>
                                <input id="prix" name="prix">
                            </div>
                            <div>
                                <label for="dispo">Disponibilit&eacute;</label>
                                <input id="dispo" name="dispo">
                            </div>
                        </div>
                        <br class="clear"/>
                        <div class="footer">
                            <div>
                                <input type="submit" id="submit" name="submit" value="Rechercher">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </article>
        </section>
        <br class="clear"/>

        <footer>
            <nav>
                <ul>
                    <li><a href="search.php">Recherche de BD</a></li>
                    <li><a href="last.php">Les derni&egrave;res BD</a></li>
                    <li><a href="random.php">Au hasard</a></li>
                    <li><a href="legal.php">Info l&eacute;gales</a></li>
                </ul>
            </nav>
        </footer>
    </body>
</html>