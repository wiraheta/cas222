<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ace In The Hole - Registration</title>

    <meta name="author" content="Willy Iraheta">
    <meta name="description" content="Ace In The Hole Multisport Events registration">
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
            <h1>Registration</h1>

            <form method="post" action=" ">
                <label for="First_Name">First Name:</label>
                    <input type="text" name="First_Name" id="First_Name" required><br>

                <label for="Last_Name">Last Name:</label>
                    <input type="text" name="Last_Name" id="Last_Name" required><br>

                <label for="Email">Email:</label>
                    <input type="email" name="Email" id="Email" required><br>
                    
                <label for="E_Contact_Name">Emergency Contact Name:</label>
                    <input type="text" name="E_Contact_Name" id="E_Contact_Name" required><br>
                
                <label for="E_Contact_Num">Emergency Contact Number:</label>
                    <input type="phone" name="E_Contact_Num" id="E_Contact_Num" required><br>
                
                <label for="Gender">Gender:</label>
                    <select size="1" name="Gender" id="Gender" required>
                        <option>Select Your Gender</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                        <option value="Non-Binary">Non-Binary</option>
                    </select><br>

                <label for="Day">Day:</label>
                    <select size="1" name="Day" id="Day" required>
                        <option>Select Your Day</option>
                        <option id="sat" value="Saturday">Saturday</option>
                        <option id="sun" value="Sunday">Sunday</option>
                    </select><br>

                <label for="Event">Event:</label>
                    <select size="1" name="Event" id="Event" required>
                        <option>Select Your Event</option>
                        <option id="hm" value="Half Marathon">Half Marathon</option>
                        <option id="lc" value="Long Course">Long Course</option>
                        <option id="o" value="Olympic">Olympic</option>
                        <option id="s" value="Sprint">Sprint</option>
                        <option id="sd" value="Splash n Dash">Splash n Dash</option>
                        <option id="tri" value="Try-a-Tri">Try-a-Tri</option>
                        <option id="10k" value="10K">10K</option>
                    </select><br>

                <label for="Type">Participant Type:</label>
                    <select size="1" name="Type" id="Type" required>
                        <option>Select Type</option>
                        <option value="Athlete">Athlete</option>
                        <option value="Volunteer">Volunteer</option>
                    </select><br>

                <input id="submit" type="submit" value="Submit">
            </form>
        </section>
    </main>

    <?php include '../includes/footer.inc.html.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../scripts/menu.js"></script>
    <script src="../scripts/form.js"></script>
</body>
</html>