// quote
var csrfToken = $('meta[name="csrf-token"]').attr("content");
$(document).ready(function () {
    $("#quote").on("click",function () {
        $.ajax({
            type: "post",
            url: "http://localhost:8000/quote",
            data: {
                _token: csrfToken,
            },
            success: function (response) {
                $("#textarea").val("Response: " + response);
            },
            error: function (xhr, status, error) {
                console.error(xhr,status,error,);
            },
        });
    });
});

// schedule
$(document).ready(function () {
    $("#quote").on("click",function (e) {
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "http://localhost:8000/schedule",
            data: {
                _token: csrfToken,
            },
            success: function (response) {
                $("#textarea").val("Response: " + response);
            },
            error: function (xhr, status, error) {
                console.error(xhr,status,error,);
            },
        });
    });
});

// task
$(document).ready(function () {
    $("#quote").on("click",function (e) {
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "http://localhost:8000/task",
            data: {
                _token: csrfToken,
            },
            success: function (response) {
                $("#textarea").val("Response: " + response);
            },
            error: function (xhr, status, error) {
                console.error(xhr,status,error,);
            },
        });
    });
});
