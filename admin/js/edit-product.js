$('#img_up').change(function(){
    img_up = $('#img_up').val();
    count_img_up = $('#img_up').get(0).files.length;
    $(".box-pre-img").children().remove();
 
    // Nếu đã chọn ảnh
    if (img_up != '')
    {
        $('.box-pre-img').removeClass('hidden');
        for (i = 0; i <= count_img_up - 1; i++)
        {
            $('.box-pre-img').append('<img src="' + URL.createObjectURL(event.target.files[i]) + '" >');
        }
        console.log('ok');
    } 
    // Ngược lại chưa chọn ảnh
    else
    {
        $('.box-pre-img').html('');
    }
});
$('#price').number( true, 0,',','.' );  