$('.delete').on('click', function() {
    $confirm = confirm('Bạn có chắc chắn muốn xoá sản phẩm này không?');
    if ($confirm == true)
    {
        var id = $(this).attr('data-id');
 
        $.ajax({
            url : 'model/delete/delete_order.php',
            type : 'POST',
            data : {
                id : id
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