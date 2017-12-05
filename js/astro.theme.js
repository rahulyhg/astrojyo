$(document).ready(function () {
    particlesJS.load("astro-particles", Astrojyo.particle_conf);

    //AJAX ORDER SEND
    const formOrder = $('form[data-astro="sendOrder"]');
    const alert = $('div[uk-alert]');
    formOrder.on('submit', function (e) {
        e.preventDefault();

        let productID = $(this).attr('data-productId');

        let thisForm = $(this);

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
                thisForm[0].reset();
                alert.removeClass('uk-alert-warning');
                alert.addClass('uk-alert-success');
                alert.find("p").html('Заказ оформлен...');
                alert.animate({
                    opacity: 0.05,
                    height: "toggle"
                }, 1000, function () {
                    alert.attr("hidden");
                    $('.uk-modal-close-default').click();
                });
            })
            .fail(function (err) {
                console.log(err);
            });
    });
    //AJAX ORDER SEND

    //AJAX CONTACT FORM SEND
    const formContact = $('#astro-contactform');
    formContact.on('submit', function (e) {
        e.preventDefault();
        let thisForm = $(this);
        let data = {
            action: 'contactform_send',
            contactform: thisForm.serialize(),
            nonce_code: Astrojyo.contact_nonce
        };
        $.post({
            type: "POST",
            url: Astrojyo.ajax_url,
            data: data,
            beforeSend: function () {
                UIkit.modal.alert('Идет отправка сообщения... Ожидайте...');
            }
        })
            .done(function (data) {
                thisForm[0].reset();
                UIkit.modal.alert('Ваша заявка была отправлена!');
                console.log('Отправлено: ', data);
            })
            .fail(function (err) {
                UIkit.modal.alert('Произошла ошибка! Попробуйте позже...');
                console.log('Ошибка: ', err);
            });
    })
    //AJAX CONTACT FORM SEND
});