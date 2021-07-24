$(function()
{
    $('.form').on('submit', function(event)
    {
        event.preventDefault();
        var $form = $(this);
        sendAjaxRequest($form);
    })
});

function sendAjaxRequest($form)
{
    var imageData = getImageData($form);

    if(imageData)
    {
            $.ajax({
                url: $form.attr('action'),
                method: $form.attr('method'),
                data: {data: imageData},
                success: function(response)
                {
                    response = JSON.parse(response);
    
                    if(response.status == 'success')
                    {
                        $('#auc-qrcode').html('<img src="'+response.url+'">');
                        $('#auc-qrcode').removeClass('d-none');
                        $('.status').addClass('d-none');
                        $('.status').html('');
                    }
                },
                error: function(response)
                {
                    if(response.status == 'error')
                    {
                        $('#error_message').html('<p class="alert alert-danger"><strong>Error: Unable to generate QRCode!</strong></p>');
                    }
                }
            });
    }
}
function getImageData($form)
{
    var urltext = null;

    $.each($form.serializeArray(),function(index, input)
    {
        urltext = input.value;
    });
    if(urltext && urltext.length)
    {

        $('#auc-qrcode').addClass('d-none');
        new QRCode($('#auc-qrcode')[0], urltext);
        $('.status').removeClass('d-none');
        $('.status').html('<img src="ajax-img/ajax-loader.gif"');
        var canvas = $('#auc-qrcode canvas');
        var img = canvas.get(0).toDataURL("image/png");
        return img;
    }
    return null;
}

