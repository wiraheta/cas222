$( document ).ready(function() {

    var win = $(this);

    if (win.width() < 1000) {

        $( ".cross" ).hide();

        $( ".menu" ).hide();

        $( ".hamburger" ).show();

        $(".hamburger").on("click", function () {

            $(".menu").slideToggle("slow");

            $(".hamburger").hide();

            $(".cross").show();

        });

        $(".cross").on("click", function () {

            $(".menu").slideToggle("slow");

            $(".cross").hide();

            $(".hamburger").show();

        });
    }

    else {

        $( ".cross" ).hide();

        $( ".menu" ).show();

        $( ".hamburger" ).hide();
    }
    
});

$( window ).on('resize', function() {

    var win = $(this);

    if (win.width() < 1000) {

        $( ".cross" ).hide();

        $( ".menu" ).hide();

        $( ".hamburger" ).show();

    }

    else {

        $( ".cross" ).hide();

        $( ".menu" ).show();

        $( ".hamburger" ).hide();
    }
    
});
 