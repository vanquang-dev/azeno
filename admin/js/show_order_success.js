$('.delete').on('click', function() {
    $confirm = confirm('Bạn có chắc chắn muốn xoá sản phẩm này không?');
    if ($confirm == true)
    {
        $id = $(this).attr('data-id');
 
        $.ajax({
            url : '../model/delete/delete_order_success.php',
            type : 'POST',
            data : {
                id : $id,
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