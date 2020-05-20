 $(document).ready(function() {
    $(".removebutton2").click(function(){
        $(this).closest(".user-movie-info-admin").hide();
        var val= $(this).closest(".user-movie-info-admin").find(".ch").text();
        $.ajax({
            url : "../Controller/AdminUserRemove.php",
            type: "POST",
            data : ({val1:val}),
            success: function(data)
            {
                console.log(data);
            }
        });   
    });
});

$(document).ready(function() {
    $(".removebutton1").click(function(){
        $(this).closest(".user-movie-info-admin").hide();
        var val= $(this).closest(".user-movie-info-admin").find(".ch2").text();
        $.ajax({
            url : "../Controller/AdminMovieRemove.php",
            type: "POST",
            data : ({val1:val}),
            success: function(data)
            {
                console.log(data);
            }
        });         
     });
}); 
