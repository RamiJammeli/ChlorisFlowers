$(document).ready(function(){
    $('.quantity').bind('keyup change click', function (e) {
        if (! $(this).data("previousValue") || $(this).data("previousValue") !== $(this).val()) {
            $(this).data("previousValue", $(this).val());

            //if quantity changed
            recalculateCart();
        }
    });
    $('.quantity').each(function () {
        $(this).data("previousValue", $(this).val());
    });
});
function recalculateCart() {
    var totalSum = 0;
    var totalQuantity = 0;
    var cartObj = {};

    $('.product-position').each(function () {
        var quantityInput = $(this).find('.quantity');
        var productId = toPositiveInt(quantityInput.data('id'));
        var productQuantity = toPositiveInt(quantityInput.val());
        var productPrice = toPositiveInt($(this).find("#price").text());
        var productSum = productPrice * productQuantity;
        //get all values

        var productSumSelector = $(this).find("#sum");
        productSumSelector.html(productSum);
        cartObj[productId] = productQuantity;
        totalQuantity += productQuantity;

    });
    sessionStorage.setItem('panier', JSON.stringify(cartObj));

}

function toPositiveInt(rawVal) {
    return Math.abs(Math.round(rawVal));
}