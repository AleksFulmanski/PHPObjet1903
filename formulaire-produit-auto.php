<?php require('autoloader.php');

$formUtility = new FormUtility();


?>


<?php include 'header.php';?>

<main class="container">
    <h1>Création d'un nouveau produit</h1>
    <form method="post">
        <?= $formUtility->generateHTML('Nom du produit', 'text', 'name', 'Saisir le nom');?>
        <?= $formUtility->generateHTML('Prix du produit', 'number', 'price', 'Saisir le prix');?>
        <?= $formUtility->generateHTML('Description', 'textarea', 'description', 'Saisir la description'); ?>




        <button type="submit" class="btn btn-primary">Créer le produit</button>
    </form>
</main>

<?php include 'footer.html' ?>