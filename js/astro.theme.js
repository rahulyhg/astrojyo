$(document).ready(function () {
    particlesJS.load("astro-particles", Astrojyo.particle_conf);

    //AJAX ORDER SEND
    const formOrder = $('form[data-astro="sendOrder"]');
    const alert = $('div[uk-alert]');
    formOrder.on('submit', function (e) {
        e.preventDefault();

        let productID = $(this).attr('data-productId');

        let data = {
            action: 'send_order',
            product: productID,
            order: $(this).serialize(),
            nonce_code: Astrojyo.nonce
        };
        $.post({
            type: "POST",
            url: Astrojyo.ajax_url,
            data: data,
            beforeSend: function () {
                console.log('Start send');
                alert.animate({
                    opacity: 1,
                    height: "toggle"
                }, 300, function () {
                    alert.removeAttr("hidden");
                });
                alert.removeClass('uk-alert-success');
                alert.addClass('uk-alert-warning');
                alert.find("p").html('Идет отправка...');
            }
        })
            .done(function (data) {
                console.log('End send', data);
                alert.removeClass('uk-alert-warning');
                alert.addClass('uk-alert-success');
                alert.find("p").html('Заказ оформлен...');
                alert.animate({
                    opacity: 0.05,
                    height: "toggle"
                }, 3000, function () {
                    alert.attr("hidden");
                    $('.uk-modal-close-default').click();
                });
            })
            .fail(function (err) {
                console.log(err);
            });
    })

});