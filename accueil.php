<?php
    session_start();
    require_once 'logindb.php';
    $email = $_SESSION['login'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="alert alert-success" role="alert" style="height: 70px;">
        <h3 style="float: right;"><?php echo "BIENVENUE"."-----------".$_SESSION['login'];  ?></h3>
    </div>
    <p></p>
    <form action="traitement.php" method="POST">
        <label>Destinataire</label>
        <select class="form-select" name="destinataire">
            <option selected>Selectionnez un destinataire</option>
            <?php
                $liste = listeUser($email)->fetchAll();
                foreach ($liste as $key => $value) {
                    echo "<option>$value[3]</option>";
                }
            ?>
            
        </select>
            <div class="form-group">
                <label for="exampleInputEmail1">Objet</label>
                <input type="text" class="form-control" name="objet" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea2">Message</label>
                <textarea type="text" class="form-control rounded-0" name="contenu" rows="3"></textarea>
            </div>
            
            <button type="submit" name="save" class="btn btn-primary">Envoyer</button>
        </form>
        <p></p>
        <div class="alert alert-alert" role="alert" style="height: 70px;">
            <h3>Message envoyé</h3>
        </div>
        <?php
             $email = $_SESSION['login'];
            $box = msgRecu($email)->fetchAll();
            foreach ($box as $key => $values) {
                $sender = $values[1];
                $login = msgEn($sender)->fetchAll();
                foreach ($login as $key => $value) {
                    echo $value[2]."-------".$values[3]."----".$values[4]."--------".$values[5].'<br>';
                }
            }
        ?>

        <p></p>
        <div class="alert alert-alert" role="alert" style="height: 70px;">
            <h3>Message Recu</h3>
        </div>
        <?php
             $email = $_SESSION['login'];
            $box = msgR($email)->fetchAll();
            foreach ($box as $key => $values) {
                $sender = $values[2];
                $login = msgE($sender)->fetchAll();
                foreach ($login as $key => $value) {
                    echo $value[2]."-------".$values[3]."----".$values[4]."--------".$values[5].'<br>';
                }
            }
        ?>
</body>
</html>