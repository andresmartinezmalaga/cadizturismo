(function () {
    var start = new Date();
    var end = new Date(new Date().setDate(new Date().getDate() + 3));

    $('input[name="datepicker"]').daterangepicker({
        "linkedCalendars": false,
        "autoApply": true,
        "minDate": new Date(),
        "startDate": new Date(),
        "endDate": end.getDate()+'/'+end.getMonth()+'/'+end.getYear(),
        "showMonthAfterYear": false,
        "locale": {
            "format": "DD.MM.YY",
            "separator": " - ",
            "applyLabel": "Apply",
            "cancelLabel": "Cancel",
            "fromLabel": "Desde",
            "toLabel": "hasta",
            "customRangeLabel": "Custom",
            "daysOfWeek": [
                "D",
                "L",
                "M",
                "X",
                "J",
                "V",
                "S"
            ],
            "monthNames": [
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo",
                "Junio",
                "Julio",
                "Agosto",
                "Septiembre",
                "Octubre",
                "Noviembre",
                "Diciembre"
            ],
            "firstDay": 1,
        }
    });
})();
