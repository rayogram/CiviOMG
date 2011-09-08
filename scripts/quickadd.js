(function($){

$(document).ready(function() {
    $('#block-civicrm-4 h2').toggle(function() {
              $('#block-civicrm-4 .content').show();
            }, function() {
              $('#block-civicrm-4 .content').hide();
            });
        });
})(jQuery);