<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ace In The Hole - Contact</title>

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
            <h1>Success!</h1>

            <h2>Thank you</h2>

            <p>
                Our records show you submitted the following information:<br>
                <b>Name:</b> <?php echo htmlspecialchars($Name, ENT_QUOTES, 'UTF-8'); ?><br>
                <b>Email:</b> <?php echo htmlspecialchars($Email, ENT_QUOTES, 'UTF-8'); ?><br>
                <b>Question/Comment:</b> <?php echo htmlspecialchars($Inquiry, ENT_QUOTES, 'UTF-8'); ?><br>
                <b>Type:</b> <?php echo htmlspecialchars($Type, ENT_QUOTES, 'UTF-8'); ?><br>
            </p>
        </section>
    </main>

    <?php include '../includes/footer.inc.html.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../scripts/menu.js"></script>
</body>
</html>