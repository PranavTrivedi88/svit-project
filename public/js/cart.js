function change_quantity(product_quantity, cart_id){

    let quantity = product_quantity.val();

    if(quantity == 0){
        $(".delete" + cart_id).trigger("click");
        return;
    }

    $.post(
        base_url + "/cart/change-quantity/" + cart_id,
        {
            cart_id: cart_id,
            quantity: quantity,
            _token: $("input[name='_token']").first().val()
        },
        function(data, status){
            location.reload();
        }
    );

}

$(".button-add-quantity").on('click', function(){
    let cart_id = $(this).data('id');
    let product_quantity = $(".cart" + cart_id);

    product_quantity.val( parseInt(product_quantity.val()) + 1);

    change_quantity(product_quantity, cart_id);
});

$(".button-reduce-quantity").on('click', function(){

    console.log("called");

    let cart_id = $(this).data('id');
    let product_quantity = $(".cart" + cart_id);

    product_quantity.val( parseInt(product_quantity.val()) - 1);

    change_quantity(product_quantity, cart_id);

});
