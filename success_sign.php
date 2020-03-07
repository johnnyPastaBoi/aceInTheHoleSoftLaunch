<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ace in the Hole</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="author" content="Aaron Beals">
    <!--Favicon-->
    <link rel="icon" href="images/vectors/navicon.png">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&display=swap" rel="stylesheet">
    <link type="text/less" href="styles/style.less" rel="stylesheet">
    <!--Hamburger menu-->
    <link href="styles/hamburgers-master/dist/hamburgers.css" rel="stylesheet">
    <!--Slick JavaScript image carousel-->
    <link rel="stylesheet" type="text/css" href="styles/slick/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="styles/slick/slick/slick-theme.css"/>
    <!--LESS CDN-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script>
</head>
<body>
<?php include 'includes/nav.php'?>
<main class="success">
    <section>
        <h1>Success!</h1>
        <h3>Thank you <?php echo htmlspecialchars($fname, ENT_QUOTES, 'UTF-8')?>for signing up!</h3>
        </p>
    </section>
</main>
<?php include 'includes/footer.php'?>
<script>
    //Will load home page after 3 seconds
    setTimeout(loadPage, 3000);
    function loadPage() {
        document.location.href="index.php";
    }
</script>
</body>
</html>