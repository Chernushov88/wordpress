/////////////// JS
window.onload = function () {
    let headers = document.querySelectorAll('.entry-summary h1.entry-title');
    let thumbdiv = document.querySelectorAll('.woocommerce-product-gallery__wrapper div');

    // получаем все лишки меню личного кабинета
    let lkMenucustom = document.querySelectorAll('.woocommerce-MyAccount-navigation ul li');
    // и вешаем на каждую лишку класс с картинкой цвет зависит от активна ли лишка
    lkMenucustom.forEach(function (li, key) {
        if (li.classList.contains('is-active')) {
            li.classList.add('iconGreen' + key);
        } else {
            li.classList.add('iconBlack' + key);
        }
    });

    // abc top menu //////////////////////////////////////////////////////
    // получаем все буквы брендов
    let abcTopMenu = document.querySelectorAll('.menu-bloginfo-inner .pwb-az-listing .pwb-az-listing-header .pwb-clearfix li');
    // обертка всех букв 
    let abcTopMenuWrap = document.querySelector('.menu-bloginfo-inner .pwb-az-listing .pwb-az-listing-header .pwb-clearfix');
    // получаем все контенеры с брендами по каждой букве
    let abcTopMenuContainer = document.querySelectorAll('.menu-bloginfo-inner .pwb-az-listing .pwb-az-listing-content div.pwb-az-listing-row');

    // добавляем в каждый abcTopMenuContainer кнопку закрытия
    for (let i = 0; i < abcTopMenuContainer.length; i++) {
        let abcClose = document.createElement("div");
        abcClose.classList.add("topAbcClose");
        abcClose.textContent = "X";
        if (abcTopMenuContainer[i]) {
            abcTopMenuContainer[i].insertBefore(abcClose, abcTopMenuContainer[i].firstChild);
        }
    }
    // for (let i = 0; i < abcTopMenuContainer.length; i++) {
    //     if (abcTopMenuContainer[i]) {
    //         abcTopMenuContainer[i].addEventListener('click', function (event) {
    //             let divTarget = event.target;
    //             console.log(divTarget);
    //             if (!divTarget.closest('.pwb-az-listing-row')) {
    //                 abcTopMenuContainer[i].removeAttribute('style');
    //             }
    //         });
    //     }
    // }

    function removeTopDisplayBlock() {
        for (let i = 0; i < abcTopMenuContainer.length; i++) {
            if (abcTopMenuContainer[i].hasAttribute('style')) {
                abcTopMenuContainer[i].removeAttribute('style');
            }
        }
    }

    function addTopDisplayBlock(triger) {
        for (let i = 0; i < abcTopMenuContainer.length; i++) {
            if (abcTopMenuContainer[i].hasAttribute('id') && abcTopMenuContainer[i].getAttribute('id') === triger) {
                abcTopMenuContainer[i].setAttribute("style", "display: block;");
            }
        }
    }

    function closeTopAbcWindow() {
        const closeTopAbcBtn = document.querySelectorAll('.menu-bloginfo-inner .pwb-az-listing .pwb-az-listing-content div.pwb-az-listing-row .topAbcClose');
        for (let i = 0; i < closeTopAbcBtn.length; i++) {
            closeTopAbcBtn[i].addEventListener('click', function () {
                if (closeTopAbcBtn[i].parentElement.hasAttribute('style')) {
                    closeTopAbcBtn[i].parentElement.removeAttribute("style");
                }
            });
        }
    }

    if (abcTopMenuWrap) {
        abcTopMenuWrap.addEventListener('click', function (event) {
            const target = event.target;
            let topTriger = "";
            if (target.closest('li') && target.nodeName === "LI") {
                topTriger = target.firstChild.getAttribute('href').slice(1);
            }
            if (target.closest('li') && target.nodeName === "A") {
                event.preventDefault();
                topTriger = target.getAttribute('href').slice(1);
            }
            // console.log(topTriger);
            if (topTriger.length > 0) {
                removeTopDisplayBlock()
                addTopDisplayBlock(topTriger);
                closeTopAbcWindow();
            }

        });
    }


    // abc top menu ///////////////////////////////////////////////////////

    // adc menu//////////////////////////////////////////////////////////
    // получаем все буквы брендов
    const buttonMenu = document.querySelectorAll('.custom-abc-wrapper .pwb-az-listing .pwb-az-listing-header .pwb-clearfix li');
    // обертка всех букв 
    const abcMenuWrap = document.querySelector('.custom-abc-wrapper .pwb-az-listing .pwb-az-listing-header .pwb-clearfix');
    // получаем все контенеры с брендами по каждой букве
    const abcConteiner = document.querySelectorAll('.custom-abc-wrapper .pwb-az-listing .pwb-az-listing-content div.pwb-az-listing-row');

    // добавляем в каждый abcConteiner кнопку закрытия
    for (let i = 0; i < abcConteiner.length; i++) {
        let abcClose = document.createElement("div");
        abcClose.classList.add("abcClose");
        abcClose.textContent = "X";
        if (abcConteiner[i]) {
            abcConteiner[i].insertBefore(abcClose, abcConteiner[i].firstChild);
        }
    }

    function removeDisplayBlock() {
        for (let i = 0; i < abcConteiner.length; i++) {
            if (abcConteiner[i].hasAttribute('style')) {
                abcConteiner[i].removeAttribute('style');
            }
        }
    }

    function addDisplayBlock(triger) {
        for (let i = 0; i < abcConteiner.length; i++) {
            if (abcConteiner[i].hasAttribute('id') && abcConteiner[i].getAttribute('id') === triger) {
                abcConteiner[i].setAttribute("style", "display: block;");
            }
        }
    }

    function closeAbcWindow() {
        const closeAbcBtn = document.querySelectorAll('.custom-abc-wrapper .pwb-az-listing .pwb-az-listing-content div.pwb-az-listing-row .abcClose');
        for (let i = 0; i < closeAbcBtn.length; i++) {
            closeAbcBtn[i].addEventListener('click', function () {
                if (closeAbcBtn[i].parentElement.hasAttribute('style')) {
                    closeAbcBtn[i].parentElement.removeAttribute("style");
                }
            });
        }
    }

    if (abcMenuWrap) {
        abcMenuWrap.addEventListener('click', function (event) {
            const target = event.target;
            let triger = "";
            if (target.closest('li') && target.nodeName === "LI") {
                triger = target.firstChild.getAttribute('href').slice(1);
            }
            if (target.closest('li') && target.nodeName === "A") {
                triger = target.getAttribute('href').slice(1);
            }
            if (triger.length > 0) {
                removeDisplayBlock();
                addDisplayBlock(triger);
                closeAbcWindow();
            }

        });
    }
    // Выберите бренд
    let brandText = document.createElement("li");
    brandText.classList.add("brandText");
    brandText.textContent = "Выберите бренд:";
    if (abcTopMenuWrap) {
        abcTopMenuWrap.insertBefore(brandText, abcTopMenuWrap.firstChild);
    }

    // adc menu /////////////////////////////////////////////

    // меняем местами бренд в карточке товара
    let navAjaxShop = document.querySelector('.woocommerce-pagination .page-numbers');
    let ulProducts = document.querySelector('.woocommerce .products');

    function switchBrands() {
        let allCards = document.querySelectorAll('.woocommerce .products .product');
        allCards.forEach(function (elem) {
            let brand = elem.querySelector('.pwb-brands-in-loop');
            if (brand) {
                let header = elem.querySelector('.woocommerce-LoopProduct-link .woocommerce-loop-product__title');
                let link = elem.querySelector('.woocommerce-LoopProduct-link');
                link.insertBefore(brand, header);
            }

        });
    }


    switchBrands();
    // перехватываем аякс чтоб при пагинации поменять бренды местами
    (function (send) {
        XMLHttpRequest.prototype.send = function (body) {

            this.addEventListener('load', function () {
                console.log(window.location.search !== "");
                switchBrands();
            });
            send.call(this, body);
        };
    })(XMLHttpRequest.prototype.send);



    let leftSideWrap = document.querySelector('.left-card-side .card-desc');
    let moveDesc = document.querySelector('.left-card-side .card-desc .desc-header');
    let afterDesc = document.querySelector('.left-card-side .card-desc .detail-desc-block');
    if (leftSideWrap && moveDesc && afterDesc) {
        leftSideWrap.insertBefore(moveDesc, afterDesc.nextSibling);
    }

    // brand in card 

    // comments header to top 

    let rightCardSide = document.querySelector('.bottom-wrapper .right-card-side');
    let commentsHeader = document.querySelector('.right-card-side .woocommerce-Reviews #comments .woocommerce-Reviews-title');
    let reviews = document.querySelector('.bottom-wrapper .right-card-side #reviews');
    if (reviews && rightCardSide && commentsHeader) {
        rightCardSide.insertBefore(commentsHeader, reviews);
    }
    // comments header to top 

    // showCommentForm
    let replyTitleBtn = document.querySelector('#reply-title');
    let commentForm = document.querySelector('#commentform');
    if (replyTitleBtn) {
        replyTitleBtn.addEventListener('click', function () {
            commentForm.classList.toggle('formShow');
        });
    }
    // showCommentForm

    // Добавляем в меню надпись Выберите товар:
    let pickerVariaczii = document.querySelector('#picker_variaczii');
    if (pickerVariaczii) {
        let pSelectGoods = document.createElement("p");
        pSelectGoods.classList.add("select-goods");
        pSelectGoods.textContent = "Выберите товар:";
        pickerVariaczii.insertBefore(pSelectGoods, pickerVariaczii.firstChild);
    }
    // Добавляем в меню надпись Выберите товар:

    // добавляем 2 иконки в шапку
    let iconWrap = document.querySelector('.menu-icons');
    let iconHeart = document.createElement('li');
    iconHeart.classList.add('iconHeart');
    iconHeart.innerHTML = '<a href="/my-account/products/"><img src="/wp-content/uploads/2020/07/icons8-heart-18.png" alt=""></a>';
    let iconUser = document.createElement('li');
    iconUser.classList.add('iconUser');
    iconUser.innerHTML = '<a href="/my-account/main/"><img src="/wp-content/uploads/2020/07/icons8-user-20.png" alt=""></a>';
    iconWrap.insertBefore(iconHeart, iconWrap.firstChild);
    iconWrap.insertBefore(iconUser, iconWrap.firstChild);

    // добавляем 2 иконки в шапку

    // селект цены покартинкам
    let imagespriceChange = document.querySelectorAll('.variate-card-wrapper .variable-img-var .variable-img');
    let addBtns = document.querySelectorAll('.single_add_to_cart_button');
    let variaczii = document.querySelector('#variaczii');

    // addBtns.forEach(function (btnDis) {
    //     btnDis.classList.remove('disabled', 'wc-variation-selection-needed');
    // });


    // ****************************************************
    // variaczii.value = '';

    // function hidePriceBtn() {
    //     addBtns.forEach(function (btnDis) {
    //         btnDis.classList.add('disabled', 'wc-variation-selection-needed', 'customDisableBtn');
    //     });
    // }
    // hidePriceBtn();


    // imagespriceChange.forEach(function (imgPrice) {
    //     imgPrice.addEventListener('click', function () {
    //         hidePriceBtn();
    //         let temp1 = imgPrice.getAttribute('title');
    //         variaczii.value = temp1;
    //         addBtns.forEach(function (btnDis) {
    //             let atributeBtn = btnDis.getAttribute('title');
    //             if (temp1 == atributeBtn) {
    //                 btnDis.classList.remove('disabled', 'wc-variation-selection-needed', 'customDisableBtn');
    //             }
    //         });
    //     });
    // });

    // ****************************************************


    // addBtns.forEach(function (btnAdd) {
    //     btnAdd.addEventListener('click', function () {
    //         let atributeBtn = btnAdd.getAttribute('title');
    //         variaczii.value = atributeBtn;
    //     });
    // });

    // селект цены покартинкам

};


// настройка карточки товара которого нет в наличии
let bodyMain = document.querySelector('body');

let outofstock = document.querySelector('.outofstock .entry-summary .out-of-stock');
if (bodyMain && !bodyMain.classList.contains('.logged-in')) {
    let div = document.createElement("div");
    div.classList.add("element-not-avialable");
    div.textContent = "Сообщить Вам о поступлении?";
    if (outofstock) {
        outofstock.after(div);
    }
}

function labelChange() {
    let formLabelCustomize = document.querySelector('#yith-wcwtl-output form label');
    // console.log(formLabelCustomize);
    if (formLabelCustomize) {
        formLabelCustomize.innerHTML = "Введите Ваш email <input type='email' name='yith-wcwtl-email' id='yith-wcwtl-email' style='width: 100%;'>";
    }

}
labelChange();
// настройка карточки товара которого нет в наличии