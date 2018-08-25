$.fn.extend({
  _disableSubmitButtonSelector : ':input[type="submit"]',

  disableSubmitButtons : function()
  {
    $(this).find(this._disableSubmitButtonSelector)
      .attr('disabled', 'disabled');

    $(this).find(this._disableSubmitButtonSelector + '[data-disabled-text]')
      .each(function () {
        var $this = $(this)
        if ($this.prop('tagName').toLowerCase() === 'input') {
          $this.data('enabled-text', $this.val());
          $this.val($this.data('disabled-text'));
        } else {
          $this.data('enabled-text', $this.html());
          $this.html($this.data('disabled-text'));
        }
      });
  },

  enableSubmitButtons: function ()
  {
    $(this).find(this._disableSubmitButtonSelector)
      .removeAttr('disabled');
    $(this).find(this._disableSubmitButtonSelector + '[data-disabled-text]')
      .each(function () {
        var $this = $(this)
        if ($this.prop('tagName').toLowerCase() === 'input') {
          $this.val($this.data('enabled-text'));
        } else {
          $this.html($this.data('enabled-text'));
        }
      });
  }
});

$('form.disable-submit-buttons').on('beforeValidate', function (event) {
  $(this).disableSubmitButtons();
}).on('afterValidate', function (event, messages, errors) {
  if (errors.length == 0) {
    return;
  }

  $(this).enableSubmitButtons();
}).on('ajaxComplete', function () {
  $(this).enableSubmitButtons();
});
