jQuery(document).ready(function($) {
    $('#search-form').on('keyup', '.search-field', function() {
        var query = $(this).val();
        if (query.length > 2) {
            $.ajax({
                url: fandevAjax.ajax_url,
                type: 'post',
                data: {
                    action: 'fandev_ajax_search',
                    search: query
                },
                success: function(response) {
                    $('#search-results').html(response);
                }
            });
        } else {
            $('#search-results').html('');
        }
    });
});
