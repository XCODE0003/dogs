(function($) {
  'use strict';

  // initializing inputmask
  Inputmask.extendDefaults({placeholder:" "});

  $(":input").inputmask();
  // $("#w_inp_date").inputmask("dd.mm.yyyy",{ "placeholder": "*" });
})(jQuery);
