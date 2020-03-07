<!--Aaron Beals 1/26/2020-->
<html lang="en">

<head>

    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include 'includes/head.php' ?>

</head>

<body>
<?php include 'includes/nav.php' ?>
<!--        <script>-->
<!--            var fileName = location.href.split("/").slice(-1);-->
<!--            var header1 = document.getElementById("header_main")t-->
<!--            if (fileName == "form.php") {-->
<!--                header1.innerHTML = "<img href='group_runners.jpg'>";-->
<!--            } else {-->
<!--                console.log(fileName);-->
<!--            }-->
<!--        </script>-->

<header class="contact_header">

    <img src='images/group_runners.jpg'>

</header>

<main class="sign_up">

    <section class="form">
        <form method="post" id="sign_up_form">
            <h2>Personal Information</h2>
            <input type="text" name="honeypot" id="honeypot" value=""style="display: none"/>
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" required>
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="lname" required>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" min="1" max="200">
            <label for="gender">Gender:</label>
           <select class="gender" name="gender">
               <option value="" selected="" disabled="">Select</option>
               <option value="Male">Male</option>
               <option value="Female">Female</option>
               <option value="Non-binary">Non-Binary</option>
           </select>

            <div class="event_area">
                <h2>Event Information</h2>
                <h3>Saturday Events</h3>
                <div class="satevent">
                    <label>Athlete:</label>
                    <input value="satathlete" type="radio" name="satrole">
                    <label>Volunteer:</label>
                    <input value="satvolunteer" type="radio" name="satrole">
                </div>
                <select name="satevent">
                    <option value="" selected="" disabled="">Select</option>
                    <option value="Long Course Triathlon">Long Course Triathlon</option>
                    <option value="Olympic Triathlon">Olympic Triathlon</option>
                    <option value="10K">10K</option>
                    <option value="Half Marathon">Half Marathon</option>
                </select>
                <h3>Sunday Events</h3>
                <div class="sunevent">
                    <label>Athlete:</label>
                    <input value="sunathlete" type="radio" name="sunrole">
                    <label>Volunteer:</label>
                    <input value="sunvolunteer" type="radio" name="sunrole">
                </div>
                <select name="sunevent">
                    <option value="" selected="" disabled="">Select</option>
                    <option value="Sprint Triathlon">Sprint Triathlon</option>
                    <option value="Try-a-Tri">Try-a-Tri</option>
                    <option value="Splash n Dash">Splash n Dash</option>
                </select>

            </div>
            <h2>Emergency Contact Information:</h2>
            <div class="em_contact">

                <label for="emname">Name:</label>
                <input type="text" name="emname" id="emname" required>
                <label for="emphone">Phone:</label>
                <input name="emphone" type="tel">
            </div>

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