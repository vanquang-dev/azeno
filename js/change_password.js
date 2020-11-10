$('#password').change(function(){
    var password = $('#password').val();
    $.ajax({
        url: "model/check/change_pass.php",
        method: "POST",
        data: {
            password: password,
        },
        success: function(data)
            {
                $('#notice').html(data);
            }
    });
});

$('#repassword').change(function(){
    var password = $('#password').val();
    var repassword = $('#repassword').val();
    $.ajax({
        url: "model/check/change_repass.php",
        method: "POST",
        data: {
            password: password,
            repassword: repassword,
        },
        success: function(data)
            {
                $('#notice1').html(data);
            }
    });
});