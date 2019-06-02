<?php

include '../includes/db.inc.html.php';

if (isset($_POST['Name']))
{
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Inquiry = $_POST['Inquiry'];
    $Type = $_POST['Type'];

    try
    {
        $sql = 'INSERT INTO contact SET
          Name = :Name,
          Email = :Email,
          Inquiry = :Inquiry,
          Type = :Type';
        $s = $pdo->prepare($sql);
        $s->bindValue(':Name', $Name);
        $s->bindValue(':Email', $Email);
        $s->bindValue(':Inquiry', $Inquiry);
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

    include 'contact.html.php';

}

?>
