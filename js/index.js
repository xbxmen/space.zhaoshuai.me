$("#left").bind('input propertychange', function () {
    var input = $("#left").val();
    if (input !== "") {
        $.ajax({
            type: "Post",
            url: "./app/space.php",
            data: {
                'input': input,
            },
            dataType: "json",
            success: function (data) {
                $("#right").val(data.data);
            },
            error: function (data) {
                console.log(data);
            }
        });
    }
});
