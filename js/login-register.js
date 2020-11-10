$('#username').change(function(){
    var username = $('#username').val();
    $.ajax({
        url: "model/check/check_username.php",
        method: "POST",
        data: {
            username: username,
        },
        success: function(data)
            {
                $('#notice').html(data);
            }
    });
}); 
$('#password').change(function(){
    var password = $('#password').val();
    $.ajax({
        url: "model/check/check_pass.php",
        method: "POST",
        data: {
            password: password,
        },
        success: function(data)
            {
                $('#notice1').html(data);
            }
    });
}); 
$('#repassword').change(function(){
    var repassword = $('#repassword').val();
    var password = $('#password').val();
    $.ajax({
        url: "model/check/check_repass.php",
        method: "POST",
        data: {
            repassword: repassword,
            password: password
        },
        success: function(data)
            {
                $('#notice2').html(data);
            }
    });
}); 
$('#email').change(function(){
    var email = $('#email').val();
    $.ajax({
        url: "model/check/check_email.php",
        method: "POST",
        data: {
            email: email,
        },
        success: function(data)
            {
                $('#notice3').html(data);
            }
    });
}); 
$('#submitlogin').click(function(){
    console.log('aaaaaaaaaaaaa');
    var username_login = $('#username_login').val();
    var password_login = $('#password_login').val();
    $.ajax({
        url: 'model/login_test.php',
        type : 'POST',
        data: {
            username_login: username_login,
            password_login: password_login
        },
        success: function(data)
            {
                $('#notice4').html(data);
            }
    });
    
});