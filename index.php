<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les services proposées par CodeSpace? Développement de site web et web mobile, création de plateforme et de site e-commerce. Comptez sur notre rapidité, notre efficacité et notre amabilité pour concevoir vos projets.">
    <link rel="icon" type="image/png" href="./img/cs-nobg.png" />
    <title>CodeSpace - Développeurs web, créateurs de sites et d'applications</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'/>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/services.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/media-queries.css">
</head>
<body>
    <!-- Nav left -->
    <?php include('includes/nav.php'); ?>

    <!-- Main content - right -->
    <main>
        <?php 
            if(isset($_SESSION['sending'])){
                echo '
                <div class="success-mail bg-success px-5 py-4 text-white m-2">
                    Votre message a été envoyé avec succès.
                    <br>Une réponse de notre part vous sera transmise rapidement.
                    <p class="text-center">
                        <i class="fas fa-times-circle mt-2" onclick="hideMessage(this)"></i>    
                    </p>
                </div>';
                unset($_SESSION['sending']);
            }
            if(isset($_SESSION['notsending'])){
                echo '
                <div class="success-mail bg-danger px-5 py-4 text-white m-2">
                    Une erreur s\'est produite.
                    <br>Veuillez nous excuser pour la gêne occassionnée.
                    <p class="text-center">
                        <i class="fas fa-times-circle mt-2" onclick="hideMessage(this)"></i>    
                    </p>
                </div>';
                unset($_SESSION['notsending']);
            } 
        ?>
    
        <?php include('includes/home.php'); ?>
        <?php include('includes/about.php'); ?>
        <?php include('includes/services.php'); ?>
        <?php include('includes/contact.php'); ?>
        <?php include('includes/footer.php'); ?>
        <!-- other include ... -->
    </main>
    
    <!-- libraries + script js -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
</body>
</html>