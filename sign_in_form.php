<?php
try
{
//    $pdo = new PDO('mysql:host=localhost;dbname=aaronbea_ace_in_the_hole', 'aaronbea_ace', 'ilovephp45');
    $pdo = new PDO('mysql:host=localhost;dbname=ace_in_the_hole', 'aaronbeals', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    echo ($error);
    exit();
}
if (isset($_POST['fname']) AND empty($_POST['honeypot']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $satrole = $_POST['satrole'];
    $satevent = $_POST['satevent'];
    $sunrole = $_POST['sunrole'];
    $sunevent = $_POST['sunevent'];
    $emname = $_POST['emname'];
    $emphone = $_POST['emphone'];
    try {
        $sql = 'INSERT INTO sign_up SET
          fname = :fname,
          lname = :lname,
          email = :email,
          age = :age,
          gender = :gender,
          satrole = :satrole,
          satevent = :satevent,
          sunrole = :sunrole,
          sunevent = :sunevent,
          emname = :emname,
          emphone = :emphone
        ';
        $s = $pdo->prepare($sql);
        $s->bindValue(':fname', $fname);
        $s->bindValue(':lname', $lname);
        $s->bindValue(':email', $email);
        $s->bindValue(':age', $age);
        $s->bindValue(':gender', $gender);
        $s->bindValue(':satrole', $satrole);
        $s->bindValue(':satevent', $satevent);
        $s->bindValue(':sunrole', $sunrole);
        $s->bindValue(':sunevent', $sunevent);
        $s->bindValue(':emname', $emname);
        $s->bindValue(':emphone', $emphone);
        $s->execute();
    }
    catch (PDOException $e)
    {
        echo($error = 'Error adding submitted value: ' . $e->getMessage());
        echo ("<br>Yikes! That didn't work");

        exit();
    }
    include 'success_sign.php';
} else {
    include 'sign_up.php';
}

