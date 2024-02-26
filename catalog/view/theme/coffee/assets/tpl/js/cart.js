document.addEventListener("DOMContentLoaded", function () {
    // Получение всех элементов с классом "mini-cart-product-row"
    var productRows = document.querySelectorAll('.mini-cart-product-row');
    var catalogRows = document.querySelectorAll('.product-card');

    // Перебор всех элементов товаров
    productRows.forEach(function (productRow) {
        var inputElement = productRow.querySelector('input[type="number"]');
        var deleteLink = productRow.querySelector('.mini-cart-delete');
        var updateLink = productRow.querySelector('.mini-cart-update');

        deleteLink.addEventListener("click", function (event) {
            event.preventDefault();
            var productRow = deleteLink.closest('.mini-cart-product-row');
            if (productRow) {
                // Удаляем найденный элемент
                productRow.remove();
                console.log("Товар удален");
            }
        });

        updateLink.addEventListener("click", function (event) {
            event.preventDefault();
            var inputValue = inputElement.value;
            console.log('Текущее значение input: ' + inputValue);
            console.log(inputElement);
        });
    });

    catalogRows.forEach(function (productRow){
        var favLink = productRow.querySelector('.add-to-fav');

        favLink.addEventListener("click", function (event){
            event.preventDefault();

        })
    })
});