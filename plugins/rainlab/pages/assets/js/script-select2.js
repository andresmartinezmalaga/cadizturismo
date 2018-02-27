$('.select-days').select2({
  minimumResultsForSearch: Infinity,
  dropdownCssClass: "dropdown-days"
});

$('.select-interests').select2({
  minimumResultsForSearch: Infinity
});

$('.select-type').select2({
  minimumResultsForSearch: Infinity
});

$('#sltLocation').select2({
  maximumSelectionLength: 3,
  language: {
        // You can find all of the options in the language files provided in the
        // build. They all must be functions that return the string that should be
        // displayed.
        maximumSelected: function (e) {
            var t = "Sólo puedes seleccionar " + e.maximum + " municipios";
            return t;
        }
    }
});


  $("#sltLocation").on("select2:unselecting", function(e) {
    if ($('.select2-selection__choice').length == 1) {
      console.log('hola');
      $('#mySelect2').val('todos-los-municipios');
      return false;
    }
  });
