$('.delete').on('click', function() {
    $confirm = confirm('Bạn có chắc chắn muốn xoá sản phẩm này không?');
    if ($confirm == true)
    {
        var id = $(this).attr('data-id');
 
        $.ajax({
            url : 'model/delete/delete_product.php',
            type : 'POST',
            data : {
                id : id,
            },
            success : function() {
                location.reload();
            }
        });
    }
    else
    {
        return false;
    }
});
$('#phone_number').change(function() {
    var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
    var mobile = $('#phone_number').val();
    $("#notice").children().remove();
    if(mobile !==''){
        if (vnf_regex.test(mobile) == false) 
        {
            $('#notice').html('<div style="color: red; width: 300px;">Số điện thoại không đùng định dạng!!</div>');
        }else{
            
        }
    }else{
    }
});