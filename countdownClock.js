let userSettedTime = "1970-01-01T24:00:00";
$('#button').on("click", function () {
    $('#date-setter').fadeOut();
    $('#content').fadeIn();
    userSettedTime = $('#set-time').val();

     $('#countdown').timeTo({
            timeTo: new Date(new Date(userSettedTime)),
            theme: "black",
            displayCaptions: true,
            fontSize: 60,
            captionSize: 14
        });

});

$('#set-time').datetimepicker();
