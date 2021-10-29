$(document).on('click', '[data-lang]', function () {

        //qtrans_front_language

    setCookie('qtrans_front_language', $(this).data('lang'));
    location.href= '/';
    return false;

});


function setCookie(name, value, options = {}) {

    options = {
        path: '/',
        // при необходимости добавьте другие значения по умолчанию
        ...options
    };

    if (options.expires instanceof Date) {
        options.expires = options.expires.toUTCString();
    }

    let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

    for (let optionKey in options) {
        updatedCookie += "; " + optionKey;
        let optionValue = options[optionKey];
        if (optionValue !== true) {
            updatedCookie += "=" + optionValue;
        }
    }

    document.cookie = updatedCookie;
}


$(document).on('submit', '#sForm form', function () {

    $.ajax({
        url: '/wp-admin/admin-ajax.php',
        type: 'POST',
        data: $(this).serialize(),
        success: function( data ) {
          alert('Сообщение отправлено');
        }
    });



    return false;
})


