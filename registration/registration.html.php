<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ace In The Hole Multisport Events - Registration</title>

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
        <h2>Registration</h2>

        <div class="group">
            <section class="col2">
                <h3>Cost</h3>

                <ul>
                    <li>Long Course: $240</li>	  	
                    <li>Olympic: $110</li>	  	
                    <li>10K: $50</li>	  	
                    <li>Half Marathon: $75</li>	
                    <li>Sprint: $90</li>
                    <li>Try-a-Tri: $65</li>
                <ul>
            </section>

            <section class="col2">
                <h3>Cost Includes</h3>

                <ul>
                    <li>Food & Beer</li>
                    <li>Access to the weekend’s live entertainment & Fitness Expo</li>
                    <li>Commemorative Finisher medal</li>
                    <li>Accurate Chip Timing for competitive races</li>
                    <li>Ace in the Hole Multisport Weekend Tech Shirt*</li>
                    <li>Post-event party & entertainment</li>
                </ul>
            </section>
        </div>

        <section>
            <p>*NOTE: Tech shirts guaranteed to pre-registered participants only.</p>
        </section>

        <section>
            <h3>PACKET PICK UP</h3>

            <p>
                All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. 
                Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.
            </p>
        </section>

        <h3>Register</h3>

        <section>
            <form method="post" action=" ">
                <label for="First_Name">First Name:</label><br>
                    <input type="text" name="First_Name" id="First_Name" required><br>

                <label for="Last_Name">Last Name:</label><br>
                    <input type="text" name="Last_Name" id="Last_Name" required><br>

                <label for="Email">Email:</label><br>
                    <input type="email" name="Email" id="Email" required><br>
                    
                <label for="E_Contact_Name">Emergency Contact Name:</label><br>
                    <input type="text" name="E_Contact_Name" id="E_Contact_Name" required><br>
                
                <label for="E_Contact_Num">Emergency Contact Number:</label><br>
                    <input type="phone" name="E_Contact_Num" id="E_Contact_Num" required><br>
                
                <label for="Gender">Gender Identification:</label><br>
                    <select size="1" name="Gender" id="Gender" required>
                        <option>Select Your Gender Identification</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                        <option value="Non-Binary">Non-Binary</option>
                    </select><br>

                <label for="Saturday">Saturday Event:</label><br>
                    <select size="1" name="Saturday" id="Saturday" required>
                        <option>Select Your Event</option>
                        <option value="10K">10K</option>
                        <option value="Half Marathon">Half Marathon</option>
                        <option value="Long Course">Long Course</option>
                        <option value="Olympic">Olympic</option>
                        <option value="None">None</option>
                    </select><br>

                <label for="Sunday">Sunday Event:</label><br>
                    <select size="1" name="Sunday" id="Sunday" required>
                        <option>Select Your Event</option>
                        <option value="Sprint">Sprint</option>
                        <option value="Splash n Dash">Splash n Dash</option>
                        <option value="Try-a-Tri">Try-a-Tri</option>
                        <option value="None">None</option>
                    </select><br>

                <label for="Type">Participant Type:</label><br>
                    <select size="1" name="Type" id="Type" required>
                        <option>Select Type</option>
                        <option value="Athlete">Athlete</option>
                        <option value="Volunteer">Volunteer</option>
                    </select><br>

                <input class="btn" id="submit" type="submit" value="Submit">
            </form>
        </section>
    </main>

    <?php include '../includes/footer.inc.html.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../scripts/menu.js"></script>
</body>
</html>