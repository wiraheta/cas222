$( document ).ready(function() {

    $("#s").hide();

    $("#sd").hide();

    $("#tri").hide();

    $("#lc").hide();

    $("#o").hide();

    $("#10k").hide();

    $("#hm").hide();

});

$( "#Day" ).on("click", function() {

    if (this.value == "Saturday") {

        $("#Event").val("Select Your Event");
        
        $("#lc").show();

        $("#o").show();

        $("#10k").show();

        $("#hm").show();
    
        $("#s").hide();

        $("#sd").hide();

        $("#tri").hide();

    }

    else if (this.value == "Sunday") {

        $("#Event").val("Select Your Event");
        
        $("#lc").hide();

        $("#o").hide();

        $("#10k").hide();

        $("#hm").hide();

        $("#s").show();

        $("#sd").show();

        $("#tri").show();

    }

    else {

        $("#s").hide();

        $("#sd").hide();

        $("#tri").hide();

        $("#lc").hide();

        $("#o").hide();

        $("#10k").hide();

        $("#hm").hide();

    }

});
