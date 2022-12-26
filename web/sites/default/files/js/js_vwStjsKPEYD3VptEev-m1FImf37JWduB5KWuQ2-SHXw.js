(function ($, Drupal, drupalSettings) {
    $(document).once().ready( function() {
        $(".covid-register").once().click( function(e) {
            e.stopPropagation();
            e.preventDefault();
            var covid_nid = $(this).attr('covid_nid');
            $.ajax({
                url: drupalSettings.path.baseUrl + 'update_covid_centre',
                method: 'post',
                data: {
                    covid_nid: covid_nid
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    if(data.status == 1)
                        window.location.href = '/user';
                    else
                        alert(data.message);
                }
            })
        });
    });
})(jQuery, Drupal, drupalSettings);
;
