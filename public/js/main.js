const base_url = "http://localhost:8000";

$().ready(function(){

    $.get(
        base_url + "/cart/count",
        function(data, status){
            if(status == "success"){
                $('.badge').html(data.count);
            }
        }
    );

});

$(".add-to-cart").on('click', function(){

    let product_id = $(this).data('product-id');
    let token = $('input[name="_token"]').val();

    $.post(
        base_url + "/cart/add-to-cart",
        {
            product_id: product_id,
            _token: token
        },
        function(data, status){
            console.log(data);
            if(status == "success"){
                window.location.replace(base_url + "/cart");
            }
        }
    );

});
