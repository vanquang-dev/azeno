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
$('#name_brand').change(function(){
    var name_brand = $('#name_brand').val();
    $.ajax({
        url: "../model/check/check_brand.php",
        method: "POST",
        data: {
            name_brand: name_brand,
        },
        success: function(data)
            {
                $('#notice').html(data);
            }
    });
});

$('#name_category').change(function(){
    var name_category = $('#name_category').val();
    $.ajax({
        url: "../model/check/check_category.php",
        method: "POST",
        data: {
            name_category: name_category,
        },
        success: function(data)
            {
                $('#notice1').html(data);
            }
    });
});
$('#price').number( true, 0,',','.' );          
                
