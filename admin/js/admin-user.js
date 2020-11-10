$('#username').change(function(){
    var username = $('#username').val();
    $.ajax({
        url: "../model/check/check_add_admin_user.php",
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
        url: "../model/check/check_pass.php",
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
    var password = $('#password').val();
    var repassword = $('#repassword').val();
    $.ajax({
        url: "../model/check/check_repass.php",
        method: "POST",
        data: {
            password: password,
            repassword: repassword,
        },
        success: function(data)
            {
                $('#notice2').html(data);
            }
    });
});
$('.delete').on('click', function() {
    $confirm = confirm('Bạn có chắc chắn muốn xoá tài khoản này không?');
    if ($confirm == true)
    {
        $id_user = $(this).attr('data-id');
 
        $.ajax({
            url : '../model/delete/delete_admin_user.php',
            type : 'POST',
            data : {
                id_user : $id_user,
            },
            success : function(data) {
                $('#show-result').html(data);
            }
        });
    }
    else
    {
        return false;
    }
});