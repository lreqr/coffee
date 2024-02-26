const navIconsContainer = document.getElementById('nav-icons');

const navIcons = document.querySelector('.header-icons');

navIconsContainer.appendChild(navIcons);

navIcons.classList.remove('d-none');

$('.product-variation-label').click(function (){
    let $this = $(this);
    let span = $this.next();
    let basePrice = span.data('baseprice');
    let spanPrice = $.trim(span.text());
    let numBasePrice = basePrice.match(/[\d\.]+/)[0];

    let productPagePrice = $('.product-page-price span');

    let numSpanPrice = 0;
    if (spanPrice){
        numSpanPrice = spanPrice.match(/[\d\.\+-]+/)[0];
    }

    let resPrice = (+numBasePrice + +numSpanPrice).toFixed(2);

    productPagePrice.text(resPrice+'€');

})

$('body').on('click', '.mini-cart-update', function (e){
    e.preventDefault();
    let input = $(this).closest('.mini-cart-product-row').find('.product-qty input');
    let prevVal = +input.data('qty');
    let newVal = +input.val();
    let product_id = +input.data('id');
    let size = input.data('size');
    console.log(prevVal + ' Предыдущее знач');
    console.log(newVal + ' Ноовое знач');
    console.log(product_id + ' product_id');
    console.log(size + ' size');
    console.log(input)

    if (newVal !== prevVal){
        let val = newVal - prevVal;
        cart.add(product_id, val);
    }

})

$(function () {
    let currentHref = location.href;
    $('.navbar-nav a').each(function (){
        let linkHref = $(this).attr('href');
        if (linkHref === currentHref){
            $(this).addClass('active');
            let parentBlocks = $(this).parents('.nav-dropdown-menu')
            if (parentBlocks.length){
                parentBlocks.each(function (){
                    $(this).find(">:first-child").addClass('active');
                })
            }
        }
    })
});

let showBtn = document.getElementById('icon-eye');

showBtn.addEventListener('click', function (event){
    let x = document.getElementById('input-password');
    if (x.type === 'password'){
        x.type = 'text';
        showBtn.classList.remove('icon-eye-blocked');
        showBtn.classList.add('icon-eye')
    } else {
        x.type = 'password'
        showBtn.classList.remove('icon-eye');
        showBtn.classList.add('icon-eye-blocked')
    }
});

