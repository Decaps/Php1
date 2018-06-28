<!doctype html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="./css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
        <title>Vente de Sapins PIGNON</title>
    </head>
    <body>
    <header>
        <div id="header">
            <div id="title">
                <h1>PIGNON, le site qui sent le sapin</h1>
            </div>
            <div class="liens">
                <a href="index.php">Accueil</a>
            </div>
            <div class="liens">
                <a href="cart.php">Voir mon panier</a>
            </div>
        </div>
    </header>
    <body>
        <div class="cart">
            <table>
                <tr>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Prix Unitaire</th>
                    <th>Total</th>
                </tr>
                <?php
                // foreach produitAjouté
                //  <tr>
                //      <td>$_POST id</td>
                //      <td>$_POST quantity</td>
                //      <td>$_POST price</td>
                //      <td> $totalPrice = ($_POST quantity) * ($_POST price) </td>
                // </tr>
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Prix Total</td>
                    <?php
                    // Prix Total = number array_sum ($totalPrice);
                    ?>
                </tr>
            </table>
        </div>
    <div>
        <h3>Sélectionnez votre moyen de paiement:</h3>
        <div class="payment">
            <a href="payment.php"><img class="MoyensDePaiement" src="./images/paiements.png"></a>
        </div>
    </div>
    </body>
    <footer>
        <div id="footer">
            <p>Tous droits  non réservés, même la poubelle ne veut pas de ce site.</p>
            <p>DURAN 2018 © </p>
        </div>
    </footer>
    </body>
</html>