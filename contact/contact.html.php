<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ace In The Hole Multisport Events - Contact</title>

    <meta name="author" content="Willy Iraheta">
    <meta name="description" content="Ace In The Hole Multisport Events Contact">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans%7cNoto+Serif" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../styles/reset.css" rel="stylesheet" type="text/css">
    <link href="../styles/helper.css" rel="stylesheet" type="text/css">
    <link href="../styles/grid.css" rel="stylesheet" type="text/css">
    <link href="../styles/style.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>
    <?php include '../includes/header.inc.html.php'; ?>
    <?php include '../includes/nav.inc.html.php'; ?>
    
    <main>
        <section>
            <h2>Contact Us</h2>

            <h3>Contact</h3>

            <p>
                Got questions or comments?  We'd love to hear from you!  Please fill out the form below and we will get back to you as soon as we can.
            </p>

            <form method="post" action=" ">
                <label for="Name">Name:</label><br>
                    <input type="text" name="Name" id="Name" required><br>

                <label for="Email">Email:</label><br>
                    <input type="email" name="Email" id="Email" required><br>
                    
                <label for="Inquiry">Question/Comment:</label><br>
                    <textarea name="Inquiry" id="Inquiry" rows="5" cols="30" required></textarea><br>

                <label for="Type">Role:</label><br>
                    <select size="1" name="Type" id="Type" required>
                        <option>Select Role</option>
                        <option value="Athlete">Athlete</option>
                        <option value="Volunteer">Volunteer</option>
                        <option value="Interested Party">Interested Party</option>
                    </select><br>

                <input class="btn" id="submit" type="submit" value="Submit">
            </form>
        </section>

        <section class="padding2"></section>
    </main>

    <?php include '../includes/footer.inc.html.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../scripts/menu.js"></script>
</body>
</html>