function getCityInfo() {
       
     $.ajax({
        type: "get",
        url: "http://hosting.otterlabs.org/laramiguel/ajax/zip.php",
        dataType: "json",
        data: {
            "zip_code": $("#zip").val()
        },
        success: function(data,status) {
            if (!data.city)
            {
                $("#zip-error").html("<span class='badge badge-danger' id='zip-error'>Zip code not found</span>"); 
                $("#city").empty();
                $("#lon").empty();
                $("#lat").empty();
            }
            else 
            {
                $("#zip-error").empty();
                $("#city").html(data.city);
                $("#lon").html(data.longitude);
                $("#lat").html(data.latitude);
            }
        }
     });
}
        
function getCountyInfo() {
    $.ajax({
        type: "get",
        url: "http://hosting.otterlabs.org/laramiguel/ajax/countyList.php",
        dataType: "json",
        data: {
            "state": $("#stateList").val()
        },
        success: function(data, status) {
            console.log(data);
            $("#county-list").html("<option> Select One </option>");
            for (var i = 0; i < data['counties'].length; i++) {
                $("#county-list").append("<option>" + data["counties"][i].county + "</option>");
            }
        }
    })
}

function validateUsername() {
    
    $.ajax({
        type: "get",
        url: "api.php",
        dataType: "json",
        data: {'username': $('#username').val(),
                'action': 'validate-username'
        },

        success: function(data,status) {
            if (data.length > 0) {
                $('#username-valid').replaceWith("<span class='badge badge-danger' id='username-valid'>Username is unavailable</span>");
            } else {
                $('#username-valid').replaceWith("<span class='badge badge-success' id='username-valid'>Username is available</span>");
            }
        }
    });
}

$("#password-check").change(function() {
    if ($("#password-origin").val() != $("#password-check").val())
    {
        $("#password-valid").replaceWith("<span class='badge badge-danger' id='password-valid'>Password does not match</span>");
    }
    else
    {
        $("#password-valid").empty();
    }
});
