jQuery(document).ready(function() {
        $.ajax({
            type : "POST",
            url : "/app/getAppAds",
            dataType: 'html',
            cache: false,
            beforeSend: function( xhr ) {
            },
            success : function(result, textStatus, jqXHR) {
                $('#error-ads').html(result);
                $('img').on('click', function(){
                    var url = $(this).attr('data-url');
                    window.open('/' + url);
                });
            },
            error : function(jqXHR, textStatus, errorThrown) {
            }
        });
        
        
    });
