<?php

include '../includes/db.inc.html.php';

if (isset($_POST['First_Name']))
{
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Email = $_POST['Email'];
    $E_Contact_Num = $_POST['E_Contact_Num'];
    $E_Contact_Name = $_POST['E_Contact_Name'];
    $Gender = $_POST['Gender'];
    $Event = $_POST['Event'];
    $Day = $_POST['Day'];
    $Type = $_POST['Type'];

    try
    {
        $sql = 'INSERT INTO registration SET
          First_Name = :First_Name,
          Last_Name = :Last_Name,
          Email = :Email,
          E_Contact_Num = :E_Contact_Num,
          E_Contact_Name = :E_Contact_Name,
          Gender = :Gender,
          Event = :Event,
          Day = :Day,
          Type = :Type';
        $s = $pdo->prepare($sql);
        $s->bindValue(':First_Name', $First_Name);
        $s->bindValue(':Last_Name', $Last_Name);
        $s->bindValue(':Email', $Email);
        $s->bindValue(':E_Contact_Num', $E_Contact_Num);
        $s->bindValue(':E_Contact_Name', $E_Contact_Name);
        $s->bindValue(':Gender', $Gender);
        $s->bindValue(':Event', $Event);
        $s->bindValue(':Day', $Day);
        $s->bindValue(':Type', $Type);
        $s->execute();
    }

    catch (PDOException $e)
    {
        $error = 'Error adding submitted form: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }

    include 'success.html.php';

} else {

    include 'registration.html.php';

}

?>
