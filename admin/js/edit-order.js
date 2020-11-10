$('.delete').on('click', function() {
    $confirm = confirm('Bạn có chắc chắn muốn xoá sản phẩm này không?');
    if ($confirm == true)
    {
        var user_id = $(this).attr('data-id');
        var product_id = $(this).attr('data-product');
 
        $.ajax({
            url : '../model/delete/delete_edit_order.php',
            type : 'POST',
            data : {
                user_id : user_id,
                product_id : product_id,
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