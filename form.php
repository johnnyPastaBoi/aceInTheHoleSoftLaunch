<!--Aaron Beals 1/26/2020-->
<html lang="en">

<head>

    <title>Contact</title>
    <?php include 'includes/head.php'?>
</head>

<body>
        <?php include 'includes/nav.php' ?>

<header class="contact_header">

    <img src='images/group_runners.jpg'>

</header>

<main class="contact">


    <section class="form" id="contact">

        <form method="post" action="contact.php">
            <h2>Contact Us!</h2>

            <input type="text" name="honeypot" id="honeypot" value="" style="display: none"/>
            <label for="myName">Name:</label>
            <input type="text" name="myName" id="myName"  required>
            <label>Email:</label>
            <input type="text" id="myEmail" name="myEmail"  required>

            <div id="contact_role">
                <label>Athlete</label>
                <input value="athlete" type="radio" name="role">

                <label>Volunteer</label>
                <input value="volunteer" type="radio" name="role">

                <label>Interested Party</label>
                <input value="interested" type="radio" name="role">
            </div>

            <label>Question:</label>
            <textarea id="5" id="myQuestion" name="myQuestion"  required></textarea>
            <button type="submit">Submit!</button>
        </form>

    </section>

</main>
   <?php include 'includes/footer.php' ?>

<!--jQuery Scripts-->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!--Slick image slide show scripts-->
<script type="text/javascript" src="styles/slick/slick/slick.min.js"></script>
<!--jQuery Button/Nav bar scripts-->
<script src="scripts/script.js"></script>
<!--Form Script-->
<script src="scripts/form_script.js"></script>
</body>

</html>