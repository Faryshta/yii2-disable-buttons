$('body').on('beforeValidate', 'form.disable-submit-buttons', function (e) {
  $(':input[type="submit"]', this).attr('disabled', 'disabled');
  $(':input[type="submit"][data-disabled-text]', this).each(function (i) {
    var $this = $(this)
    if ($this.prop('tagName') === 'input') {
      $this.data('enabled-text', $this.val());
      $this.val($this.data('disabled-text'));
    } else {
      $this.data('enabled-text', $this.html());
      $this.html($this.data('disabled-text'));
    }
  });
}).on('afterValidate', 'form.disable-submit-buttons', function (e, jqXHR, settings) {
  if (settings.length > 0) {
    $(':input[type="submit"]', this).removeAttr('disabled');
    $(':input[type="submit"][data-disabled-text]', this).each(function (i) {
      var $this = $(this)
      if ($this.prop('tagName') === 'input') {
        $this.val($this.data('enabled-text'));
      } else {
        $this.html($this.data('enabled-text'));
      }
    });
  }
});
