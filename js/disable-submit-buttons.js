$.fn.extend({
    _btn : ':input[type="submit"]',

    disabled_button : function()
    {
        var $this = $(this);
        var $btn = $this.find(this._btn);
        var before_text = ($btn.data('enabled-text') !== undefined && $btn.data('enabled-text') !== '' ) ? $btn.data('enabled-text') : $btn.text();

        $btn.html($btn.data('disabled-text'))
            .attr('disabled', 'disabled')
            .data('enabled-text', before_text);
    },

    enabled_button : function()
    {
        if ($(this).find('.has-error').length > 0) {
            var $this = $(this);
            var $btn = $this.find(this._btn);

            $btn.removeAttr('disabled')
                .html($btn.data('enabled-text'));
        }
    }
});

$('body').on('beforeValidate', 'form.disable-submit-buttons', function (e) {
    $(this).disabled_button();
}).on('afterValidate', 'form.disable-submit-buttons', function (e) {
    $(this).enabled_button();
});

$(document).ajaxStart(function() {
    $('form.disable-submit-buttons').disabled_button();
}).ajaxStop(function() {
    $('form.disable-submit-buttons').enabled_button();
});