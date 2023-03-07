<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reclamation Display</title>
</head>

<body>
    <img src="affar_trocLogo.png"></img>
    <h1>
        <a href="ListeReclamation.php" >Retour a la liste </a>
    </h1>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST" id="addReclam">
        <table border="1" align="center">
            <tr>
                <td>
                    <label for="id_user">Entrer votre identifiant:
                    </label>
                </td>
                <td><input type="text" name="id_user" id="id_user" maxlength="15" required></td>
            </tr>
            <tr>
                <td>
                    <label for="type">Type de Reclamation:
                    </label>
                </td>
                <td><select name="type" id="type_select">
                    <option value="">--Please choose an option--</option>
                    <option value="Produit ">Produit</option>
                    <option value="Livraison">Livraison</option>
                    <option value="Evenement ">Evenement</option>
                    <option value="Pub">Pub</option>
                    </select></td>
                <!-- <td><input type="text" name="type" id="type" maxlength="50"></td> -->
            </tr>
            <tr>
                <td>
                    <label for="text_rec">Ecrire votre reclamtion:
                    </label>
                </td>
                <td><textarea name="text_rec" id="text_rec" rows=5 cols="50"></textarea></td>
            </tr>
            <td>
                    <label for="date_rec">Date de reclamation:
                    </label>
                </td>
                <td>
                    <input type="date" name="date_rec" id="date_rec">
                </td>
                <script type="text/javascript" src="ControleDeSaisie1.js"></script>
            </tr>
            <tr align="center">
                <td>
                    <input type="submit" value="passer la reclamation" onclick="CheckDate(date_rec)">
                </td>
                <td>
                    <input type="reset" value="supprimer">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>