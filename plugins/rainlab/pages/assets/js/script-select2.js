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
  maximumSelectionLength: 4,
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
      $('#sltLocation').val('todos-los-municipios');
      if ($('.select2-selection__choice').attr('title') == 'Todos los municipios') {
        e.preventDefault();
      }
    }
  });

  $("#sltLocation").on("select2:selecting", function(e) {
    var $select = $('#sltLocation');
    var idToRemove = 'todos-los-municipios';
    var values = $select.val();
    if (values) {
      var i = values.indexOf(idToRemove);
      if (i >= 0) {
        values.splice(i, 1);
        $select.val(values).change();
      }
    }
  });


$('#sltcategory').select2({
  maximumSelectionLength: 2,
  language: {
        // You can find all of the options in the language files provided in the
        // build. They all must be functions that return the string that should be
        // displayed.
        maximumSelected: function (e) {
            var t = "Sólo puedes seleccionar " + e.maximum + " categorías";
            return t;
        }
    }
});


  $("#sltcategory").on("select2:unselecting", function(e) {
    if ($('.select2-selection__choice').length == 1) {
      $('#sltcategory').val('todas-las-caracteristicas');
      if ($('.select2-selection__choice').attr('title') == 'Todas las características') {
        e.preventDefault();
      }
    }
  });

  $("#sltcategory").on("select2:selecting", function(e) {
    var $select = $('#sltcategory');
    var idToRemove = 'todas-las-caracteristicas';
    var values = $select.val();
    if (values) {
      var i = values.indexOf(idToRemove);
      if (i >= 0) {
        values.splice(i, 1);
        $select.val(values).change();
      }
    }
  });