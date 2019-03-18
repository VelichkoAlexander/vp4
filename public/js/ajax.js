$(document).ready(function () {
    $('.js-orderBtn').on('click', function () {
        var id = $(this).attr('data-product_id');
        $('.js-productId').val(id);
        $.fancybox.open($('#orderModal'));
    });


    $('.js-order-form').submit(function (e) {
        e.preventDefault();
        let errorPopup = document.getElementById('error');
        let form = $(this)[0];
        let formData = new FormData(form);
        fetch('./orders', {
            method: 'POST',
            body: formData
        }).then((res) => res.json())
            .then((data) => {
                if (data.error) {
                    alert(data.error);
                    $.fancybox.close();
                } else if (data.success) {
                    alert(data.success);
                    $.fancybox.close();
                    form.reset();

                }
            })
            .catch((error) => console.error(error));

    })

});

