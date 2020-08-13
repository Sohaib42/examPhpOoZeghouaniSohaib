<html>
    <head>
        <?php
        include 'Parts/stylesheets.html'
        ?>
    </head>

    <body>
    <div class="container">
        <a href="index.php?controller=voiture&action=list">Tout voir ! </a>
    <h1>Bienvenue dans le gawage</h1>

        <?php
         require 'Parts/table_voitures.php'
        ?>
    </div>
    <?php
    include 'Parts/script.html'
    ?>
    </body>
</html>