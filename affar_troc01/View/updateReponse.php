<?php
include '../Controller/reponseC.php';
include_once '../Model/reponse.php';

//echo"test";
//var_dump($_POST['text_rec']);
//var_dump($_POST['id_rec']);
//var_dump($_POST['type']);

$error = "";

// create client
$reponse = null;

// create an instance of the controller
$reponseC = new ReponseC();
if (
    isset($_POST["id_rep"]) &&
    isset($_POST["id_rec"]) &&
    isset($_POST["reponse"]) 
) {
   if (
        !empty($_POST["id_rep"]) &&
        !empty($_POST['id_rec']) &&
        !empty($_POST["reponse"]) 
    ) {
        $reponse = new Reponse(
            $_POST['id_rep'],
            $_POST['id_rec'],
            $_POST['reponse']
        );
        echo"test2";

        $reponseC->updateReponse($reponse, $_POST["id_rep"]);
        //var_dump($reclamation);
        echo "gg";
        header('Location:listeReponse.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Display</title>
</head>

<body>
    <img src="affar_trocLogo.png"></img>
    <h2>
        <a href="listeReponse.php">Retoure a la liste de reponse</a> 
    </h2>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['id_rep'])) {
        $reponse = $reponseC->showReponse($_POST['id_rep']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
            <tr>
                    <td>
                        <label for="id_rep">Id reponse:
                        </label>
                    </td>
                    <td><input type="text" name="id_rep" id="id_rep" value="<?php echo $reponse['id_rep']; ?>" maxlength="15"></td>
                </tr>
               
                <tr>
                    <td>
                        <label for="id_rec">Id Reclamation:
                        </label>
                    </td>
                    <td><input type="text" name="id_rec" id="id_rec" value="<?php echo $reponse['id_rec']; ?>" maxlength="15"></td>
                </tr>
                <tr> 
                    <td>
                        <label for="type"> reponse:
                        </label>
                    </td>
                    <td><textarea  name="reponse" id="reponse" value="<?php echo $reponse['reponse']; ?>" ></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>