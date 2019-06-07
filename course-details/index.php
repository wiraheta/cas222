<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ace In The Hole Multisport Events - Course Details</title>

    <meta name="author" content="Willy Iraheta">
    <meta name="description" content="Ace In The Hole Multisport Events - Course Details">
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
            <h2>Course Details</h2>
        </section>

        <div class="group">
            <h3>Long Course</h3>

            <section class="col3">
                <h5>SWIM – 1.2 Miles</h5> 

                <p>
                    Participants will make two counter-clockwise loops. Large buoys will mark the turn points. 
                    Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.
                </p>
            </section>

            <section class="col3">
                <h5>RUN – 13.1 Miles</h5>

                <p>
                    A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful 
                    and scenic destination resort (two hills total with a minimal elevation gain).
                </p>
            </section>

            <section class="col3">
                <h5>BIKE – 58 Miles</h5> 

                <p>
                    A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. 
                    The bike course will be marked with large directional signage and there will be course marshals at 
                    key intersections to help direct you.
                </p> 
            </section>

            <section>
                <button onclick="window.location.href = '<?php echo BASE_URL; ?>registration/';">Register Now</button>
            </section>
        </div>

        <div class="group">
            <section>
                <h3>10k</h3> 

                <p>
                    The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, 
                    perfectly paved and wind around through the forest. Each course has only two small hills with a 
                    minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.
                </p>

                <button onclick="window.location.href = '<?php echo BASE_URL; ?>registration/';">Register Now</button>
            </section>
        </div>

        <div class="group">
            <h3>OLYMPIC COURSE</h3>

            <section class="col3">
                <h5>SWIM – 1,500 Meters</h5>

                <p>
                    Participants will make two counter-clockwise loops. Large buoys will mark the turn points. 
                    Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.
                </p>
            </section>

            <section class="col3">
                <h5>BIKE – 28 Miles</h5>

                <p>
                    A scenic point-to-point course that travels over gently rolling hills. 
                    The bike course will be marked with large directional signage and course marshals will be present at key intersections.
                </p> 
            </section>

            <section class="col3">
                <h5>RUN – 10K</h5>

                <p>
                    A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and 
                    scenic destination resort (one hill total with a minimal elevation gain).
                </p>
            </section>

            <section>
                <button onclick="window.location.href = '<?php echo BASE_URL; ?>registration/';">Register Now</button>
            </section>
        </div>
 
        <div class="group">
            <section class="col2">
                <h3>Splash n' Dash</h3>

                <p>
                    Kids event for participants ages 4 to 15. This is a 100 yard swim and a 50 yard dash.
                </p>

                <p class="padding3"></p>

                <button onclick="window.location.href = '<?php echo BASE_URL; ?>registration/';">Register Now</button>
            </section>

            <section class="col2">
                <h3>Sprint</h3>

                <p>
                    Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.
                </p>

                <button onclick="window.location.href = '<?php echo BASE_URL; ?>registration/';">Register Now</button>
            </section>
        </div>

        <div class="group">
            <section class="col2"> 
                <h3>Try-A-Tri</h3>

                <p>
                    This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. 
                    The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim), 
                    10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run 
                    (vs 3 mile sprint course).
                </p>

                <button onclick="window.location.href = '<?php echo BASE_URL; ?>registration/';">Register Now</button>
            </section>

            <section class="col2">
                <h3>Half-Marathon - 13.1 Miles</h3>

                <p>
                    Half-Marathon event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. 
                    Once finished, runners can enjoy the finish line festivities, including the Sports & Fitness Expo and live entertainment. 
                    Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results 
                    have been certified.
                </p>

                <button onclick="window.location.href = '<?php echo BASE_URL; ?>registration/';">Register Now</button>
            </section>
        </div>

        <p class="padding3"></p>
    </main>

    <?php include '../includes/footer.inc.html.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../scripts/menu.js"></script>
</body>
</html>